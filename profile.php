<?php
    $name=$_POST["CustomerName"];
    $email=$_POST["email"];
    $gender=$_POST["gender"];
    $picture=$_POST["profile"];
    $friends=$_POST["friends"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <title>Document</title>
</head>
<body>
    <!-- <div>
        <h3><?php echo $name?></h3>
        <h3><?php echo $gender?></h3>
        <h3><?php echo $email?></h3>
        <h3><?php echo $friends?></h3>
        <img src="<?php echo $picture?>" alt=""><h3><?php echo $picture?></h3>

    </div> -->
    <div>
        <div class="layer1">
        
        </div>
        <div class="layer2">
            <center>
        <img src="<?php echo $picture?>" alt="" height="100px" style="margin-top:-50px;border-radius:50%">
        <div class="header">
            <h1><?php echo $name?></h1>
            <h3><?php echo "Email : ". $email?></h3>
            <div class="sub-heading">
                <div class="content">
                <h3><?php echo $gender?></h3>
                <h2><?php echo "Gender"?></h2>
                </div>

                <div class="content">
                <h3><?php echo $friends?></h3>
                <h2><?php echo "Friends"?></h2>
                </div>
            </div>

        </div>
    </center>
        

        </div>
    
    </div>
</body>
</html>