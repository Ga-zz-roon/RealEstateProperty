<?php
include('partials/header.php');
?>
<html>\
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="libs/common.css">
<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="libs/common.js"></script>
<body>
<div class="row box" id="login-box">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-login">
			<div class="alert alert-info">
				
			</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-lg-12">
				  <div class="alert alert-danger" role="alert" id="error" style="display: none;">...</div>
				  <form id="login-form" name="login_form" role="form" style="display: block;" method="post">
					  <div class="form-group">
						<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value=""  required>
					  </div>
					  <div class="form-group">
						<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password"> 
					  </div>
					  <div class="col-xs-12 form-group pull-right">     
							<button type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-primary">
							 <span class="spinner"><i class="icon-spin icon-refresh" id="spinner"></i></span> Log In
							</button>
					  </div>
				  </form>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>    
</body>
</html>
<?php
include('partials/footer.php')
?>