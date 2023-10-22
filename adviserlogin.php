<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="adviserlogin.css">
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
        <h2>Adviser</h2>
        <?php
          $errors = array();
            if($_POST)
            {
                require_once "database.php";
                $idnum=$_POST['idnum'];
                $password=$_POST['password'];

                $query="SELECT * From adviser where id_number='$idnum' and password='$password'";
                $result=mysqli_query($conn,$query);

                if(mysqli_num_rows($result)>0)
                {
                    header('location:addashboard.php');
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
        <form class="login-form" action="adviserlogin.php" method="post">
            <input type="text" name="idnum" placeholder="Enter ID Number: " required>
            <input type="password" name="password" placeholder="Enter Password: " required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
