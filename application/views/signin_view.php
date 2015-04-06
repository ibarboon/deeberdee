<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/bootstrap.min.css'); ?>">
		<style type="text/css">
			body { background-color: #222; margin-top: 15%; }
		</style>
		<script type="text/javascript" src="<?php echo base_url('assets/admin/js/jquery.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/admin/js/bootstrap.min.js'); ?>"></script>
		<script type="text/javascript">
			$(function(){
// 				if ($('[name=input-signin-status]').val() == 'failed') {
// 					var alertMsg = '<div class="alert alert-danger"><strong>Error!</strong> The username or password you entered is incorrect.</div>';
// 					$(alertMsg).prependTo('#alert-panel').hide().slideDown('fast', function(){
// 						$('#alert-panel').find('div').not(':first').slideUp('fast');
// 					});
// 				}

// 				$('input:text:first').focus();

// 				$('body').on('submit', 'form', function(){
// 					var validate = true;
// 					$('form :text, :password').each(function(){
// 						if($(this).val() == '' || $(this).val() == null){
// 							var alertMsg = '<div class="alert alert-warning"><strong>Warning!</strong> Please enter your ' + $(this).attr('placeholder').toLowerCase() + '.</div>';
// 							$(alertMsg).prependTo('#alert-panel').hide().slideDown('fast', function(){
// 								$('#alert-panel').find('div').not(':first').slideUp('fast');
// 							});
// 							$(this).focus();
// 							validate = false;
// 							return validate;
// 						}
// 					});
// 					return validate;
// 				});
			});
		</script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="login-panel panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Please sign in</h3>
						</div>
						<div class="panel-body">
							<form role="form" method="post" accept-charset="utf-8" action="<?php echo site_url('admin/signin'); ?>">
								<fieldset>
									<input type="hidden" name="input-signin-status" value="<?php echo $signin_status; ?>"/>
									<div id="alert-panel"></div>
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
										<input type="text" class="form-control" placeholder="Username" name="input-username">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
										<input type="password" class="form-control" placeholder="Password" name="input-password">
									</div>
									<br>
									<button type="submit" class="btn btn-success btn-block" name="input-submit" value="TRUE"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Sign In</button>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>