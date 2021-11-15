$(function () { 
 
  $('.news__list').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow:"<button type='button' class='slick-prev'><i class='fa fa-angle-left'></i></button>",
        nextArrow:"<button type='button' class='slick-next'><i class='fa fa-angle-right'></i></button>",
        responsive: [{

            breakpoint: 1260,
            settings: {
                arrows: false,
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });

    $('.partners__list').slick({
        slidesToShow: 6,
        prevArrow:"<button type='button' class='slick-prev  arrow-prev'><i class='fa fa-angle-left'></i></button>",
        nextArrow:"<button type='button' class='slick-next  arrow-next'><i class='fa fa-angle-right'></i></button>",
        responsive: [{
                 
            breakpoint: 1260,
            settings: {
                arrows: false,
                dots: true,
                slidesToShow: 6,
                slidesToScroll: 2
            }},{

            breakpoint: 1150,
            settings: {
                arrows: false,
                dots: true,
                slidesToShow: 5,
                slidesToScroll: 2
            }},{
            breakpoint: 920,
            settings: {
                arrows: false,
                dots: true,
                slidesToShow: 4,
                slidesToScroll: 3
            }},{
            breakpoint: 620,
            settings: {
                arrows: false,
                dots: true,
                slidesToShow: 3,
                slidesToScroll: 3
            }},{
            breakpoint: 560,
            settings: {
                arrows: false,
                dots: true,
                slidesToShow: 2,
                slidesToScroll: 2
            }},{
            breakpoint: 380,
            settings: {
                arrows: false,
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]      
    });

    $('.partners-slider__list').slick({
        slidesToShow: 6,
        prevArrow:"<button type='button' class='slick-prev arrow-prev'><i class='fa fa-angle-left'></i></button>",
        nextArrow:"<button type='button' class='slick-next arrow-next'><i class='fa fa-angle-right'></i></button>"
    })

    // Menu-opener Hamburger
  $('.gamburg').click(function () {
      $('.menu-collapse').toggleClass('d-none').css('order', '1');
      $('.head__menu').toggleClass('menu-opened');
  });

    //Плавная прокрутка к секции
    $(document).ready(function(){
        $('.go_to').click( function(){ // ловим клик по ссылке с классом go_to
        var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
            if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
            $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500); // анимируем скроолинг к элементу scroll_el
            }
            return false; // выключаем стандартное действие
        });
    }); 

     }); 
    $('.modal1').click( function() {
      $('#exampleModal').arcticmodal();
    });
    $('.modal2').click( function() {
      $('#exampleModal1').arcticmodal();
    });
    $('.modal3').click( function() {
      $('#exampleModal2').arcticmodal();
    });
    $('.showquestion').click(function () {
      $('.question-form').toggleClass('hidequestion');
  });
    
    
$(function() {
    $('a.btn-lg').click(function() {
        var parent = $(this).attr('data-parent');
        var modal = $(this).attr('data-target')
        $(modal).find('h2').val(parent);
    })
});

    //Form send 

    $(document).ready(function(){
        $('[data-submit]').on('click', function(e){
            e.preventDefault();
            $(this).parent('form').submit();
        })
        $.validator.addMethod(
                "regex",
                function(value, element, regexp) {
                    var re = new RegExp(regexp);
                    return this.optional(element) || re.test(value);
                },
                "Please check your input."
                );

        function valEl(el){
             
              el.validate({
            rules:{
              tel:{
                required:true,
                regex: '^([\+]+)*[0-9\x20\x28\x29\-]{5,20}$'
              },
              name:{
                required:true
              },
              comment:{
                required:true
              },
              feature:{
                required:true
              },
              email:{
                required:true,
                email:true
              },
              feature: {
                required:true
              }
            },
              messages:{
                tel:{
                    required:'Обязательное поле!',
                    regex:'Телефон может содержать символы + - ()'
                },
                name:{
                    required:'Обязательное поле!',
                },
                comment:{
                    required:'Напишите Ваше обращение',
                },
                feature:{
                    required:'Пожалуйста ознакомьтесь с правилами',
                },
                email:{
                    required:'Обязательное поле!', 
                    email:'Неверный формат E-mail'
                }
            },            
            submitHandler: function (form) {
                $('#page-preloader').fadeIn();
                var $form = $(form);
                var $formId = $(form).attr('id');
                switch($formId){
                  case'goToNewPage':
                    $.ajax({
                          type: 'POST',
                          url: $form.attr('action'),
                          data: $form.serialize(),
                        })
                        .always(function (response) {  
                            //ссылка на страницу "спасибо" - редирект
                            location.href='thanks.html';
                            //отправка целей в Я.Метрику и Google Analytics
                            ga('send', 'event', 'masterklass7', 'register');
                    yaCounter27714603.reachGoal('lm17lead');       
                    });
                break;        
                case'popupResult':
                $.ajax({
                      type: 'POST',
                      url: $form.attr('action'),
                      data: $form.serialize(),
                    })
                    .always(function (response) {  
                    $.arcticmodal('close');//закрытие модального окна                 
                    setTimeout(function (){
                     $('#page-preloader').fadeOut();
                    },800);
                    setTimeout(function (){
                      $('#overlay-form-send').fadeIn();
                      $form.trigger('reset');
                      //строки для остлеживания целей в Я.Метрике и Google Analytics
                    },1100);
                    $('#overlay-form-send').on('click', function(e) {
                    $('#overlay-form-send').fadeOut();
            });
                        
                });
            break;          
            }       
    return false; 
        }                           
      })
            }                        
         
                  $('.js-form').each(function() {
                    valEl($(this)); 
                  });
            $('[data-scroll]').on('click', function(){
                $('html, body').animate({
                    scrollTop: $( $.attr(this, 'data-scroll') ).offset().top
                }, 2000);
                event.preventDefault();
            })              
       
 
});    


function CustomValidation() { }

CustomValidation.prototype = {
  // Установим пустой массив сообщений об ошибках
  invalidities: [],

  // Метод, проверяющий валидность
  checkValidity: function(input) {

    var validity = input.validity;

    if (validity.patternMismatch) {
      this.addInvalidity('This is the wrong pattern for this field');
    }

    if (validity.rangeOverflow) {
      var max = getAttributeValue(input, 'max');
      this.addInvalidity('The maximum value should be ' + max);
    }

    if (validity.rangeUnderflow) {
      var min = getAttributeValue(input, 'min');
      this.addInvalidity('The minimum value should be ' + min);
    }

    if (validity.stepMismatch) {
      var step = getAttributeValue(input, 'step');
      this.addInvalidity('This number needs to be a multiple of ' + step);
    }

    // И остальные проверки валидности...
  }

  // Добавляем сообщение об ошибке в массив ошибок
 // addInvalidity: function(message) {
 //   this.invalidities.push(message);
 // },

  // Получаем общий текст сообщений об ошибках
//  getInvalidities: function() {
//    return this.invalidities.join('. \n');
 // }
};

// Добавляем обработчик клика на кнопку отправки формы
submit.addEventListener('click', function(e) {
  // Пройдёмся по всем полям
  for (var i = 0; i < inputs.length; i++) {

    var input = inputs[i];

    // Проверим валидность поля, используя встроенную в JavaScript функцию checkValidity()
    if (input.checkValidity() == false) {

      var inputCustomValidation = new CustomValidation(); // Создадим объект CustomValidation
      inputCustomValidation.checkValidity(input); // Выявим ошибки
      var customValidityMessage = inputCustomValidation.getInvalidities(); // Получим все сообщения об ошибках
      input.setCustomValidity(customValidityMessage); // Установим специальное сообщение об ошибке

    } // закончился if
  } // закончился цикл
});


