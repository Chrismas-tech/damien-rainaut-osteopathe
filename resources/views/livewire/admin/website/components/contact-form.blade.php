<div>
    <h2>Contact Us</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div>
            <label for="subject">
                Subject
            </label>
            <input type="text" wire:model.live="subject" class="@error('subject') is-invalid @enderror" id="subject"
                placeholder="Subject" required="required">
        </div>
        <div>
            <label for="email">
                Email Address
            </label>
            <input type="email" wire:model.live="email" class="@error('email') is-invalid @enderror" id="email"
                placeholder="Your Email" required="required">
        </div>
        <div>
            <label for="firstname">
                Firstname
            </label>
            <input type="text" wire:model.live="firstname" class="@error('firstname') is-invalid @enderror"
                id="firstname" placeholder="Your Firstname" required="required">
        </div>
        <div>
            <label for="lastname">
                Lastname
            </label>
            <input type="text" wire:model.live="lastname" class="@error('lastname') is-invalid @enderror"
                id="lastname" placeholder="Your Lastname" required="required">
        </div>
        <div>
            <label for="message">
                Message
            </label>
            <textarea class="@error('message') is-invalid @enderror" wire:model.live="message" rows="10" id="message"
                placeholder="Message" required="required">
            </textarea>
        </div>

        <div class="mb-3">
            <div class="">
                <input type="checkbox" wire:model.live="termsOfServices" id="terms_of_services">
                <label for="terms_of_services">
                    <span>
                        I agree to the
                    </span>
                    <a href="{{ route('website.terms-of-services') }}" class="font-weight-bold">
                        Terms of services
                    </a>
                    <span>
                        and
                    </span>
                    <a href="{{ route('website.privacy-policy') }}" class="font-weight-bold">
                        Privacy Policy
                    </a>
                </label>
            </div>
        </div>

        <div>
            <button type="submit" @if (!$isFormValid) disabled @endif class="">
                Send
            </button>
        </div>

    </form>
</div>
