<?php
    session_start();

?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Football League Managament</title>
	<link rel="stylesheet" href="../assets/styles/LayoutDashboard.css" asp-append-version="true" />
	<link rel="stylesheet" href="../assets/styles/site.css" asp-append-version="true" />
	<link rel="stylesheet" href="../assets/styles/Football_League_App.styles.css" asp-append-version="true" />
	<link rel="stylesheet" href="../assets/css/FLM-2023.navbar.css" asp-append-version="true" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
		  rel="stylesheet" />
</head>

<body>

	<!--Common part of all Pages-->
	<div class="sidebar-menu">
		<h1 class="logo">Football League<span> Management</span></h1>
		<img class="ImgLogo" img src="../assets/images/Logo.png" width="400" height="600" class="w-100" />
		<ul>
			<li><a asp-controller="Dashboard" asp-action="MainView">Home </a></li>
			<li>
				<a>Tournament</a>
				<ul class="dropdown">
					<li><a asp-controller="Tournaments" asp-action="Clubs">Clubs</a></li>
					<li><a asp-controller="Tournaments" asp-action="Players">Players</a></li>
					<li><a asp-controller="Tournaments" asp-action="Rules">Rules</a></li>
					<li><a asp-controller="Tournaments" asp-action="LeaguesInfo">Leagues</a></li>
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
			<li><a asp-controller="Dashboard" asp-action="Logout">Logout</a></li>
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
			<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
		</form>
                    </div>
        <?php
            // Connect to the database
            $conn = mysqli_connect("localhost", "username", "password", "database_name");

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Query to fetch player data from the database
            $sql = "SELECT * FROM players";
            $result = mysqli_query($conn, $sql);

            // Check if there are any players
            if (mysqli_num_rows($result) > 0) {
                // Loop through each player and display their information
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<h2>Player Name: " . $row['name'] . "</h2>";
                    echo "<p>Age: " . $row['age'] . "</p>";
                    echo "<p>Position: " . $row['position'] . "</p>";
                    echo "<p>Team: " . $row['team'] . "</p>";
                    echo "<hr>";
                }
            } else {
                echo "No players found.";
            }

            // Close the database connection
            mysqli_close($conn);
        ?>
	
	<script src="../assets/js/RegisterTournament.js"></script>
</body>

</html>