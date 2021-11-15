<?php 
/*
Template Name: Рейтинг центров
Template Post Type: post, page, product
*/
?>



<?php get_header(); ?>

    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php get_template_part('template-parts/sidemenu'); ?>
                </div>  
                <div class="col-md-9">
                    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                    <div class="rating-content">
                        <h2>
                            Рейтинг центров
                        </h2>
                        <ul class="rating-title__list">
                            <li class="rating-title__item rating-title__item_centre">
                                Центр
                            </li>
                            <li class="rating-title__item rating-title__item_reliability">
                                Надежность
                            </li>
                            <li class="rating-title__item rating-title__item_time">
                                Среднее время ответа
                            </li>
                        </ul> 
                        <ul class="rating__list">
                            <li class="rating__item">
                                <span class="raiting__title">Ростест</span>
                                <div class="progress-content">
                                    <div class="pie-wrapper progress-95 style-2"> 
                                        <div class="pie">
                                          <div class="left-side half-circle"></div>
                                          <div class="right-side half-circle"></div>
                                        </div>
                                        <div class="shadow"></div>
                                    </div>
                                    <span>98%</span>
                                </div>
                                <span class="rating__minutes">20 минут</span>
                                <div class="rating-reviews">
                                    <a href="#" class="modal1">
                                        Отзывы
                                    </a>
                                </div>
                                <div class="rating-contacts">
                                    <a href="#" class="modal2">
                                        Контакты
                                    </a>
                                </div>
                                <a href="#" class="rating__btn modal3">
                                    Связаться
                                </a>
                            </li>
                        </ul>
                    </div>  
                </div>              
            </div>
        </div>
    </section>
    <div style="display: none;">
        <div class="box-modal" id="exampleModal">
            <div class="box-modal_close arcticmodal-close">✖</div>
            <h2 class="modal__title">
                Контакты центра "Гортерстурал":
            </h2>
            <nav>
               <ul class="nav nav-tabs">
                <span>Ваш город: </span>
                <li class="city-menu">
                    <a class="city-link" href="#">Санкт-Петербург</a>
                      <ul class="city-two__menu">
                        <li><a class="menu-item" href="#">Москва</a></li>
                        <li><a class="menu-item" href="#">Санкт-Петербург</a></li>
                        <li><a class="menu-item" href="#">Екатеринбург</a></li>
                        <li><a class="menu-item" href="#">Краснодар</a></li>
                        <li><a class="menu-item" href="#">Ростов на Дону</a></li>
                        <li><a class="menu-item" href="#">Казань</a></li>
                        <li><a class="menu-item" href="#">Кемерово</a></li>                        
                    </ul>
                </li>                    
            </ul> 
            </nav>
            <div class="e-mail">
                <p class="e-mail__text">E-mail: </p>
                <a href="mailto:spb@slavtest.ru" class="e-mail__link">
                    spb@slavtest.ru
                </a>
            </div>
            <div class="phone_lol">
                <p class="e-mail__text">Тел: </p>
                <a class="phone__link" href="tel:+78124251246">
                    +7 (812) 425-12-46
                </a>
            </div>
            <div class="site">
                <p class="e-mail__text">Сайт: </p>
                <a class="phone__link" href="http://gortestural.ru">
                    http://gortestural.ru
                </a>
            </div>
            <div class="adress">
                <p class="e-mail__text">Адрес: </p>
                <p class="phone__link">
                    Метро "Чкаловская" / "Петроградская". <br>
                    Лахтинская улица 16А
                </p>
            </div>
            <div class="time">
                <p class="e-mail__text">Время работы: </p>
                <p class="phone__link">
                    c 8:30 до 17:00 по местному времени
                </p>
            </div>
            <div class="work">
                <p class="e-mail__text">В штате работают: </p>
                <p class="phone__link">
                    7 экспертов
                </p>
            </div>
            <div class="proekt">
                <p class="e-mail__text">Участвовал в гос. закупах: </p>
                <p class="phone__link">
                    4 раза
                </p>
            </div>
            <div class="year">
                <p class="e-mail__text">Год основания: </p>
                <p class="phone__link">
                    2014 г.
                </p>
            </div>
        </div>
    </div>
    <div style="display: none;">
        <div class="box-modal" id="exampleModal1">
            <div class="box-modal_close arcticmodal-close">✖</div>
            <h2 class="modal__title">
                Отзывы центра "Гортерстурал":
            </h2>
            <div class="review">
                <div class="review__symbol">
                    ❞
                </div>
                <p class="phone__link phone__link-special">
                    Благодарим за плодотворное сотруничество, индивидуальный подход, оперативность, грамотность при выполнении работы
                </p>
                <p class="e-mail__text e-mail__text-special">ООО Ринджана</p>
            </div>
            <div class="review">
                <div class="review__symbol">
                    ❞
                </div>
                <p class="phone__link phone__link-special">
                    Благодарим за плодотворное сотруничество, индивидуальный подход, оперативность, грамотность при выполнении работы
                </p>
                <p class="e-mail__text e-mail__text-special">ООО Ринджана</p>
            </div>
            <div class="review">
                <div class="review__symbol">
                    ❞
                </div>
                <p class="phone__link phone__link-special">
                    Благодарим за плодотворное сотруничество, индивидуальный подход, оперативность, грамотность при выполнении работы
                </p>
                <p class="e-mail__text e-mail__text-special">ООО Ринджана</p>
            </div>
        </div>
    </div>
    

    <?php get_template_part('template-parts/partners'); ?>
    <?php get_template_part('template-parts/footer'); ?>
