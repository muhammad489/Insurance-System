<?php include('server.php') ?>
<!DOCTYPE html>
<html>

  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Insurance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<!--<body>
	<div class="container">
		<div style="text-align:center;">
  <div class="header" >
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php" >
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label><br>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label><br>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</div>
</div>
</body>
</html>-->

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
            background-image: url("https://i.stack.imgur.com/RLQNm.jpg");
        }

        #loginForm {
            max-width: 350px;
            margin: 0 auto;
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height:auto;
            margin-top:30px;
        }

        input {
            width: 100%;
            padding: 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border:1px solid white;
            border-radius:12px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top:20px;
        }
    </style>
</head>
<body>
    <div id="loginForm">
        <h2><b>Hello Again!</b></h2>
        <p><b>Welcome back you've been missed</b></p>
		<form method="post" action="login.php" >
		<?php include('errors.php'); ?>
            <label for="username"></label>
            <input type="text" id="username" name="username" Placeholder="Enter Username"required>

            <label for="password"></label>
            <input type="password" id="password" name="password" Placeholder="Enter Password"required>

    

            <button type="submit" class="btn btn-success" name="login_user">Login</button><br><br>
			<p>Not yet a member? <a href="register.php">Sign up</a></p>
        </form>
    </div>
	</body>
	</html>
