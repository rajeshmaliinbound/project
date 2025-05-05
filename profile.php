<?php 
session_start();
if(isset($_SESSION["userid"])){ ?>
<html lang="en">
<head>
    <?php
    // include file of head section items 
    include 'layout/header.php';
    ?>
    <title>Profile/ X</title>
</head>
<body>
    <div class="pagecontainer">
    <?php
        // include file of left-sidebar 
        include 'layout/left-sidebar.php';
        ?>

        <div class="center-main" style="margin: 0 497px 0 280px;">
            <div class="profile-center-header">
                <div class="profile-head"><span id="">Rajesh Kumar <br> <span class="profile-post-all-count">0 posts</span></span></div>

                <div class="search-box">
                  <input type="text" placeholder="🔍︎ Search" id="search">
                </div>
            </div>

            <div class="center-content" style="padding-top: 56px;">
                <div class="user-profile-show">
                    <div class="profile-cover-picture">
                        <img src="image/bg_cover.jpg" alt="No backgroung Cover" width="100%" height="100%">
                    </div>
                </div>
                <div class="post" id="profile-dp-show">
                    <!-- <img src="image/dp.jpg" id="profile-dp-show" alt=""> -->
                    <span>R</span>
                     <button id="edit-profile-btn">Edit profile</button>
                     <div class="user-profile-info">
                        <h3>Rajesh Kumar</h3>
                        <p>@RajesKuma7721</p>
                        <p><i class="fa-solid fa-calendar-days"></i> Joined April 2025</p>
                        <p><b>3</b> Following&nbsp&nbsp <b>1</b> Followers</p>
                     </div>
                </div>
                <div class="profile-links-btn">
                    <a href="" id="Posts" class="profile-links-active">Posts</a>
                    <a href="" id="Replies">Replies</a>
                    <a href="" id="Highlights">Highlights</a>
                    <a href="" id="Articles">Articles</a>
                    <a href="" id="Media">Media</a>
                    <a href="" id="Likes">Likes</a>
                </div>

                <!-- show post data -->
                <div class="post" style="padding: 0">
                    <div class="post-information">
                        <span>R</span>
                        <p><b style="color:black;">Rajesh Kumar </b> @RajeshKuma7721 33m</p>
                        <i class="fa-solid fa-ellipsis" class="post-delete"></i>
                    </div>

                    <div class="post-information">
                        <div>
                            <p class="post-discription">Rajesh mali new post Rajesh mali new post Rajesh mali new post Rajesh mali new post Rajesh mali new post Rajesh mali new post Rajesh mali new post Rajesh mali new post Rajesh mali new post Rajesh mali new post</p>
                        </div>
                    </div>

                    <div class="post-img">
                        <img src="image/united-states.png" alt="No post file" width="100%" height="600px">
                    </div>

                    <div class="post-reactions">
                        <a class="comment-post"><i class="fa-regular fa-comment"></i></a>
                        <a class="like-post"><i class="fa-regular fa-heart"></i></a>
                        <a><i class="fa-solid fa-repeat"></i></a>
                        <a><i class="fa-solid fa-chart-simple"></i></a>
                    </div>

                </div>
                <!-- End show post data -->

                <!-- show post data -->
                <div class="post" style="padding: 0">
                    <div class="post-information">
                        <span>R</span>
                        <p><b style="color:black;">Rajesh Kumar </b> @RajeshKuma7721 33m</p>
                        <i class="fa-solid fa-ellipsis" class="post-delete"></i>
                    </div>

                    <div class="post-information">
                        <div>
                            <p class="post-discription">Rajesh mali new post new post Rajesh mali new post Rajesh mali new post</p>
                        </div>
                    </div>

                    <div class="post-img">
                        <img src="image/profile.jpg" alt="No post file" width="100%" height="600px">
                    </div>

                    <div class="post-reactions">
                        <a class="comment-post"><i class="fa-regular fa-comment"></i></a>
                        <a class="like-post"><i class="fa-regular fa-heart"></i></a>
                        <a><i class="fa-solid fa-repeat"></i></a>
                        <a><i class="fa-solid fa-chart-simple"></i></a>
                    </div>
                </div>
                <!-- End show post data -->

                <!-- show post data -->
                <div class="post" style="padding: 0">
                    <div class="post-information">
                        <span>R</span>
                        <p><b style="color:black;">Rajesh Kumar </b> @RajeshKuma7721 33m</p>
                        <i class="fa-solid fa-ellipsis" class="post-delete"></i>
                    </div>

                    <div class="post-information">
                        <div>
                            <p class="post-discription">new post Rajesh mali new post Rajesh mali new post Rajesh mali new post Rajesh mali new post Rajesh mali new post Rajesh mali new post</p>
                        </div>
                    </div>

                    <div class="post-img">
                        <img src="image/dp.jpg" alt="No post file" width="100%" height="600px">
                    </div>

                    <div class="post-reactions">
                        <a class="comment-post"><i class="fa-regular fa-comment"></i></a>
                        <a class="like-post"><i class="fa-regular fa-heart"></i></a>
                        <a><i class="fa-solid fa-repeat"></i></a>
                        <a><i class="fa-solid fa-chart-simple"></i></a>
                    </div>
                </div>
                <!-- End show post data -->

                <!-- show post data -->
                <div class="post" style="padding: 0">
                    <div class="post-information">
                        <span>R</span>
                        <p><b style="color:black;">Rajesh Kumar </b> @RajeshKuma7721 33m</p>
                        <i class="fa-solid fa-ellipsis" class="post-delete"></i>
                    </div>

                    <div class="post-information">
                        <div>
                            <p class="post-discription">Rajesh mali new post Rajesh mali new post Rajesh mali new post Rajesh mali new post Rajesh mali new post Rajesh mali new post Rajesh mali new post Rajesh mali new post Rajesh mali new post Rajesh mali new post</p>
                        </div>
                    </div>

                    <div class="post-img">
                        <img src="image/like.jpg" alt="No post file" width="100%" height="600px">
                    </div>

                    <div class="post-reactions">
                        <a class="comment-post"><i class="fa-regular fa-comment"></i></a>
                        <a class="like-post"><i class="fa-regular fa-heart"></i></a>
                        <a><i class="fa-solid fa-repeat"></i></a>
                        <a><i class="fa-solid fa-chart-simple"></i></a>
                    </div>
                </div>
                <!-- End show post data -->

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
        $("#profile").addClass("sidebar-activepage");
    });
</script>
</html>
<?php }else{
    header("location:signup.php");
}
?>