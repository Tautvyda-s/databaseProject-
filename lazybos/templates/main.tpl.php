<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="robots" content="noindex">
		<title>Lažybos</title>
		<link rel="stylesheet" type="text/css" href="scripts/datetimepicker/jquery.datetimepicker.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/main.css" media="screen" />
		<script type="text/javascript" src="scripts/jquery-1.12.0.min.js"></script>
		<script type="text/javascript" src="scripts/datetimepicker/jquery.datetimepicker.full.min.js"></script>
		<script type="text/javascript" src="scripts/main.js"></script>
	</head>
	<body>
		<div id="body">
			<div id="header">
				<h3 id="slogan"><a href="index.php">Lazybos</a></h3>
			</div>
			<div id="content">
				<div id="topMenu">
					<ul class="float-left">
						<li><a href="index.php?module=contract&action=list" title="Sutartys"<?php if($module == 'contract') { echo 'class="active"'; } ?>>Sutartys</a></li>
						<li><a href="index.php?module=service&action=list" title="Paslaugos"<?php if($module == 'service') { echo 'class="active"'; } ?>>Paslaugos</a></li>
						<li><a href="index.php?module=customer&action=list" title="Klientai"<?php if($module == 'customer') { echo 'class="active"'; } ?>>Klientai</a></li>
						<li><a href="index.php?module=employee&action=list" title="Darbuotojai"<?php if($module == 'employee') { echo 'class="active"'; } ?>>Lazybu bendrove</a></li>
						<li><a href="index.php?module=car&action=list" title="Automobiliai"<?php if($module == 'car') { echo 'class="active"'; } ?>>Saskaitos</a></li>
						<li><a href="index.php?module=brand&action=list" title="Markės"<?php if($module == 'brand') { echo 'class="active"'; } ?>>Darbuotojai</a></li>
						<li><a href="index.php?module=model&action=list" title="Modeliai"<?php if($module == 'model') { echo 'class="active"'; } ?>>Klientai</a></li>
					</ul>
					<ul class="float-right">
						<li><a href="index.php?module=report&action=list" title="Ataskaitos"<?php if($module == 'report') { echo 'class="active"'; } ?>>Ataskaitos</a></li>
					</ul>
				</div>
				<div id="contentMain">
					<?php
						// įtraukiame veiksmų failą
						if(file_exists($actionFile)) {
							include $actionFile;
						}
					?>
					<div class="float-clear"></div>
				</div>
			</div>
			<div id="footer">

			</div>
		</div>
	</body>
</html>