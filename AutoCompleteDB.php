<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css"
	>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="country.php">
	<title>AutoComplete</title>
</head>
<body>
<div class="container" style="width: 500px;">
	<h2 align="center"> AutoComplete Country Name</h2>
	<input type="text" name="country" id="country" class="form-control" placeholder="Entry Country Name....">
	<div class="container" id="listOfCountry"></div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#country').keyup(function(){
			var sqlquery =$(this).val();
			if(sqlquery!=''){
				$.ajax({
					url:"country.php",
					method:"POST",
					info:{sqlquery:sqlquery},
					success:function(info)
					{
						$('#listOfCountry').fadeIn();
						$('#listOfCountry').html(info);
					}
				});
			}
			else{
				$('#listOfCountry').fadeOut();
				$('#listOfCountry').html("");
			}
		});
		$(document).on('click', 'li', function(){
			$('#country').val(($this).text());
			$('#listOfCountry').fadeOut();
		});
	});
</script>
</body>
</html>