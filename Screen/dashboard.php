<?php
    session_start();
    if (isset($_POST['logout'])) {
        session_destroy();
        header("Location: homepage.php");
        exit;
    }
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Football League Managament</title>
    <link rel="stylesheet" href="../assets/styles/FLM-2023.HomePage.css" asp-append-version="true" />
	<link rel="stylesheet" href="../assets/styles/LayoutDashboard.css" asp-append-version="true" />
	<link rel="stylesheet" href="../assets/styles/site.css" asp-append-version="true" />
	<link rel="stylesheet" href="../assets/styles/Football_League_App.styles.css" asp-append-version="true" />
	<link rel="stylesheet" href="../assets/styles/FLM-2023.navbar.css" asp-append-version="true" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
		  rel="stylesheet" />
</head>

<body>

	<!--Common part of all Pages-->
	<div class="sidebar-menu">
		<h1 class="logo">Football League<span> Management</span></h1>
		<img class="ImgLogo" img src="https://banner2.cleanpng.com/20180711/vg/kisspng-201617-premier-league-english-football-league-l-lion-emoji-5b460f06eeac18.5589169115313180229776.jpg" width="400" height="600" class="w-100" />
		<ul>
			<li><a asp-controller="Dashboard" asp-action="MainView">Home </a></li>
			<li>
				<a>Tournament</a>
				<ul class="dropdown">
					<li><a asp-controller="Tournaments" asp-action="Clubs">Clubs</a></li>
					<li><a id="player">Players</a></li>
					<li><a id="rule">Rules</a></li>
					<li><a id="league">Leagues</a></li>
					<?php
                    if($_SESSION['role']=="organizer"){
                        echo "<li><a href='javascript:openForm();'>Register Tournament</a></li>";
                    }
                    ?>
				</ul>
			</li>
			<li><a asp-controller="Tournaments" asp-action="Leagues">Ranking </a></li>
			<li><a asp-controller="Transfer" asp-action="TransferPlayers">Transfer </a></li>
			<li><a asp-controller="Schedule" asp-action="Leagues">Schedule </a></li>
			<li><a href="#">Statistic</a></li>
            <li><a id="logoutLink" href="#">Logout</a></li>
         
		</ul>
	</div>
	<!--End of Bar-->

	<!-- The form -->

	<div class="form-popup" id="myForm">
		<form class="form-container" method="post">
			<h1>Register Tournament</h1>
			<label>League's Name</label>
			<input type="text" placeholder="Enter League's Name" name="leagueName" required>
			<label>Maximum Teams</label>
			<input type="number" placeholder="Enter Maximum Teams" name="txtMaxTeams" required>
			<label>Start Date</label>
			<input type="date" placeholder="Enter Start Date" name="txtStartDate" required/>
			<label>End Date</label>
			<input type="date" placeholder="Enter Start Date" name="txtEndDate" required />

			<button type="submit" class="btn" asp-controller="Dashboard" asp-action="MainView">Register</button>
			<button type="button" class="btn cancel" method="get">Close</button>
		</form>
	</div>


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

                        <img src="../assets/images/premier-league-1.svg" width="400" height="600" alt="Ucpc" class="w-100">

                       

                    </div>

                    <img src="../assets/images/shadow-1.svg" width="437.5" height="700" alt="" class="hero-bg hero-bg-1">



                </div>
            </section>
        </article>
	<script src="../assets/js/RegisterTournament.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#logoutLink').click(function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'logout.php',
            success: function(response) {
                // Redirect to homepage after successful logout
                window.location.href = "homepage.php";
            }
        });
    });
    $('#player').click(function(e){
        e.preventDefault();
        window.location.href = "player.php";
    });
});
</script>

</body>

</html>