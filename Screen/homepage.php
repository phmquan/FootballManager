<?php
require_once('D:\Workspace\FootballManagerWeb\FootballManager\databse\config.php');
getConnection();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Football League Management</title>
    <link rel="stylesheet" href="../assets/lib/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/styles/site.css"  />
    <link rel="stylesheet" href="../assets/styles/FLM-2023.HomePage.css"  />
    <link rel="stylesheet" href="../assets/styles/FLM-2023.navbar.css" />
    <link rel="stylesheet" href="../assets/styles/Football_League_App.styles.css" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
          rel="stylesheet" />
</head>
<body>
    <header>
        <section class="navbar>">
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div class="container-fluid">
                <a class="navbar-brand" asp-area="" asp-controller="Home" asp-action="Index">Football League App</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="links">
                            <a  href="#!">
                                        Home
                            </a>
                        
                                            
                            <a  asp-area="" asp-controller="Home" asp-action="Privacy">
                                    About Us
                            </a>

                            <a class="join-link" href="login.html">
                                Login
                            </a>
                </div>
            </div>
        </nav>
        </section>
    </header>
    
    <div class="container" style="height: 750px;width: auto;">
        <main role="main" class="pb-3">
            <article>

                <!--
                  - #HERO
                -->
            
                <section class="hero" id="home" aria-label="home" style="margin-top: 80px">
                    <div class="container">
            
                        <div class="hero-content">
            
            
                            <h1 class="headline headline-1 section-title">
                                <span class="span-header"> Football League  </span><span class="span">Application</span>
                            </h1>
            
                            <p class="hero-text">
                                Welcome to our Football League Management App, a powerful tool that empowers you to create and effortlessly manage your very own league. Whether you're a passionate football enthusiast, a coach, or a team organizer, our app provides you with all the necessary features to streamline the league management process.
                            </p>
            
            
            
                        </div>
            
                        <div class="hero-banner">
            
                            <img src="../assets/images/football-league-logo.png" width="400" height="600" alt="Ucpc" class="w-100">
            
                            <img src="../assets/images/soccer-ball.svg" width="40" height="40" alt="shape" class="shape shape-1">
            
                            <img src="../assets/images/trophy.svg" width="40" height="40" alt="shape" class="shape shape-2">
            
                        </div>
            
                        <img src="../assets/images/shadow-1.svg" width="437.5" height="700" alt="" class="hero-bg hero-bg-1">
            
            
            
                    </div>
                </section>
            </article>
        </main>
    </div>

    <footer class="border-top footer text-muted">
        <div class="container" style="text-align:center; margin-top:10px">
            &copy; 2023 - Football_League_App - <a asp-area="" asp-controller="Home" asp-action="Privacy">Privacy</a>
        </div>
    </footer>
    <script src="../assets/lib/jquery/dist/jquery.min.js"></script>
    <script src="../assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/site.js" asp-append-version="true"></script>
    
    
</body>
</html>