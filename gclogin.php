<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="gclogin.css">
</head>
<body>

  <header>
    <img src="img/logo.png" class="logs">
    <div class="container">
        <h4>StudentGuard | Student At Risks</h4>
    </div>
  </header>
  
    <div class="login-container">
        <div class="logo"></div>
        <h2>Guidance Councelor</h2>
        <?php
          $errors = array();
            if($_POST)
            {
                require_once "database.php";
                $idnum=$_POST['idnum'];
                $password=$_POST['password'];

                $query="SELECT * From guidance where id_number='$idnum' and password='$password'";
                $result=mysqli_query($conn,$query);

                if(mysqli_num_rows($result)>0)
                {
                    header('location:gcdashboard.php');
                }
                if (empty($email) OR empty($password)) {
                  array_push($errors,"No Account Found");
                 }

                 if (count($errors)>0) {
                  foreach ($errors as  $error) {
                      echo "<div class='alert alert-danger'>$error</div>";
                  }
                 }
            }

          ?>
        <form class="login-form" action="gclogin.php" method="post">
            <input type="text" placeholder="Enter ID Number: " name="idnum" required>
            <input type="password" placeholder="Enter Password: " name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
