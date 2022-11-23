<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="/public/asset/css/style.css">
</head>
<body>
  <!-- <h1>ini login admin</h1> -->
  <div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
		<form action="/AuthController.php" method="POST">
			<label>Email</label>
			<input type="text" name="email" class="form_login" placeholder="email .." required>
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required>
			<input type="submit" class="tombol_login" value="LOGIN">
			<br/>
			<br/>
		</form>
		
	</div>
</body>
</html>