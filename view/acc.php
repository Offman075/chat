<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>tt_Chat</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="public/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="public/css/acc.css">

    <script src="public/js/jquery-1.11.1.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
      <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">

			<form action="index.php?action=login" method="post">
				<div class="sign-in-htm">
					<div class="group">
						<label for="user" class="label">Username or Email</label>
						<input id="user" name="username1" type="text" class="input">
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="pass" name="mdp1" type="password" class="input" data-type="password">
					</div>
					<div class="group">
						<input type="submit" class="button" value="Sign In">
					</div>
					<div class="hr"></div>
				</div>
			</form>

			<form action="index.php?action=adduser" method="post">
				<div class="for-pwd-htm">				
					<div class="group">
						<label for="user" class="label">Username</label>
						<input id="user" name="username" type="text" class="input">
						<label for="user" class="label">Email</label>
						<input id="user" name="mail" type="text" class="input">
						<label for="user" class="label">Password</label>
						<input id="user" name="mdp" type="text" class="input">
						<label for="user" class="label">Confirm password</label>
						<input id="user" name="confirm_mdp" type="text" class="input">
					</div>
					
					<div class="group">
						<input type="submit" class="button" value="Sign Up">
					</div>
					<div class="hr"></div>
				</div>
			</form>


		</div>
	</div>
</div>
	<script type="text/javascript">
		</script>
</body>
</html>

