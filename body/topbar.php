<nav class="red">
    <div class="container">
        <div class="nav-wrapper">
            <a href="index.php?page=home" class="brand-logo">Facil'immo</a>

            <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">Menu</i></a>

            <ul class="right hide-on-med-and-down">
                <li class="<?php echo ($page=="home")?"active" : ""; ?>"><a href="index.php?page=home">Accueil</a></li>
                <li class="<?php echo ($page=="blog")?"active" : ""; ?>"><a href="index.php?page=blog">Annonces</a></li>
                <li class="<?php echo ($page=="blog")?"active" : ""; ?>"><a href="index.php?page=blog">Contact</a></li>
            </ul>

            <ul class="side-nav" id="mobile-menu">
                <li class="<?php echo ($page=="home")?"active" : ""; ?>"><a href="index.php?page=home">Accueil</a></li>
                <li class="<?php echo ($page=="blog")?"active" : ""; ?>"><a href="index.php?page=blog">Annonces</a></li>
                <li class="<?php echo ($page=="blog")?"active" : ""; ?>"><a href="index.php?page=blog">Contact</a></li>
            </ul>

        </div>
    </div>
</nav>