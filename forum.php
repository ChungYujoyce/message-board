<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link href="./css/forum.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
	<title>Message board</title>
	<style>
	input[id="NewAccoun"] {
		display: block;
		/*position:absolute;*/
		float: right;
		width: 280px;
		height: 50px;

		font-weight: 400;
		color: #F2FFF2;
		background: rgba(0, 0, 0, 0.3);
		outline: none;
		text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
		border: 10px 10px solid rgba(0, 0, 0, 0.3);
		border-radius: 14px;
		box-shadow: inset 0 -5px 45px rgba(100, 100, 100, 0.2), 0 1px 1px rgba(255, 255, 255, 0.2);
		text-align: center;
		transition: all .3s ease-in-out;
		font-size: 22px;
		letter-spacing: 3px;
	}
	body,
	html {
		width: 100%;
		height: 100%;
		margin: 0px;
		padding: 0px;
		background-image: url("https://images.unsplash.com/photo-1552378267-6e4c5112b7d3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80");
		background-position: center;
		background-size: cover;
		background-attachment: fixed;
	}
	.CSSTableGenerator {
		margin: auto;
		padding: 0px;
		width: 60vw;
	}

	.CSSTableGenerator table {
		border-collapse: collapse;
		border-spacing: 0;
		width: 100%;
		height: 100%;
		margin: 0px;
		padding: 0px;
	}

	.CSSTableGenerator tr:last-child td:last-child {
		-moz-border-radius-bottomright: 9px;
		-webkit-border-bottom-right-radius: 9px;
		border-bottom-right-radius: 9px;
	}

	.CSSTableGenerator table tr:first-child td:first-child {
		-moz-border-radius-topleft: 9px;
		-webkit-border-top-left-radius: 9px;
		border-top-left-radius: 9px;
	}

	.CSSTableGenerator table tr:first-child td:last-child {
		-moz-border-radius-topright: 9px;
		-webkit-border-top-right-radius: 9px;
		border-top-right-radius: 9px;

	}

	.CSSTableGenerator tr:last-child td:first-child {
		-moz-border-radius-bottomleft: 9px;
		-webkit-border-bottom-left-radius: 9px;
		border-bottom-left-radius: 9px;

	}

	.CSSTableGenerator tr:hover td {
		background-color: #bce3e7;
	}

	.CSSTableGenerator td {
		vertical-align: middle;

		border: 1px solid #999999;
		border-width: 0px 1px 1px 0px;
		text-align: left;
		padding: 8px;
		font-size: 16px;
		font-family: 'Merienda',
			cursive;
		font-weight: normal;
		color: #000000;
	}

	.CSSTableGenerator tr:last-child td {
		border-width: 0px 1px 0px 0px;
	}

	.CSSTableGenerator tr td:last-child {
		border-width: 0px 0px 1px 0px;
	}

	.CSSTableGenerator tr:last-child td:last-child {
		border-width: 0px 0px 0px 0px;
	}

	.CSSTableGenerator tr:first-child td {
		background: -o-linear-gradient(bottom, #005fbf 5%, #005fbf 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #005fbf));
		background: -moz-linear-gradient(center top, #005fbf 5%, #005fbf 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#005fbf");
		background: -o-linear-gradient(top, #005fbf, 005fbf);
		background-color: #bce3e7;
		text-align: center;
		font-size: 20px;
		font-family: 'Merienda',
			cursive;
		font-weight: bold;

	}

	.CSSTableGenerator tr:first-child:hover td {
		background: -o-linear-gradient(bottom, #bce3e7 5%, #bce3e7 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #bce3e7), color-stop(1, #bce3e7));
		background: -moz-linear-gradient(center top, #bce3e7 5%, #bce3e7 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#005fbf");
		background: -o-linear-gradient(top, #bce3e7, 005fbf);
		background-color: #bce3e7;
	}
	</style>
</head>

<body>
	<img src="./loga.png">
    <input id="NewAccoun" onclick="location.href='./homepage.php'" type="button" value="Homepage">
    <input id="NewAccoun" onclick="location.href='./logout.php'" type="button" value="Logout">
	<input id="NewAccoun" onclick="location.href='./member.php'" type="button" value="Member Section">
	<?php
		include("./mysql_connect.inc.php");
		$sql_all = "SELECT * FROM posts ";//ORDER BY post_time ASC";
		$result_all = $Link_PDO->query($sql_all);
		while($row=$result_all->fetch()){
             echo "<table class='CSSTableGenerator' >";
             echo "<tr class='CSSTableGenerator'><td>Content：</td><td class='CSSTableGenerator'>$row[0]</td></tr>
		              <tr class='CSSTableGenerator'><td>By：</td><td class='CSSTableGenerator'>$row[3]</td></tr>
                  <tr class='CSSTableGenerator'><td>gender：</td class='CSSTableGenerator'><td>$row[2]</td></tr>
                  <tr class='CSSTableGenerator'><td>date：</td><td class='CSSTableGenerator'>$row[4]</td></tr>
                  <tr class='CSSTableGenerator'><td>time：</td><td class='CSSTableGenerator'>$row[1]</td></tr>
                  ";
              echo "</table>";
          }
		?>
          
</body>
</html>