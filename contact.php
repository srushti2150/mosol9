<?php
include("connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $uname = $_POST['uname'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $feedback = $_POST['feedback'];
  
    $query = "INSERT INTO contact(uname,phone,email,feedback) 
        VALUES('$uname','$phone','$email','$feedback')";

    $result = mysqli_query($conn, $query);
    if ($result) {
      echo "<script>alert('Feedback Inserted !');location.href='feedback.php';</script>";
    } else {
      echo "<script>alert('Feedback Not Inserted !');location.href='contact.php';</script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>
    <style>
    
    .back-button {
     text-decoration: none;
     color: #000; 
     font-size: 16px;
     padding: 10px;
     background-color: orange;
 }
 
 .back-button:hover {
     text-decoration:none;
     background-color: darkorange;
 }
 
     </style>

    <!--Stylesheet-->
    <link rel="stylesheet" href="contact.css">
</head>
<body class="main">
   

    <!-- Registration form -->
    <div class="registration-container">
        <div class="registration-header">
        <a onclick="history.back()" class="back-button">&#9664; Back</a><br><br>
            <h1>Give your feedback and contact with us</h1>
           
            <span class="divider"></span>
        </div>
        <div class="registration-body">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="registration-box">
                    <div class="input-box">
                        <label for="uname">Name</label>
                        <input type="text" class="input-field" placeholder="What is your name" name="uname" id="uname" required>
                    </div>
                    <div class="input-box">
                        <label for="phone">Phone</label>
                        <input type="text" class="input-field" placeholder="Enter phone" name="phone" id="phone" required>
                    </div>
                    <div class="input-box">
                        <label for="email">Email</label>
                        <input type="email" class="input-field" placeholder="Enter email" name="email" id="email" required>
                    </div>
                    <div class="input-box">
                        <label for="feedback">Feedback</label>
                        <input type="text" class="input-field" placeholder="Enter feedback" name="feedback" id="feedback" required>
                    </div>
                </div>
                <button type="submit" class="btn-register">Submit</button>
            </form>
        </div>
    </div><br><br>
    <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.3624479382584!2d78.39573937331929!3d17.442358001222818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91466d68add3%3A0xb2f936d8e1ed20d!2sMosol9%20%7C%20Digital%20Marketing%20Company!5e0!3m2!1sen!2sin!4v1710224066988!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>
</div>


    
</body>
</html>
