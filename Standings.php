<html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>Standings</title>
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
		<h1>STANDINGS</h1>
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

		$sql = "SELECT team_name, team_wins, team_losses FROM tbl_standings";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    echo "<table><thead><tr><th>Teams</th><th>Wins<th>Losses</th></tr></thead>";
		    // output data of each row
				while($row = $result->fetch_assoc()) {   //Creates a loop to loop through results
					echo "<tr><td>" . $row['team_name'] . "</td><td>" . $row['team_wins'] . " " . "</td><td>" . $row['team_losses'] . "</td></tr>";  //$row['index'] the index here is a field name
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