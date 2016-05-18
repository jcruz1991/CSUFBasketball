<html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>CSUF Basketball Stats</title>
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
		<h1>STATISTICS</h1>
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
				echo "<table><thead><tr><th>Name</th><th>Points</th><th>Rebounds</th><th>Assist</th><th>Steals</th><th>FG%</th><th>Minutes</th></tr></thead>";

		#PLAYER 1
		$sql = "SELECT player_firstName, player_lastName, TRUNCATE(AVG(points), 2) AS pts, TRUNCATE(AVG(rebounds), 2) AS rbs, TRUNCATE(AVG(assist), 2) AS ast, TRUNCATE(AVG(steals), 2) AS stl,
						TRUNCATE(100 * AVG(shot_made/shots_attempts), 2) AS fg, TRUNCATE(AVG(minutes_played), 2) As mins FROM tbl_stats  WHERE player_id = 301";
		$result = $conn->query($sql);
		 $row = $result->fetch_assoc();
		 echo "<tr><td>" . $row['player_firstName'] . " " . $row['player_lastName'] . "</td><td>" .$row['pts'] . "</td><td>" .$row['rbs'] . "</td><td>" .$row['ast'] . "</td><td>".$row['stl'] . "</td><td>"
				.$row['fg'] . "</td><td>".$row['mins'] . "</td></tr>";  //$row['index'] the index here is a field name

		 #PLAYER 2
		 $sql = "SELECT player_firstName, player_lastName, TRUNCATE(AVG(points), 2) AS pts, TRUNCATE(AVG(rebounds), 2) AS rbs, TRUNCATE(AVG(assist), 2) AS ast, TRUNCATE(AVG(steals), 2) AS stl,
						 TRUNCATE(100 * AVG(shot_made/shots_attempts), 2) AS fg, TRUNCATE(AVG(minutes_played), 2) As mins FROM tbl_stats  WHERE player_id = 302";
		 $result = $conn->query($sql);
			$row = $result->fetch_assoc();
			echo "<tr><td>" . $row['player_firstName'] . " " . $row['player_lastName'] . "</td><td>" .$row['pts'] . "</td><td>" .$row['rbs'] . "</td><td>" .$row['ast'] . "</td><td>".$row['stl'] . "</td><td>"
				 .$row['fg'] . "</td><td>".$row['mins'] . "</td></tr>";  //$row['index'] the index here is a field name

			#PLAYER 3
			$sql = "SELECT player_firstName, player_lastName, TRUNCATE(AVG(points), 2) AS pts, TRUNCATE(AVG(rebounds), 2) AS rbs, TRUNCATE(AVG(assist), 2) AS ast, TRUNCATE(AVG(steals), 2) AS stl,
							TRUNCATE(100 * AVG(shot_made/shots_attempts), 2) AS fg, TRUNCATE(AVG(minutes_played), 2) As mins FROM tbl_stats  WHERE player_id = 303";
			$result = $conn->query($sql);
			 $row = $result->fetch_assoc();
			 echo "<tr><td>" . $row['player_firstName'] . " " . $row['player_lastName'] . "</td><td>" .$row['pts'] . "</td><td>" .$row['rbs'] . "</td><td>" .$row['ast'] . "</td><td>".$row['stl'] . "</td><td>"
					.$row['fg'] . "</td><td>".$row['mins'] . "</td></tr>";  //$row['index'] the index here is a field name

			#PLAYER 4
			$sql = "SELECT player_firstName, player_lastName, TRUNCATE(AVG(points), 2) AS pts, TRUNCATE(AVG(rebounds), 2) AS rbs, TRUNCATE(AVG(assist), 2) AS ast, TRUNCATE(AVG(steals), 2) AS stl,
							TRUNCATE(100 * AVG(shot_made/shots_attempts), 2) AS fg, TRUNCATE(AVG(minutes_played), 2) As mins FROM tbl_stats  WHERE player_id = 304";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			echo "<tr><td>" . $row['player_firstName'] . " " . $row['player_lastName'] . "</td><td>" .$row['pts'] . "</td><td>" .$row['rbs'] . "</td><td>" .$row['ast'] . "</td><td>".$row['stl'] . "</td><td>"
				.$row['fg'] . "</td><td>".$row['mins'] . "</td></tr>";  //$row['index'] the index here is a field name

			#PLAYER 5
			$sql = "SELECT player_firstName, player_lastName, TRUNCATE(AVG(points), 2) AS pts, TRUNCATE(AVG(rebounds), 2) AS rbs, TRUNCATE(AVG(assist), 2) AS ast, TRUNCATE(AVG(steals), 2) AS stl,
							TRUNCATE(100 * AVG(shot_made/shots_attempts), 2) AS fg, TRUNCATE(AVG(minutes_played), 2) As mins FROM tbl_stats  WHERE player_id = 305";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			echo "<tr><td>" . $row['player_firstName'] . " " . $row['player_lastName'] . "</td><td>" .$row['pts'] . "</td><td>" .$row['rbs'] . "</td><td>" .$row['ast'] . "</td><td>".$row['stl'] . "</td><td>"
			.$row['fg'] . "</td><td>".$row['mins'] . "</td></tr>";  //$row['index'] the index here is a field name

			#PLAYER 6
			$sql = "SELECT player_firstName, player_lastName, TRUNCATE(AVG(points), 2) AS pts, TRUNCATE(AVG(rebounds), 2) AS rbs, TRUNCATE(AVG(assist), 2) AS ast, TRUNCATE(AVG(steals), 2) AS stl,
							TRUNCATE(100 * AVG(shot_made/shots_attempts), 2) AS fg, TRUNCATE(AVG(minutes_played), 2) As mins FROM tbl_stats  WHERE player_id = 306";
			$result = $conn->query($sql);
			 $row = $result->fetch_assoc();
			 echo "<tr><td>" . $row['player_firstName'] . " " . $row['player_lastName'] . "</td><td>" .$row['pts'] . "</td><td>" .$row['rbs'] . "</td><td>" .$row['ast'] . "</td><td>".$row['stl'] . "</td><td>"
					.$row['fg'] . "</td><td>".$row['mins'] . "</td></tr>";  //$row['index'] the index here is a field name

			#PLAYER 7
			$sql = "SELECT player_firstName, player_lastName, TRUNCATE(AVG(points), 2) AS pts, TRUNCATE(AVG(rebounds), 2) AS rbs, TRUNCATE(AVG(assist), 2) AS ast, TRUNCATE(AVG(steals), 2) AS stl,
							TRUNCATE(100 * AVG(shot_made/shots_attempts), 2) AS fg, TRUNCATE(AVG(minutes_played), 2) As mins FROM tbl_stats  WHERE player_id = 307";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			echo "<tr><td>" . $row['player_firstName'] . " " . $row['player_lastName'] . "</td><td>" .$row['pts'] . "</td><td>" .$row['rbs'] . "</td><td>" .$row['ast'] . "</td><td>".$row['stl'] . "</td><td>"
					.$row['fg'] . "</td><td>".$row['mins'] . "</td></tr>";  //$row['index'] the index here is a field name

			#PLAYER 8
			$sql = "SELECT player_firstName, player_lastName, TRUNCATE(AVG(points), 2) AS pts, TRUNCATE(AVG(rebounds), 2) AS rbs, TRUNCATE(AVG(assist), 2) AS ast, TRUNCATE(AVG(steals), 2) AS stl,
							TRUNCATE(100 * AVG(shot_made/shots_attempts), 2) AS fg, TRUNCATE(AVG(minutes_played), 2) As mins FROM tbl_stats  WHERE player_id = 308";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			echo "<tr><td>" . $row['player_firstName'] . " " . $row['player_lastName'] . "</td><td>" .$row['pts'] . "</td><td>" .$row['rbs'] . "</td><td>" .$row['ast'] . "</td><td>".$row['stl'] . "</td><td>"
					.$row['fg'] . "</td><td>".$row['mins'] . "</td></tr>";  //$row['index'] the index here is a field name

			#PLAYER 9
			$sql = "SELECT player_firstName, player_lastName, TRUNCATE(AVG(points), 2) AS pts, TRUNCATE(AVG(rebounds), 2) AS rbs, TRUNCATE(AVG(assist), 2) AS ast, TRUNCATE(AVG(steals), 2) AS stl,
							TRUNCATE(100 * AVG(shot_made/shots_attempts), 2) AS fg, TRUNCATE(AVG(minutes_played), 2) As mins FROM tbl_stats  WHERE player_id = 309";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			echo "<tr><td>" . $row['player_firstName'] . " " . $row['player_lastName'] . "</td><td>" .$row['pts'] . "</td><td>" .$row['rbs'] . "</td><td>" .$row['ast'] . "</td><td>".$row['stl'] . "</td><td>"
					.$row['fg'] . "</td><td>".$row['mins'] . "</td></tr>";  //$row['index'] the index here is a field name

			#PLAYER 10
			$sql = "SELECT player_firstName, player_lastName, TRUNCATE(AVG(points), 2) AS pts, TRUNCATE(AVG(rebounds), 2) AS rbs, TRUNCATE(AVG(assist), 2) AS ast, TRUNCATE(AVG(steals), 2) AS stl,
							TRUNCATE(100 * AVG(shot_made/shots_attempts), 2) AS fg, TRUNCATE(AVG(minutes_played), 2) As mins FROM tbl_stats  WHERE player_id = 310";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			echo "<tr><td>" . $row['player_firstName'] . " " . $row['player_lastName'] . "</td><td>" .$row['pts'] . "</td><td>" .$row['rbs'] . "</td><td>" .$row['ast'] . "</td><td>".$row['stl'] . "</td><td>"
					.$row['fg'] . "</td><td>".$row['mins'] . "</td></tr>";  //$row['index'] the index here is a field name
		 echo "</table>";

		 $conn->close();
	?>
</body>
</html>
