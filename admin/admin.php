<?php
    session_start();
    require("../connection.php");
    $user_data = checkLogin($conn);

    function checkLogin($conn){
        if(isset($_SESSION['user_id'])){
            $id  = $_SESSION['user_id'];
            $query = "select * from admin where user_id = '$id' limit 1";

            $result = mysqli_query($conn, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
        header("location: index.php");
        die;
    }
    $query = " SELECT `name`, `interest`, `peformance`, `profession`, `subject`, `counsel`, `email`FROM `response` ";
    $run = mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css" integrity="sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin| AlumniFee | Federal Polytechnic Ilaro</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="test-bg">
    <header>
        <div class="container">
            <img src="../img/header-logo.png" alt="ilaro logo" >
        </div>
    </header>
        <div class="container">
            <h1 class="text-center">students records</h1>
            <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>name</th>
                    <th>email</th>
                    <th>interest</th>
                    <th>peformance</th>
                    <th>profession</th>
                    <th>subject</th>
                    <th>counsel</th>
                </tr>
                <?php
                        if ($run) {
                            while ($row = mysqli_fetch_array($run)) {
                                $name = $row['name'];
                                $email = $row['email'];
                                $interest = $row['interest'];
                                $peformance = $row['peformance'];
                                $profession = $row['profession'];
                                $subject = $row['subject'];
                                $counsel = $row['counsel'];
                                echo "
                                <tr>
                                    <td>$name</td>
                                    <td>$email</td>
                                    <td>$interest</td>
                                    <td> $peformance </td>
                                    <td> $profession </td>
                                    <td> $subject </td>
                                    <td> $counsel </td>
                            </tr>";
                            }
                        }
                        else{
                            echo mysqli_error($conn);
                        }
                ?>
            </table>
            </div>
        </div>
    </div>
</body>
</html>