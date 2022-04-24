
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
<script type='text/javascript'>
  function encodeImageFileAsURL() {

    var filesSelected = document.getElementById("inputFileToLoad").files;
    if (filesSelected.length > 0) {
      var fileToLoad = filesSelected[0];

      var fileReader = new FileReader();

      fileReader.onload = function(fileLoadedEvent) {
        var srcData = fileLoadedEvent.target.result; // <--- data: base64

        var newImage = document.createElement('img');
        newImage.src = srcData;

        document.getElementById("imgTest").innerHTML = newImage.outerHTML;
        //alert("Converted Base64 version is " + document.getElementById("imgTest").innerHTML);
        console.log(document.getElementById("imgTest").innerHTML);
      }
      fileReader.readAsDataURL(fileToLoad);
    }
  }
</script>
<title>Upload | NO INSTAGRAMM</title>
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
  <body>
  
<!-- навигация -->
  <nav class="navbar">
    <div class="nav-wrapper">
            <a href=index.php class="brand-img"><img src="img/logo.png" class="brand-img" alt=""></a>
        <input type="text" class="search-box" placeholder="поиск">
        <div class="nav-items">

        <ul id="nnavv">
               
                <li> <div class="nav-items"> <img src="img/add.PNG" class="icon" alt=""></div>
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
                        <p class="mid-box"><font color="red">NO</font>INSTARGAM - это анонимно</p>
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
                


                <p id="imgTest" ><img src=""  class="post-image" alt=""></p>
                <?php
                    $comeent = "не определено";
                    $url = "не определен";                
                    $comeent = $_POST["comment"];                              
                    $url = $_POST["url"];

                mysqli_query( $conn, "INSERT INTO `instagram`(`id`, `filename`, `comment`, `likes`, `data`) VALUES ('','$url','$comeent','0','')");
                ?>
                <form action="index.php" method="post">
                <div class="post-content">
                    <p class="likes">Интерестно, сколько ты наберешь лайков.</p>
                    <p class="description"><input type="text" name="comment" class="comment-box" placeholder="Можешь добавить описание"></p>
                    <p class="post-time">сейчас</p>
                
                </div>
                <div class="comment-wrapper">
                    <p><input type="file" name="blob" id="inputFileToLoad" onchange="encodeImageFileAsURL();">                    
                    <input type="text" name="url" class="comment-box" placeholder="Или просто вставь ссылку на фото">
                    
                    <input class="comment-btn" type="submit" value="Запостить"></p>
                </div>
                </form>
                

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