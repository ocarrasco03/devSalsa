<?php
if(!$_SESSION['AUTH']){
  header('Location: sign-in.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exam</title>
  <link rel="stylesheet" href="css/style.css?v=<?= rand(); ?>">
</head>
<body class="flex flex-column">
  <nav>
    <div class="container flex justify-between">
      <h3 class="brand">Exam</h3>
      <div class="links flex align-center">
        <ul>
          <li>
            <a href="sign-in.php">Sign In</a>
          </li>
          <li>
            <a href="sign-up.php">Sign Up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main class="container py-3 flex-1 flex align-center">
    <div class="card mx-auto p-3">
      <div class="text-center">
        <h4>Please Sign In</h4>
      </div>
      <form action="#" method="post">
        <div class="form-group">
          <input type="text" name="username" id="username" placeholder="username" />
        </div>
        <div class="form-group">
          <input type="password" name="password" id="password" placeholder="password" />
        </div>
        <div class="action-links">
          <a href="lost-password.php">forgot your password?</a>
          <button type="submit" class="btn btn-primary">Sign In</button>
        </div>
      </form>
    </div>
  </main>
  <footer>
    <div class="container flex justify-between">
      <span>Developed By. <a href="https://github.com/ocarrasco03">Oscar Carrasco</a></span>
      <small>v0.0.1</small>
    </div>
  </footer>
</body>
</html>
