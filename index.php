<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- meta date for charset information -->
		<meta charset="utf-8" />
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame Remove this -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<title>Tech bangla</title>
		<!-- set mobile viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<!-- this is favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/icon.png" />
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/ html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/ respond.min.js"></script>
		<![endif]-->
		<!-- All web fonts your domain being here -->

		<!-- All style sheet your domain being here -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"/>
		<link rel="stylesheet" href="../public/css/style.css"/>

		<!-- Style for this page only-->
		<style>
			h3 {
				color: #ff7800f0;
				margin-top: 50px;
				margin-bottom: 30px;
			}
			input[type="submit"] {
				width: auto !important;
				margin-top: 0.5 rem;
				background: #fb973fe8;
				color: white;
			}
			input[type="submit"]:hover, input[type="submit"]:focus {
				background: #f3801ae8
			}
			label {
				margin-top: 0.5 rem;
			}
		</style>
	</head>
	<body>
		<?php
		require ('url_maker.php');
		$error = NULL;
		$murl = 'placeholder="Enter url e.g. https://example.com/"';
		$mname = 'placeholder="Name e.g. example"';
		function get_data($name) {
			if (isset($_REQUEST[$name]) && !empty($_REQUEST[$name])) {
				return $_REQUEST[$name];
			}
			else {
				$error = '<p class="form-group alert alert-danger">'. $name .' not valid</p>';
			}
		}

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$url = get_data('url');
			$name = get_data('vname');
			$result['url'] = base64_url($url);
			$result['name'] = $name;
			$murl = 'value= "'. $url .'"' . $murl;
			$mname = 'value= "'. $name .'"' . $mname;
		}
		?>
		<div class="container">
			<h3>Base64 hidden Redirection</h3>
			<form action="<?=htmlentities($_SERVER['PHP_SELF']); ?>" method="post" accept-charset="utf-8">
				<?=$error?>
				<p class="form-group">
					<label for="url">Place your url</label>
					<input class="form-control" type="text" name="url" value="" id="url" <?=$murl; ?>/>
					<label for="vname">Name</label>
					<input class="form-control" type="text" name="vname" value="" id="vname" <?=$mname; ?>/>

					<input class="form-control" type="submit" value="Continue &rarr;"/>
				</p>
			</form>
			<?php if(isset($result) && !$error){
			?>
			<p>
			<a href="<?=$result['url'] ?>"><?=$result['name'] ?></a>
			</p>
			<p>
			<span>code</span>
			<pre>
			<a href="<?=$result['url'] ?>"><?=$result['name'] ?></a>
			</pre>
			</p>
			<?php } else{ ?>
			<p>
				&lt;a href="<b>your url here. </b>"&gt;<b>your url name here.</b>&lt;/a&gt;
			</p>
			<?php } ?>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	</body>
</html>

