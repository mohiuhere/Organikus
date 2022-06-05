<?php
include '../authentication/auth.php';
// include 'get-generate-data.php';
include '../authentication/connection.php';

$user_id =  $_SESSION['id'];
$project_id = $_REQUEST['id'];

// echo $user_id;
// echo $project_id;

$str = "SELECT * FROM generatecrop WHERE proj_id=$project_id";
$result = mysqli_query($conn, $str);
$row = mysqli_fetch_all($result);
// echo "<pre>";
// print_r($row);
// echo "</pre>";

$str = "SELECT * FROM projectresult WHERE generate_id=$project_id";
$result = mysqli_query($conn, $str);
$row2 = mysqli_fetch_all($result);
// echo "<pre>";
// print_r($row2);
// echo "</pre>";

$str = "SELECT * FROM generateproject WHERE project_id=$project_id";
$result = mysqli_query($conn, $str);
$row3 = mysqli_fetch_assoc($result);
// echo "<pre>";
// print_r($row3);
// echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Result</title>
        <link rel="stylesheet" href="../css/evo-calendar.min.css">
        <link rel="stylesheet" href="../css/evo-calendar.midnight-blue.min.css">
        <link rel="stylesheet" href="../css/style.css"/>
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/project.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/d19dff645a.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Navbar  -->
        <nav class="navbar fixed-top navbar-expand-sm navbar-dark ">
            <div class="container-fluid">
            <a class="navbar-brand" href="#"><img id="logo" src="../logo/logo.svg" alt=""></a>
                <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars-staggered "></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
      
                    <div class="mx-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link text-primary" href="../index.html">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-primary" href="../others/blog.html">Explore</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-primary" href="../hardiness-zone/hardiness-zone.html">Hardiness Zone</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-primary" href="../shop/shop.html">Yard's Shop</a>
                        </li>
                        <a href="../authentication/user-registration.html"><button class="button-59" role="button">Join</button></a>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <br>
      
        <br>
        
        <br>
        
        <br>
        <div class="container mb-4 ps-0">
            <h2><?php echo $row3['project_name'] ?></h2>
        </div>
        <div class="container border">
            <div class="row">
                <h3 class="mt-3 mb-2">Revenue and Expense</h3>
                <div class="col-sm-4 result-card mb-4">
                    <div class="mt-3">
                        <i class="fa-solid fa-money-check-dollar"></i>
                        <h4><?php echo $row2[1][2]+$row2[0][2] ?></h4>
                    </div>
                    <h6>Maximum Annual Expense</h6>
                </div>
                <div class="col-sm-4 result-card mb-4">
                    <div class="mt-3">
                        <i class="fa-solid fa-money-check-dollar"></i>
                        <h4><?php echo $row2[1][4]+$row[0][4] ?></h4>
                    </div>
                    <h6>Capital Expense</h6>
                </div>
                <div class="col-sm-4 result-card mb-4">
                    <div class="mt-3">
                        <i class="fa-solid fa-money-check-dollar"></i>
                        <h4><?php echo $row2[1][3]+$row[0][3] ?></h4>
                    </div>
                    <h6>operating expense</h6>
                </div>
            </div>

            <div class="container">
                <div class="row mt-2 mb-5">
                    <h3 class="mt-3 mb-2">Crop Pricing</h3>
                    <div class="col-sm-3 border px-0">
                        <div class="percentage-color px-2" style="width:<?php print_r($row[0][3]) ?>%"> 
                            <h5><?php print_r($row[0][1]) ?></h5>
                            <h6>$20.00/kg</h6>
                        </div>
                    </div>
                    <div class="col-sm-3 border px-0">
                        <div class="percentage-color px-2" style="width:<?php print_r($row[1][3]) ?>%">
                            <h5><?php print_r($row[1][1]) ?></h5>
                            <h6>$30.00/kg</h6>
                        </div>
                    </div>
                    <!-- <div class="col-sm-3 border px-0">
                        <div class="percentage-color px-2">
                            <h5>Black plum</h5>
                            <h6>$20.00/kg</h6>
                        </div>
                    </div>
                    <div class="col-sm-3 border px-0">
                        <div class="percentage-color px-2">
                            <h5>Black plum</h5>
                            <h6>$20.00/kg</h6>
                        </div>
                    </div> -->
                </div>
            </div>
            
        </div>

        <!-----> 
        <!--calender work to schedule advisor meeting 
            <div class="container mt-5">
            <h2>Schedule your Advising Meeting</h2>
            <p>Advisor will help with your farm management design and much more.</p>
        </div>


        <div class="container mt-2 mb-5">
            <div id="calendar"></div>
        </div> -->
        
        <!----->
        

        <footer class="footer-area">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-sm-8 mt-5 ">
                        <p style="color:rgb(67, 100, 199)" >NO CREDIT CARD REQUIRED<p>
                        <h2>Book a demo</h2>
                        <div  class="mail-us mt-5">
                            <input type="email" placeholder="Working Email">
                            <button><i class="fa-solid fa-paper-plane"></i></button>
                        </div>  
                    </div>
      
                    <div class="col-sm-4 mt-5">
                        <img class="card-img" src="../logo/footer-logo_c.svg" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 mt-5">
                        <img id="logo" src="../logo/logo.svg" alt="">
                        <p id="margin-left-8px" class="mt-3">Don't plant misconception, plant a tree.<p>
                    </div>
                    <div class="col-sm-7 mt-5">
                        <div class="col footer-link-margin">
                            <div class="mt-4 mx-5">Terms</div>
                            <div class="mt-4 mx-5">Let's Chat</div>
                            <div id="padding-left-23px" class="mt-4 mx-5">About</div>
                        </div>
                        <div class="col footer-link-margin">
                            <div class="mt-4 mx-5">Jobs</div>
                            <div class="mt-4 mx-5">Privacy Policy</div>
                            <div class="mt-4 mx-5">Org@nikus.app</div>
                        </div>
                        <div class="col footer-link-margin">
                            <div class="mt-4 mx-5">Docs</div>
                            <div class="mt-4 mx-5">Cookies Policy</div>
                            <div class="mt-4 mx-5">
                                <div class="col">
                                    <i class="fa-solid fa-bath"></i>
                                    <i class="fa-solid fa-beer-mug-empty"></i>
                                    <i class="fa-solid fa-book-journal-whills"></i>
                                    <i class="fa-solid fa-fire"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 offset-0 footer-link-margin">
                            <div class="mt-4 mx-5">Security</div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

<script src="../js/script.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="../js/evo-calendar.min.js"></script>
<script src="../js/evo-calendar.js"></script>

<script type="text/javascript">
    $('#calendar').evoCalendar({
    theme: 'Midnight Blue'
});
  var nav = document.querySelector('nav');

  window.addEventListener('scroll', function () {
      nav.classList.add('bg-dark', 'shadow');
  });
</script>
</body>
</html>