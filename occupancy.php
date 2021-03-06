<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="footer, address, phone, icons" />
    <link rel="icon" href="../public/assets/24-hours.png" sizes="40x40" type="image/svg">
    <title>Anavadya</title>
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
    <!-- Link to Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!-- Link to font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        $(function() {
            // $("#navid").load("partials/header.php");
            $("#footid").load("partials/footer.php");
        });
    </script>
</head>

<body>
    <!-- <div id="navid"></div> -->
    <nav id="mainNavbar" class=" stroke navbar navbar-expand-md fixed-top navbar-dark">
        <a class="navbar-brand">
            <img class="navlogo" src="public/assets/24-hours.png"> Anavadya
        </a>

        <button class="navbar-toggler nav-toggle-btn" type="button" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navLinks">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="home.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="buildingDetails.php" class="nav-link">Building Details</a>
                </li>
                <li class="nav-item">
                    <a href="occupancy.php" class="nav-link">Occupancy</a>
                </li>
                <li class="nav-item">
                    <a href="contacts.php" class="nav-link">Contact Us</a>
                </li>
                <?php
                 if($_SESSION["room"]==0)
                { ?>
                <li class="nav-item">
                    <a href="register.php" class="nav-link" id="signin">Register</a>
                </li>
                <?php }
               
                if (isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == true) {
                ?>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">Logout</a>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                    </li>
                <?php
                }
                ?>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><img src="https://img.icons8.com/metro/26/ffffff/user-male.png" /><?php echo "Welcome " . $_SESSION['username'] ?></a>
                </li>
            </ul>
        </div>

    </nav>
    <style rel="stylesheet" type="text/css">
        body {
            background-image: linear-gradient(-225deg, #DFFFCD 0%, #90F9C4 48%, #39F3BB 100%);
        }
    </style>
    <div class="container" style="padding-top:10rem;">
        <div id="banner" class="row justify-content-between align-items-center">
            <div class="col-lg-5" id="descriptive">
                <div class="contents d-flex flex-column justify-content-around">
                    <h5 class="mb-4 font-weight-bold" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #4D2768;">How Anavadya shows realtime occupancy?</h5>
                    <h1 class="mb-4 mt-2 font-weight-bold" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: black;">
                        Scroll down and see occupancy of rooms in your building.
                    </h1>
                    <h5 class="mb-4 mt-1 font-weight-bold" style="color: #281436;">

                    </h5>
                    <div class="mt-1">
                        <button type="button" class="btn mb-2 btn-primary"><a href="#scroll-target"></a>See current Occupancy</a></button>
                        <a type="button" class="btn mb-2 ml-4 btn-primary" href="">Add Rooms</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-5 mt-3 mt-lg-0" id="illustration">
                <div class="row justify-content-center align-items-center">
                    <img class="img-fluid" src="public/assets/occupancy.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <section class="h-100">
        <div class="container py-5" id="scroll-target">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <!-- ROOM 1 -->
                <div class="col">
                    <div class="card shadow h-100" style="border: none">
                        <img src="https://5.imimg.com/data5/AY/RQ/MY-12051589/showroom-interior-designing-500x500.jpg" class="card-img-top" alt="Image Card laceholder">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-3 text-warning">
                                ROOM 1
                            </h5>
                            <p class="text-muted mb-1">
                                Floor 0
                            </p>
                            <p class="card-text flex-grow-1">
                            <ul>
                                <li>ROOM NAME:
                                    room name
                                </li>
                                <li>Manager:
                                    Manager name
                                </li>
                            </ul>
                            </p>
                            <div class="">
                                <div class="row">
                                    <div class="col">
                                        <div class="btn-group btn-group-sm">
                                            <div class="btn btn-warning">
                                                <a href="graph.php?room=1">Occupancy</a>
                                            </div>
                                            <div class="btn active btn-warning">
                                                <a href="history.php?room=1"> History</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col d-flex justify-content-end align-items-center">
                                        <div class="btn btn-warning">
                                            Delete
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROOM 2 -->
                <div class="col">
                    <div class="card shadow h-100" style="border: none">
                        <img src="https://www.mercedes-benz-mena.com/en/passengercars/mercedes-benz-cars/virtual-showroom-lp/virtual-showroom-gallery/_jcr_content/contentgallerycontainer/par/contentgallery_5f17/par/contentgallerytile_3/image.MQ6.8.20200519103556.jpeg" class="card-img-top" alt="Image Card laceholder">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-3 text-warning">
                                ROOM 2
                            </h5>
                            <p class="text-muted mb-1">
                                Floor 0
                            </p>
                            <p class="card-text flex-grow-1">
                            <ul>
                                <li>ROOM NAME:
                                    Room name
                                </li>
                                <li>Manager:
                                    Manager name
                                </li>
                            </ul>
                            </p>
                            <div class="">
                                <div class="row">
                                    <div class="col">
                                        <div class="btn-group btn-group-sm">
                                            <div class="btn btn-warning">
                                                <a href="graph.php?room=2">Occupancy</a>
                                            </div>
                                            <div class="btn active btn-warning">
                                              <a href="history.php?room=2"> History</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col d-flex justify-content-end align-items-center">
                                        <div class="btn btn-warning">
                                            Delete
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROOM 3 -->
                <div class="col">
                    <div class="card shadow h-100" style="border: none">
                        <img src="https://lh3.googleusercontent.com/5PkM06w9v1j4zNXH2k2eblsAE5xUAg1bBpgYra4ivvIhYOqMNJIVrL5uZ7f9nmE-PHbXHiwXh6zWkd_yhi4KHCgkkIVH=w1000" class="card-img-top" alt="Image Card laceholder">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-3 text-warning">
                                ROOM 3
                            </h5>
                            <p class="text-muted mb-1">
                                Floor 1
                            </p>
                            <p class="card-text flex-grow-1">
                            <ul>
                                <li>ROOM NAME:
                                    room name
                                </li>
                                <li>Manager:
                                    Manager name
                                </li>
                            </ul>
                            </p>
                            <div class="">
                                <div class="row">
                                    <div class="col">
                                        <div class="btn-group btn-group-sm">
                                            <div class="btn btn-warning">
                                                <a href="graph.php?room=3">Occupancy</a>
                                            </div>
                                            <div class="btn active btn-warning">
                                                <a href="history.php?room=3"> History</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col d-flex justify-content-end align-items-center">
                                        <div class="btn btn-warning">
                                            Delete
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROOM 4 -->
                <div class="col">
                    <div class="card shadow h-100" style="border: none">
                        <img src="https://images.homify.com/c_fill,f_auto,q_0,w_740/v1440997084/p/photo/image/861313/DSC_0517.jpg" class="card-img-top" alt="Image Card laceholder">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-3 text-warning">
                                ROOM 4
                            </h5>
                            <p class="text-muted mb-1">
                                Floor 1
                            </p>
                            <p class="card-text flex-grow-1">
                            <ul>
                                <li>ROOM NAME:
                                    room name
                                </li>
                                <li>Manager:
                                    Manager name
                                </li>
                            </ul>
                            </p>
                            <div class="">
                                <div class="row">
                                    <div class="col">
                                        <div class="btn-group btn-group-sm">
                                            <div class="btn btn-warning">
                                                <a href="graph.php?room=4">Occupancy</a>
                                            </div>
                                            <div class="btn active btn-warning">
                                                <a href="history.php?room=4"> History</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col d-flex justify-content-end align-items-center">
                                        <div class="btn btn-warning">
                                            Delete
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROOM 5 -->
                <div class="col">
                    <div class="card shadow h-100" style="border: none">
                        <img src="https://5.imimg.com/data5/AY/RQ/MY-12051589/showroom-interior-designing-500x500.jpg" class="card-img-top" alt="Image Card laceholder">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-3 text-warning">
                                ROOM 5
                            </h5>
                            <p class="text-muted mb-1">
                                Floor 3
                            </p>
                            <p class="card-text flex-grow-1">
                            <ul>
                                <li>ROOM NAME:
                                    room name
                                </li>
                                <li>Manager:
                                    Manager name
                                </li>
                            </ul>
                            </p>
                            <div class="">
                                <div class="row">
                                    <div class="col">
                                        <div class="btn-group btn-group-sm">
                                            <div class="btn btn-warning">
                                                <a href="graph.php?room=5">Occupancy</a>
                                            </div>
                                            <div class="btn active btn-warning">
                                                <a href="history.php?room=5"> History</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col d-flex justify-content-end align-items-center">
                                        <div class="btn btn-warning">
                                            Delete
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROOM 6 -->
                <div class="col">
                    <div class="card shadow h-100" style="border: none">
                        <img src="https://5.imimg.com/data5/AY/RQ/MY-12051589/showroom-interior-designing-500x500.jpg" class="card-img-top" alt="Image Card laceholder">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-3 text-warning">
                                ROOM 6
                            </h5>
                            <p class="text-muted mb-1">
                                Floor 3
                            </p>
                            <p class="card-text flex-grow-1">
                            <ul>
                                <li>ROOM NAME:
                                    room name
                                </li>
                                <li>Manager:
                                    Manager name
                                </li>
                            </ul>
                            </p>
                            <div class="">
                                <div class="row">
                                    <div class="col">
                                        <div class="btn-group btn-group-sm">
                                            <div class="btn btn-warning">
                                                <a href="graph.php?room=6">Occupancy</a>
                                            </div>
                                            <div class="btn active btn-warning">
                                                <a href="history.php?room=6"> History</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col d-flex justify-content-end align-items-center">
                                        <div class="btn btn-warning">
                                            Delete
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="footid"></div>
</body>

</html>
