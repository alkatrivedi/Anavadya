<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="footer, address, phone, icons" />
  <link rel="icon" href="public/assets/24-hours.png" sizes="40x40" type="image/svg">


  <title>Anavadya</title>
  <link rel="stylesheet" type="text/css" href="public/css/main.css">
  <!-- Link to Bootstrap-->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

  <!-- Link to font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Link to sweet alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    $(function() {
    //   $("#navid").load("partials/headerHome.php");
      
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
                    if(isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == true) {
                        ?>
                            <li class="nav-item">
                                <a href="logout.php" class="nav-link">Logout</a>
                            </li>
                        <?php
                    }
                    else {
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
                <a class="nav-link" href="#"><img src="https://img.icons8.com/metro/26/ffffff/user-male.png"/><?php echo "Welcome ". $_SESSION['username'] ?></a>
                </li>
            </ul>
        </div>

    </nav>

  <style rel="stylesheet" type="text/css">
    body {
      background-image: linear-gradient(-225deg, #DFFFCD 0%, #90F9C4 48%, #39F3BB 100%);
    }
  </style>

  <section class="h-100" style="padding-top:5rem;">


  <?php
    if(isset($_SESSION['statusHome'])) {
        ?>
            <script>

                swal({
                    title: "LoggedIn Successfully!",
                    icon: "success",
                    button: "Ok",
                })
                .then((value) => {
                swal("<?php echo "Hey ".$_SESSION['username'] ?>", "<?php echo $_SESSION['statusHome'] ?>");
                });
            
            </script>
            
        <?php
        unset($_SESSION['statusHome']);
    }    
  ?>
    <div class="position-absolute h-100 w-100" style="
            z-index: -1;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        "></div>
    <div class="container h-100 py-5">
      <div class="row h-100 justify-content-between align-items-center">
        <div class="col-lg-5 h-50">
          <div class="d-flex flex-column h-100 justify-content-between text-center text-lg-left">
            <h5>What kind of building you have?</h5>
            <h1 class="font-weight-bold">
              Use anavadya in your smart building.
            </h1>
            <h5 class="text-muted font-weight-normal">
              Make you buildings safe, secure, energy efficient and manage occupancy easily!
            </h5>
            <div class="">
              <div class="btn btn btn-success">
                Discover its uses
              </div>
              <div class="btn btn ml-3 btn-outline-success">
                Learn more
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 mt-3 mt-lg-0">
          <img src="public/assets/hero.png" class="h-100 w-100" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="h-100">
            <div class="container py-5">
                <div class="d-flex flex-column justify-content-center align-items-center text-center">
                    <div class="col-sm-6">
                        <h2 class="font-weight-bold text-primary">
                            What we provide?
                        </h2>
                        <h5 class="font-weight-normal mt-3 mb-5">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Non quasi labore tempore sit soluta. Quidem!
                        </h5>
                    </div>
                    <div class="my-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="d-flex flex-column justify-content-around align-items-center rounded p-3">
                                    <span class="mb-3 p-4 text-primary" style="position: relative">
                                        <div class="position-absolute rounded-pill bg-primary" style="
                                                opacity: 0.2;
                                                width: 5em; 
                                                height: 5em;
                                                transform: translate(
                                                    -50%,
                                                    -50%
                                                );
                                            "></div>
                                        <div class="position-absolute" style="
                                                width: 2.5em;
                                                height: 2.5em;
                                                transform: translate(
                                                    -50%,
                                                    -50%
                                                );
                                            ">
                                            <svg width="100%" height="100%" viewBox="0 0 16 16" class="bi bi-cloud-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zm2.854 6.354a.5.5 0 0 0-.708-.708L7.5 8.793 6.354 7.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"></path>
                                            </svg>
                                        </div>
                                    </span>
                                    <h4 class="mt-3">Security</h4>
                                    <div class="text-muted my-2">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Reiciendis quod vel
                                        mollitia? Quo nam debitis reiciendis
                                        dolores sapiente laudantium
                                        reprehenderit.
                                    </div>
                                    <a href="#" class="link-primary" style="text-decoration: none">
                                        <span class="text-primary">
                                            Learn more
                                            <svg  width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z"></path>
                                                <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 border-right border-left">
                                <div class="d-flex flex-column justify-content-around align-items-center rounded p-3">
                                    <span class="mb-3 p-4 text-primary" style="position: relative">
                                        <div class="position-absolute rounded-pill bg-primary" style="
                                                opacity: 0.2;
                                                width: 5em;
                                                height: 5em;
                                                transform: translate(
                                                    -50%,
                                                    -50%
                                                );
                                            "></div>
                                        <div class="position-absolute" style="
                                                width: 2.5em;
                                                height: 2.5em;
                                                transform: translate(
                                                    -50%,
                                                    -50%
                                                );
                                            ">
                                            <svg width="100%" height="100%" viewBox="0 0 16 16" class="bi bi-cloud-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6zM6.646 4.646c-.376.377-1.272 1.489-2.093 3.13l.894.448c.78-1.559 1.616-2.58 1.907-2.87l-.708-.708z"></path>
                                            </svg>
                                        </div>
                                    </span>
                                    <h4 class="mt-3">Accuracy</h4>
                                    <div class="text-muted my-2">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Reiciendis quod vel
                                        mollitia? Quo nam debitis reiciendis
                                        dolores sapiente laudantium
                                        reprehenderit.
                                    </div>
                                    <a href="#" class="link-primary" style="text-decoration: none">
                                        <span class="text-primary">
                                            Learn more
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z"></path>
                                                <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex flex-column justify-content-around align-items-center rounded p-3">
                                    <span class="mb-3 p-4 text-primary" style="position: relative">
                                        <div class="position-absolute rounded-pill bg-primary" style="
                                                opacity: 0.2;
                                                width: 5em;
                                                height: 5em;
                                                transform: translate(
                                                    -50%,
                                                    -50%
                                                );
                                            "></div>
                                        <div class="position-absolute" style="
                                                width: 2.5em;
                                                height: 2.5em;
                                                transform: translate(
                                                    -50%,
                                                    -50%
                                                );
                                            ">
                                            <svg width="100%" height="100%" viewBox="0 0 16 16" class="bi bi-cloud-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 4.854a.5.5 0 0 0-.708-.708L7 8.793 5.854 7.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"></path>
                                            </svg>
                                        </div>
                                    </span>
                                    <h4 class="mt-3">24'round clock access!</h4>
                                    <div class="text-muted my-2">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Reiciendis quod vel
                                        mollitia? Quo nam debitis reiciendis
                                        dolores sapiente laudantium
                                        reprehenderit.
                                    </div>
                                    <a href="#" class="link-primary" style="text-decoration: none">
                                        <span class="text-primary">
                                            Learn more
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z"></path>
                                                <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z"></path>
                                            </svg>
                                        </span>
                                    </a>
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