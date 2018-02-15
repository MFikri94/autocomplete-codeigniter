<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Autocomplete</title>
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/jquery-ui.css'?>">
</head>
<body>
	<div class="container">
		<div class="row">
			<h2>Search</h2>
		</div>
		<div class="row">
			<form id="form_search" action="<?php echo site_url('tutorial/search');?>" method="GET">
				 <div class="input-group">
				    <input type="text" name="title" class="form-control" id="title" placeholder="Title" style="width:500px;">
				    <span class="input-group-btn">
				        <button class="btn btn-info" type="submit">Search</button>
				    </span>
				 </div>
			</form>
		</div>
	</div>

	<script src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'assets/js/bootstrap.js'?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'assets/js/jquery-ui.js'?>" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){

		    $('#title').autocomplete({
                source: "<?php echo site_url('tutorial/get_autocomplete');?>",
     
                select: function (event, ui) {
                    $(this).val(ui.item.label);
                    $("#form_search").submit(); 
                }
            });

		});
	</script>

</body>
</html>