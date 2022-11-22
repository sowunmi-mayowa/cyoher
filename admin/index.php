<?php
session_start();
    require("../connection.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $username = $_POST['username'];
       $password = $_POST['password'];
    }

       if (!empty($username) && !empty($password) && !is_numeric($username)) {
        
           $query = "select * from admin where username = '$username' limit 1";

           $result = mysqli_query($conn, $query);
           if ($result && mysqli_num_rows($result) > 0) {
               $user_data = mysqli_fetch_assoc($result);
               if ($user_data['password'] == $password) {
                   $_SESSION['user_id'] = $user_data['user_id'];
                   header("location: admin.php");
                   die;
               }
           }
           header("Location: index.php");
           die;
           echo "wrong username or password";
       }
       else{
           echo "wrong username or password";   
       }
       
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body{
            background: url('../img/admin.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }
        form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: white;
            padding: 145px 50px;
            border-radius: 30px;
            height: 200px;
        }
        label{
            text-align: left;
            font-size: 20px;
        }
        input{
            padding: 10px;
            margin-bottom: 10px;
        }
        #button{
            padding: 10px 15px;
            margin-top: 10px;
            background: green;
            border: none;
            color: white;
            border-radius: 10px;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
   <div>

        <div class="container">
            <form method="POST">
                <h3 style="margin: 10px 0px;text-transform:uppercase;">Login Here</h3>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
                <input type="submit" value="Login" id="button">
                <a href="register.php">register</a>
            </form>
        </div>
   </div>
</body>
</html>