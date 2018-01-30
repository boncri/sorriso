<?php require_once("_global.php") ?>
<header>        
    <div class="gt_top3_menu default_width">
        <div class="container">
            <div class="gt-logo">
                <a href="index.php"><img src="images/logo.png" alt=""></a>
            </div>
            <nav class="gt_hdr3_navigation">
                <!-- Responsive Buttun -->
                <a class="navbar-btn collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>   
                <!-- Responsive Buttun -->
                <ul class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php
                    create_menu();
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</header>
