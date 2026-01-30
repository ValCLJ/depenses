<?php require_once(__DIR__ . '/dir/_session.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - ForumUI</title>
    <link rel="stylesheet" href="login_register_style.css">
</head>
<body class="authpage-wrapper">
    <div class="authpage-container">
        <div class="authpage-card">
            <div class="authpage-header">
                <div class="authpage-logo">F</div>
                <h2 class="authpage-title">Bon retour parmi nous</h2>
                <p class="authpage-subtitle">Connectez-vous à VxLog pour participer aux discussions.</p>
            </div>

            <form class="authpage-form" action="login_script.php" method="POST">
                <div class="authpage-group">
                    <label class="authpage-label">Adresse Email</label>
                    <input type="email" name="email" class="authpage-input" placeholder="nom@exemple.com" required>
                </div>
                <div class="authpage-group">
                    <label class="authpage-label">Mot de passe</label>
                    <input type="password" name="password" class="authpage-input" placeholder="••••••••" required>
                </div>
                
                <button type="submit" class="authpage-btn">Se connecter</button>
            </form>

            <div class="authpage-footer">
                Pas encore de compte ? <a href="register.php" class="authpage-link">Créer un compte</a>
            </div>
            <div class="authpage-footer">
                 <a href="index.php" class="authpage-link">Revenir au forum</a>
            </div>
        </div>
    </div>
</body>
</html>
