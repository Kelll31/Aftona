
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

<section class="main">
  <div class="wrapper">
      

<!-- Пост -->
        <div class="left-col">
        
        
                   
        <form method="POST">
            <?php
            $x = 0;
            $lines = 1022;
            $lines = mysqli_query( $conn, "SELECT CONVERT(COUNT(id), INT) FROM `instagram`;");
            while($x < 1){
            echo '
            <div class="post">
                <div class="info">
                    <div class="user">
                        <div class="profile-pic">
                       <img src="img/cover 1.png" alt="">
                    </div>
                        <p class="username">kelll31 tech</p>
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
                        <button type="button" onClick="onClick()"><img src="img/like.PNG" class="icon" alt=""></button>
                        <button name="myActionName" value="1"><img src="img/dislike.PNG" class="icon" alt=""></button>
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
                                echo ' <p class="description"><span>Xlebysllek</span>'. $row['comment']. ' </p>';
                            }
                            while ($row = $data->fetch_assoc()) {
                                echo ' <p class="post-time">'. $row['data']. ' </p>';
                            }
                            if (isset($_POST['myActionName'])) {
                                switch ($_POST['myActionName']) {
                                case '0':
                                    mysqli_query( $conn, "UPDATE `instagram` SET `likes`= 554  WHERE id = $x");
                                
                                break;
                                case '1':
                                    mysqli_query( $conn, "UPDATE `instagram` SET `likes`= 666 WHERE id = $x");
                                break;
                                }
                            }

                            
                            
                
                echo '
                </div>
                <div class="comment-wrapper">
                    <img src="img/smile.PNG" class="icon" alt="">
                    <input type="text" class="comment-box" placeholder="Написать коментарий">
                    <button class="comment-btn">отправить</button>
                </div>
            </div>
            ';
            $x = $x + 1;
            }
           
            ?>
            
            </form>
            <?php
                
            ?>
        
            </script>            
        </div>
    </div>
</section>

</html>
</body>