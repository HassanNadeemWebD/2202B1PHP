<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <div class="container mt-3">
    <h2>Stacked form</h2>
    <form action="login.php" method="post">
      <div class="mb-3 mt-3">
        <label for="email">Email:</label>
        <input type="email" value="<?php  if(isset($_COOKIE['useremail'])){echo $_COOKIE['useremail'];} ?>" class="form-control" id="email" value placeholder="Enter email" name="email">
      </div>
      <div class="mb-3">
        <label for="pwd">Password:</label>
        <input type="password" value="<?php if(isset($_COOKIE['userpassword'])){echo $_COOKIE['userpassword'];}?>" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>

      <div class="form-check">
  <input name="rememberMe" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Remember Me
  </label>
</div>

<button type="submit" name="login" class="btn btn-primary">Login</button>
<div class="form-check">
<input name="forget" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
<label class="form-check-label" for="flexCheckDefault">
Forget Me
</label>
</div>
</form>
  </div>

</body>

</html>