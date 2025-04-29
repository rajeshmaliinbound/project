<?php 
session_start();
if(isset($_SESSION["userid"])){ ?>
<html lang="en">
<head>
    <?php
    // include file of head section items 
    include 'layout/header.php';
    ?>
    <title>Notifications / X</title>
</head>
<body>
    <div class="pagecontainer">
        <?php
        // include file of left-sidebar 
        include 'layout/left-sidebar.php';
        ?>

        <div class="center-main">
        <?php
            // include file of notification center part
            include 'layout/notification_center.php';
            ?>

            <div class="center-content">
                <div class="notifications-btn">
                    <a href="notifications.php">All</a>
                    <a href="verified.php" class="ntf-active" style="color: black;">Verified</a>
                    <a href="mentions.php">Mentions</a>
                </div>
            </div>
        </div>
        
        <?php
            // include file of notification center part
            include 'layout/notification_footer_right.php';
        ?>
    </div>
</body>
</html>
<?php 
}else{
    header("location:signup.php");
}
?>