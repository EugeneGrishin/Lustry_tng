<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100italic,300,300italic,regular,italic,700,700italic,900,900italic" rel="stylesheet" />
    <link rel="stylesheet" href="../css/itc-slider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/itc-slider.js" defer></script>
    <script src="../js/script.js" defer></script>
    <script src="../js/burger.js" defer></script>
</head>
<body>
    <header>
        <nav class="head">
            <div class="container_header">
                <div class="navbar__wrap">
                    <div class="hamb">
                      <div class="hamb__field" id="hamb">
                        <span class="bar"></span> <span class="bar"></span>
                        <span class="bar"></span>
                      </div>
                    </div>
            <ul class="menu" id="head">
                <li>
                    <a class="menu-button1 scrollto" href="#main">Главная</a>
                </li>
                <li>
                    <a class="menu-button2 scrollto" href="#port">Портфолио</a>
                </li>
                <li>
                    <a class="menu-button3" href="..\pages\svet.html">Светорасчет</a>
                </li>
                <li>
                    <a class="menu-button4" href="..\pages\demo.html">Демонстрация</a>
                </li>
                <li>
                    <a class="menu-button5 scrollto" href="#about_us">О нас</a>
                </li>
                <li>
                    <a class="menu-button6" href="..\pages\contacts.html">Контакты</a>
                </li>
            </ul>
        </div>  
            
        </span>
        <img class="logo" src="..\logo\эмблема.png">
        <div class="navpage"></div>
    </nav>
    <div class="popup" id="popup"></div>
    </header>
    <main>
        <div class="container" id="main">

            <div class="itc-slider" data-slider="itc-slider" data-loop="false" data-autoplay="false">
              <div class="itc-slider-wrapper">
                <div class="itc-slider-items">
                  <div class="itc-slider-item">
                    <img class="slider" src="..\images\sldimg.png">
                    <h1 class="slider-header">Какая встреча пройдет продуктивнее? </h1>
                    <p class="slider-text">Холодные оттенки света стимулируют умственную и физическую активность человека, помогают сконцентрироваться.</p>
                  </div>
                  <div class="itc-slider-item">
                    <img class="slider" src="..\images\sldimg2.png">
                    <div class="bg_dark"></div>
                    <h1 class="slider-header">В какое место точно вернутся гости? </h1>
                    <p class="slider-text">Неверно освещенное пространство будет задыхаться от недостатка света, проигрывать в уютности и насыщенности красок. Технология Vivid Natural с теплой цветовой температурой создаст комфортную расслабленную атмосферу.</p>
                  </div>
                  <div class="itc-slider-item">
                    <img class="slider" src="..\images\sldimg3.png">
                    <div class="bg_dark"></div>
                    <h1 class="slider-header">Для чего составлять проект освещения?</h1>
                    <p class="slider-text">Результатом становится реализация оптимального уровня освещенности, улучшающего функциональность и внешний вид помещения.</p>
                </div>
              </div>
              <button class="itc-slider-btn itc-slider-btn-prev"></button>
              <button class="itc-slider-btn itc-slider-btn-next"></button>
            </div>
        
          </div>
        </div>
       
        <h1 class="advantages">Наши приемущества</h1>
        <ul class="adv">
            <li>
                <li>
                    <a class="adv_1">Большой каталог поставок</a>
                    <img class="adv1" src="..\images\adv1.png">
                </li>
                <li>
                    <a class="adv_2">Бесплатная консультация за 30 минут</a>
                    <img class="adv2" src="..\images\adv2.png">
                </li>
                <li>
                    <a class="adv_3">Доставка по Ростовской области</a>
                    <img class="adv3" src="..\images\adv3.png">
                </li>
                <li>
                    <a class="adv_4">Минимум в два раза сохкратятся ваши расходы</a>
                    <img class="adv4" src="..\images\adv4.png">
                </li>
                <li>
                    <a class="adv_5">Гарантия на 5 лет</a>
                    <img class="adv5" src="..\images\adv5.png">
                </li>
                <li>
                    <a class="adv_6">Разрабатываем полностью готовый проект</a>
                    <img class="adv6" src="..\images\adv6.png">
                </li>
            </li>
        </ul>
        <button class="consult"  onclick="openForm()">Связаться с консультантом</button>
        <script text="javascript">
            function openForm() {
              document.getElementById("myForm").style.display = "block";
            }
            
            function closeForm() {
              document.getElementById("myForm").style.display = "none";
            }
            </script>
        <div class="form-popup"  id="myForm">
            
            <form class="form-container" action="php\mail.php" method="post" id="form">
              
              <h1>Вход</h1>

          
              <label for="email"><b>Почта</b></label>
              <input type="text" placeholder="Ваша почта" name="useremail" required>

              <label for="">Введите ваше имя</label>
      		  <input type="text" placeholder="Ваше имя" name="username" required>
              
                <label for="">Введите номер телефона</label>
                <input type="text" name="userphone" placeholder="+7 (999) 99 99 999" required>
          
              <button type="submit" class="btn" onclick="closeForm()" >Отправить</button>
              <button type="button" class="btn cancel" onclick="closeForm()">Закрыть</button>
              
            </form>
            
          </div>
        

        <span>
            <div class="line_1"></div>
            <h2 class="section2_text">Выгодные решения</h2>
        </span>
        <span class="solutions">
            <div class="sol_1">
                <p class="sol_1_text"><b>Трековые</b> светильники</p>
                <img class="light_1" src="..\images\light1.png">
            </div>
            <div class="sol_2">
                <p class="sol_2_text"><b>Подвесные</b> светильники</p>
                <img class="light_2" src="..\images\light2.png">
            </div>
            <div class="sol_3"> 
            <p class="sol_3_text"><b>Встраевыемые</b> светильники</p>
                <img class="light_3" src="..\images\light3.png">
            </div>
            <div class="sol_4">
            <p class="sol_4_text"><b>Точечные</b> светильники</p>
                <img class="light_4" src="..\images\light4.png">
            </div>
            <div class="sol_5">
            <p class="sol_5_text"><b>Линейные</b> светильники</p>
                <img class="light_5" src="..\images\light5.png">
            </div>
        </span>
        
        <button class="order" target="_blank" onclick="openForm()">Заказать поставку</button>
        
        <span>
            <div class="line_2"></div>
            <h2 class="section3_text">Как, при помощи профессионального проекта в программе в Dialux,сократить бюджет на закупку светильников до 70%?</h2>
            <a class="dialux_1">Расчет освещенности – неотъемлемая часть любого электротехнического проекта, будь то производственное помещение, улица, торговый зал, автостоянка или просто одно рабочее место. Если специалист правильно подойдет к поставленной задаче, то общую стоимость светотехнической продукции возможно снизить на 50 и более процентов. Основной секрет хорошего решения – правильная расстановка световых приборов, оптимизация их мощности и наличие честных IES файлов, полученных в сертифицированных лабораториях.</a>
            <a class="dialux_2">Применяя специализированные светильники, разработанные под конкретные задачи, так же возможно добиться экономии бюджета и последующих затрат на обслуживание и электроэнергию. Яркий пример – световые приборы для освещения высокопаллетных зон. В них применяется специальная оптика (линза), которая эффективно распределяет свет по поверхности пола между стеллажами (как привило, ширина этой зоны не более 3-х метров). За счет наличия линз, количество осветительной техники может сократиться вдвое.</a>
        </span>
        <div class="order_background">
            <h2 class="order_title">Закажите бесплатный расчет освещения</h2>
            <a class="order_text">Наш специалист сделает профессиональный подбор светильников в программе Dialux за 30 минут.</a>
            <button class="order_cons" id="button-199576"  target="_blank" onclick="openForm()">Заказать расчет</button>
        </div>

    <div class="svodka scrollto" id="about_us">
            <div class="panel_1_container">
            <img class="panel_1_img" src="..\images\door.png">
            <h3 class="panel_1_head">Техническое освещение</h3>
            <a class="panel_1">Трековое освещение, линейные светильники, встроенные и накладные светильники</a>
        </div>
        <div class="panel_2_container">
            <img class="panel_2_img" src="..\images\switch.png">
            <h3 class="panel_2_head">Электро-установочные изделия</h3>
            <a class="panel_2">Дриммеры, выключатели, розетки</a>
        </div>
        <div class="panel_3_container">
            <img class="panel_3_img" src="..\images\planshet.png">
            <h3 class="panel_3_head">Система управления светом</h3>
            <a class="panel_3">Системы Dali, контроллеры Casambi, smart- системы, голосовое управление</a> 
        </div>
        <div class="panel_4_container">
            <img class="panel_4_img" src="..\images\room.png">
            <h3 class="panel_4_head">Декоративное освещение</h3>
            <a class="panel_4">Люстры, бра, подсветка, интерьерный свет</a>
        </div>
            <button class="price" > <a href="https://drive.google.com/uc?export=download&id=162l7-3o3GKOUTc3WNzPS94XfmimdXG_-">Посмотреть весь каталог</a> </button>
    
    </div>

    <span class="portfolio" id="port">
        <h2>Портфолио</h2>
        <img class="room_1" src="..\images\room1.png">
        <h3 class="project_name1 project_title">ЖК Максим Горький</h3>
        <p class="project_size1 project_size">Квартира Площадь 70 м²</p>
        <p class="price_1 price_styles">Стоимость: 342 000 р</p>
        <p class="price_crossed_1">394000 р</p>
        <p class="profit_1">Сэкономили 50к+</p>

        <img class="room_2" src="..\images\room2.png">
        <h3 class="project_name2 project_title">ЖК Екатиринский</h3>
        <p class="project_size2 project_size">Квартира Площадь 82 м²</p>
        <p class="price_2 price_styles">Стоимость: 910 000 р</p>
        <p class="price_crossed_2">1 120 000 р</p>
        <p class="profit_2">Сэкономили 200к+</p>

        <img class="room_3" src="..\images\room3.png">
        <h3 class="project_name3 project_title">OMODA КЛЮЧАВТО</h3>
        <p class="project_size3 project_size">Автосалон электромобилей Площадь 680 м²</p>
        <p class="price_3 price_styles">Стоимость: 1 680 000 р </p>
        <p class="price_crossed_3">2 700 000 р</p>
        <p class="profit_3">Сэкономили более 1 млн </p>
    </span>

    <div class="FAQ">
        <h2 class="FAQ_title">Часто задаваемые вопросы</h2>
        <div class="questions_background">
            <div class="faq" id="faq">
                <div class="faq-item">
                    <input class="faq-input" type="checkbox" id="faq_1">
                    <label class="faq-title" for="faq_1">У меня есть проект, хочу заложить стоимость оборудования в смету ремонта.</label>
                    <div class="faq-text">
                        <p>Присылайте подобранную спецификацию. Мы дадим Вам цены на оборудование из наличия или предложим аналоги. Если по спецификации будут вопросы и уточнения - менеджеры свяжутся с Вами.</p>
                    </div>
                </div>
        
                <div class="faq-item">
                    <input class="faq-input" type="checkbox" id="faq_2">
                    <label class="faq-title" for="faq_2">Что такое светорасчет и для чего он нужен?</label>
                    <div class="faq-text">
                        <p>Это инженерное моделирование освещения, выполненное в программе Dialux. После светорасчета выдается цветовая карта освещенности на рабочих поверхностях (пол, стены, потолок, фасад), по которой с высокой уверенностью можно утвердить тип, мощность, расположение и световой угол. Если есть визуализация интерьера, то после светорасчета будет можно сделать вывод об освещенности дизайнерских решений, зон</p>
                    </div>
                </div>
                <div class="faq-item">
                    <input class="faq-input" type="checkbox" id="faq_3">
                    <label class="faq-title" for="faq_3">Какие сроки поставки оборудования из Европы?</label>
                    <div class="faq-text">
                        <p>Большая часть брендов доступна к заказу через параллельный импорт. Сроки от 6 до 16 недель. Розетки, выключатели - 4-6 недель. Недоступны для заказа интернет-розетки, некоторые терморегуляторы, оборудование KNX.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <input class="faq-input" type="checkbox" id="faq_4">
                    <label class="faq-title" for="faq_4">Гарантии на оборудование, услуги</label>
                    <div class="faq-text">
                        <p>На наши услуги у нас гарантия от 12 месяцев. Также возможна сервисная поддержка не гарантийных случаев.
                            Оборудование от всех наших поставщиков проходит двойной контроль.
                            По гарантийным случаям, замене и другим вопросы сервиса можно обратиться на почту, мессенджеры, телефону</p>
                    </div>
                </div>
                <div class="faq-item">
                    <input class="faq-input" type="checkbox" id="faq_5">
                    <label class="faq-title" for="faq_5">Установка светильников: инструкции по монтажу и поддержка</label>
                    <div class="faq-text">
                        <p>На каждый поставляемый профиль, подсветку или световой прибор предоставляем схему, инструкцию по монтажу. Грамотный монтажник или человек с инженерным образованием сможет установить на основе предоставленной информации.
                            Консультируем по телефону по вопросам монтажа нестандартных проектных решений. Решение задач на объекте осуществляется по услуге оплачиваемого выезда.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <input class="faq-input" type="checkbox" id="faq_6">
                    <label class="faq-title" for="faq_6">По каким параметрам выбирать светодиодное освещение?</label>
                    <div class="faq-text">
                        <p>Обращайте внимание на импульсность (лучше 1-5%). Показатель цветопередачи CRI. Оптимальное значение более 90% Угол освещения (15-60 гра) мощность и связанный с ней световой поток, наличие функции диммирования.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <input class="faq-input" type="checkbox" id="faq_7">
                    <label class="faq-title" for="faq_7">Где лучше купить освешение: интернет-магазин, шоурум, строительный супер-маркет?</label>
                    <div class="faq-text">
                        <p>В супермаркетах продают продукты массового спроса.
                            Качественных характеристик или особенностей, как угол или выдержанный индекс цветопередачи (CRI), ждать не стоит. В шоуруме можно все потрогать вживую. Это важный фактор принятия решения.
                            Имейте ввиду - предлагать будут то, что есть в наличии. Это как правило дороже или залежалые позиции.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <input class="faq-input" type="checkbox" id="faq_8">
                    <label class="faq-title" for="faq_8">Почему не стоит покупать свет на светодиодных лампах?</label>
                    <div class="faq-text">
                        <p>Сроки службы светодиодных ламп 1 год. Срок службы светодиодных светильников с модулем 30000-50000 часов.
                            Это 5 лет непрерывной работы или 10 лет работы в 8-часовом режиме.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <input class="faq-input" type="checkbox" id="faq_9">
                    <label class="faq-title" for="faq_9">Какой выбрать свет, если у нас натяжной потолок?</label>
                    <div class="faq-text">
                        <p>Подходит трековый с системой SLOTT или демпферный и гарпунной системой. Встраиваемые светильники споты и т.д. - любые. Накладные - любые. Для установки линейных светильников можно использовать профили типа SLOTT.</p>
                    </div>
                </div>
            </div>
            
            
        </div>    
        </div>
  
 
    <span class="providers_list">
        <h2 class="provider">Мы представляем:</h2>
        <div class="line_3"></div>
        <ul>
            <li>
                <a href="https://profitlight.ru"><img class="profit" src="..\logo\profit.png"></a>
            </li>
            <li>
                <a href="https://www.eraworld.ru"><img class="era" src="..\logo\era.png"></a>
            </li>
            <li>
                <a href="https://elektrostandard.ru"><img class="es" src="..\logo\es.png"></a>
            </li>
            <li>
                <a href="https://www.maysun.ru"><img class="may" src="..\logo\may.png"></a>
            </li>
            <li>
                <a href="https://smartbuy-russia.ru"><img class="smartbuy" src="..\logo\smartbuy.png"></a>
            </li>
        </ul>
    </span>


    </main>
   <footer class="main_footer">
        <div class="footer_background">
            <img class="logo_footer" src="..\logo\эмблема.png">
            <a class="number">7 495 502-78-38</a>
            <a class="email">lustry_tgn@gmail.ru</a>
            <a class="kr">© 2023 Lustry_TGN. Работаем с 2010 года. Вся информация на сайте носит справочный характер и не является публичной офертой, определяемой положениями Статьи 437 Гражданского кодекса Российской Федерации.</a>
            <button class="consult_2" onclick="openForm()">Записаться на консультацию</button>
            <div class="footer_nav">
                <a class="footer_nav_1" href="#port">Проекты</a>
                <a class="footer_nav_2" href="..\pages\svet.html">Светорасчет</a>
                <a class="footer_nav_3" href="..\pages\demo.html">Демонстрация</a>
                <a class="footer_nav_4 scrollto" href="#faq">FAQ</a>
                <a class="footer_nav_5" href="https://drive.google.com/uc?export=download&id=162l7-3o3GKOUTc3WNzPS94XfmimdXG_-">Каталог</a>
                <a class="footer_nav_6" href="#about_us">О нас</a>
                </div>
                <p class="adress">Гоголевский пер., 26А, Таганрог</p>
                <p class="phone">+7 (939) 789-00-58</p>
        </div>
    </footer>
</body>
</html>