<!-- 
 Site : http:www.smarttutorials.net
 @author muni
 -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Smart Login Modal">
    <meta name="keywords" content="Smart Login Modal">
    <meta name="author" content="muni">
    <link rel="icon" href="../../favicon.ico">

    <title>User Authentication</title>

    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Noto+Serif:400,700"> 
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    
    <!-- -Login Modal -->
	<div id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
		<div class="modal-dialog">
	    	<div class="modal-content login-modal">
	      		<div class="modal-header login-modal-header">
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        		<h4 class="modal-title text-center" id="loginModalLabel">USER AUTHENTICATION</h4>
	      		</div>
	      		<div class="modal-body">
	      			<div class="text-center">
		      			<div role="tabpanel" class="login-tab">
						  	<!-- Nav tabs -->
							
						  	<ul class="nav nav-tabs" role="tablist">
						    	<li role="presentation"><a id="signin-taba" href="#home" aria-controls="home" role="tab" data-toggle="tab">Masuk</a></li>
						    	<li role="presentation" class="active"><a id="signup-taba" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Daftar</a></li>
						    	<li role="presentation"><a id="forgetpass-taba" href="#forget_password" aria-controls="forget_password" role="tab" data-toggle="tab">Lupa Password</a></li>
						  	</ul>
						
						  	<!-- Tab panes -->
						 	<div class="tab-content">
						    	<div role="tabpanel" class="tab-pane text-center" id="home">
						    		&nbsp;&nbsp;
						    		<span id="login_fail" class="response_error" style="display: none;">Loggin failed, please try again.</span>
						    		<div class="clearfix"></div>
						    		<form action="../proses/signin.php" method="post">
										<div class="form-group">
									    	<div class="input-group">
									      		<div class="input-group-addon"><i class="fa fa-user"></i></div>
									      		<input name="username" type="text" class="form-control" id="login_username" placeholder="Username" required/>
									    	</div>
									    	<span class="help-block has-error" id="email-error"></span>									  	</div>
									  	<div class="form-group">
									    	<div class="input-group">
									      		<div class="input-group-addon"><i class="fa fa-lock"></i></div>
									      		<input name="password" type="password" class="form-control" id="password" placeholder="Password" required/>
									    	</div>
									    	<span class="help-block has-error" id="password-error"></span>									  	</div>
							  			<button type="submit" id="login_btn" class="btn btn-block bt-login" data-loading-text="Signing In....">Login</button>
							  			<div class="clearfix"></div>
							  			<div class="login-modal-footer">
							  				<div class="row">
												<div class="col-xs-8 col-sm-8 col-md-8">
													<i class="fa fa-lock"></i>
													<a href="javascript:;" class="forgetpass-tab"> Forgot password? </a>												</div>
												
												<div class="col-xs-4 col-sm-4 col-md-4">
													<i class="fa fa-check"></i>
													<a href="javascript:;" class="signup-tab"> Sign Up </a>												</div>
											</div>
							  			</div>
									</form>
						    	</div>
						    	<div role="tabpanel" class="tab-pane active " id="profile">
						    	    &nbsp;&nbsp;
						    	    <span id="registration_fail" class="response_error" style="display: none;">Registration failed, please try again.</span>
						    		<div class="clearfix"></div>
						    		<form>
										<div class="form-group">
									    	<div class="input-group">
									      		<div class="input-group-addon"><i class="fa fa-user"></i></div>
									      		<input type="text" class="form-control" name="no_id" id="no_id" placeholder="No ID" required/>
									    	</div>
									    	<span class="help-block has-error" data-error='0' id="no_id-error"></span>									  	</div>
										<div class="form-group">
									    	<div class="input-group">
									      		<div class="input-group-addon"><i class="fa fa-lock"></i></div>
									      		<input type="password" class="form-control" name="password1" id="password1" placeholder="Password" required/>
									    	</div>
									    	<span class="help-block has-error" data-error='0' id="password1-error"></span>									  	</div>
										<div class="form-group">
									    	<div class="input-group">
									      		<div class="input-group-addon"><i class="fa fa-lock"></i></div>
									      		<input type="password" class="form-control" name="password2" id="password2" placeholder="Ketik Ulang Password" required/>
									    	</div>
									    	<span class="help-block has-error" data-error='0' id="password2-error"></span>									  	</div>
										<div class="form-group">
									    	<div class="input-group">
									      		<div class="input-group-addon"><i class="fa fa-user"></i></div>
									      		<input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Nama Lengkap" required/>
									    	</div>
									    	<span class="help-block has-error" data-error='0' id="nama_user-error"></span>									  	</div>
									  	<div class="form-group">
									    	<div class="input-group">
									      		<div class="input-group-addon"><i class="fa fa-at"></i></div>
									      		<input type="text" class="form-control" name="email_user" id="email_user" placeholder="Email" required/>
									    	</div>
									    	<span class="help-block has-error" data-error='0' id="email_user-error"></span>									  	</div>
										<div class="form-group">
									    	<div class="input-group">
									      		<div class="input-group-addon"><i class="fa fa-user"></i></div>
									      		<input type="text" class="form-control" name="alamat_user" id="alamat_user" placeholder="Alamat" required/>
									    	</div>
									    	<span class="help-block has-error" data-error='0' id="alamat_user-error"></span>									  	</div>
										<div class="form-group">
									    	<div class="input-group">
									      		<div class="input-group-addon"><i class="fa fa-user"></i></div>
									      		<input type="text" class="form-control" name="tempat" id="tempat" placeholder="Tempat" required/>
									    	</div>
									    	<span class="help-block has-error" data-error='0' id="tempat-error"></span>									  	</div>
										<div class="form-group">
									    	<div class="input-group">
									      		<div class="input-group-addon"><i class="fa fa-user"></i></div>
									      		<input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir" required/>
									    	</div>
									    	<span class="help-block has-error" data-error='0' id="tgl_lahir-error"></span>									  	</div>
										<div class="form-group">
									    	<div class="input-group">
									      		<div class="input-group-addon"><i class="fa fa-user"></i></div>
									      		<select name="status_user" id="status_user" class="form-control">
													<option value="" disabled selected>-- Pilih Status --</option>
													<option value="Admin" <?php error_reporting(0); if($_POST[status_user]=='admin') echo "selected"; ?>>Admin</option>
													<option value="Pemilik Usaha" <?php if($_POST[status_user]=='pemilik_usaha') echo "selected"; ?>>Pemilik Usaha</option>
												</select>
									    	</div>
									    	<span class="help-block has-error" data-error='0' id="status_user-error"></span>									  	
										</div>

							  			<button type="submit" id="register_btn" class="btn btn-block bt-login" data-loading-text="Registering....">Register</button>
										<div class="clearfix"></div>
										<div class="login-modal-footer">
							  				<div class="row">
												<div class="col-xs-8 col-sm-8 col-md-8">
													<i class="fa fa-lock"></i>
													<a href="javascript:;" class="forgetpass-tab"> Forgot password? </a>												</div>
												
												<div class="col-xs-4 col-sm-4 col-md-4">
													<i class="fa fa-check"></i>
													<a href="javascript:;" class="signin-tab"> Sign In </a>												</div>
											</div>
							  			</div>
									</form>
						    	</div>
						    	<div role="tabpanel" class="tab-pane text-center" id="forget_password">
						    		&nbsp;&nbsp;
						    	    <span id="reset_fail" class="response_error" style="display: none;"></span>
						    		<div class="clearfix"></div>
						    		<form>
										<div class="form-group">
									    	<div class="input-group">
									      		<div class="input-group-addon"><i class="fa fa-at"></i></div>
									      		<input type="text" class="form-control" id="femail" placeholder="Email" required/>
									    	</div>
									    	<span class="help-block has-error" data-error='0' id="femail-error"></span>									  	</div>
									  	
							  			<button type="submit" id="reset_btn" class="btn btn-block bt-login" data-loading-text="Please wait....">Forget Password</button>
										<div class="clearfix"></div>
										<div class="login-modal-footer">
							  				<div class="row">
												<div class="col-xs-6 col-sm-6 col-md-6">
													<i class="fa fa-lock"></i>
													<a href="javascript:;" class="signin-tab"> Sign In </a>												</div>
												
												<div class="col-xs-6 col-sm-6 col-md-6">
													<i class="fa fa-check"></i>
													<a href="javascript:;" class="signup-tab"> Sign Up </a>												</div>
											</div>
							  			</div>
									</form>
						    	</div>
						  	</div>
						</div>
	      			</div>
	      		</div>
	    	</div>
	   </div>
 	</div>
 	<!-- - Login Model Ends Here -->


   <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script>
	    $(document).ready(function(){
	    	$(document).on('click','.signup-tab',function(e){
	    		 e.preventDefault();
	    		 $('#signup-taba').tab('show');
	    	});	
	
	    	$(document).on('click','.signin-tab',function(e){
	    		 e.preventDefault();
	    		 $('#signin-taba').tab('show');
	    	});
	    	
	    	$(document).on('click','.forgetpass-tab',function(e){
	    		 e.preventDefault();
	    		 $('#forgetpass-taba').tab('show');
	    	});
	    });	
    </script>
  </body>
</html>




