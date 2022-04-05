<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="assets/CSS/normalize.css" />
    <link rel="stylesheet" href="assets/CSS/style.css" />
    <title>ERP</title>
</head>

<body>
    <!-- Nav bar header -->
    <header>
        <div>
            <a href="index.php"><img src="assets/images/Accueil.webp" alt="Accueil"></a>
            <div>
                <a href="index.php?Controller=Sign&action=Login"><img src="assets/images/login.webp" alt="Accueil"></a>
                <a href="index.php"><img src="assets/images/setting.webp" alt="Accueil"></a>
                <a href="index.php"><img src="assets/images/Docu.webp" alt="Accueil"></a>
                <a href="index.php"><img src="assets/images/support.webp" alt="Accueil"></a>
                <a href="index.php"><img src="assets/images/DarkModeLight.png" alt="DarkButton"></a>
            </div>
        </div>
    </header>
    <div id="navSection">
        <nav id="navigation">
            <div>
                <a href="dossier.html"><button>Mes dossiers</button></a>
            </div>
            <div>
                <button>Mes produits</button>
            </div>
            <div>
                <button>Nouveau devis</button>
            </div>
            <hr id="nav_hr">
        </nav>
    </div>
    <div class="mainSection">
        <!-- infos -->
        <?php   
        $filepath = File::build_path(array("view", $controller, $view));
        
        ?>
    </div>
    <footer>
        <!-- ChatBox -->
        <button class="chatBoxButton">
            <img src="assets/images/ChatButton.png" alt="chatBoxButtonImmage">
            Discussion
        </button>
    </footer>
</body>

</html>