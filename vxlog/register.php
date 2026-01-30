<?php require_once(__DIR__ . '/dir/_session.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - ForumUI</title>
    <link rel="stylesheet" href="login_register_style.css">
</head>
<body class="authpage-wrapper">
    <div class="authpage-container">
        <div class="authpage-card">
            <div class="authpage-header">
                <div class="authpage-logo">F</div>
                <h2 class="authpage-title">Rejoindre VxLog</h2>
                <p class="authpage-subtitle">Créez votre profil en quelques secondes.</p>
            </div>

            <form class="authpage-form" action="votre_script_inscription.php" method="POST">
                <div class="authpage-group">
                    <label class="authpage-label">Nom d'utilisateur</label>
                    <input type="text" name="username" class="authpage-input" placeholder="Choisissez un pseudo" required>
                </div>
                <div class="authpage-group">
                    <label class="authpage-label">Adresse Email</label>
                    <input type="email" name="email" class="authpage-input" placeholder="nom@exemple.com" required>
                </div>
                <div class="authpage-group">
                    <label class="authpage-label">Mot de passe</label>
                    <input type="password" name="password" class="authpage-input" placeholder="••••••••" required>
                </div>
                
                <button type="submit" class="authpage-btn">S'inscrire</button>
            </form>

            <div class="authpage-footer">
                Déjà inscrit ? <a href="login.php" class="authpage-link">Se connecter</a>
            </div>
            <div class="authpage-footer">
                 <a href="index.php" class="authpage-link">Revenir au forum</a>
            </div>
        </div>
    </div>
</body>
</html>