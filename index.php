<?php
  $load = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>
<html>
	<head>
		<title>ITL303</title>
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<div id="header">
			<ul id="nav">
				<li><a href="index.php"> Home</a></li>
				<li><a href="index.php?page=css" >CSS3</a></li>
				<li><a href="index.php?page=svg">SVG</a></li>
				<li><a href="index.php?page=canvas"> CANVAS</a></li>
                <li><a href="index.php?page=about"> ABOUT THE AUTHOR</a></li>
			</ul>
    </div>
    <div id ="content">
    <?php
	 switch ($load) {
	 case 'css':
			 require_once('css.php');
				        break;
		case 'svg':
			 require_once('svg.php');
				        break;
		case 'canvas':
			      require_once('canvas.php');
			          break;
        case 'about':
        		require_once('about.php');
        			  break;
		default:
					  require_once('home.php');
					      break;
				}
			?>

</div>
	