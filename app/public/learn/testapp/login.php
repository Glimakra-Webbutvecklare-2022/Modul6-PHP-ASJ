<?php 
    require_once "../_includes/database-connection.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" id="username">

        <label for="password">Password: </label>
        <input type="password" name="password" id="password">
        
        <button type="submit">Login</button>
    </form>

    <?php 
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // get user data from form
        $form_username = $_POST['username'];
        $form_password = $_POST['password'];

        // send to database
        $sql_statement = "SELECT * FROM `$database`.`User` WHERE `username` = '$form_username'";

        try {
            $result = $pdo->query($sql_statement);
            
            $user = $result->fetch();
            
            // no user found with these credentials
            if (!$user) {
                header("location: login.php");
                exit();
            }

            $is_correct_password = password_verify($form_password, $user['password']);
            if (!$is_correct_password) {
                header("location: login.php");
                exit();
            }

            // if OK redirect to dashboard page
            header("location: dashboard.php");
        } catch (PDOException $err) {
            echo "There was a problem: " . $err->getMessage(); 
        }

     }

    ?>
</body>
</html>