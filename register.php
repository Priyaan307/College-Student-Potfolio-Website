<?php
include 'config.php';
session_start();

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $registrationNumber = mysqli_real_escape_string($conn, $_POST['registrationnumber']);
    $about=mysqli_real_escape_string($conn, $_POST['about']);
    
    $_10_sch_name=mysqli_real_escape_string($conn, $_POST['10_sch_name']);
    $_10_p_year=mysqli_real_escape_string($conn, $_POST['10_p_year']);
    $_10_board=mysqli_real_escape_string($conn, $_POST['10_board']);
    $_10_marks=mysqli_real_escape_string($conn, $_POST['10_marks']);

    $_12_cl_name=mysqli_real_escape_string($conn, $_POST['12_cl_name']);
    $_12_p_year=mysqli_real_escape_string($conn, $_POST['12_p_year']);
    $_12_board=mysqli_real_escape_string($conn, $_POST['12_board']);
    $_12_marks=mysqli_real_escape_string($conn, $_POST['12_marks']);
    $_12_stream=mysqli_real_escape_string($conn, $_POST['12_stream']);

    $btech_ad_year=mysqli_real_escape_string($conn, $_POST['btech_ad_year']);
    $btech_p_year=mysqli_real_escape_string($conn, $_POST['btech_p_year']);
    $btech_roll_no=mysqli_real_escape_string($conn, $_POST['btech_roll_no']);
    $btech_dept=mysqli_real_escape_string($conn, $_POST['btech_dept']);
    $btech_curr_cgpa=mysqli_real_escape_string($conn, $_POST['btech_curr_cgpa']);

    $con_num= mysqli_real_escape_string($conn, $_POST['con_num']);
    $per_address= mysqli_real_escape_string($conn, $_POST['per_address']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $pincode= mysqli_real_escape_string($conn, $_POST['pincode']);
    $lang_prof= mysqli_real_escape_string($conn, $_POST['lang_prof']);

    $linkedin=mysqli_real_escape_string($conn, $_POST['linkedin']);
    $twitter=mysqli_real_escape_string($conn, $_POST['twitter']);
    $github=mysqli_real_escape_string($conn, $_POST['github']);
    $leetcode=mysqli_real_escape_string($conn, $_POST['leetcode']);
    $hackerrank=mysqli_real_escape_string($conn, $_POST['hackerrank']);
    $instagram=mysqli_real_escape_string($conn, $_POST['instagram']);

    $ach_1= mysqli_real_escape_string($conn, $_POST['ach_1']);
    $ach_2= mysqli_real_escape_string($conn, $_POST['ach_2']);
    $ach_3= mysqli_real_escape_string($conn, $_POST['ach_3']);

    $photo = $_FILES['photo']['name'];
    $photoSize = $_FILES['photo']['size'];
    $photoTmpName = $_FILES['photo']['tmp_name'];
    $photoFolder = 'uploaded_photos/' . $photo;

    $select = mysqli_query($conn, "SELECT * FROM `user_form_4` WHERE registration_number = '$registrationNumber'") or die('Query failed');

    if (mysqli_num_rows($select) == 1) {
        $message = 'User with the same registration number already exists.';
    } else {
        if ($photoSize > 2000000) {
            $message = 'Image size is too large!';
        } else {
            $insert = mysqli_query($conn, "INSERT INTO `user_form_4` (name, registration_number, photo, about, 10_sch_name, 10_p_year, 10_board, 10_marks, 12_cl_name, 12_p_year, 12_board, 12_stream, 12_marks, btech_ad_year, btech_p_year, btech_roll_no, btech_dept, btech_curr_cgpa, con_num, per_address, email, pincode, lang_prof, linkedin, twitter, github, leetcode, hackerrank, instagram, ach_1, ach_2, ach_3)
            VALUES ('$name', '$registrationNumber', '$photo', '$about', '$_10_sch_name', '$_10_p_year', '$_10_board', '$_10_marks', '$_12_cl_name', '$_12_p_year', '$_12_board', '$_12_stream', '$_12_marks', '$btech_ad_year', '$btech_p_year', '$btech_roll_no', '$btech_dept', '$btech_curr_cgpa', '$con_num', '$per_address', '$email', '$pincode', '$lang_prof', '$linkedin', '$twitter', '$github', '$leetcode','$hackerrank', '$instagram', '$ach_1', '$ach_2', '$ach_3')") or die('Query failed');

            if ($insert) {
                move_uploaded_file($photoTmpName, $photoFolder);
                $message = 'Registered successfully!';
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
            } else {
                $message = 'Registration failed!';
            }
        }
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>User Information Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background-color: #f3f3f3;
            font-family: Arial, sans-serif;
        }

        .form-container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-section {
            display: none;
        }

        .form-section.active {
            display: block;
        }

        .form-section h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-section .form-group {
            margin-bottom: 20px;
        }

        .form-section .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-section .form-group input,
        .form-section .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-navigation {
            text-align: center;
            margin-top: 20px;
        }

        .form-navigation button {
            margin: 5px;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: #504BAF;
            color: #fff;
            cursor: pointer;
        }

        .form-navigation button.disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
    </style>
</head>

<body>
    <!-- Display error message if any -->
    <?php if (isset($message)) { ?>
        <p><?php echo $message; ?></p>
    <?php } ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        
    <div class="form-container">
    
        <div class="form-section active">
            <h2>Personal Information</h2>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="registrationnumber">Registration Number:</label>
                <input type="text" id="registrationnumber" name="registrationnumber" required>
            </div>

            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" id="photo" name="photo" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="about">About:</label>
                <textarea id="about" name="about" required></textarea>
            </div>

            <!-- Add more input fields for Personal Information -->
        </div>

        <div class="form-section">
            <h2>Education Details</h2>
            <div class="form-group">
                <label for="10_sch_name">10th School Name:</label>
                <input type="text" id="10_sch_name" name="10_sch_name" required>
            </div>

            <div class="form-group">
                <label for="10_p_year">Year of Passing (10th):</label>
                <input type="text" id="10_p_year" name="10_p_year" required>
            </div>

            <div class="form-group">
                <label for="10_board">Board (10th):</label>
                <input type="text" id="10_board" name="10_board" required>
            </div>

            <div class="form-group">
                <label for="10_marks">Marks (10th):</label>
                <input type="text" id="10_marks" name="10_marks" required>
            </div>

            <div class="form-group">
                <label for="12_cl_name">12th College Name:</label>
                <input type="text" id="12_cl_name" name="12_cl_name" required>
            </div>

            <div class="form-group">
                <label for="12_p_year">Year of Passing (12th):</label>
                <input type="text" id="12_p_year" name="12_p_year" required>
            </div>

            <div class="form-group">
                <label for="12_board">Board (12th):</label>
                <input type="text" id="12_board" name="12_board" required>
            </div>

            <div class="form-group">
                <label for="12_stream">Stream (12th):</label>
                <input type="text" id="12_stream" name="12_stream" required>
            </div>

            <div class="form-group">
                <label for="12_marks">Marks (12th):</label>
                <input type="text" id="12_marks" name="12_marks" required>
            </div>

            <!-- Add more input fields for Education Details -->
        </div>

        <div class="form-section">
            <h2>B.Tech Details</h2>
            <div class="form-group">
                <label for="btech_ad_year">Admission Year (B.Tech):</label>
                <input type="text" id="btech_ad_year" name="btech_ad_year" required>
            </div>

            <div class="form-group">
                <label for="btech_p_year">Passing Year (B.Tech):</label>
                <input type="text" id="btech_p_year" name="btech_p_year" required>
            </div>

            <div class="form-group">
                <label for="btech_roll_no">Roll Number (B.Tech):</label>
                <input type="text" id="btech_roll_no" name="btech_roll_no" required>
            </div>

            <div class="form-group">
                <label for="btech_dept">Department (B.Tech):</label>
                <input type="text" id="btech_dept" name="btech_dept" required>
            </div>

            <div class="form-group">
                <label for="btech_curr_cgpa">Current CGPA (B.Tech):</label>
                <input type="text" id="btech_curr_cgpa" name="btech_curr_cgpa" required>
            </div>

            <!-- Add more input fields for B.Tech Details -->
        </div>

        <div class="form-section">
            <h2>Contact Information and Social Media</h2>
            <div class="form-group">
                <label for="con_num">Contact Number:</label>
                <input type="text" id="con_num" name="con_num" required>
            </div>

            <div class="form-group">
                <label for="per_address">Permanent Address:</label>
                <textarea id="per_address" name="per_address" required></textarea>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="pincode">Pincode:</label>
                <input type="text" id="pincode" name="pincode" required>
            </div>

            <div class="form-group">
                <label for="lang_prof">Language Proficiency:</label>
                <input type="text" id="lang_prof" name="lang_prof" required>
            </div>

            <div class="form-group">
                <label for="linkedin">LinkedIn:</label>
                <input type="text" id="linkedin" name="linkedin" required>
            </div>

            <div class="form-group">
                <label for="twitter">Twitter:</label>
                <input type="text" id="twitter" name="twitter" required>
            </div>

            <div class="form-group">
                <label for="github">GitHub:</label>
                <input type="text" id="github" name="github" required>
            </div>

            <div class="form-group">
                <label for="leetcode">LeetCode:</label>
                <input type="text" id="leetcode" name="leetcode" required>
            </div>

            <div class="form-group">
                <label for="hackerrank">HackerRank:</label>
                <input type="text" id="hackerrank" name="hackerrank" required>
            </div>

            <div class="form-group">
                <label for="instagram">Instagram:</label>
                <input type="text" id="instagram" name="instagram" required>
            </div>

            <div class="form-group">
                <label for="ach_1">Achievement 1:</label>
                <input type="text" id="ach_1" name="ach_1" required>
            </div>

            <div class="form-group">
                <label for="ach_2">Achievement 2:</label>
                <input type="text" id="ach_2" name="ach_2" required>
            </div>

            <div class="form-group">
                <label for="ach_3">Achievement 3:</label>
                <input type="text" id="ach_3" name="ach_3" required>
            </div>

            <!-- Add more input fields for Contact Information and Social Media -->
        </div>
        <div class="form-navigation">
            <button type="button" class="previous">Previous</button>
            <button type="button" class="next">Next</button>
            <button type="submit" name="submit" class="submit">Submit</button>
        </div>
    </div>

    <script>
        const formSections = Array.from(document.querySelectorAll('.form-section'));
        const previousButton = document.querySelector('.previous');
        const nextButton = document.querySelector('.next');
        const submitButton = document.querySelector('.submit');
        let currentSection = 0;

        function showSection(sectionIndex) {
            formSections.forEach((section, index) => {
                if (index === sectionIndex) {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                }
            });
        }

        function handlePrevious() {
            if (currentSection > 0) {
                currentSection--;
                showSection(currentSection);
                updateButtonStates();
            }
        }

        function handleNext() {
            if (currentSection < formSections.length - 1) {
                currentSection++;
                showSection(currentSection);
                updateButtonStates();
            }
        }

        function handleFormSubmit() {
            // Retrieve form data and handle form submission
            // Add your code here
            //window.open('index.php');
        }

        function updateButtonStates() {
            previousButton.disabled = currentSection === 0;
            nextButton.disabled = currentSection === formSections.length - 1;
            submitButton.style.display = currentSection === formSections.length - 1 ? 'block' : 'none';
        }

        previousButton.addEventListener('click', handlePrevious);
        nextButton.addEventListener('click', handleNext);
        submitButton.addEventListener('click', handleFormSubmit);

        showSection(currentSection);
        updateButtonStates();
    </script>

</form>
</body>

</html>