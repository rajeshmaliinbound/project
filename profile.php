<?php 
session_start();
if(isset($_SESSION["userid"])){ ?>
<html lang="en">
<head>
    <?php
    // fetch login userData
     include 'login_user_data.php';

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
                <div class="profile-head"><span id=""><?php echo $userDAta['name']?> <br> <span class="profile-post-all-count">0 posts</span></span></div>

                <div class="search-box" style="margin-left: 670px;">
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
                    <span><?php echo $_SESSION['firstchr']?></span>
                     <button id="edit-profile-btn">Edit profile</button>
                     <div class="user-profile-info">
                        <h3><?php echo $userDAta['name']?></h3>
                        <p>@<?php echo $userDAta['username'];?></p>
                        <p><i class="fa-solid fa-calendar-days"></i> <?php echo $userDAta['join_date']?></p>
                        <p><b>3</b> Following&nbsp&nbsp <b>1</b> Followers</p>
                     </div>
                </div>
                <div class="profile-links-btn">
                    <a id="Posts" class="profile-links-active">Posts</a>
                    <a id="Replies">Replies</a>
                    <a id="Highlights">Highlights</a>
                    <a id="Articles">Articles</a>
                    <a id="Media">Media</a>
                    <a id="Likes">Likes</a>
                </div>

                <!-- show post data -->
                <div class="post" id="showPostData" style="padding: 0"></div>
                <!-- End show post data -->
            </div>
        </div>

        <div class="rightbar">
            <div class="might-like">
                <h3>You might like</h3>
                <!-- you might like show 3 user using limit -->
                <div class="users-might">
                    <!-- <div><img src="image/dp.jpg" width="50"></div> -->
                    <div class="profile-avatar"><span>R</span></div>
                    <div style="margin-left: 10px;">
                        <div style="color:black; font-size: 18px;"><strong>Ravi Mali</strong></div>
                        <div style="color: rgb(95, 94, 94);; font-size: 15px;">@Ravikumar8979</div>
                    </div>
                    <div class="might-follow-users">
                        <a href="">Follow</a>
                    </div>
                </div>            
            </div>

            <?php
                // include file of right-footer 
                include 'layout/footer.php';
            ?>
        </div>
    </div>


    <div id="edit-profile-modal" class="edit-modal-overlay">
        <div class="edit-profile-modal-content">
            <div class="edit-header">
                <h2>Edit profile</h2>
                <button class="close-edit-form">Close</button>
            </div>

            <!-- <div class="banner" onclick="document.getElementById('banner-upload').click();">
                <span class="icon">+</span>
                <input type="file" id="banner-upload">
            </div> -->
            
            <div class="banner" onclick="document.getElementById('banner-upload').click();">
                <img src="image/bg_cover.jpg" class="icon" alt="" width="100%">
                <i class="icon" style="color: black;">+</i>
                <input type="file" id="banner-upload">
            </div>

            <!-- <div class="profile-pic" onclick="document.getElementById('profile-upload').click();">
                <span class="icon">R</span>
                <i class="icon" style="color: black;">+</i>
                <input type="file" id="profile-upload">
            </div> -->

            <div class="profile-pic" onclick="document.getElementById('profile-upload').click();">
                <img src="image/dp.jpg" class="icon" alt="" width="80">
                <i class="icon" style="color: black;">+</i>
                <input type="file" id="profile-upload">
            </div>

            <div class="form-group">
                <label>Name</label>
                <input type="text" value="">
            </div>

            <div class="form-group">
                <label>Bio</label>
                <textarea id="bio" maxlength="160" rows="3" oninput="updateCharCount()"></textarea>
                <div class="char-count" id="charCount">0 / 160</div>
            </div>
            <div style="text-align: center;">
               <button class="edit-save-btn">Save</button>
            </div>

            <!-- <div class="form-group">
                <label>Location</label>
                <input type="text">
            </div>

            <div class="form-group">
                <label>Website</label>
                <input type="text">
            </div> -->
        </div>
    </div>
</body>
<script>
    $(document).ready(function () {
        $("#profile").addClass("sidebar-activepage");

        // start profile page fetch Data using ajax
        var profilepageVal = "Posts"
        profilepageData(profilepageVal);

        function profilepageData(getId) {
            $("#Posts").removeClass("profile-links-active");
            $("#Replies").removeClass("profile-links-active");
            $("#Highlights").removeClass("profile-links-active");
            $("#Articles").removeClass("profile-links-active");
            $("#Media").removeClass("profile-links-active");
            $("#Likes").removeClass("profile-links-active");
            if(!getId== ''){
                $("#"+getId).addClass("profile-links-active");

                $.ajax({
                    url: "controller.php",
                    type: 'post',
                    data: {
                        "Profilepage": getId
                    },
                    success : function(response){
                        $("#showPostData").html(response);
                    }
                });
            }
        }

        $("#Posts").click(function(){
            var PostsID = $(this).attr("id");
            profilepageData(PostsID);
        });

        $("#Replies").click(function(){
            var RepliesID = $(this).attr("id");
            profilepageData(RepliesID);
        });

        $("#Highlights").click(function(){
            var HighlightsID = $(this).attr("id");
            profilepageData(HighlightsID);
        });

        $("#Articles").click(function(){
            var ArticlesID = $(this).attr("id");
            profilepageData(ArticlesID);
        });

        $("#Media").click(function(){
            var MediaID = $(this).attr("id");
            profilepageData(MediaID);
        });

        $("#Likes").click(function(){
            var LikesID = $(this).attr("id");
            profilepageData(LikesID);
        });
    });
</script>
</html>
<?php }else{
    header("location:signup.php");
}
?>