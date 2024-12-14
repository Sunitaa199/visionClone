<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <header class="header-nav">
        <!------------ navbar -------------->
        <nav class="navbar navbar-expand-lg text-white">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#"><img src="img-vidio/img/images.webp" alt="V.M-logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page"
                                href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown">What We Do</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">About Us</a></li>
                                <li><a class="dropdown-item" href="#">Partnerships</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown">Products And Services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">OneBox@</a></li>
                                <li><a class="dropdown-item" href="#">Joulie</a></li>
                                <li><a class="dropdown-item" href="#">Li-Rack Eco</a></li>
                                <li><a class="dropdown-item" href="#">Joulie+</a></li>
                                <li><a class="dropdown-item" href="#">Celpak</a></li>
                                <li><a class="dropdown-item" href="#">Celpak-N</a></li>
                                <li><a class="dropdown-item" href="#">Li-V</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown">Industries</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Agricalture</a></li>
                                <li><a class="dropdown-item" href="#">Corporate</a></li>
                                <li><a class="dropdown-item" href="#">Manufacturing</a></li>
                                <li><a class="dropdown-item" href="#">Infrastructure</a></li>
                                <li><a class="dropdown-item" href="#">Residential</a></li>
                                <li><a class="dropdown-item" href="#">Electric Vehicles</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown">Essentials</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Events</a></li>
                                <li><a class="dropdown-item" href="#">Micro-Grid</a></li>
                                <li><a class="dropdown-item" href="#">Sustainability</a></li>
                                <li><a class="dropdown-item" href="#">Renewable Energy</a></li>
                                <li><a class="dropdown-item" href="#">News</a></li>
                                <li><a class="dropdown-item" href="#">Blogs</a></li>
                                <li><a class="dropdown-item" href="careers.php">Careers</a></li>
                                <li><a class="dropdown-item" href="#">Privacy Policy</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <script>
        document.querySelectorAll('.nav-item.dropdown').forEach(dropdown => {
            dropdown.addEventListener('mouseover', function () {
                const menu = this.querySelector('.dropdown-menu');
                menu.classList.add('show');
            });

            dropdown.addEventListener('mouseout', function () {
                const menu = this.querySelector('.dropdown-menu');
                menu.classList.remove('show');
            });
        });
    </script>