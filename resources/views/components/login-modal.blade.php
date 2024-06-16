<div id="login-section">
    <div class="overlay"></div>
    <div class="login-modal">
        <div class="login-interface active">
            <i class="close-modal fa-solid fa-xmark"></i>
            <h2>Se connecter</h2>
            <div class="contact-form">
                <form action="#_" method="POST">
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
            <div class="contact-form">
                <form action="#_" method="POST">
                    <div>
                        <label for="firstname">Prénom<span class="required-indicator">*</span></label>
                        <input type="text" id="firstname" name="firstname" required>
                    </div>

                    <div>
                        <label for="lastname">Nom de famille<span class="required-indicator">*</span></label>
                        <input type="text" id="lastname" name="lastname" required>
                    </div>

                    <div>
                        <label for="phone">Numéro de téléphone<span class="required-indicator">*</span></label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>

                    <div>
                        <label for="mail2">Email<span class="required-indicator">*</span></label>
                        <input type="email" id="mail2" name="mail2" required>
                    </div>

                    <div>
                        <label for="password2">Mot de passe<span class="required-indicator">*</span></label>
                        <input type="password" id="password2" name="password2" required>
                    </div>

                    <div>
                        <label for="password2_check">Resaisir le mot de passe<span class="required-indicator">*</span></label>
                        <input type="password" id="password2_check" name="password2_check" required>
                    </div>

                    <div>
                        <button type="submit" value="submit-connect" class="a-button h-bg-primary h-color-white">M'inscrire</button>
                    </div>
                </form>
            </div>
            <button id="login-link"  class="a-link">Se connecter</button>
        </div>
    </div>
</div>
