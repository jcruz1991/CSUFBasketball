<html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>CSUF Basketball Roster</title>
</head>

<body>
	<div id="header">
		<div id="navbar">
			<ul>
				<li><a href="Home.php">Home</a></li>
				<li><a href="News.php">News</a></li>
				<li><a href="Standings.php">Standings</a></li>
				<li><a href="Roster.php">Roster</a></li>
				<li><a href="Stats.php">Stats</a></li>
				<li><a href="Schedule.php">Schedule</a></li>
				<li><a href="Tickets.php">Tickets</a></li>
			</ul>
		</div>
		<h1>TEAM ROSTER</h1>
	</div>
	<?php

		$servername = "localhost";
		$username = "root";
		$password = "jcruz009";
		$dbname = "csufbasketball";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT player_team_number, player_firstName, player_lastName, player_position, player_status FROM tbl_players WHERE player_team='California State University, Fullerton'";
		$result = $conn->query($sql);

		echo"<h1> Roster </h1>";
		if ($result->num_rows > 0) {
		    echo "<table><thead><tr><th>Number</th><th>Name<th>Position</th><th>Year</th></tr></thead>";
		    // output data of each row
				while($row = $result->fetch_assoc()) {   //Creates a loop to loop through results
					echo "<tr><td>" . $row['player_team_number'] . "</td><td>" . $row['player_firstName'] . " " . $row['player_lastName'] . "</td><td>" . $row['player_position'] . "</td><td>" .$row['player_status'] . "</td></tr>";  //$row['index'] the index here is a field name
				}
				echo "<table>"; // start a table tag in the HTML
				echo "</table>";
			} else {
				echo "0 results";
			}

			$sql = "SELECT staff_firstName, staff_lastName, staff_postiton FROM tbl_staff WHERE staff_team_id = 1";
			$result = $conn->query($sql);

			echo"<h1> Coaching Staff </h1>";
			if ($result->num_rows > 0) {
			    echo "<table><thead><tr><th>Name</th><th>Staff Position</th></tr></thead>";
			    // output data of each row
					while($row = $result->fetch_assoc()) {   //Creates a loop to loop through results
						echo "<tr><td>" . $row['staff_firstName'] . " " . $row['staff_lastName'] . "</td><td>" .$row['staff_postiton'] . "</td></tr>";  //$row['index'] the index here is a field name
					}
					echo "<table>"; // start a table tag in the HTML
					echo "</table>";
				} else {
					echo "0 results";
				}

			$conn->close();
	?>
</body>
</html>
