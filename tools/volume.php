<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AlexaPi | Volume Controls</title>

<?php include('../inc/head.php'); ?>

</head>

<body>

	<?php include('../inc/navbar.php'); ?>
		
	<?php include('../inc/sidebar.php'); ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph female user"><use xlink:href="#stroked-female-user"></use></svg></a></li>
				<li>Tools</li>
				<li class="active">Volume</li>
			</ol>
		</div><!--/.row-->			
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">AlexaPi Volume Control</div>
					<div class="panel-body">

						<?php
						// get current volume
						$volume 	= json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/api/v1/data/volume.json'),TRUE);
						$volume 	= $volume['volume'];
						?>
						<div class="col-lg-6">
							<label for="vol">Volume: <span class="volume-display"><?php echo $volume; ?></span>%</label>
							<input id="vol" class="volume-control" type="range" name="volume" min="0" max="100" value="<?php echo $volume; ?>">
						</div>

					</div>
				</div>
			</div>
		</div><!--/.row-->	


		
	</div><!--/.main-->

	<?php include('../inc/foot.php'); ?>

	<script>
	$(document).ready(function(){
		$('.volume-control').on('change',function(){
			$('.volume-display').html(this.value);
			$.get('/api/v1/volume.php?method=set&volume=' + this.value);
		});
	});
	</script>
</body>

</html>
