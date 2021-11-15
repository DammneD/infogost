    <footer class="footer" id="footer">
        <div class="container d-flex justify-content-between">

            <?php wp_nav_menu( array(
                            'theme_location'  => '',
                            'menu'            => 'Меню',
                            'container'       => 'false',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'footer-menu d-flex',
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
            <div class="copyright">
                © 2008-2018 ИнфоГОСТ Информационный портал о сертификации
            </div>
        </div>
    </footer>
    
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-3.3.1.min.js"></script>         
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-tab.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/fontawesome.min.js"></script>
    <!-- js-скрипт гугл капчи -->
    <script src="<?php bloginfo('template_directory'); ?>/slick/slick.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
	<!-- Подключен файл-валидатор, для проверки формы на заполненность  -->
	<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.arcticmodal-0.3.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
</body>
</html>
<?php wp_footer(); ?>