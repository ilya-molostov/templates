<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Template</title>

    <!-- Bootstrap -->
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
<!-- шапка 320-->

<!--noindex-->
<div class="wh visible-xs">
<div class="container visible-xs">
    <div class="row" id="head-1">
         <div class="block_h">
         <div class="left-b">
           <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
               <img src="images/menu.png" width="34" height="31">
               </button>
           </div>
            <div class="collapse navbar-collapse pad-no" id="responsive-menu">
               <ul class="nav navbar-nav">
                 <li><a href="#">О компании</a></li>
                 <li><a href="#">Цены</a></li>
                 <li><a href="#">Услуги</a></li>
                 <li><a href="#">Производство</a></li>
                 <li><a href="#">Контакты</a></li>                                       
               </ul>
            </div>  
          </div>
          <div id="phone"><span class="glyphicon glyphicon-earphone"></span> +8 985 535 02 05</div>
          </div>
          <div>
           <!-- корзина и вход-->
            <div class="row text-right pad-no">
                 <a href="#1">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="login">
                       Войти
                     </div>
                 </a>
                 <a href="#2">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="cart">
                       <div class="total">4</div>Корзина
                     </div>
                 </a>
            </div>
            <!-- корзина и вход-->
          </div>
       
    </div>
</div>
</div>
<!--noindex-->

<!-- шапка 320-->
  
<!-- шапка -->
<div class="container hidden-xs">
    <div class="row">
        <!--noindex-->
        <div class="col-xs-12 visible-xs pad-10">
          <a href="#"><img class="img-responsive" src="images/logo_.png"></a>
        </div>
        <!--noindex-->
        <div class="col-lg-3 col-md-3 col-sm-12 hidden-xs" id="logo">
           <a href="#"><img class="img-responsive" src="images/logo.jpg"></a>
        </div>
       
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 pad-no">
        
           <div class="row" id="line-1">
             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div id="phone"><span class="glyphicon glyphicon-earphone"></span> +8 985 535 02 05</div>
             </div>
             <div class="col-lg-5 col-md-5 col-sm-8 col-xs-12" id="search-block">
              
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control search" placeholder="Поиск">
                    <span class="input-group-btn">
                      <button class="btn btn-search" type="button"><img src="images/search.png"></button>
                    </span>
                  </div>
                </form>
              
             </div>
             <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
               <div class="row text-right pad-no">
                 <a href="#1">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="login">
                       Войти
                     </div>
                 </a>
                 <a href="#2">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="cart">
                       <div class="total">4</div>Корзина
                     </div>
                 </a>
               </div>
             </div>
           </div> 
           
           <div class="row pad-no" id="line-2">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="navbar-header">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                    <span class="glyphicon glyphicon-align-justify"></span> <span>посмотреть меню сайта</span>
                   </button>
                </div>
                <div class="collapse navbar-collapse pad-no" id="responsive-menu">
                   <ul class="nav navbar-nav">
                     <li><a href="#">О компании</a></li>
                     <li><a href="#">Цены</a></li>
                     <li><a href="#">Услуги</a></li>
                     <li><a href="#">Производство</a></li>
                     <li><a href="#">Контакты</a></li>                                       
                   </ul>
                </div>     
             </div>
           </div>      
                
        </div>
    </div>
</div>  
<!-- шапка --> 

<!-- слайдер 320-->
<div class="container visible-xs">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pad-no">

                <div id="carousel_small" class="carousel slide" data-ride="carousel" data-interval="2500">
                 <!--индификатор слайдов-->
                 <ol class="carousel-indicators hidden-sm hidden-xs">
                   <li class="active" data-target="#carousel_small" data-slide-to="0"></li>
                   <li data-target="#carousel_small" data-slide-to="1"></li>
                   <li data-target="#carousel_small" data-slide-to="2"></li>
                 </ol>
         
                 <!-- Слайды -->
        
                 <div class="carousel-inner">
                 
                   <div class="item active text-center">
                     <img class="center-block img-responsive" src="images/slide_0_x.jpg" alt="">
                   </div>
                   <div class="item text-center">
                     <img class="center-block img-responsive" src="images/slide_1_x.jpg" alt="">
                   </div>
                   <div class="item text-center">
                    <img class="center-block img-responsive" src="images/slide_2_x.jpg" alt="">
                   </div>
                </div>
           
                 </div>
                  
                 <!-- Стрелки преключения слайдов -->
                 <a href="#carousel_small" class="left carousel-control" data-slide="prev">
                   <span><img src="images/1.png"></span>
                 </a>
        
                 <a href="#carousel_small" class="right carousel-control" data-slide="next">
                   <span class="fix-bag"><img src="images/2.png"></span>
                </a> 
                </div>

        </div>
    </div>
</div>  
<!-- слайдер 320--> 






<!-- слайдер -->
<div class="container hidden-xs">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div id="carousel_small" class="carousel slide" data-ride="carousel" data-interval="2500">
                 <!--индификатор слайдов-->
                 <ol class="carousel-indicators hidden-sm hidden-xs">
                   <li class="active" data-target="#carousel_small" data-slide-to="0"></li>
                   <li data-target="#carousel_small" data-slide-to="1"></li>
                   <li data-target="#carousel_small" data-slide-to="2"></li>
                 </ol>
         
                 <!-- Слайды -->
        
                 <div class="carousel-inner">
                 
                   <div class="item active">
                     <img class="img-responsive center-block" src="images/slide_0.jpg" alt="">
                   </div>
                   <div class="item">
                     <img class="img-responsive center-block" src="images/slide_1.jpg" alt="">
                   </div>
                   <div class="item">
                    <img class="img-responsive center-block" src="images/slide_2.jpg" alt="">
                   </div>
                </div>
           
                 </div>
                  
                 <!-- Стрелки преключения слайдов -->
                 <a href="#carousel_small" class="left carousel-control" data-slide="prev">
                   <span class="hidden-xs"><img src="images/1.png"></span>
                   <span class="visible-xs"><img src="images/1_.png"></span>
                 </a>
        
                 <a href="#carousel_small" class="right carousel-control" data-slide="next">
                   <span class="hidden-xs"><img src="images/2.png"></span>
                   <span class="visible-xs"><img src="images/2_.png"></span>
                </a> 
                </div>

        </div>
    </div>
</div>  
<!-- слайдер --> 
 
<!-- блок мы предлагаем -->
<div class="container">
    <div class="row pad-no" id="block_line_1">
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12" id="title_xx">
          <span class="title_block">Мы предлагаем</span>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs text-right">
           <a data-slide="prev" href="#myCarousel-1" class="carousel-contr left"><img class="img" src="images/11.png"></a><a data-slide="next" href="#myCarousel-1" class="carousel-contr right"><img class="img" src="images/22.png"></a>  
        </div> 
    </div>
</div>

<div class="container pad-no">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        
    <div class="carousel slide" id="myCarousel-1">

        <div class="carousel-inner">
           <!-------->
           <div class="item active">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ppn">
                 <div class="img_box center-block" style="background-image:url(images/img_1.jpg);">
                   <a href="#"><h3>Клапаны</h3></a>
                   <a href="#" class="btn btn-default">в каталог&#8594;</a>
                 </div>
               </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ppn">
                 <div class="img_box center-block" style="background-image:url(images/img_2.jpg);">
                   <a href="#"><h3>фанкойлы</h3></a>
                   <a href="#" class="btn btn-default">в каталог&#8594;</a>
                 </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ppn">
                 <div class="img_box center-block" style="background-image:url(images/img_3.jpg);">
                   <a href="#"><h3>вентиляторы</h3></a>
                   <a href="#" class="btn btn-default">в каталог&#8594;</a>
                 </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ppn">
                 <div class="img_box center-block" style="background-image:url(images/img_4.jpg);">
                   <a href="#"><h3>воздуховоды</h3></a>
                   <a href="#" class="btn btn-default">в каталог&#8594;</a>
                 </div>
               </div>
           </div> 
            <!-------->
            <!-------->
            <div class="item">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                 <div class="img_box center-block" style="background-image:url(images/img_1.jpg);">
                   <a href="#"><h3>Клапаны</h3></a>
                   <a href="#" class="btn btn-default">в каталог&#8594;</a>
                 </div>
               </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                 <div class="img_box center-block" style="background-image:url(images/img_2.jpg);">
                   <a href="#"><h3>фанкойлы</h3></a>
                   <a href="#" class="btn btn-default">в каталог&#8594;</a>
                 </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                 <div class="img_box center-block" style="background-image:url(images/img_3.jpg);">
                   <a href="#"><h3>вентиляторы</h3></a>
                   <a href="#" class="btn btn-default">в каталог&#8594;</a>
                 </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                 <div class="img_box center-block" style="background-image:url(images/img_4.jpg);">
                   <a href="#"><h3>воздуховоды</h3></a>
                   <a href="#" class="btn btn-default">в каталог&#8594;</a>
                 </div>
               </div>
            </div> 
            <!-------->
            
        </div>                         
    </div>
 
</div>       
</div>         
</div>
<!-- блок мы предлагаем --> 


<!-- страница -->
<div class="container mm">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 content">

<h1>пару слов о нас</h1>
<br/>

<p class="text-tr">Компания «Национальные Климатические Системы - Инжинирнг» предлагает приобрести оборудование AIR SC</p>

<p>Компания «Национальные климатические системы» реализует широкий спектр оборудования AIR SC (Smart Conditioning) производства Гонконг. Вся продукция сертифицирована и выпускается на собственных заводах компании, что позволяет гарантировать надлежащее качество всех конструктивных узлов.</p>

<p>Виды деятельности</p>

<p>Наша компания специализируется на выполнении заказов высокого уровня сложности, в том числе на реализации масштабных проектов:</p>

<ul>
    <li> – проектирование климатических и вентиляционных систем с использованием<br/>
          техники AIR SC и других марок;</li>
    <li> – полный комплекс услуг в сфере монтажа и пусконаладки инженерных сетей;</li>
    <li> – техническое обслуживание в сфере отопления, вентиляции, кондиционирования.</li>
</ul>

<p>Неустанно совершенствуя уровень квалификации специалистов, формируя конкурентоспособный ассортимент высокотехнологичной продукции, мы всегда стремимся предложить нашим клиентам наиболее эффективные решения.</p>
   
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 pad-no">
<!--------->
    <div id="news_xx" class="row pad-15">
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 pad-no">
          <span class="title_block">Новости</span>
        </div> 
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 pad-no text-right">
           <a data-slide="prev" href="#myCarousel-2" class="carousel-contr left"><img class="img" src="images/11.png"></a><a data-slide="next" href="#myCarousel-2" class="carousel-contr right"><img class="img" src="images/22.png"></a>  
        </div> 
    </div>

    <div class="carousel slide" id="myCarousel-2">
        <div class="carousel-inner">
           <div class="item active">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg">
                <a href="#"><img class="img-responsive center-block" src="images/news.jpg"></a>
                <div class="tema">
                    <div class="data">12 мая</div>
    
                    <div class="link"><a href="#">У нас появилась новая вакансия</a></div>
                    
                    <div class="text_news">Наша компания специализируется на выполнении заказов высокого уровня сложности, в том числе на реализации масштабных проектов
                    
                       <div class="text-right pad-20">
                         <a class="btn btn-default" href="#">читать&#8594;</a>
                       </div>
                    </div>
                    
                </div>
              </div>
           </div> 

          <div class="item">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg">
                <a href="#"><img class="img-responsive center-block" src="images/news.jpg"></a>
                <div class="tema">
                    <div class="data">12 мая</div>
    
                    <div class="link"><a href="#">У нас появилась новая вакансия</a></div>
                    
                    <div class="text_news">Наша компания специализируется на выполнении заказов высокого уровня сложности, в том числе на реализации масштабных проектов
                    
                       <div class="text-right pad-20">
                         <a class="btn btn-default" href="#">читать&#8594;</a>
                       </div>
                    </div>
                    
                </div>
              </div>
           </div> 
	
        </div>

    </div>

<!--------->     
        </div>
    </div>
</div>  
<!-- страница --> 

<!-- подвал -->
<div class="nd">
<div class="container">
    <div class="row" id="footer">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
           <div class="pp"> 
            <a class="phone" href="#">+8 985 535 02 05</a><br/>
            <a href="#"><span class="glyphicon glyphicon-earphone"></span> перезвоните мне</a>
           </div>
           <div>
            <div class="trtt">Напишите нам</div>
            <a href="#"><span class="glyphicon glyphicon-envelope"></span> info@nks-i.ru</a>
           </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
           <div> 
            <div class="ttt">Акции</div>
            <ul class="footer_ul">
              <li><a href="#">Противопожарные клапаны</a></li>
              <li><a href="#">Вентиляторы канальные</a></li>
              <li><a href="#">Гибкие воздуховоды</a></li>
            </ul>
           </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
            <div>
             <div class="ttt">Компания</div>
             <ul class="footer_ul">
              <li><a href="#">О нас</a></li>
              <li><a href="#">Вакансии</a></li>
              <li><a href="#">Кейсы</a></li>
            </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="dgs">
            
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control search-1" placeholder="Поиск">
                    <span class="input-group-btn">
                      <button class="btn btn-search-1" type="button"><img src="images/s_.png"></button>
                    </span>
                  </div>
                </form>
            
            </div>
            <div class="text-right pad-nn">Мы в социальных сетях</div>
            <div class="text-right">
             <div id="xx320">
              <a href="#"><img src="images/v.png"></a>
              <a href="#"><img src="images/f.png"></a>
              <a href="#"><img src="images/s.png"></a>
             </div>
            </div>
        </div>
    </div>
</div> 
</div> 
<!-- подвал --> 

<div class="h90 hidden-xs"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
	  // Carousel Auto-Cycle
	  $(document).ready(function() {
		$('.carousel').carousel({
		  interval: 6000
		})
	  });
	</script>
  </body>
</html>