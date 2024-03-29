<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=AR+One+Sans&display=swap">
    <link rel="stylesheet" href="styles/styles.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <header class="header">
                    <a href="" class="logo"><img src="assets/images/logo/logo.png" alt="LankanMatka"></a>
                    <nav class="navbar navbar-expand-md">
                        <ul class="sidebar">
                        <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                        <li><a href="ex1.php">Exercise1</a></li>
                        <li><a href="ex2.php">Exercise2</a></li>
                        <li><a href="ex3.php">Exercise3</a></li>
                        <li><a href="ex4.php">Exercise4</a></li>
                        <li><a href="https://github.com/kcdissanayaka/PHPWebev/blob/main/README.md">Exercise5</a></li>
                        <li><a href="">Exercise7 &#x25BE;</a>
                        <ul class="dropdown">
                        <li><a href="index.php">CREATE</a></li>
                        <li><a href="read.php">RUD</a></li>
                        </ul>
                    
                    </li>
                        <!--<li><a href="#booking">Book</a></li>
                        <li><a href="#plan">Packages</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#footer">Contact Us</a></li>
                        <li><a href=""><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li> -->
                        </ul>
                        <ul>
                        <li><a href="ex1.php">Exercise1</a></li>   
                        <li class="hideOnMobile"><a href="ex2.php">Exercise2</a></li>
                        <li><a href="ex3.php">Exercise3</a></li>
                        <li><a href="ex4.php">Exercise4</a></li>
                        <li><a href="https://github.com/kcdissanayaka/PHPWebev/blob/main/README.md">Exercise5</a></li>
                        <li><a href="">Exercise7 &#x25BE;</a>
                        <ul class="dropdown">
                        <li><a href="index.php">CREATE</a></li>
                        <li><a href="read.php">RUD</a></li>
                        </ul>
                    
                    </li>
                        <!-- <li class="hideOnMobile"><a href="#booking">Book</a></li>
                        <li class="hideOnMobile"><a href="#plan">Packages</a></li>
                        <li class="hideOnMobile"><a href="#services">Services</a></li>
                        <li class="hideOnMobile"><a href="#gallery">Gallery</a></li>
                        <li class="hideOnMobile"><a href="#footer">Contact Us</a></li>
                        <li class="hideOnMobile"><a href=""><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
                        <li onclick="showSidebar()" class="menu-button"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li> -->
                        </ul>
                    </nav>

                    <script>
                        function showSidebar() {
                            const sidebar = document.querySelector('.sidebar');
                            sidebar.style.display = 'flex';
                        }
                    
                        function hideSidebar() {
                            const sidebar = document.querySelector('.sidebar');
                            sidebar.style.display = 'none';
                        }
                        
                    </script>
                </header>
            </div>
        </div>
        
        <section id="home">
            
            <div class="section text-center">
                <div class="row">
                <div class="textOnVideo col">
                        <h1>WEB PROGRAMMING DEVELOPMENT</h1>
                        <h3>Explore new places with us, with lifelong memories</h3>
                    </div>
                    <div class="video-container col embed-responsive embed-responsive-16by9">
                        <video autoplay muted loop class="video-bg embed-responsive-item">
                            <!--<source src="assets/video/ambuluwawa.mp4">-->
                        </video>
                        <a href="#booking" class="btn btn-warning btn-header-book mx-auto">Book Now</a>
                    </div>
                </div>
            </div> 
            
        </section>

        <style>
    ul li ul.dropdown {
        width: 100%;
        position: absolute;
        z-index: 999;
        display: none;
        left: 472px; /* Position the dropdown to the right */
    }

    ul li:hover ul.dropdown {
        display: block;
    }

    /* Adjusting the position of the dropdown */
    ul li ul.dropdown {
        top: 50%; /* Adjust as needed */
    }
</style>

