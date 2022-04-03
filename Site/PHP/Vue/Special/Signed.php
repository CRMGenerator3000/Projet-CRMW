<h1>
    Bonjour <?= $user->getFirstName() ?>
</h1>
<p>
    Vous êtes connecté en tant que <?= $user->getRole() ?>
</p>
<!-- Bouton de deconexion -->
<a href="index.php?action=logout">Se déconnecter</a>