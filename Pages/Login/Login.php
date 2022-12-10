<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./Login.css">
    <link rel="stylesheet" href="../../Reusables/Sidebar/Sidebar.css">
</head>

<body>
    <?php
    include_once("../../Reusables/Sidebar/Sidebar.php");
    ?>
    <div class="main">
        <div class="heading">
            <h2>Login As</h2>
            <div class="LoginUI">

                <div class="list">
                    <div id="left">
                        <div class="image">
                            <img src="../../assets/images/teacher.png" alt="">
                            <a href="./Form/Form.php"><button class="button" role="button">Teacher</button></a>
                        </div>
                    </div>
                    <span>OR</span>
                    <div id="right">
                        <div class="image">
                            <a href="./Form/Form.php"> <button class="button" role="button">student/parent</button></a>
                            <!-- <li id="second">Student/Parents</li> -->
                            <img src="../../assets/images/images.png" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <h4>Or Scan With QR Code</h4>
    </div>


    </div>
</body>

</html>