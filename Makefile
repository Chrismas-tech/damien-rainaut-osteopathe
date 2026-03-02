# Makefile - Déploiement automatique vers o2switch
# Utilisation :   make deploy

SERVER_USER    := rada9327
SERVER_HOST    := level.o2switch.net
SERVER_PORT    := 22
REMOTE_DIR     := www/rd-osteopathe-nice

SSH_CMD        := ssh -p $(SERVER_PORT) $(SERVER_USER)@$(SERVER_HOST)

.PHONY: deploy
deploy:
	@echo "======================================"
	@echo "Deploiement vers o2switch -> $(REMOTE_DIR)"
	@echo "======================================"
	@echo ""
	$(SSH_CMD) ' \
		echo "-> Connexion OK" && \
		cd $(REMOTE_DIR) || { echo "Erreur : dossier $(REMOTE_DIR) introuvable"; exit 1; } && \
		pwd && \
		git fetch --all && \
		git status --short && \
		git reset --hard origin/main && \
		git clean -fd 2>/dev/null || true && \
		echo "" && \
		echo "-> Dependances..." && \
		npm ci --prefer-offline --no-audit --quiet && \
		echo "" && \
		echo "-> Build..." && \
		npm run build && \
		echo "" && \
		echo "======================================" && \
		echo "Deploiement termine avec succes" && \
		echo "======================================" && \
		exit 0 \
	'

.PHONY: deploy-dry
deploy-dry:
	@echo "DRY-RUN : commande qui serait executee :"
	@echo ""
	@echo $(SSH_CMD) "'cd $(REMOTE_DIR) && git fetch --all && git reset --hard origin/main && git clean -fd && npm ci --prefer-offline --quiet && npm run build'"

.PHONY: status
status:
	$(SSH_CMD) 'cd $(REMOTE_DIR) 2>/dev/null && git status --short || echo "Dossier non trouve"'

.PHONY: log
log:
	$(SSH_CMD) 'cd $(REMOTE_DIR) 2>/dev/null && git log -n 5 --oneline --decorate || echo "Dossier non trouve"'
