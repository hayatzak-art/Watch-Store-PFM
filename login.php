<?php include 'includes/header.php'; ?>

<div class="auth-wrapper">
    <div class="auth-box login-only">
        <h2>CONNEXION</h2>
        <form action="login_process.php" method="POST">
            <div class="input-group">
                <label>Nom d'utilisateur ou adresse e-mail *</label>
                <input type="text" name="username" required placeholder="Ex: hayat@example.com">
            </div>
            
            <div class="input-group">
                <label>Mot de passe *</label>
                <input type="password" name="password" required placeholder="••••••••">
            </div>
            
            <div class="auth-options">
                <label class="remember-me">
                    <input type="checkbox" name="remember"> Se souvenir de moi
                </label>
                <a href="#" class="forgot-password">Mot de passe perdu ?</a>
            </div>
            
            <button type="submit" class="btn-auth-submit">SE CONNECTER</button>
        </form>
        
        <div class="auth-switch-link">
            <p>Nouveau sur EPOCH ? <a href="register.php">Créer un compte</a></p>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>