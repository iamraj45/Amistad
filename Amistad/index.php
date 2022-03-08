<?php 

session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amistad - Make friends online</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3ef5793f40.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
    <nav>
        <div class="left-navbar">
            <a href="index.php"><img src="images/logo.png" class="logo"></a>
            <ul>
                <li><img src="images/inbox.png"></li>
                <li><img src="images/video.png"></li>
                <li><img src="images/notification.png"></li>
            </ul>
        </div>
        <div class="right-navbar">
            <div class="search">
                <img src="images/search.png">
                <input type="text" placeholder="busqueda!">
            </div>
            <div class="profile-pic online" onclick="settingsMenuToggle()">
                <img src="images/profile-pic.png">
            </div>
        </div>

        <!-------settings-menu-------->

        <div class="settings-menu">
            <div id="dark-btn">
                <span></span>
            </div>
            <div class="settings-menu-inner">
                <div class="user-profile">
                    <img src="images/profile-pic.png">
                    <div>
                        <p>Abhishek Raj</p>
                        <a href="profile.php?action=view">
                        See your profile</a>
                    </div>
                </div>
                <hr>
                <div class="user-profile">
                    <img src="images/feedback.png">
                    <div>
                        <p>Give feedback</p>
                        <a href="#">Help us to improve.</a>
                    </div>
                </div>
                <hr>
                <div class="settings-links">
                    <img src="images/setting.png" class="settings-icon">
                    <a href="#">Settings & Privacy <img src="images/arrow.png" width="10px"></a>
                </div>
                <div class="settings-links">
                    <img src="images/help.png" class="settings-icon">
                    <a href="#">Help & Support <img src="images/arrow.png" width="10px"></a>
                </div>
                <div class="settings-links">
                    <img src="images/display.png" class="settings-icon">
                    <a href="#">Display & Accessibility <img src="images/arrow.png" width="10px"></a>
                </div>
                <div class="settings-links">
                    <img src="images/logout.png" class="settings-icon">
                    <a href="logout.php">Logout <img src="images/arrow.png" width="10px"></a>
                </div>

            </div>
        </div>

    </nav>

    <div class="container">

        <!-------left-sidebar-------->
        <div class="left-sidebar">
            <div class="links">
                <a href="#"><img src="images/news.png">Latest News</a>
                <a href="#"><img src="images/friends.png">Friends</a>
                <a href="#"><img src="images/group.png">Groups</a>
                <a href="#"><img src="images/marketplace.png">Matketplace</a>
                <a href="#"><img src="images/watch.png">Watch</a>
                <a href="#">More options</a>
            </div>
            <div class="shortcut">
                <p>Your Shortcuts</p> 
            </div>
        </div>

        <!-------news-feed-------->
        <div class="news-feed">
            <div class="story-gallery">
                <div class="story story0">
                    <img src="images/upload.png">
                    <p>Post Story</p>
                </div>
            </div>

            <div class="write-post-container">
                <div class="user-profile">
                    <img src="images/profile-pic.png">
                    <div class="select">
                        <p>Abhishek Raj</p>
                        <select name="mode" class="small">
                            <option value="volvo">Public</option>
                            <option value="saab">Friends</option>
                            <option value="opel">Private</option>
                        </select>
                    </div>
                </div>
                <div class="post-input-container">
                    <textarea placeholder="What's on your mind?" rows="3"></textarea>
                    <div class="add-post-links">
                        <a href="#"><img src="images/live-video.png">Live Video</a>
                        <a href="#"><img src="images/photo.png">Photo/Video</a>
                        <a href="#"><img src="images/feeling.png">Feeling/Activity</a>
                    </div>
                </div>
            </div>
            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="images/profile-pic.png">
                        <div class="select">
                            <p>Abhishek Raj</p>
                            <span>July 30, 2021, 20:37 pm</span>
                            </select>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                </div>
                
                <p class="post-text">Hello guys! Welcome to <span>Amistad</span>. Hope you guys like it.<br>
                <a href="#">#Amistad</a>&nbsp;<a href="#">#Make_friends</a></p>
                <img src="images/feed-image-1.png" class="post-img">

                <div class="post-row">
                    <div class="activity-icons">
                        <div><i class="fas fa-thumbs-up"></i>1</div>
                        <div><i class="far fa-comment-alt"></i></div>
                        <div><i class="far fa-share-square"></i></div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="images/profile-pic.png">
                    </div>
                </div>
            </div>

            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="images/profile-pic.png">
                        <div class="select">
                            <p>Abhishek Raj</p>
                            <span>July 30, 2021, 20:37 pm</span>
                            </select>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                </div>
            
                <p class="post-text">Here are some more posts</p>
                <img src="images/feed-image-2.png" class="post-img">
            
                <div class="post-row">
                    <div class="activity-icons">
                        <div><i class="fas fa-thumbs-up"></i>1</div>
                        <div><i class="far fa-comment-alt"></i></div>
                        <div><i class="far fa-share-square"></i></div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="images/profile-pic.png">
                    </div>
                </div>
            </div>
            
            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="images/profile-pic.png">
                        <div class="select">
                            <p>Abhishek Raj</p>
                            <span>July 30, 2021, 20:37 pm</span>
                            </select>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                </div>
            
                <p class="post-text">Please like this post</p>
                <img src="images/feed-image-3.png" class="post-img">
            
                <div class="post-row">
                    <div class="activity-icons">
                        <div><i class="fas fa-thumbs-up"></i>1</div>
                        <div><i class="far fa-comment-alt"></i></div>
                        <div><i class="far fa-share-square"></i></div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="images/profile-pic.png">
                    </div>
                </div>
            </div>
            <div class="load">
                <a href="#">Load more <i class="fas fa-chevron-circle-down"></i></a>
            </div>

        </div>

        <!-------right-sidebar-------->
        <div class="right-sidebar">

            <div class="sidebar-title">
                <h4>Events</h4>
                <a href="#">See All</a>
            </div>

            <div class="event">
                <div class="left-event">
                    <h3>6</h3>
                    <span>August</span>
                </div>
                <div class="right-event">
                    <h4><i class="fas fa-university"></i> Exams</h4>
                    <p>AKTU University Exams</p>
                    <a href="#">More info</a>
                </div>
            </div>

            <div class="event">
                <div class="left-event">
                    <h3>17</h3>
                    <span>November</span>
                </div>
                <div class="right-event">
                    <h4><i class="fas fa-birthday-cake"></i> Birthday</h4>
                    <p>Aditya is going to be 21</p>
                    <a href="#">More info</a>
                </div>
            </div>

            <div class="sidebar-title">
                <h4>Online Friends</h4>
                <p id="hide" onclick="convoHide()">Hide</p>
            </div>
            <div id="online-js">
                <div class="online-friends">
                    <div class="online">
                        <img src="images/member-1.jpg">
                    </div>
                    <p>Ritik Roushan</p>
                </div>
                <div class="online-friends">
                    <div class="online">
                        <img src="images/member-2.jpg">
                    </div>
                    <p>Saurabh Jha</p>
                </div>
                <div class="online-friends">
                    <div class="online">
                        <img src="images/member-3.jpg">
                    </div>
                    <p>Rahul Kumar</p>
                </div>
                <div class="online-friends">
                    <div class="online">
                        <img src="images/member-4.jpg">
                    </div>
                    <p>Aditya Mishra</p>
                </div>
            </div>
            
        </div>
    </div>

<div class="footer">
    <p>Copyright 2021 - Amistad</p>
</div>

<script src="script.js"></script>

</body>
</html>