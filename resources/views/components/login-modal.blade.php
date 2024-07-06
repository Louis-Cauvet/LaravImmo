<div id="login-section">
    <div class="overlay"></div>
    <div class="login-modal">
        <div class="login-interface active">
            <i class="close-modal fa-solid fa-xmark"></i>
            <h2>Se connecter</h2>
            <div class="contact-form">
                <form action="{{ route('connect-user') }}" method="POST">
                    @csrf
                    <div>
                        <label for="mail">Email<span class="required-indicator">*</span></label>
                        <input type="email" id="mail" name="mail" required>
                    </div>

                    <div>
                        <label for="password">Mot de passe<span class="required-indicator">*</span></label>
                        <input type="password" id="password" name="password" required>
                    </div>

                    <div>
                        <button type="submit" value="submit-connect" class="a-button h-bg-primary h-color-white">Me connecter</button>
                    </div>
                </form>
            </div>
            <button id="registration-link" class="a-link">S'inscrire</button>
        </div>
        <div class="register-interface">
            <i class="close-modal fa-solid fa-xmark"></i>
            <h2>S'inscrire</h2>
            <p><strong>Remarque : </strong>Votre mot de passe doit posséder au moins 8 caractères, dont au moins 1 chiffre, 1 lettre et 1 caractère spécial</p>
            <div class="contact-form">
                <form id="register-user-form" action="{{ route('register-user') }}" method="POST">
                    @csrf
                    <div>
                        <label for="firstname">Prénom<span class="required-indicator">*</span></label>
                        <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}" required>
                        <span class="text-danger" id="error-firstname"></span>
                    </div>

                    <div>
                        <label for="lastname">Nom de famille<span class="required-indicator">*</span></label>
                        <input type="text" id="lastname" name="lastname" value="{{ old('lastname') }}" required>
                        <span class="text-danger" id="error-lastname"></span>
                    </div>

                    <div>
                        <label for="phone">Numéro de téléphone<span class="required-indicator">*</span></label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required>
                        <span class="text-danger" id="error-phone"></span>
                    </div>

                    <div>
                        <label for="mail2">Email<span class="required-indicator">*</span></label>
                        <input type="email" id="mail2" name="mail2" value="{{ old('mail2') }}" required>
                        <span class="text-danger" id="error-mail2"></span>
                    </div>

                    <div>
                        <label for="password2">Mot de passe<span class="required-indicator">*</span></label>
                        <input type="password" id="password2" name="password2" required>
                        <span class="text-danger" id="error-password2"></span>
                    </div>

                    <div>
                        <label for="password2_confirmation">Resaisir le mot de passe<span class="required-indicator">*</span></label>
                        <input type="password" id="password2_confirmation" name="password2_confirmation" required>
                        <span class="text-danger" id="error-password2_confirmation"></span>
                    </div>

                    <div>
                        <button type="submit" value="submit-register" class="a-button h-bg-primary h-color-white">M'inscrire</button>
                    </div>
                </form>
            </div>
            <button id="login-link"  class="a-link">Se connecter</button>
        </div>
    </div>
</div>
