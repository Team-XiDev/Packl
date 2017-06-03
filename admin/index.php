<!DOCTYPE html>
<html>
<head>
	<title>Animation | CSS</title>
	<meta charset="utf-8">
</head>

<body>
<!-- PAGE -->
<section class="section">
	<span class=" loader loader-quart"></span>
	Vous n'avez pas le droit d'être ici !
</section>


<style type="text/css">


	body{margin: 0; padding: 0; font-family: sans-serif; color: #fff; text-align: center; font-size: 40px; background-color:#FF290E;}


	.section{
		background-color: #FF290E;
		height:638px;
		line-height: 640px;
	}

	.loader{
		width: 50px;
		height: 50px;
		display: inline-block;
		vertical-align: middle;
		position: relative;
	}
	/* LOADER QUART */

	.loader-quart{
		border-radius: 50px;
		border: 6px solid rgba(255, 255, 255, 0.4);
	}

	.loader-quart:after{
		content: '';
		position: absolute;
		top: -6px; 
		left: -6px;
		bottom: -6px;
		right: -6px;
		border-radius:50px;
		border: 6px solid transparent;
		border-top-color: #FFF;
		animation: spin 1s linear infinite;
	}

	@keyframes spin{
		0%{ transform: rotate(0deg); }
		100%{ transform: rotate(360deg); }
	}

</style>






<!-- -->
</body>
</html>
