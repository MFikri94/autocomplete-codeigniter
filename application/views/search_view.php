<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Search Result</title>
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
</head>
<body>
	<div class="container">
		<div class="row">
			<h2>Search Result</h2>
		</div>
		<div class="row">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Title</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($data as $row):?>
					<tr>
						<td><?php echo $row->blog_title;?></td>
						<td><?php echo $row->blog_description;?></td>
					</tr>
				<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>

	<script src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'assets/js/bootstrap.js'?>" type="text/javascript"></script>

</body>
</html>