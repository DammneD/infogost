<?php get_header(); ?>
    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <?php get_template_part('template-parts/sidemenu'); ?>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="regulations">
                        <h2>
                            Технические регламенты Таможенного Союза
                        </h2>
                        <ul class="regulations__list">
                            <li class="regulations__item">
                                <a href="<?php the_field ('первая_ссылка'); ?>">
                                    <?php the_field ('название_первой_ссылки'); ?>                                    
                                </a>
                            </li>
                            <li class="regulations__item">
                                <a href="<?php the_field ('вторая_ссылка'); ?>">
                                    <?php the_field ('название_второй_ссылки'); ?>                                    
                                </a>
                            </li>
                            <li class="regulations__item">
                                <a href="<?php the_field ('третья_ссылка'); ?>">
                                    <?php the_field ('название_третьей_ссылки'); ?>                                    
                                </a>
                            </li>
                            <li class="regulations__item">
                                <a href="<?php the_field ('четвертая_ссылка'); ?>">
                                    <?php the_field ('название_четвертой_ссылки'); ?>                                    
                                </a>
                            </li>
                            <li class="regulations__item">
                                <a href="<?php the_field ('пятая_ссылка'); ?>">
                                    <?php the_field ('название_пятой_ссылки'); ?>                                    
                                </a>
                            </li>
                            <li class="regulations__item">
                                <a href="<?php the_field ('шестая_ссылка'); ?>">
                                    <?php the_field ('название_шестой_ссылки'); ?>                                    
                                </a>
                            </li>
                            <li class="regulations__item">
                                <a href="<?php the_field ('седьмая_ссылка'); ?>">
                                    <?php the_field ('название_седьмой_ссылки'); ?>                                    
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-xl-5">
                    <div class="cost">
                        <h2 class="cost__title" id="cost">
                            Рассчитать стоимость
                        </h2>
                        <p>
                            Узнайте стоимость и сроки услуги онлайн. <br>
                            Заполните форму, отправьте данные специалистам. <br>
                            Получите ответ через 30 минут. 
                        </p>
                        <form id="popupResult" class="cost__form js-form" action="success.php" method="post">
                            <div class="form__content">
                                <input class="cost__input form-control form__field" name="name" required type="text" placeholder="Наименование продукции" > 
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
                                Узнать стоимость
                            </button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="news-head">
                <h2>
                    Новости сертификации:
                </h2>
                <div class="news-all">
                    <a href="news">
                        <span>Все новости</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
            <div class="news__list">
            <?php 
			    $args = array(
					'numberposts' => 5,
					'category_name' => 'news-sert',
					'orderby'     => 'date',
					'order'       => 'DESC',
					'include'     => array(),
					'exclude'     => array(),
					'meta_key'    => '',
					'meta_value'  => '',
					'post_type'   => 'post',
					'suppress_filters' => true, 
				);

				$posts = get_posts( $args );
				foreach($posts as $post){ setup_postdata($post); ?>
					<!-- Начало / Вывод повторяющегося отрезка, отвечающего за одну запись -->
					<div class="news__item">
	                    <a href="<?php the_permalink(); ?>">
	                        <?php the_title(); ?>
	                    </a>
	                    <p>
	                        <?php the_content( $more_link_text = 'Читать далее', $strip_teaser = '1') ?>
	                    </p>
	                    <span>
	                        <?php the_time('d.m.Y'); ?>
	                    </span>	                    
                	</div>					
					<!-- Конец / Вывод повторяющегося отрезка, отвечающего за одну запись -->
				<?php   
				}
				wp_reset_postdata(); // сброс
			?>
			</div>
        </div>
    </section>
    <section class="question">
        <div class="container">
            <div class="row ml-15">
                <div class="col-12 col-md-10 bg-w">
                    <div class="question-head">
                        <h2>
                            Вопрос-ответ
                        </h2>
                        <div class="question-all">
                            <a href="question">
                                <span>Все вопросы</span>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="question-content">
                        <div class="faq-answer-main">
                            <?php echo do_shortcode( '[mideal-faq]' ) ; ?>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="technical">
                        <div class="technical__title">
                            Технические условия 
                        </div>
                        <img src="<?php bloginfo('template_directory'); ?>/img/teh3.png" alt="Teh3">
                        <p>
                            3 простых шага <br>для получения ТУ
                        </p>
                        <div class="technical__bottom">
                           <a href="reestr"><img src="<?php bloginfo('template_directory'); ?>/img/gostus.png" alt="Gostus"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/partners'); ?>
    <?php get_template_part('template-parts/footer'); ?>
