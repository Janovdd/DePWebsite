<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right ml-auto" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto mr-auto">
                <li class="nav-item active">
                    <a class="nav-link <?php if ($page == "home") { ?> active <?php } ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Survive</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($page == "build") { ?> active <?php } ?>" href="build.php">Build</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Expand</a>
                </li>
                <li class="nav-item">
                    <a class="btn-outline-nav nav-link" href="https://play.google.com/store/apps/details?id=com.IdleCompany.DontEatPete&hl=en&gl=US" target="_blank">Download</a>
                </li>
            </ul>
        </div>
    </div>
</nav>