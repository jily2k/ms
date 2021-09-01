<?php
	// †
	require_once("common_sub.php");
	require_once("mlib_utf8.php");
	
	$_DEBUG = true;
	
	$_self = $_SERVER['PHP_SELF'];
	$_params = _get_params($_REQUEST, array("_ga"));
	
	$_TITLE = "J Music Tool";
	$_content = "main_index.php";
	
	$_routes = array();
	$_routes['main_index'] = array("title"=>"Top", "content"=>"main_index.php", "menu"=>true);
	$_routes['cof'] = array("title"=>"Circle Of Fifth", "content"=>"cof.php", "menu"=>true);
	$_routes['guitar_scale'] = array("title"=>"Guitar(Scale)", "content"=>"guitar_scale.php", "menu"=>true);
	$_routes['pad'] = array("title"=>"Pad", "content"=>"pad.php", "menu"=>true);
	$_routes['gt_chord'] = array("title"=>"Chord", "content"=>"gt_chord.php", "menu"=>true);
	$_routes['keyboard_scale'] = array("title"=>"Keyboard(Scale)", "content"=>"keyboard_scale.php", "menu"=>true);
	
	if(!isset($_REQUEST['content'])){
		print "Error";
		exit();
	}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?= _hsc($_routes[$_REQUEST['content']]['title']) ?></title>
	
	<script type="text/javascript" src="js/fabric.js"></script>
	<!--<script type="text/javascript" src="js/jquery-1.11.3.js">-->
	
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdn.rawgit.com/Tonejs/Tone.js/4c2cf070/build/Tone.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<script type="text/javascript" src="js/jcanvas.min.latest.js"></script>	
	<script type="text/javascript" src="js/mlib.js?"></script>
	
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="header">
	<h2>&nbsp;<?= $_TITLE ?><img src="images/title.jpg" alt=""></h2>
</div>

<div id="main">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-2">
				<ul>
				<?php foreach($_routes as $_key=>$_route): 
							if($_route['menu']){ $_disp = true; }else{ $_disp = false; }
				?>
					<?php if($_disp): ?>
					<li><a href="<?= _hsc($_self)."?content={$_key}" ?>"><?= _hsc($_route['title']) ?></a></li>
					<?php endif; ?>
				<?php endforeach; ?>
				</ul>
			</div>
			
			<div class="col-xs-10">
				<?php require_once($_routes[$_params['content']]['content']); ?>
			</div>
		</div>
	</div>
</div>

<div id="footer" align="center">
	<font color="#cccccc" size="-1">
	Copyright &copy; <?= date("Y", time()) ?> J Music Tool All Rights Reserved.
	<br>
	※当サイトで提供するコンテンツ、プログラムを利用したことによりこうむった損害について一切責任を負いません。
	</font>
</div>


</body>
</html>
