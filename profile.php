<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="main-content">
    <header class="container header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
<?php
session_start();

$result = $_SESSION['result'];

if ($result != null) {
    // User found
    $name = $result['name'];
    $photo = $result['photo'];
    $about=$result['about'];
    
    $_10_sch_name=$result['10_sch_name'];
    $_10_p_year=$result['10_p_year'];
    $_10_board=$result['10_board'];
    $_10_marks=$result['10_marks'];

    $_12_cl_name=$result['12_cl_name'];
    $_12_p_year=$result['12_p_year'];
    $_12_board=$result['12_board'];
    $_12_marks=$result['12_marks'];
    $_12_stream=$result['12_stream'];

    $btech_ad_year=$result['btech_ad_year'];
    $btech_p_year=$result['btech_p_year'];
    $btech_roll_no=$result['btech_roll_no'];
    $btech_dept=$result['btech_dept'];
    $btech_curr_cgpa=$result['btech_curr_cgpa'];

    $con_num= $result['con_num'];
    $per_address= $result['per_address'];
    $email= $result['email'];
    $pincode= $result['pincode'];
    $lang_prof= $result['lang_prof'];

    $linkedin=$result['linkedin'];
    $twitter=$result['twitter'];
    $github=$result['github'];
    $leetcode=$result['leetcode'];
    $hackerrank=$result['hackerrank'];
    $instagram=$result['instagram'];

    $ach_1= $result['ach_1'];
    $ach_2= $result['ach_2'];
    $ach_3= $result['ach_3'];

    $registration_number=$result['registration_number'];
    echo "<img src='uploaded_photos/$photo' alt='User Photo'>";
} else {
    // User not found
    echo "No user found with the provided registration number.";
}

// Clear the session variable
$_SESSION['result'] = null;
?>

                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    Hi, I'm <span><?php echo $name; ?></span>
                    .
                </h1>
                <p>
                <?php echo $about; ?></p>
                <div class="btn-con">
                    <a href="" class="main-btn">
                        <span class="btn-text">Download CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="container about" id="about">
            <div class="main-title">
                <h2>About <span>me</span><span class="bg-text">my stats</span></h2>
            </div>
            <div class="about-container">
                <div class="left-about">
                    <h4>Information About me</h4>
                    <p>
                    <?php echo $about; ?>
                    </p>
                    <div class="btn-con">
                        <a href="#" class="main-btn">
                            <span class="btn-text">Download CV</span>
                            <span class="btn-icon"><i class="fas fa-download"></i></span>
                        </a>
                    </div>
                </div>
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text"> <?php echo $ach_1; ?></p>
                            <p class="small-text"></p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text"><?php echo $ach_2; ?></p>
                            <p class="small-text"></p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text"><?php echo $ach_3; ?></p>
                            <p class="small-text"></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="about-stats">
                <h4 class="stat-title">My Skills</h4>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title">html5</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="html"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">css3</p>
                        <div class="progress-con">
                            <p class="prog-text">95%</p>
                            <div class="progress">
                                <span class="css"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">javascript</p>
                        <div class="progress-con">
                            <p class="prog-text">75%</p>
                            <div class="progress">
                                <span class="js"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">ReactJS</p>
                        <div class="progress-con">
                            <p class="prog-text">75%</p>
                            <div class="progress">
                                <span class="react"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">NodeJS</p>
                        <div class="progress-con">
                            <p class="prog-text">87%</p>
                            <div class="progress">
                                <span class="node"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Python</p>
                        <div class="progress-con">
                            <p class="prog-text">70%</p>
                            <div class="progress">
                                <span class="python"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="stat-title">My Timeline</h4>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">passing year<span> - <?php echo $_10_p_year; ?></span></p>
                    <h5>MAtriculation <span> - <?php echo $_10_sch_name; ?></span></h5>
                    <p class="tl-duration">Board<span> - <?php echo $_10_board; ?></span></p>
                    <br>
                    <p class="tl-duration">Marks Obtained<span> - <?php echo $_10_marks; ?></span></p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">passing year<span> -  <?php echo $_12_p_year; ?></span></p>
                    <h5>INTERMEDIATE <span> -  <?php echo $_12_cl_name; ?></span></h5>
                    <p class="tl-duration">Board<span> -  <?php echo $_12_board; ?></span></p>
                    <br>
                    <p class="tl-duration">Stream<span> -  <?php echo $_12_stream; ?></span></p>
                    <br>
                    <p class="tl-duration">Marks Obtained<span> -  <?php echo $_12_marks; ?></span></p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration"><?php echo $btech_ad_year; ?> - <?php echo $btech_p_year; ?></p>
                    <h5> Bihar Engineering University (BEU), <span> -Patna</span></h5>
                    <p class="tl-duration">College Name <span> - Rashtrakavi Ramdhari Singh Dinkar College of Engineering</span></p>
                    <br>
                    <p class="tl-duration">Reg. No.<span> - <?php echo $registration_number; ?> </span></p>
                    <br>
                    <p class="tl-duration">Roll. No.<span> - <?php echo $btech_roll_no; ?> </span></p>
                    <br>
                    <p class="tl-duration">Department <span> - <?php echo $btech_dept; ?> </span></p>
                    <br>
                    <p class="tl-duration">Current Cgpa <span> - <?php echo $btech_curr_cgpa; ?> </span></p>  
                </div>
            </div>
        </section>
        
        <section class="container contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Contact <span>Me</span><span class="bg-text">Contact</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                        <h4>Contact me here</h4>
                        
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Permanent Address :</span>
                                </div>
                                <p>
                                     <?php echo $per_address; ?>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Pincode :</span>
                                </div>
                                <p>
                                     <?php echo $pincode; ?>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                    <span>Email :</span>
                                </div>
                                <p>
                                    <span><?php echo $email; ?></span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Education :</span>
                                </div>
                                <p>
                                    <span>Bihar Engineering University, Patna</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Mobile Number :</span>
                                </div>
                                <p>
                                    <span> <?php echo $con_num; ?></span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-globe-africa"></i>
                                    <span>Languages :</span>
                                </div>
                                <p>
                                    <span> <?php echo $lang_prof; ?></span>
                                </p>
                            </div>
                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                            <a href="<?php echo $linkedin; ?>" target='_blank'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16"><path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                </svg>
                                </a>
                                <a href="<?php echo $twitter; ?>" target='_blank'>
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="<?php echo $github; ?>" target='_blank'>
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="<?php echo $leetcode; ?>" target='_blank'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"> <path d="M21.469 23.907l-3.595 3.473c-0.624 0.625-1.484 0.885-2.432 0.885s-1.807-0.26-2.432-0.885l-5.776-5.812c-0.62-0.625-0.937-1.537-0.937-2.485 0-0.952 0.317-1.812 0.937-2.432l5.76-5.844c0.62-0.619 1.5-0.859 2.448-0.859s1.808 0.26 2.432 0.885l3.595 3.473c0.687 0.688 1.823 0.663 2.536-0.052 0.708-0.713 0.735-1.848 0.047-2.536l-3.473-3.511c-0.901-0.891-2.032-1.505-3.261-1.787l3.287-3.333c0.688-0.687 0.667-1.823-0.047-2.536s-1.849-0.735-2.536-0.052l-13.469 13.469c-1.307 1.312-1.989 3.113-1.989 5.113 0 1.996 0.683 3.86 1.989 5.168l5.797 5.812c1.307 1.307 3.115 1.937 5.115 1.937 1.995 0 3.801-0.683 5.109-1.989l3.479-3.521c0.688-0.683 0.661-1.817-0.052-2.531s-1.849-0.74-2.531-0.052zM27.749 17.349h-13.531c-0.932 0-1.692 0.801-1.692 1.791 0 0.991 0.76 1.797 1.692 1.797h13.531c0.933 0 1.693-0.807 1.693-1.797 0-0.989-0.76-1.791-1.693-1.791z"/> </svg>
                                </a>
                                <a href="<?php echo $hackerrank; ?>" target='_blank'>
                                    <i class="fab fa-hackerrank"></i>
                                </a>
                                <a href="<?php echo $instagram; ?>" target='_blank'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                </svg>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="controls">
        <div class="control active-btn" data-id="home" >
            <i class="fas fa-home"></i>
        </div>
        <div class="control" data-id="about">
            <i class="fas fa-user"></i>
        </div>
        
        <div class="control" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>
    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
    <script src="app.js"></script>
</body>
</html>