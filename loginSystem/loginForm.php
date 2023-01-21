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
        <input type="email" class="form-control" id="email" value placeholder="Enter email" name="email">
      </div>
      <div class="mb-3">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>

      <button type="submit" name="login" class="btn btn-primary">Login</button>
    </form>
  </div>

</body>

</html>