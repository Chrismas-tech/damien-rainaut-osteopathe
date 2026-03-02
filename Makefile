# Makefile - Déploiement automatique vers o2switch
# Utilisation :   make deploy    (ou make deploy-dry pour tester sans rien faire)

SERVER_USER    := rada9327
SERVER_HOST    := level.o2switch.net
SERVER_PORT    := 22
REMOTE_DIR     := www/rd-osteopathe-nice

SSH_CMD        := ssh -p $(SERVER_PORT) $(SERVER_USER)@$(SERVER_HOST)

# ────────────────────────────────────────────────
.PHONY: deploy
deploy:
	@echo "======================================"
	@echo "Déploiement vers o2switch → $(REMOTE_DIR)"
	@echo "======================================"
	@echo ""
	$(SSH_CMD) ' \
		echo "→ Connexion OK" && \
		cd $(REMOTE_DIR) || { echo "Erreur : dossier $(REMOTE_DIR) introuvable"; exit 1; } && \
		pwd && \
		git fetch --all && \
		git status --short && \
		git reset --hard origin/main && \
		git clean -fd 2>/dev/null || true && \
		echo "" && \
		echo "→ Dépendances…" && \
		npm ci --prefer-offline --no-audit --quiet && \
		echo "" && \
		echo "→ Build…" && \
		npm run build && \
		echo "" && \
		echo "======================================" && \
		echo "Déploiement terminé avec succès ✓" && \
		echo "======================================" \
	'

# ────────────────────────────────────────────────
.PHONY: deploy-dry
deploy-dry:
	@echo "DRY-RUN : ce qui serait exécuté sur le serveur :"
	@echo ""
	@echo $(SSH_CMD) "'cd $(REMOTE_DIR) && git fetch --all && git reset --hard origin/main && git clean -fd && npm ci --prefer-offline --quiet && npm run build'"

# ────────────────────────────────────────────────
.PHONY: status
status:
	$(SSH_CMD) 'cd $(REMOTE_DIR) 2>/dev/null && git status --short || echo "Dossier non trouvé"'

# Pour voir les 5 derniers commits
.PHONY: log
log:
	$(SSH_CMD) 'cd $(REMOTE_DIR) 2>/dev/null && git log -n 5 --oneline --decorate || echo "Dossier non trouvé"'

# Nettoyage node_modules distant (rarement utile)
.PHONY: clean-node
clean-node:
	$(SSH_CMD) 'cd $(REMOTE_DIR) && rm -rf node_modules && echo "node_modules supprimé"'
