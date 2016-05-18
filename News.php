<html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>CSUF Basketball News Page</title>
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
		<h1>NEWS</h1>
	</div>
	<center>
			<table border ="1px">
		<thead>
			<tr>
				<th colspan="3">News Articles</th>
			</tr>
			<tr>
				<th>Title</th>
				<th>Date</th>
				<th></th>
				<th>Link</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Beginning</td>
				<td>May 1</td>
				<td><img src="http://www.fullerton.edu/anaheim/images/tuffy.jpg"></td>
				<?php
					$today = date("Y-m-d H:i:s");
					$date = "2016-05-08 00:00:00";
					if ($date < $today) {
						echo '<td><div style="border-radius: 5px; border: 2px solid orange; background-color: navy; height: 24px; width: 50px; margin: auto; text-align: center; color: white; font-weight: bold; font-size: 18px;">
						View</div></td>';
					}
					else {
						echo '<td></td>';
					}
				?>
			</tr>
			<tr>
				<td>End</td>
				<td>May 10</td>
				<?php
					$today = date("Y-m-d H:i:s");
					$date = "2016-05-11 00:00:00";
					if ($date < $today) {
						echo '<td><div style="border-radius: 5px; border: 2px solid orange; background-color: navy; height: 24px; width: 50px; margin: auto; text-align: center; color: white; font-weight: bold; font-size: 18px;">
						View</div></td>';
					}
					else {
						echo '<td></td>';
					}
				?>
			</tr>
	</table>
	</center>
</body>
</html>
