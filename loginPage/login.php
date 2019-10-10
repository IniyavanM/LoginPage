<!DOCTYPE html >
<html>
<head>
<title>Login Here</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body id="body_bg">
    <div class="login-box">
    <div class="row">
    <div class="col-md-6 login-table">
<h2>Login Here</h2>
    <form id="login-form" method="post" action="authen_login.php" >
        
            <div class="form-group">
                <label for="user_id">User Name</label>
                <input type="text" name="user_id" id="user_id" class="form-control" required>
                <label for="user_pass">Password</label>
                <input type="password" name="user_pass" id="user_pass" class="form-control" required>
                </div>
	<button type="Submit" class="btn btn-primary"> Submit </button>
    <button type="Reset" class="btn btn-primary"> Reset </button>
	
        
    </form>
		</div>
</body>
</html>