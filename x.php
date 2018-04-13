
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<!-- <div class="alert alert-success" id="flash" style=" display:none;">
		<strong>Success!</strong> You should <a href="#" class="alert-link">read this message</a>.
	</div>

	<form id="insert" method="post">
<div id="namediv"><label>Name</label>
<input type="text" name="name" id="name" placeholder="Name"/><br></div>
<div id="emaildiv"><label>Email</label>
<input type="text" name="email" id="email" placeholder="Email"/></div>
<button type="submit" id="fb">click me</button>
</form> -->

<div class="alert alert-info" id="data" style=" display:inline-block;">
		
	</div>
<form id="frmDemo" method="post">
	<div class="input-group">Name </div>
	<div>
		<input type="text" name="name" id="name" class="input-control" />
	</div>

	<div class="input-group">Message </div>
	<div>
		<textarea name="comment" id="comment" class="input-control"></textarea>
	</div>

	<div style="float:left">
		<button type="submit" name="btn-submit" id="btn-submit">Submit</button>
	</div>
	
	<!-- <div id="flash" class="ajax_response" style="float:left; display: none;">
		<strong>Success!</strong>
	</div> -->
	<div class="alert alert-success" id="flash" style=" display:none;">
		<strong>Success!</strong> You should <a href="#" class="alert-link">read this message</a>.
	</div>
</form>	

</body>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>	
<script >
	
	/*$(document).ready(function(){
			$('#btn-submit').click(function () {
				$('#flash').css("display", "inline-block").delay(500).fadeIn('normal', function() {
					$(this).delay(2500).fadeOut();
				});
				var name = $('#name').val();
                var email = $('#email').val();
                
				$.post("xd.php", $("#insert").serialize(), function (data) {

                        
                    });

			});
		});*/


		$("#frmDemo").submit(function(e) {
			e.preventDefault();
			var name = $("#name").val();
			var comment = $("#comment").val();



			/*$.ajax({
				type: "POST",
				url: "xd.php",
				data: "name="+name+"&comment="+comment,
				success: function(data){
					$('#flash').fadeIn().css("display", "inline-block");
					setTimeout(function() {
						$('#flash').fadeOut("slow");
					}, 2000 );

				}
			});*/


			$.post("xd.php", $("#frmDemo").serialize(), function (data) {


				$('#flash').fadeIn().css("display", "inline-block");
				setTimeout(function() {
					$('#flash').fadeOut("slow");
				}, 2000 );

				$('#data').html(data);
			});


		})


	</script>
	</html>
