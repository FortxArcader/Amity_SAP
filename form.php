<!-- Backend through php -->
<?php
    if(isset($_POST['name'])){

    $insert = false;
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "trip";

    $con = mysqli_connect($server ,$username ,$password ,$database);
    if(!$con){
        echo("Connection to this database failed due to". mysqli_connect_error());
    }    
        // echo("Connection to the database is successful");
        $name=$_POST['name'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $desc = $_POST['desc'];

            $sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

            if($con->query($sql) == true){
                $insert = true;
            }
            else{
                echo("ERROR: $sql <br> $con->error");
                $insert = false;
            }
        
            $con->close();
        }
            ?>
<!-- html testing -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submitted</title>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&family=Roboto&display=swap" rel="stylesheet">
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: "Roboto", sans-serif;
            background-color: #f7f7f7;
            background-image: url('your-college-background-image.jpg'); /* Add your background image here */
            background-size: cover;
            background-position: center;
        }

        /* Container for the Success Message */
        .success-container {
            max-width: 600px;
            padding: 30px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.7s ease-in-out;
            backdrop-filter: blur(8px);
        }

        /* Success Message Styling */
        .success-container h1 {
            font-family: "Sriracha", cursive;
            color: #391f5b;
            font-size: 36px;
            margin-bottom: 20px;
        }

        .success-container p {
            font-size: 18px;
            color: #3e3e3e;
            margin-bottom: 30px;
        }

        .success-icon {
            font-size: 60px;
            color: #4CAF50;
            margin-bottom: 20px;
            animation: bounce 1s ease;
        }

        /* Back Button */
        .back-btn {
            padding: 12px 24px;
            background-color: #391f5b;
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            border-radius: 25px;
            transition: background-color 0.3s ease;
            box-shadow: 0 8px 15px rgba(57, 31, 91, 0.3);
        }

        .back-btn:hover {
            background-color: #b384c9;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-15px);
            }
        }
        
        /* Media Query for Mobile Devices */
        @media (max-width: 768px) {
            .success-container {
                width: 90%;
                padding: 20px;
            }

            .success-container h1 {
                font-size: 28px;
            }

            .success-container p {
                font-size: 16px;
            }
        }

    </style>
</head>
<body>

    <div class="success-container">
        <div class="success-icon">✔️</div> <!-- Success checkmark icon -->
        <h1>Form Submitted Successfully!</h1>
        <p>Thank you for filling out the SAP registration form. Your submission has been received.</p>
        
        <!-- Optional Redirection Info -->
        <p>You will be redirected to the homepage shortly...</p>
        
        <!-- Back Button (optional if you don't want automatic redirection) -->
        <a class="back-btn" href="index.html">Go to Homepage</a>
    </div>

    <script>
        // Optional: Automatically redirect after 5 seconds
        setTimeout(function() {
            window.location.href = "index.html"; // Change to your homepage
        }, 5000);
    </script>

</body>
</html>
