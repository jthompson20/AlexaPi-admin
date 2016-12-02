<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AlexaPi | Commands</title>

<?php include('inc/head.php'); ?>

</head>

<body>

	<?php include('inc/navbar.php'); ?>
		
	<?php include('inc/sidebar.php'); ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	

		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"></use></svg></a></li>
				<li class="active">Commands</li>
			</ol>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">List of available commmands ..</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="inc/data/commands.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="id" data-checkbox="true"></th>
						        <th data-field="skill" data-sortable="true">Skill</th>
						        <th data-field="command"  data-sortable="true">Command</th>
						        <th data-field="response" data-sortable="true">Response</th>
						    </tr>
						    </thead>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
	</div><!--/.main-->

	<?php include('inc/foot.php'); ?>

</body>

</html>
