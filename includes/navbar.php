<!-- Image and text -->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand text-white" href="/">
        <img src="./images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="my Logo">
        CRUD Project
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <!-- &nbsp is used for one space -->
                <a class="nav-link text-white" href="./index.php"><i class="fas fa-home"></i>&nbsp;Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fas fa-receipt"></i>&nbsp;My Orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fas fa-envelope"></i>&nbsp;Contact Us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-shield"></i>&nbsp;My Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#"><i class="fas fa-receipt"></i>&nbsp;My Orders</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-pager"></i>&nbsp;Just Links</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-mouse-pointer"></i>&nbsp;Click wont works</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-user"></i>&nbsp;Log out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
