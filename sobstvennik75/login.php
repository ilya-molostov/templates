<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap Template</title>

    <!-- Bootstrap -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
    <!-- шапка -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <a href="/"><div class="logo m-top-80"></div></a>
        </div>   
      </div>
    </div>
    <!-- шапка -->
    

    <!-- форма регистрации -->
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div> 
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pad-form">
          <div class="title-8">Авторизация</div>
          
            <div class="new-icons text-center">
              <a href="#"><img src="images/v1.jpg" width="34" height="34"></a>
              <a href="#"><img src="images/v2.jpg" width="34" height="34"></a>
              <a href="#"><img src="images/v3.jpg" width="34" height="34"></a>
              <a href="#"><img src="images/v4.jpg" width="34" height="34"></a>
              <a href="#"><img src="images/v5.jpg" width="34" height="34"></a>
            </div>
            
            <div class="new-line-grey"></div>
            <div style="background-image:url(images/bg_w.jpg);height:30px; margin:auto; margin-top:-12px; width:70px; text-align:center;">или</div>
            
            <div id="h30"></div>
          
            <form role="form">
             <div class="form-group">
              <input type="email" class="form-control form-my" id="email" placeholder="Введите email">
             </div>
             <div class="form-group">
              <input type="password" class="form-control form-my" id="pass" placeholder="Пароль">
             </div>
             
             <div class="form-group">
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad">
                <input id="checkbox-id" type="checkbox"> Запомнить пароль
               </div> 
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-pad text-right">
                <a href="#">Забыли пароль?</a>
               </div>  
             </div>
             <div class="form-group">
              <button type="submit" class="btn btn-warning btn-block">Войти</button>
             </div> 
             
             <div class="form-group">
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                Нет аккаунта?
               </div> 
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
                <a href="#">Регистрация</a>
               </div>  
             </div>  
             
            </form>
          
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>  
      </div>
    </div>
    <!-- форма регистрации -->   


    
    <!-- подвал -->
    <div class="container header-footer">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pad-top-10 pad-but-10">
            <a href="/"><div class="logo_footer"></div></a>
        </div>  
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pad-top-10 pad-but-10">
            <div>
              <ul class="footer-nav">
                <li><a href="#">Продажа</a></li>
                <li><a href="#">Аренда</a></li>
                <li><a href="#">Обмен</a></li>
              </ul>
            </div>
        </div> 
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pad-top-10 pad-but-10">
            <div class="text-right tt-center"><a href="#" class="btn btn-add">Добавить своё объявление</a></div>
        </div> 
      </div>
    </div>
    <!-- подвал -->
    
  
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>

  </body>
</html>