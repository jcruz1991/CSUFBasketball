<html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>Schedule</title>
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
		<h1>SCHEDULE</h1>
	</div>
	<table border ="1px">
		<thead>
			<tr>
				<th colspan="6">Regular Season Schedule</th>
			</tr>
			<tr>
				<th>Team</th>
				<th>Date</th>
				<th>Home/Away</th>
				<th>Win/Loss</th>
				<th>Score</th>
				<th>Box Score</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>The Team</td>
				<td>May 1</td>
				<td>H</td>
				<td>-</td>
				<td>0-0</td>
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
				<td>This Team</td>
				<td>May 10</td>
				<td>H</td>
				<td>-</td>
				<td>0-0</td>
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
			<tr>
				<td>That Team</td>
				<td>May 14</td>
				<td>H</td>
				<td>-</td>
				<td>0-0</td>
				<?php
					$today = date("Y-m-d H:i:s");
					$date = "2016-05-14 00:00:00";
					if ($date < $today) {
						echo '<td><div style="border-radius: 5px; border: 2px solid orange; background-color: navy; height: 24px; width: 50px; margin: auto; text-align: center; color: white; font-weight: bold; font-size: 18px;">
						View</div></td>';
					}
					else {
						echo '<td></td>';
					}
				?>
			</tr>
		</tbody>
	</table>
</body>
</html>
