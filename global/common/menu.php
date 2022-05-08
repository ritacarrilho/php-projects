<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="../../global/accueil/index.php">accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Easy
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php for($i=1;$i <= 20;$i++) : ?>
                <a class="dropdown-item" href="../../easy/exo<?=$i?>/index.php">exo<?=$i?></a>
            <?php endfor; ?>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Medium
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php for($i=1;$i <= 7;$i++) : ?>
                <a class="dropdown-item" href="../../medium/exo<?=$i?>/index.php">exo<?=$i?></a>
            <?php endfor; ?>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Weapons
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../../cas-pratique/weapons/exo1/exo1.php">exo1</a>
                <a class="dropdown-item" href="../../cas-pratique/weapons/exo2/exo2.php">exo2</a>
                <a class="dropdown-item" href="../../cas-pratique/weapons/exo3/exo3.php">exo3</a>
                <a class="dropdown-item" href="../../cas-pratique/weapons/exo4/exo4.php">exo4</a>
                <a class="dropdown-item" href="../../cas-pratique/weapons/exo5/exo5.php">exo5</a>
                <a class="dropdown-item" href="../../cas-pratique/weapons/exo6/exo6.php">exo6</a>
                <a class="dropdown-item" href="../../cas-pratique/weapons/exo7/exo7.php">exo7</a>
                <a class="dropdown-item" href="../../cas-pratique/weapons/exo8/exo8.php">exo8</a>
            </div>
        </li>
    </ul>
    </div>
</nav>