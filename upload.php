
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
<title>Upload | NO INSTAGRAMM</title>
<script src="main_ifyes.php"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Студак</title>
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
            <a href=index.php class="brand-img"><img src="img/logo.png" class="brand-img" alt=""></a>
        <input type="text" class="search-box" placeholder="поиск">
        <div class="nav-items">

        <ul id="nnavv">
                <li> <div class="nav-items"> <img src="img/home.PNG" class="icon" alt=""></div>
                    <ul class="ssubmenuu">
                        <li><a href=#>Функция 1</a></li>
                    </ul>
                </li>
                <li> <div class="nav-items"> <img src="img/messenger.PNG" class="icon" alt=""></div>
                </li>
                <li> <div class="nav-items"> <img src="img/add.PNG" class="icon" alt=""></div>
                </li>
                <li> <div class="nav-items"> <img src="img/explore.PNG" class="icon" alt=""></div>
                    <ul class="ssubmenuu">
                        <li><a href=#>Функция 2</a></li>
                    </ul>
                </li>
                <li> <div class="nav-items"> <img src="img/like.PNG" class="icon" alt=""></div>
                    <ul class="ssubmenuu">                        
                    <li><a href=#>Мои лайки</a></li>
                    <li><a href=#>Обновления друзей</a></li>
                    </ul>
                </li>
            </ul>
            <div class="icon user-profile"></div>
            
            

        </div>
    </div>

    



</nav>

<!-- Истории -->
<section class="main">
  

<!-- Пост -->
        <div class="left-col">

            <div class="post">
            <form enctype="multipart/form-data" method="post">
                <div class="info">
                    <div class="user">
                        <p class="mid-box"><font color="red">NO</font>INSTARGAM ждет твой новый пост</p>
                    </div>
                    <ul id="nnavv">
                        <li> <div class="nav-items"> <img src="img/option.PNG" class="options" alt=""></div>
                            <ul class="ssubmenuu">
                                <li><a href=#>Функция 1</a></li>
                                <li><a href=#>Функция 2</a></li>
                                <li><a href=#>Функция 3</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                

  
                <img src="img/cover 2.png" class="post-image" alt="">
                <div class="post-content">
                    <p class="likes">Интерестно, сколько ты наберешь лайков.</p>
                    <p class="description"><input type="text" class="comment-box" placeholder="Можешь добавить описание"></p>
                    <p class="post-time">сейчас</p>
                </div>
                <div class="comment-wrapper">
                    <p><input type="file" name="f">
                    <input class="comment-btn" type="submit" value="Запостить"></p>
                </div>
            </div>
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