<?php
    require('connection.php');

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $interest = $_POST['interest'];
        $peformance = $_POST['peformance'];
        $profession = $_POST['profession'];
        $subject = $_POST['subject'];
        $counsel = $_POST['counsel'];
        $email = $_POST['email'];
        
        $sql = "INSERT INTO `response`( `name`, `interest`, `peformance`, `profession`, `subject`, `counsel`, `email`) VALUES ('$name','$interest','$peformance','$profession','$subject','$counsel', '$email')";

        $run = mysqli_query($conn, $sql);
        if ($run) {
           echo "
           <script>
                alert('Thank you ... Response Submitted');
           </script>";
        }else{
            echo mysqli_error($conn);
        }
    }

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Career Guaidance Portal | Federal Poly Ilaro</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/contact.css">

</head>
<body>
    <header>
        <div class="container">
            <img src="./img/header-logo.png" alt="ilaro logo" >
        </div>
    </header>
    
    <section id="form">
        <form method="post">
            <h3 style="color: white;">Counselling Form</h3>
            <input type="text" name="name" id="name" placeholder="name" required>
            <input type="email" name="email" id="email" placeholder="Your Email" required>
            <input type="text" name="interest" id="interest" placeholder="Area of interest" required>
            <input type="text" name="peformance" id="peformance" placeholder="Area of better peformance" required>
            <input type="text" name="profession" id="profession" placeholder="Desired profession" required>
            <input type="text" name="subject" id="subject" placeholder="Best Subject" required>
            <textarea name="counsel" id="counsel" cols="30" rows="10" placeholder="How can we help you?"></textarea>
            <input type="submit" value="submit" name="submit">
        </form>
    </section>
</body>
</html>