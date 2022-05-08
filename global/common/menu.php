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
                <a class="dropdown-item" href="../../cas-pratique/weapons/exo1/index.php">exo1</a>
                <a class="dropdown-item" href="../../cas-pratique/weapons/exo2/index.php">exo2</a>
                <a class="dropdown-item" href="../../cas-pratique/weapons/exo3/index.php">exo3</a>
                <a class="dropdown-item" href="../../cas-pratique/weapons/exo4/index.php">exo4</a>
                <a class="dropdown-item" href="../../cas-pratique/weapons/exo5/index.php">exo5</a>
                <a class="dropdown-item" href="../../cas-pratique/weapons/exo6/index.php">exo6</a>
                <a class="dropdown-item" href="../../cas-pratique/weapons/exo7/index.php">exo7</a>
                <a class="dropdown-item" href="../../cas-pratique/weapons/exo8/index.php">exo8</a>
            </div>
        </li>
    </ul>
    </div>
</nav>