<?php include 'includes/header.php'; ?>

<div class="auth-wrapper">
    <div class="auth-box register-only">
        <h2>S'INSCRIRE</h2>
        <form action="register_process.php" method="POST">
            <div class="input-group">
                <label>Identifiant *</label>
                <input type="text" name="username" required placeholder="Ex: hayat_zak">
            </div>

            <div class="input-group">
                <label>Adresse e-mail *</label>
                <input type="email" name="email" required placeholder="Ex: hayat@example.com">
            </div>
            
            <div class="input-group">
                <label>Mot de passe *</label>
                <input type="password" name="password" required placeholder="Créer un mot de passe">
            </div>
            
            <p class="auth-privacy-notice">
                Vos données personnelles seront utilisées pour accompagner votre visite sur ce site web, gérer l’accès à votre compte, et pour d’autres raisons décrites dans notre politique de confidentialité.
            </p>
            
            <button type="submit" class="btn-auth-submit">S'INSCRIRE</button>
        </form>
        
        <div class="auth-switch-link">
            <p>Vous avez déjà un compte ? <a href="login.php">Se connecter</a></p>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>