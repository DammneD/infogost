<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="Информационный портал по сертификации">
	<meta name="keyword" content="инфо, ГОСТ, портал по сертификации">
    <?php wp_head(); ?>  	 
    <link rel="stylesheet"  href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-reboot.min.css">    	
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/media.css"> -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/slick/slick.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/slick/slick-theme.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/media.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/simple.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.arcticmodal-0.3.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
    
    <!--OG-->
	<meta name="og:title" content="">
	<meta name="og:description" content="">
	<meta name="og:type" content="article">
	<meta name="og:image" content="">
	<meta name="og:site_name" content="">
	<!--Validation-->
	<meta name="yandex-verification" content="">
	<!--- Favicon -->
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/doc3.png" type="image/x-icon">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/doc3.png" type="image/x-icon">
</head> 
<body>
	<header class="header" id="header">      
        <div class="container d-flex">            
            <div class="row">
                <div class="col-1 d-xl-none">
                    <button class="gamburg" >
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="col-2">
                    <div class="logo">
                        <a href="<?php echo get_option('home'); ?>/">
                            <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Logo">
                        </a>
                    </div>
                </div>

                <div class="col-lg-10 d-none d-xl-block menu-collapse">
                    <div class="head__menu d-flex">
                        <nav class="nav-city">
                            <ul class="nav nav-tabs">
                                <span>Ваш город: </span>
                                <li class="city-menu">
                                    <a class="city-link" href="#">Санкт-Петербург</a>
                                      <ul class="city-two__menu">
                                        <li><a class="menu-itemes" href="#">Москва</a></li>
                                        <li><a class="menu-itemes" href="#">Санкт-Петербург</a></li>
                                        <li><a class="menu-itemes" href="#">Екатеринбург</a></li>
                                        <li><a class="menu-itemes" href="#">Краснодар</a></li>
                                        <li><a class="menu-itemes" href="#">Ростов на Дону</a></li>
                                        <li><a class="menu-itemes" href="#">Казань</a></li>
                                        <li><a class="menu-itemes" href="#">Кемерово</a></li>                        
                                    </ul>
                                </li>                    
                            </ul>
                            <ul class="nav nav-tabs">
                                <span>Центр сертификации: </span>
                                <li class="city-menu">
                                  <a class="city-link"  href="#">Уралтест</a>
                                     <ul class="city-two__menu">
                                        <li><a class="menu-itemes" href="#">Уралтест 1</a></li>
                                        <li><a class="menu-itemes" href="#">Уралтест 2</a></li>
                                        <li><a class="menu-itemes" href="#">Уралтест 3</a></li>                        
                                    </ul>
                                </li>                    
                            </ul>                
                        </nav>    
                        <div class="phone">
                            <img src="<?php bloginfo('template_directory'); ?>/img/phone.png" alt="Phone">
                            <span>
                                +7 (812) 425-12-46
                            </span>
                        </div> 
                        <div class="email">
                            <img src="<?php bloginfo('template_directory'); ?>/img/message.png" alt="Email">
                            <a href="mailto:spb@slavtest.ru">
                                spb@slavtest.ru
                            </a>
                        </div> 
                        <?php wp_nav_menu( array(
                        	'theme_location'  => '',
                        	'menu'            => 'Меню',
                        	'container'       => 'false',
                        	'container_class' => '',
                        	'container_id'    => '',
                        	'menu_class'      => 'nav-menu d-flex',
                        	'menu_id'         => '',
                        	'echo'            => true,
                        	'fallback_cb'     => 'wp_page_menu',
                        	'before'          => '',
                        	'after'           => '',
                        	'link_before'     => '',
                        	'link_after'      => '',
                        	'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                        	'depth'           => 0,
                        	'walker'          => '',
                        ) ); ?>
                    </div>
                </div>
            </div>                    
        </div>        
    </header>
    <section class="search" id="search">
        <div class="container">
            <div class="row">
                <div class="searching">
                    <form action="#" class="searching__form">
                        <?php get_search_form(); ?>                               
                    </form>
                </div>
                <div class="order-btn order__form">
                    <a href="#" class="modal3">
                        Заказать документ
                    </a>
                </div>
                <div class="order-btn">
                    <a href="question">
                        Задать вопрос
                    </a>
                </div>
                <div class="order-btn">
                    <a href="#" class="modal3">
                        Заказать звонок
                    </a>
                </div>
            </div>   
        </div>
        <div style="display: none;">
            <div class="box-modal" id="exampleModal2">
                <h2 class="cost__title-form" id="popup-form-title">
                    Заказать
                </h2>
                 <form id="popupResult" class="cost__form js-form" action="success.php" method="post">
                    <div class="form__content">
                        <input id="phone" class="cost__input form-control form__field" name="name" type="text" placeholder="Ваше имя" >
                    </div>   
                    <div class="form__content">
                        <input class="cost__input form-control form__field" name="email" required type="text" placeholder="Ваш e-mail" > 
                        <input id="phone" class="cost__input form-control form__field" name="tel" type="text" placeholder="Контактный телефон" >
                    </div>     
                    <div class="block-form">                                         
                        <div class="cost__politics">
                            <input type="checkbox" name="feature" id="politics" value="politics" required="">
                            <label for="politics">Я согласен на обработку <a href="#">персональных данных</a></label>
                        </div>
                    </div>
                    <button class="cost__btn button" data-submit="">
                        Отправить
                    </button>
                </form>
            </div>
</div>  
<div id="overlay-form-send">
            <div id="thx">
                Спасибо! Мы свяжемся с вами в ближайшее время
            </div>
        </div>
    </section>