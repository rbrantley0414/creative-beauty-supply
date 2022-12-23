<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="nav.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!--Rebecca Brantley CIS 222 FL 2022-->
    <main>
        <div class="nav_fluid">
            <a href="home.php"><img src="imgs/creativebeautylogo1.png" alt="creative beauty supply logo" id="logo"></a>
            <div class="nav_fluid nav_fluid_left">
                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search..." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <a href="#" class="nav_icon"><img src="imgs/cart-shopping-solid.svg" alt="cart" height="25px" width="25px"></a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Wigs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hair Care</a>
                        </li>
                        <li class="nav-item">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tools</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Beauty</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Brands
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">All Brands</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item" href="#">African Pride</a></li>
                                <li><a class="dropdown-item" href="#">Cantu</a></li>
                                <li><a class="dropdown-item" href="#">Shea Moisture</a></li>
                                <li><a class="dropdown-item" href="mielle.php">Mielle Organics</a></li>
                                <li><a class="dropdown-item" href="#">Shine N Jam</a></li>
                                <li><a class="dropdown-item" href="#">...</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </main>

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>