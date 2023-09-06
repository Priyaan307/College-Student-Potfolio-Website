<?php
include 'config.php';
session_start();

if (isset($_POST['search'])) {
    $registrationNumber = mysqli_real_escape_string($conn, $_POST['search']);

    $select = mysqli_query($conn, "SELECT * FROM `user_form_4` WHERE registration_number = '$registrationNumber'") or die('Query failed');

    if (mysqli_num_rows($select) == 1) {
        $row = mysqli_fetch_assoc($select);
        $_SESSION['result'] = $row; // Store the result in session variable
        header('Location: profile.php'); // Redirect to the result page
        exit();
    } else {
        $_SESSION['result'] = null; // Set result to null in session variable
        header('Location: profile.php'); // Redirect to the result page
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            text-align: center;
        }

        .example input[type="text"] {
            padding: 10px;
            font-size: 16px;
        }

        .example button[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .register-link {
            margin-top: 20px;
            text-decoration: none;
            color: #4CAF50;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form class="example" action="" method="post">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit" name="submit">Search</button>
        </form>
        <a href="register.php" class="register-link">New user? Register here</a>
    </div>
</body>
</html>
