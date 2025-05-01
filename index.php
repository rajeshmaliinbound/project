<?php 
session_start();
if(isset($_SESSION["userid"])){ ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="image/logo.svg">
    <script src="script.js"></script>
    <title>Home / X</title>
    <style>
        body, html {
            height: 100%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow: hidden;
            background-color:rgb(255, 254, 254);
        }
    </style>
</head>
<body>
    <div class="pagecontainer">
    <?php
        // include file of left-sidebar 
        include 'layout/left-sidebar.php';
        ?>

        <div class="center-main" style="margin: 0 497px 0 280px;">
            <div class="center-header">
                <div id="for-you"><span id="for_active" class="foryou-following-active"> For you </span></div>

                <div id="Following"><span id="following"> Following </span></div>

                <div class="search-box">
                  <input type="text" placeholder="🔍︎ Search" id="search">
                </div>

            </div>

            <div class="center-content" style="padding-top: 56px;">
                <div class="post">
                    <div class="input-post">
                        <div class="profile-dp"><span>R</span></div>
                        <div class="happening-input">
                            <input type="text" class="post_input" name="input_post" value="" placeholder="Whats's happening?">
                        </div>
                    </div>
                    
                    <div class="everyone-reply">
                        <span><i class="fa-solid fa-earth-americas"></i><a href="#">Everyone can reply</a></span>
                    </div>

                    <div class="post-options">
                        <label for="image"><span class="image"><img src="image/gallery.png" width="20"></span></label>
                        <input type="file" name="image" id="image">
                        <span class="extra-input"><img src="image/gif.png" width="25"></span>
                        <span class="extra-input"><img src="image/grok.png" width="25"></span>
                        <span class="extra-input"><img src="image/polling.png" width="20"></span>
                        <span class="extra-input"><img src="image/emoji.png" width="20"></span>
                        <span class="extra-input"><img src="image/schedule.png" width="20"></span>
                        <span class="extra-input"><img src="image/location.png" width="20"></span>
                        <button>Post</button>
                    </div>
                </div>

                <div class="post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla eos voluptate inventore quod tenetur sit quia quibusdam. Nobis, dolorem libero, aut ea non commodi similique quaerat aperiam architecto culpa dignissimos?</div>
                <div class="post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla eos voluptate inventore quod tenetur sit quia quibusdam. Nobis, dolorem libero, aut ea non commodi similique quaerat aperiam architecto culpa dignissimos?</div>
                <div class="post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla eos voluptate inventore quod tenetur sit quia quibusdam. Nobis, dolorem libero, aut ea non commodi similique quaerat aperiam architecto culpa dignissimos?</div>
            </div>
        </div>

        <div class="rightbar">
            <div class="subscribe">
                <h3>Subscribe to Premium</h3>
                <p>Subscribe to unlock new features and if eligible, receive a share of revenue.</p>
                <button id="subscribe-btn">Subscribe</button>
            </div>
            <?php
                // include file of right-footer 
                include 'layout/footer.php';
            ?>
        </div>
    </div>
</body>
<script>
    $(document).ready(function () {
        $("#home").addClass("sidebar-activepage");
    });
</script>
</html>
<?php }else{
    header("location:signup.php");
}
?>