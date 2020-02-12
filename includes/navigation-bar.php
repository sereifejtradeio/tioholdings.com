<?php

function setActive($pageName){
    $activeClass = '';
    global $selfName;
    if($pageName === $selfName){
        $activeClass = 'active';
    }else{
        return false;
    }
    return $activeClass;
}

?>
<nav class="navbar navbar-expand-lg navbar-dark">
<!--    <div class="container">-->
<!--        <div class="row">-->
            <a class="navbar-brand" href="/">
                <img src="assets/images/generic/logo.svg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php echo setActive('home')?>" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo setActive('about')?>" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo setActive('companies')?>" href="companies">Our companies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo setActive('contact')?>" href="contact">Contact</a>
                    </li>
                </ul>
            </div>
<!--        </div>-->
<!--    </div>-->
</nav>