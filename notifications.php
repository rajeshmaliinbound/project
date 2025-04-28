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
    <title>home / X</title>
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
        <div class="sidebar">
            <div class="index-logo">
               <img src="image\logo.svg" alt="No logo">
            </div>
            <div class="page-links">
                <a href=""><i class="fa-solid fa-house"></i> Home</a>
                <a href=""><i class="fa-solid fa-magnifying-glass"></i> Explore</a>
                <a href="" class="sidebar-activepage"><i class="fa-regular fa-bell"></i> Notifications</a>
                <a href=""><i class="fa-regular fa-envelope"></i> Messages</a>
                <a href=""><i class="fa-solid fa-compass-drafting"></i> Grok</a>
                <a href=""><i class="fa-solid fa-people-group"></i> Communities</a>
                <a href=""><i class="fa-regular fa-user"></i> Profile</a>
                <a href=""><i class="fa-solid fa-ellipsis"></i> More</a>
                <button class="post-btn">Post</button>
            </div>
            <div class="user-profile">
                <div class="avatar">R</div>
                <div>
                    <div style="color:black; font-size: 18px;"><strong>Rajesh Kumar</strong></div>
                    <div style="color: rgb(95, 94, 94);; font-size: 15px;">@RajeshKuma7721</div>
                </div>
                <span style=""><a><i class="fa-solid fa-ellipsis"></i></a></span>
            </div>

            <div class="logout-section">
                <button>Add an existing account</button>
                <button>Log out @Rajeshmali28276</button>
            </div>
        </div>

        <div class="center-main">
            <div class="center-header">
                <div id="Notifications">Notifications</div>
                <div class="search-box">
                  <input type="text" placeholder="🔍︎ Search" id="search">
                </div>
            </div>

            <div class="center-content"></div>
        </div>

        <div class="rightbar">                
            <div class="subscribe">
                <h3>Subscribe to Premium</h3>
                <p>Subscribe to unlock new features and if eligible, receive a share of revenue.</p>
                <button id="subscribe-btn">Subscribe</button>
            </div>
            <div class="trending-section">
                <h3>What's happening</h3>
                <img src="image\live-img.jpg" class="heppening-img">
                <div style="display: inline; margin-right:;">
                    <span class="img-p">From the Desk of Anthony Pompliano</span>
                </div>
                <span style="font-size: 16px;">LIVE</span>

                <div style="padding-bottom: 10px;">
                    <p>Entertainment · Trending</p>
                    <p style="font-size: 18px; color: black; font-weight: bold;">#HBDSamantha</p>
                    <p>6,019 posts</p>
                </div>
                <div style="padding-bottom: 10px;">
                    <p>Trending in India</p>
                    <p style="font-size: 18px; color: black; font-weight: bold;">#VijayDeverakonda</p>
                    <p>30.1K posts</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>