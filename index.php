
<!DOCTYPE html>
<html lang="en"></html>

<?php

require_once 'connect.php';


//echo @$_COOKIE['logined'];
//echo @$_COOKIE['id'];
//if(@$_COOKIE['logined'] == 1){
//	$id = @$_COOKIE['id'];
//	$post1  =  mysqli_query( $conn, "SELECT `id` FROM `instagram` WHERE `id` = '$id'" );
//	$second_name  =  mysqli_query( $conn, "SELECT `second_name` FROM `people` WHERE `id` = '$id'" );
//	setcookie("logined","0",time()+60*60*24*365*10);
//}
//else{
//	header('Location: http://localhost/Студак/landing.php');

//}


?>


<head> 
<title>NO INSTAGRAMM</title>
<script src="main_ifyes.php"></script>
<script src="js/jquery.min.js">  </script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.nav.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/easing.min.js"></script>
		<script src="js/jquery-appear.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC0RqLa90WDfoJedoE3Z_Gy7a7o8PCL2jw"></script>
        <script type="text/javascript" src="js/gmaps.min.js"></script>
        <script src="js/main.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
    
  
</head>
  <body>
  
<!-- навигация -->
  <nav class="navbar">
    <div class="nav-wrapper">
        <a href="#top" class="brand-img"><img src="img/logo.png" class="brand-img" alt=""></a>
        <input type="text" class="search-box" placeholder="Поиск">
        
        <div class="nav-items">

        <ul id="nnavv">
                <li> <div class="nav-items"> <a href=upload.php class="icon"> <img src="img/add.PNG"  class="icon" alt=""></a></div> 
                </li>
               
            </ul>
            <div class="icon user-profile"></div>
            
            

        </div>
    </div>
    



</nav>
<p class="mid-box" id = "top">Лучшее из <font color="red">NO</font>INSTARGAM</p>
<!-- Истории -->
<section class="main">
  <div class="wrapper">
      <div class="left-col">
          <div class="status-wrapper">
          
              <div class="status-card">
                  <div class="profile-pic"><a href="#5"><img src="img/cover 1.png" alt=""></a></div>
                  <p class="username">Anon №1</p> 
              </div>
              <div class="status-card">
                  <div class="profile-pic"><iframe width="70" height="70" src="https://www.youtube-nocookie.com/embed/dQw4w9WgXcQ?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe></div>
                  <p class="username">Anon №2</p>
              </div>
              <div class="status-card">
                  <div class="profile-pic"><a href="#8"><img src="img/cover 3.png" alt=""></a></div>
                  <p class="username">Anon №3</p>
              </div>
      </div>

<!-- Пост -->
    <div class="left-col">    
            

            <form method="POST">
                <?php
                    $x = 9;
                    $lines = 1022;
                    $lines = mysqli_query( $conn, "SELECT MAX(id) FROM `instagram` WHERE 1");
                    
                    while($x > 0){
                    echo '
                    <div class="post" id = "'.$x.'">
                        <div class="info">
                            <div class="user">
                                <div class="profile-pic">
                            <img src="img/cover '.$x.'.png" alt="">
                            </div>
                            <p class="username">№';
                ?>  
                <?php       
                    echo ' '. $x .'
                                 </p>
                            </div>
                            
                            <img src="img/option.PNG" class="options" alt="">
                        </div>
                        ';
                                $image = mysqli_query( $conn, "SELECT `filename` FROM `instagram` WHERE id = $x" );
                                while ($row = $image->fetch_assoc()) {
                                    echo '<img src="'. $row['filename']. ' " class="post-image" alt="" >';
                    }
                        ?>     

                        
                        <div class="post-content">
                            <div class="reaction-wrapper">
                                <form method="POST">
                                    <button name="myActionNameplus" value="<?php echo $x ?>"><img src="img/like.PNG" class="icon" alt=""></button>
                                    <button name="myActionNameminus" value="<?php echo $x ?>"><img src="img/dislike.PNG" class="icon" alt=""></button>
                                </form>
                                <img src="img/comment.PNG" class="icon" alt="">
                                <img src="img/send.PNG" class="icon" alt="">
                                <img src="img/save.PNG" class="save icon" alt="">
                            </div>
                        <?php
                                    $likes = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = $x" );
                                    $comment = mysqli_query( $conn, "SELECT `comment` FROM `instagram` WHERE id = $x" );
                                    $data = mysqli_query( $conn, "SELECT `data` FROM `instagram` WHERE id = $x" );
                                    while ($row = $likes->fetch_assoc()) {
                                        $newlikes = $likes;
                                        echo ' <p class="likes">'. $row['likes']. ' </p>';
                                    }
                                    while ($row = $comment->fetch_assoc()) {
                                        echo ' <p class="description"><span> anon №'.$x .'</span>'. $row['comment']. ' </p>';
                                    }
                                    while ($row = $data->fetch_assoc()) {
                                        echo ' <p class="post-time">'. $row['data']. ' </p>';
                                    }

//                                    if (isset($_POST['myActionName'])) {
//                                        switch ($_POST['myActionName']) {
//                                        case '0':
//                                            $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = $x");
//                                            while ($row = mysqli_fetch_assoc($result))
//                                            {
//                                                $ff =  $row['likes'] + 1;
//                                                mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = $x"); 
//                                            }
//                                       break;
//                                        case '1':
//                                            $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = $x");
//                                            while ($row = mysqli_fetch_assoc($result))
//                                            {
//                                                $ff =  $row['likes'] - 1;
//                                                mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = $x"); 
//                                            }
//                                        break;
//                                        }
//                                    }
                                                                             
                        echo '
                        </div>
                        <div class="comment-wrapper">
                            <img src="img/smile.PNG" class="icon" alt="">
                            <input type="text" class="comment-box" placeholder="Написать коментарий">
                            <button class="comment-btn">отправить</button>
                        </div>
                    </div>
                    ';
                    $x = $x - 1;
                    }                                
                ?>
                <?php
                    if (isset($_POST['myActionNameplus'])) {
                        switch ($_POST['myActionNameplus']) {
                        case '0':
                            $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = 0");
                            while ($row = mysqli_fetch_assoc($result)){
                                $ff =  $row['likes'] + 1;
                                mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = 0"); 
                            }
                            break;
                        case '1':
                            $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = 1");
                            while ($row = mysqli_fetch_assoc($result)){
                                $ff =  $row['likes'] + 1;
                                mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = 1"); 
                            }
                            break;
                        case '2':
                            $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = 2");
                            while ($row = mysqli_fetch_assoc($result)){
                                $ff =  $row['likes'] + 1;
                                mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = 2"); 
                            }
                            break;
                        case '3':
                            $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = 3");
                            while ($row = mysqli_fetch_assoc($result)){
                                $ff =  $row['likes'] + 1;
                                mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = 3"); 
                            }
                            break;
                        case '4':
                            $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = 4");
                            while ($row = mysqli_fetch_assoc($result)){
                                $ff =  $row['likes'] + 1;
                                mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = 4"); 
                            }
                            break;
                        case '5':
                            $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = 5");
                            while ($row = mysqli_fetch_assoc($result)){
                                $ff =  $row['likes'] + 1;
                                mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = 5"); 
                            }
                            break;
                        case '6':
                            $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = 6");
                            while ($row = mysqli_fetch_assoc($result)){
                                $ff =  $row['likes'] + 1;
                                mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = 6"); 
                            }
                                break;
                        case '7':
                            $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = 7");
                            while ($row = mysqli_fetch_assoc($result)){
                                $ff =  $row['likes'] + 1;
                                mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = 7"); 
                            }
                                break;
                        case '8':
                            $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = 8");
                            while ($row = mysqli_fetch_assoc($result)){
                                $ff =  $row['likes'] + 1;
                                mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = 8"); 
                            }
                                break;
                        case '9':
                            $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = 9");
                            while ($row = mysqli_fetch_assoc($result)){
                                $ff =  $row['likes'] + 1;
                                mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = 9"); 
                            }
                                break;
                        case '10':
                            $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = 9");
                            while ($row = mysqli_fetch_assoc($result)){
                                $ff =  $row['likes'] + 1;
                                mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = 9"); 
                            }
                                break;
                    }
                }
                

                if (isset($_POST['myActionNameminus'])) {
                    switch ($_POST['myActionNameminus']) {
                    case '0':
                        $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = 0");
                        while ($row = mysqli_fetch_assoc($result)){
                            $ff =  $row['likes'] - 1;
                            mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = 0"); 
                        }
                        break;
                    case '1':
                        $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = 1");
                        while ($row = mysqli_fetch_assoc($result)){
                            $ff =  $row['likes'] - 1;
                            mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = 1"); 
                        }
                        break;
                    case '2':
                        $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = 2");
                        while ($row = mysqli_fetch_assoc($result)){
                            $ff =  $row['likes'] - 1;
                            mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = 2"); 
                        }
                        break;
                    case '3':
                        $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = 3");
                        while ($row = mysqli_fetch_assoc($result)){
                            $ff =  $row['likes'] - 1;
                            mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = 3"); 
                        }
                        break;
                    case '4':
                        $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = 4");
                        while ($row = mysqli_fetch_assoc($result)){
                            $ff =  $row['likes'] - 1;
                            mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = 4"); 
                        }
                        break;
                    case '5':
                        $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = 5");
                        while ($row = mysqli_fetch_assoc($result)){
                            $ff =  $row['likes'] - 1;
                            mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = 5"); 
                        }
                        break;
                    case '6':
                        $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = 6");
                        while ($row = mysqli_fetch_assoc($result)){
                            $ff =  $row['likes'] - 1;
                            mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = 6"); 
                        }
                            break;
                    case '7':
                        $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = 7");
                        while ($row = mysqli_fetch_assoc($result)){
                            $ff =  $row['likes'] - 1;
                            mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = 7"); 
                        }
                            break;
                    case '8':
                        $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = 8");
                        while ($row = mysqli_fetch_assoc($result)){
                            $ff =  $row['likes'] - 1;
                            mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = 8"); 
                        }
                            break;
                    case '9':
                            $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = 9");
                            while ($row = mysqli_fetch_assoc($result)){
                                $ff =  $row['likes'] - 1;
                                mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = 9"); 
                            }
                                break;
                    case '10':
                            $result = mysqli_query( $conn, "SELECT `likes` FROM `instagram` WHERE id = 9");
                            while ($row = mysqli_fetch_assoc($result)){
                                $ff =  $row['likes'] - 1;
                                mysqli_query( $conn, "UPDATE `instagram` SET `likes`='$ff' WHERE id = 9"); 
                            }
                                break;
                }
                
                }
                ?>
                
                
            </form>    
        </div>
    </div>
</section>



<!-- Рекомендации 
<section class="main">
  <div class="wrapper"> 
      <div class="right-col">
          <div class="profile-card">
              <div class="profile-pic">
                  <img src="img/profile-pic.png" alt="">
              </div>
              <div>
                  <p class="username">kelll31 tech</p>
                  <p class="sub-text">kunaal kumar</p>
              </div>
              <button class="action-btn">switch</button>
          </div>
          <p class="suggestion-text">Suggestions for you</p>
          <div class="profile-card">
              <div class="profile-pic">
                  <img src="img/cover 9.png" alt="">
              </div>
              <div>
                  <p class="username">kelll31 tech</p>
                  <p class="sub-text">followed bu user</p>
              </div>
              <button class="action-btn">follow</button>
          </div>
          <div class="profile-card">
              <div class="profile-pic">
                  <img src="img/cover 10.png" alt="">
              </div>
              <div>
                  <p class="username">kelll31 tech</p>
                  <p class="sub-text">followed bu user</p>
              </div>
              <button class="action-btn">follow</button>
          </div>
          <div class="profile-card">
              <div class="profile-pic">
                  <img src="img/cover 11.png" alt="">
              </div>
              <div>
                  <p class="username">kelll31 tech</p>
                  <p class="sub-text">followed bu user</p>
              </div>
              <button class="action-btn">follow</button>
          </div>
          <div class="profile-card">
              <div class="profile-pic">
                  <img src="img/cover 12.png" alt="">
              </div>
              <div>
                  <p class="username">kelll31 tech</p>
                  <p class="sub-text">followed bu user</p>
              </div>
              <button class="action-btn">follow</button>
          </div>
          <div class="profile-card">
              <div class="profile-pic">
                  <img src="img/cover 13.png" alt="">
              </div>
              <div>
                  <p class="username">kelll31 tech</p>
                  <p class="sub-text">followed bu user</p>
              </div>
              <button class="action-btn">follow</button>
          </div>
      </div>
  </div>
</section>

-->
</html>
</body>