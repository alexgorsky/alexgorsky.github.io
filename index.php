<?php
session_start();
$utm_medium = 'Без utm_medium';
$utm_source = 'Без utm_source';
$utm_campaign = 'Без utm_campaign';
$utm_term = 'Без utm_term';
$utm_content = 'Без utm_content';
$cm_title = 'Без cm_title';

if(isset($_GET['utm_medium'])){
    $utm_medium = urldecode($_GET['utm_medium']);
    $_SESSION['utm_medium'] = urldecode($_GET['utm_medium']);
}elseif(isset($_SESSION['utm_medium'])) {
    $utm_medium = $_SESSION['utm_medium'];
} else{
    $utm_medium = 'Без utm_medium';
}
if(isset($_GET['utm_source'])){
    $utm_source = urldecode($_GET['utm_source']);
    $_SESSION['utm_source'] = urldecode($_GET['utm_source']);
}elseif(isset($_SESSION['utm_source'])) {
    $utm_source = $_SESSION['utm_source'];
} else{
    $utm_source = 'Без utm_source';
}
if(isset($_GET['utm_campaign'])){
    $utm_campaign = urldecode($_GET['utm_campaign']);
    $_SESSION['utm_campaign'] = urldecode($_GET['utm_campaign']);
}elseif(isset($_SESSION['utm_campaign'])) {
    $utm_campaign = $_SESSION['utm_campaign'];
} else{
    $utm_campaign = 'Без utm_campaign';
}
if(isset($_GET['utm_term'])){
    $utm_term = urldecode($_GET['utm_term']);
    $_SESSION['utm_term'] = urldecode($_GET['utm_term']);
}elseif(isset($_SESSION['utm_term'])) {
    $utm_term = $_SESSION['utm_term'];
} else{
    $utm_term = 'Без utm_term';
}
if(isset($_SESSION['utm_content'])) {
    $utm_content = $_SESSION['utm_content'];
} elseif(isset($_GET['utm_content'])){
    $utm_content = urldecode($_GET['utm_content']);
    $_SESSION['utm_content'] = urldecode($_GET['utm_content']);
}else{
    $utm_content = 'Без utm_content';
}
if(isset($_GET['cm_title'])){
    $cm_title = urldecode($_GET['cm_title']);
    $_SESSION['cm_title'] = urldecode($_GET['cm_title']);
}elseif(isset($_SESSION['cm_title'])) {
    $cm_title = $_SESSION['cm_title'];
} else{
    $cm_title = 'Без cm_title';
}
?>
<!doctype html>
<html>

<head>
    
   
    
    <meta charset="utf-8">
    <title>Пассивный доход</title>
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.min.css">
    <meta name="Description" content="">
    <meta name="Keywords" content="">
</head>

<body>
    <!-- BEGIN  container-->
    <div class="container">
        <div class="wrapper first_screen">
            <header class="wrapper header" id="block_1">
                <div class="inner clearfix">
                    <div class="header_logo">
                        <a href="./" class="header_logo_a">
                            <img class="header_logo_img" src="./img/logo.png" alt="" />
                        </a>
                    </div>
                    <p class="header_desc">Способ получения пассивного<br> дохода</p>
                    <div class="header_right">
                        <a class="header_phone" href="mailto:info@alexgorsky.github.io">info@alexgorsky.github.io</a><br>
                        <a href="#banner_form" class="header_cabinet fancybox-popup">Войти в личный кабинет</a>
                    </div>
                </div>
            </header>
            <div class="wrapper banner" id="block_2">
                <div class="inner">
                    <h1 class="banner_head">Зарабатывай 9000 рублей ежедневно<span class="color">*</span></h1>
                    <p class="banner_after_head">Программа получения пассивного дохода <br>
                        на валютных курсах</p>
                    <ul class="banner_ul">
                        <li class="banner_li">91% верных сделок благодаря уникальному алгоритму;</li>
                        <li class="banner_li">Бесплатная подписка для первых 1000 человек;</li>
                        <li class="banner_li">До 970% прибыли уже за первый месяц.</li>
                    </ul>
                    <a href="#banner_form" class="banner_button big no_gr_sw fancybox-popup">Получить безлимитный доступ прямо сейчас</a>
                    <p class="banner_header_more"><span class="color">*</span> средний ежедневный доход 947 пользователей системы </p>
                </div>
            </div>
        </div>
        <div class="wrapper triggers" id="block_10">
            <div class="inner">
                <h2 class="default_head shadow">Пожалуйста, посмотрите видео-инструкцию,<br> чтобы узнать, что делать дальше</h2>
                <div class="macbook">
                    <img class="trigger_icon" src="./img/MacBook.png" alt="" />
                    <iframe
                        width="560"
                        height="315"
                        src="https://www.youtube.com/embed/tg5Srirvvpw"
                        
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                        title="Demo video">
                    </iframe>
                </div>
                <a href="#banner_form" class="banner_button big no_gr_sw fancybox-popup">Получить безлимитный доступ прямо сейчас</a>
            </div>
        </div>
        <div class="wrapper triggers" id="block_7">
            <div class="inner">
                <div class="triggers_wrap">
                    <div class="trigger">
                        <img class="trigger_icon" src="./img/trigger_icon_1.png" alt="" />
                        <div class="trigger_info">
                            <p class="info_head">91% прибыльных сделок</p>
                            <p class="info_txt">Благодаря уникальному алгоритму комплексного анализа смежных валютных пар.</p>
                        </div>
                    </div>
                    <div class="trigger">
                        <img class="trigger_icon" src="./img/trigger_icon_2.png" alt="" />
                        <div class="trigger_info">
                            <p class="info_head">До 80 сделок ежедневно</p>
                            <p class="info_txt">Программа анализирует рынок и открывает сделки со скоростью, недоступной даже самым опытным трейдерам.</p>
                        </div>
                    </div>
                    <div class="trigger">
                        <img class="trigger_icon" src="./img/trigger_icon_3.png" alt="" />
                        <div class="trigger_info">
                            <p class="info_head">24 часа в сутки</p>
                            <p class="info_txt">Алгоритм постоянно мониторит рыночную ситуацию, чтобы не пропустить ни одной успешной сделки.</p>
                        </div>
                    </div>
                    <div class="trigger">
                        <img class="trigger_icon" src="./img/trigger_icon_4.png" alt="" />
                        <div class="trigger_info">
                            <p class="info_head">Получайте 9000 рублей ежедневно</p>
                            <p class="info_txt">Гарантированный профит благодаря высокому качеству прогнозирования и большому числу сделок.</p>
                        </div>
                    </div>
                    <div class="trigger">
                        <img class="trigger_icon" src="./img/trigger_icon_5.png" alt="" />
                        <div class="trigger_info">
                            <p class="info_head">Поддержка 24/7</p>
                            <p class="info_txt">Вы всегда получите квалифицированную помощь при возникновении любых вопросов.</p>
                        </div>
                    </div>
                    <div class="trigger">
                        <img class="trigger_icon" src="./img/trigger_icon_6.png" alt="" />
                        <div class="trigger_info">
                            <p class="info_head">Просто пользоваться</p>
                            <p class="info_txt">Система позволяет заработать трейдеру с любым уровнем подготовки.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="wrapper calculate" id="block_10">
            <div class="inner">
                <h2 class="default_head shadow">Рассчитайте свой доход за первый месяц
                    <span class="after_head">По умолчанию выставлены средние значения, полученные от 947 пользователей системы</span></h2>
                <div class="calculate_wrap">
                    <div class="calculate_range_wrap">
                        <div class="range_item nave_line">
                            <div class="item_head clearfix">
                                <div class="head_name">Время ежедневной работы программы</div>
                                <div class="head_value green">
                                    <input type="text" class="value js_hour_value" name="hour" value="8" maxlength="2" />
                                    <span class="txt js_hour_txt">час</span>
                                </div>
                            </div>
                            <div class="item_slide green">
                                <input type="text" class="range_hour" name="range_hour" value="" />
                            </div>
                        </div>
                        <div class="range_item nave_line">
                            <div class="item_head clearfix">
                                <div class="head_name">Количество рабочих дней в месяце</div>
                                <div class="head_value blue">
                                    <input type="text" class="value js_days_value" name="days" value="22" maxlength="2" />
                                    <span class="txt js_days_txt">дня</span>
                                </div>
                            </div>
                            <div class="item_slide blue">
                                <input type="text" class="range_days" name="range_days" value="" />
                            </div>
                        </div>
                        <div class="range_item nave_line">
                            <div class="item_head clearfix">
                                <div class="head_name">Размер вашего депозита у брокера</div>
                                <div class="head_value pink">
                                    <input type="text" class="value js_deposit_value" name="deposit" value="250" maxlength="3" />
                                    <span class="txt">$</span>
                                </div>
                            </div>
                            <div class="item_slide pink">
                                <input type="text" class="range_deposit" name="range_deposit" value="" />
                            </div>
                        </div>
                        <div class="range_item">
                            <div class="item_head clearfix">
                                <div class="head_name">Вознаграждение по прибыльной сделке</div>
                                <div class="head_value yellow">
                                    <input type="text" class="value js_fee_value" name="fee" value="85" maxlength="2" />
                                    <span class="txt">%</span>
                                </div>
                            </div>
                            <div class="item_slide yellow">
                                <input type="text" class="range_fee" name="range_fee" value="" />
                            </div>
                        </div>
                        <div class="range_item">
                            <div class="item_head clearfix">
                                <div class="head_name no_mgn">Рекомендованная позиция при<br>
                                    депозите в $<span class="js_deposit_txt">100</span></div>
                                <div class="head_value red">
                                    <span class="value no_line">$<span class="js_rate_value">5</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="calculate_total">
                        <p class="total_head">Ваш доход за месяц составит:</p>
                        <div class="total_value">$ <span class="js_total_sum">500</span></div>
                        <p class="total_txt">Доход рассчитывается при условии инвестирования <strong>5% депозита в каждую сделку</strong></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper horizontal_form" id="block_11">
            <div class="inner">
                <h2 class="default_head white">Получите безлимитный доступ к программе и начните зарабатывать прямо сейчас</h2>
                <form action="./index2.php" class="form_horizontal" method="post">
                    <label class="form_label">
                        <input type="text" name="email" class="form_input no_bg white" required value="" placeholder="Ваша почта" />
                    </label>
                    <label class="form_label is_last">
                        <input type="text" name="fname" class="form_input no_bg white" required value="" placeholder="Ваше имя" />
                    </label>
                    <input type="hidden" name="utm_medium" class="input_hid" value="<?php echo($utm_medium);?>" />
                    <input type="hidden" name="utm_source" class="input_hid" value="<?php echo($utm_source);?>" />
                    <input type="hidden" name="utm_campaign" class="input_hid" value="<?php echo($utm_campaign);?>" />
                    <input type="hidden" name="utm_content" class="input_hid" value="<?php echo($utm_content);?>" />
                    <input type="hidden" name="utm_term" class="input_hid" value="<?php echo($utm_term);?>" />
                    <input type="hidden" name="cm_title" class="input_hid" value="<?php echo($cm_title);?>" />
                    <input type="hidden" name="position" class="input_hid" value="Бесплатный демо-доступ" />
                    <input type="hidden" name="mail" class="input_hid" value="" />
                    <input type="submit" class="form_button md" value="Получить доступ" />
                </form>
                <p class="form_wrap_bottom_info">Указывайте достоверные данные!</p>
            </div>
        </div>
       
        <div class="wrapper reviews" id="block_3">
            <div class="inner">
                <h2 class="default_head">Все еще сомневаетесь?<br>
                    Смотрите отызвы довольных пользователей</h2>
                <div class="reviews_slider_wrap">
                    <ul class="reviews_slider" id="reviews_slider">
                        <li class="review clearfix">
                            <a href="./img/review_img_1.jpg" class="review_a zoom fancybox">
                                <img src="./img/review_img_1.jpg" alt="" class="review_img">
                            </a>
                            <div class="review_info">
                                <div class="info_ul_group clearfix">
                                    <ul class="info_ul">
                                        <li class="info_li"><span class="heavy">Начальный депозит:</span> $300</li>
                                        <li class="info_li"><span class="heavy">Текущий баланс:</span> $19 867</li>
                                        <li class="info_li"><span class="heavy">Средний заработок в день:</span> $1 080</li>
                                    </ul>
                                    <ul class="info_ul">
                                        <li class="info_li"><span class="heavy">Срок использования:</span> 3 недели</li>
                                        <li class="info_li"><span class="heavy">Процент успешных сделок:</span> 92%</li>
                                    </ul>
                                </div>
                                <p class="info_txt">Отзыв №1</p>
                                <p class="info_name"><span class="name">Екатерина Разумовская</span>, домохозяйка</p>
                            </div>
                        </li>
                        <li class="review clearfix">
                            <a href="./img/review_img_1.jpg" class="review_a zoom fancybox">
                                <img src="./img/review_img_1.jpg" alt="" class="review_img">
                            </a>
                            <div class="review_info">
                                <div class="info_ul_group clearfix">
                                    <ul class="info_ul">
                                        <li class="info_li"><span class="heavy">Начальный депозит:</span> $500</li>
                                        <li class="info_li"><span class="heavy">Текущий баланс:</span> $10 567</li>
                                        <li class="info_li"><span class="heavy">Средний заработок в день:</span> $1 120</li>
                                    </ul>
                                    <ul class="info_ul">
                                        <li class="info_li"><span class="heavy">Опыт работы:</span> 2 недели</li>
                                        <li class="info_li"><span class="heavy">Процент успешных сделок:</span> 89%</li>
                                    </ul>
                                </div>
                                <p class="info_txt">«Отзыв №2</p>
                                <p class="info_name"><span class="name">Игорь Филимонов</span>, блоггер</p>
                            </div>
                        </li>
                        <li class="review clearfix">
                            <a href="./img/review_img_1.jpg" class="review_a zoom fancybox">
                                <img src="./img/review_img_1.jpg" alt="" class="review_img">
                            </a>
                            <div class="review_info">
                                <div class="info_ul_group clearfix">
                                    <ul class="info_ul">
                                        <li class="info_li"><span class="heavy">Начальный депозит:</span> $250</li>
                                        <li class="info_li"><span class="heavy">Текущий баланс:</span> $12 264</li>
                                        <li class="info_li"><span class="heavy">Средний заработок в день:</span> $1 245</li>
                                    </ul>
                                    <ul class="info_ul">
                                        <li class="info_li"><span class="heavy">Опыт работы:</span> 1 неделя</li>
                                        <li class="info_li"><span class="heavy">Процент успешных сделок:</span> 92%</li>
                                    </ul>
                                </div>
                                <p class="info_txt">«Отзыв №3</p>
                                <p class="info_name"><span class="name">Марина Михалева</span>, бухгалтер</p>
                            </div>
                        </li>
                        <li class="review clearfix">
                            <a href="./img/review_img_1.jpg" class="review_a zoom fancybox">
                                <img src="./img/review_img_1.jpg" alt="" class="review_img">
                            </a>
                            <div class="review_info">
                                <div class="info_ul_group clearfix">
                                    <ul class="info_ul">
                                        <li class="info_li"><span class="heavy">Начальный депозит:</span> $1000</li>
                                        <li class="info_li"><span class="heavy">Текущий баланс:</span> $45 867</li>
                                        <li class="info_li"><span class="heavy">Средний заработок в день:</span> $1 800</li>
                                    </ul>
                                    <ul class="info_ul">
                                        <li class="info_li"><span class="heavy">Опыт работы:</span> 2 месяца</li>
                                        <li class="info_li"><span class="heavy">Процент успешных сделок:</span> 89%</li>
                                    </ul>
                                </div>
                                <p class="info_txt">Отзыв №4</p>
                                <p class="info_name"><span class="name">Николай Горошин</span>, водитель</p>
                            </div>
                        </li>
                        <li class="review clearfix">
                            <a href="./img/review_img_1.jpg" class="review_a zoom fancybox">
                                <img src="./img/review_img_1.jpg" alt="" class="review_img">
                            </a>
                            <div class="review_info">
                                <div class="info_ul_group clearfix">
                                    <ul class="info_ul">
                                        <li class="info_li"><span class="heavy">Начальный депозит:</span> $700</li>
                                        <li class="info_li"><span class="heavy">Текущий баланс:</span> $14 867</li>
                                        <li class="info_li"><span class="heavy">Средний заработок в день:</span> $1 090</li>
                                    </ul>
                                    <ul class="info_ul">
                                        <li class="info_li"><span class="heavy">Опыт работы:</span> 2 недели</li>
                                        <li class="info_li"><span class="heavy">Процент успешных сделок:</span> 92%</li>
                                    </ul>
                                </div>
                                <p class="info_txt">Отзыв №5</p>
                                <p class="info_name"><span class="name">Максим Волошин</span>, менеджер по продажам</p>
                            </div>
                        </li>
                    </ul>
                    <div id="bx-pager" class="review_pager">
                        <a data-slide-index="0" href="" class="review_pager_a">
                            <img src="./img/review_pager_1.jpg" alt="" class="review_pager_img">
                            <p class="review_pager_name">Екатерина<br> Разумовская</p>
                        </a>
                        <a data-slide-index="1" href="" class="review_pager_a">
                            <img src="./img/review_pager_1.jpg" alt="" class="review_pager_img">
                            <p class="review_pager_name">Игорь<br> Филимонов</p>
                        </a>
                        <a data-slide-index="2" href="" class="review_pager_a">
                            <img src="./img/review_pager_1.jpg" alt="" class="review_pager_img">
                            <p class="review_pager_name">Мария<br> Михалева</p>
                        </a>
                        <a data-slide-index="3" href="" class="review_pager_a">
                            <img src="./img/review_pager_1.jpg" alt="" class="review_pager_img">
                            <p class="review_pager_name">Николай<br> Горошин</p>
                        </a>
                        <a data-slide-index="4" href="" class="review_pager_a">
                            <img src="./img/review_pager_1.jpg" alt="" class="review_pager_img">
                            <p class="review_pager_name">Максим<br> Волошин</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper faq" id="block_15">
            <div class="inner">
                <h2 class="default_head">Часто задаваемые вопросы</h2>
                <div class="faq_wrap">
                    <div class="faq_item">
                        <p class="item_head">Сколько сделок в день совершает программа?</p>
                        <div class="item_info">
                            <p class="info_p">Ежедневно совершается до 80 сделок.</p>
                        </div>
                    </div>
                    <div class="faq_item">
                        <p class="item_head">Каким образом получается такое большое количество сделок?</p>
                        <div class="item_info">
                            <p class="info_p">Это достигается за счет использования целого комплекса алгоритмов на широком наборе торговых инструментов и таймфреймов.</p>
                        </div>
                    </div>
                    <div class="faq_item">
                        <p class="item_head">Какова точность сделок?</p>
                        <div class="item_info">
                            <p class="info_p">Процент прибыльных сделок варьируется день ото дня, но на длительной дистанции превышает 90%.</p>
                        </div>
                    </div>
                    <div class="faq_item">
                        <p class="item_head">Бывают ли убыточные сделки?</p>
                        <div class="item_info">
                            <p class="info_p">Да, конечно, это часть процесса, но их количество не превышает 12%</p>
                        </div>
                    </div>
                    <div class="faq_item">
                        <p class="item_head">Почему вы предоставляете бесплатный доступ к системе?</p>
                        <div class="item_info">
                            <p class="info_p">Полный доступ получат только первые 1000 пользователей, дальше не позволяет техническая возможность. За использование системы пользователи платят 15% от прибыльных сделок.</p>
                        </div>
                    </div>
                    <div class="faq_item">
                        <p class="item_head">В какое время работает программа?</p>
                        <div class="item_info">
                            <p class="info_p">Программа совершает сделки круглосуточно каждый рабочий день.</p>
                        </div>
                    </div>
                    <div class="faq_item">
                        <p class="item_head">Можно ли научиться самостоятельно торговать, как ваша программа?</p>
                        <div class="item_info">
                            <p class="info_p">Нет, даже лучшие трейдеры не смогут анализировать такое большое количество параметров с такой скоростью, как это делает программа</p>
                        </div>
                    </div>
                    <div class="faq_item_hidden_group">
                        <div class="faq_item">
                            <p class="item_head">Какой размер депозита необходим для начала торговли?</p>
                            <div class="item_info">
                                <p class="info_p">Программа не работает со счетами менее 200$</p>
                            </div>
                        </div>
                        <div class="faq_item">
                            <p class="item_head">Используете ли вы мартингейл (удвоение позиции после убытков) в вашей торговле?</p>
                            <div class="item_info">
                                <p class="info_p">Нет, мы его не используем и никому не рекомендуем, это прямой путь к потере депозита.</p>
                            </div>
                        </div>
                        <div class="faq_item">
                            <p class="item_head">Ваша программа работает с любым брокером?</p>
                            <div class="item_info">
                                <p class="info_p">Нет, брокер должен соответствовать ряду требований, чтобы система работала корректно. Счет у подходящего брокера будет создан автоматически.</p>
                            </div>
                        </div>
                        <div class="faq_item">
                            <p class="item_head">Сколько я могу заработать с Вашей программой?</p>
                            <div class="item_info">
                                <p class="info_p">Размер вашего ежедневного заработка зависит от стартового депозита. В среднем наши пользователи зарабатывают не менее 1000$ в день.</p>
                            </div>
                        </div>
                       
                    </div>
                    <span class="faq_button icon"><i class="button_icon"></i> <span class="button_txt">Смотреть еще</span></span>
                </div>
            </div>
        </div>
        <div class="wrapper bottom_group">
            <div class="wrapper contact" id="block_16">
                <div class="inner">
                    <h2 class="default_head white">Остались вопросы?<br>
                        Задайте их нашему эксперту</h2>
                    <form action="./index2.php" class="form_vertical" method="post">
                        <label class="form_label">
                            <input type="text" name="email" class="form_input no_bg white" required value="" placeholder="Ваша почта" />
                        </label>
                        <label class="form_label">
                            <input type="text" name="fname" class="form_input no_bg white" required value="" placeholder="Ваше имя" />
                        </label>
                        <label class="form_label">
                            <input type="text" name="sname" class="form_input no_bg white" required value="" placeholder="Ваша фамилия" />
                        </label>
                        <label class="form_label">
                            <input type="text" name="number" maxlength="18" class="form_input no_bg white" required value="" placeholder="Ваш телефон" />
                        </label>
                        <label class="form_label is_last">
                            <textarea name="msg" class="form_textarea no_bg white" required placeholder="Чем мы можем вам помочь?"></textarea>
                        </label>
                        <input type="hidden" name="utm_medium" class="input_hid" value="<?php echo($utm_medium);?>" />
                        <input type="hidden" name="utm_source" class="input_hid" value="<?php echo($utm_source);?>" />
                        <input type="hidden" name="utm_campaign" class="input_hid" value="<?php echo($utm_campaign);?>" />
                        <input type="hidden" name="utm_content" class="input_hid" value="<?php echo($utm_content);?>" />
                        <input type="hidden" name="utm_term" class="input_hid" value="<?php echo($utm_term);?>" />
                        <input type="hidden" name="cm_title" class="input_hid" value="<?php echo($cm_title);?>" />
                        <input type="hidden" name="position" class="input_hid" value="Вопрос посетителя" />
                        <input type="hidden" name="mail" class="input_hid" value="" />
                        <input type="submit" class="form_button md" value="Задать вопрос" />
                    </form>
                </div>
            </div>
            <footer class="wrapper footer" id="block_17">
                <div class="inner clearfix">
                    <div class="footer_logo">
                        <a href="./" class="footer_logo_a">
                            <img class="footer_logo_img" src="./img/logo.png" alt="" />
                        </a>
                    </div>
                    <p class="footer_desc">Программа автоматического заработка<br> на рынке Форекс</p>
                    <div class="footer_right">
                        <a class="footer_phone" href="mailto:info@alexgorsky.github.io">info@alexgorsky.github.io</a><br>
                        <a class="footer_privacy fancybox-popup" href="#privacy">Политика конфиденциальности</a><br>
                        <a class="footer_privacy fancybox-popup" href="#terms">Правила и условия сервиса</a>
                        
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <div class="hidden_form" id="custom">
        <h2 class="form_wrap_head js_custom_head">&nbsp;</h2>
        <p class="form_wrap_p js_custom_after_head">&nbsp;</p>
        <form action="./index2.php" class="form_vertical" method="post">
            <label class="form_label">
                <input type="text" name="email" class="form_input no_bg white" required value="" placeholder="Ваша почта" />
            </label>
            <label class="form_label is_last">
                <input type="text" name="fname" class="form_input no_bg white" required value="" placeholder="Ваше имя" />
            </label>
            <input type="hidden" name="utm_medium" class="input_hid" value="<?php echo($utm_medium);?>" />
            <input type="hidden" name="utm_source" class="input_hid" value="<?php echo($utm_source);?>" />
            <input type="hidden" name="utm_campaign" class="input_hid" value="<?php echo($utm_campaign);?>" />
            <input type="hidden" name="utm_content" class="input_hid" value="<?php echo($utm_content);?>" />
            <input type="hidden" name="utm_term" class="input_hid" value="<?php echo($utm_term);?>" />
            <input type="hidden" name="cm_title" class="input_hid" value="<?php echo($cm_title);?>" />
            <input type="hidden" name="position" class="input_hid js_custom_position" value="" />
            <input type="hidden" name="mail" class="input_hid" value="" />
            <input type="submit" class="form_button js_custom_btn" value="Оставить заявку" />
        </form>
    </div>
    <div class="hidden_form" id="banner_form">
        <h2 class="form_wrap_head">Оставьте заявку</h2>
        <p class="form_wrap_p">И получите на E-mail демо-доступ к сигналам на 30 дней</p>
        <form action="./handlers/send-form-banner.php" class="form_vertical" method="post">
            <label class="form_label">
                <input type="text" name="email" class="form_input" required value="" placeholder="Ваша почта" />
            </label>
            <label class="form_label is_last">
                <input type="text" name="fname" class="form_input" required value="" placeholder="Ваше имя" />
            </label>
            <input type="hidden" name="utm_medium" class="input_hid" value="<?php echo($utm_medium);?>" />
            <input type="hidden" name="utm_source" class="input_hid" value="<?php echo($utm_source);?>" />
            <input type="hidden" name="utm_campaign" class="input_hid" value="<?php echo($utm_campaign);?>" />
            <input type="hidden" name="utm_content" class="input_hid" value="<?php echo($utm_content);?>" />
            <input type="hidden" name="utm_term" class="input_hid" value="<?php echo($utm_term);?>" />
            <input type="hidden" name="cm_title" class="input_hid" value="<?php echo($cm_title);?>" />
            <input type="hidden" name="position" class="input_hid" value="Получите демо-доступ к сигналам на 30 дней" />
            <input type="hidden" name="mail" class="input_hid" value="" />
            <input type="submit" class="form_button" value="Отправить" />
        </form>
    </div>
    <div class="hidden_form" id="cabinet">
        <h2 class="form_wrap_head">Введите ваш логин и пароль,</h2>
        <p class="form_wrap_p">чтобы войти в личный кабинет</p>
        <form action="./index2.php" class="form_vertical" method="post">
            <label class="form_label">
                <input type="text" name="login" class="form_input" required value="" placeholder="Введите ваш логин" />
            </label>
            <label class="form_label is_last">
                <input type="password" name="password" class="form_input" required value="" placeholder="Введите пароль" />
            </label>
            <input type="hidden" name="utm_medium" class="input_hid" value="<?php echo($utm_medium);?>" />
            <input type="hidden" name="utm_source" class="input_hid" value="<?php echo($utm_source);?>" />
            <input type="hidden" name="utm_campaign" class="input_hid" value="<?php echo($utm_campaign);?>" />
            <input type="hidden" name="utm_content" class="input_hid" value="<?php echo($utm_content);?>" />
            <input type="hidden" name="utm_term" class="input_hid" value="<?php echo($utm_term);?>" />
            <input type="hidden" name="cm_title" class="input_hid" value="<?php echo($cm_title);?>" />
            <input type="hidden" name="position" class="input_hid" value="Войти в личный кабинет" />
            <input type="hidden" name="mail" class="input_hid" value="" />
            <input type="submit" class="form_button" value="Войти" />
        </form>
        <a href="#" class="form_wrap_a">Забыли пароль?</a>
    </div>
    <div class="privacy-policy_div" id="privacy">
        <p class="privacy_p">Сайт уважает и соблюдает законодательство РФ. Также мы уважаем Ваше право и соблюдаем конфиденциальность при заполнении, передаче и хранении ваших конфиденциальных сведений.</p>
        <p class="privacy_p">Мы запрашиваем Ваши персональные данные исключительно для информирования об оказываемых услугах сайта.</p>
        <p class="privacy_p">Персональные данные - это информация, относящаяся к субъекту персональных данных, то есть, к потенциальному покупателю. В частности, это фамилия, имя и отчество, дата рождения, адрес, контактные реквизиты (телефон, адрес электронной почты), семейное, имущественное положение и иные данные, относимые Федеральным законом от 27 июля 2006 года № 152-ФЗ «О персональных данных» (далее – «Закон») к категории персональных данных.</p>
        <p class="privacy_p">Если Вы разместили Ваши контактные данных на сайте, то Вы автоматически согласились на обработку данных и дальнейшую передачу Ваших контактных данных менеджерам нашего сайта.</p>
        <p class="privacy_p">В случае отзыва согласия на обработку своих персональных данных мы обязуемся удалить Ваши персональные данные в срок не позднее 3 рабочих дней.</p>
    </div>
    <div class="privacy-policy_div" id="terms">
        <p class="privacy_p">1. Все материалы, содержащиеся на сайте, являются собственностью данного Сервиса. Их использование и перепечатка допустимы только с предварительного согласия правообладателей.</p>
        <p class="privacy_p">2. Для регистрации каждый Пользователь должен указать действующий адрес электронной почты, на который он получит после регистрации логин и пароль от своей учетной записи.</p>
        <p class="privacy_p">3. Копирование материалов сайта запрещены без предварительного согласия правообладателей.</p>
        <p class="privacy_p">4. Запрещено совместное использование одной учетной записи более, чем одним Пользователем. В случае выявления данного нарушения учетная запись блокируется без права восстановления, денежные средства, уплаченные за подписку, не возвращаются.</p>
        <p class="privacy_p">5. Ответственность за сохранность логина и пароля от учетной записи полностью лежит на Пользователе. В случае, если существует вероятность, что логин и пароль стали известны третьим лицам, Пользователь должен самостоятельно предпринять меры для их смены, или уведомить об этом Администрацию Сервиса любым доступным способом.</p>
        <p class="privacy_p">6. Сервис не несет ответственности за любые убытки Пользователя, возникших в случае технических сбоев оборудования или в сети Интернет, в результате действий злоумышленников и третьих лиц, а также в случае некачественного копирования сигналов Пользователем, или его низкой компетенции в торговле бинарными опционами.</p>
        <p class="privacy_p">7. Пользователь понимает, что международный валютный рынок Форекс является внебиржевым, и не имеет единого центра котировок. По этой причине допускаются незначительные расхождения в ценах на активы, указанных в сигналах Сервиса, и ценах на активы в брокерском терминале Пользователя.</p>
        <p class="privacy_p">8. Служба технической поддержки Сервиса не обязана решать проблемы с программным обеспечением на стороне Пользователя, делающие невозможным нормальное функционирование Сервиса. Пользователь должен самостоятельно поддерживать свое аппаратное и программное обеспечение в исправном состоянии.</p>
        <p class="privacy_p">9. Служба технической поддержки Сервиса может оставить без ответа сообщения Пользователей, если сочтет их: провокационными, заданными не по существу, оскорбительными для Администрации или сотрудников Сервиса. Сообщения, содержащие нецензурные выражения, игнорируются. Если сообщения с бранью приходят от зарегистрированного Пользователя, его учетная запись блокируется, IP-адрес заносится в блок-лист. Деньги, уплаченные за подписку, не возвращаются. Не гарантируются ответы на сообщения, написанные латиницей.</p>
        <p class="privacy_p">10. Служба технической поддержки Сервиса не обязана давать консультации по вопросам, касающихся работы брокеров, а также решения возможных проблем, возникших у Пользователя с его брокером.</p>
        <p class="privacy_p">11. Мы имеем право заблокировать учетную запись пользователя, если: пользователь умышленно передал доступ от своей учетной записи третьим лицам; при отсутствии торговой активности на брокерском счету пользователя, открытом по нашей партнерской ссылке; при обнаружении множественных регистраций одного пользователя на нашем сайте с целью повторного использования спец.предложений и скидок; замечена подозрительная активность, свойственная злоумышленникам. Если ваша учетная запись оказалась заблокированной, и вы не согласны с действиями Администрации, пожалуйста, свяжитесь с нами одним из удобных способов.</p>
    </div>
    <div class="chart_data"></div>
    <link rel="stylesheet" href="./js/libs/css/libs.min.css" property="stylesheet">
    <!--[if lte IE 8]><script src="http://phpbbex.com/oldies/oldies.js" charset="utf-8"></script><![endif]-->
    <script src="./js/libs/jquery.min.js"></script>
    <script src="./js/libs/jquery.fancybox.pack.js"></script>
    <script src="./js/libs/jquery.bxslider.min.js"></script>
    <script src="./js/libs/jquery.inputmask.bundle.min.js"></script>
    <script src="./js/libs/jquery.validate.min.js"></script>
    <script src="./js/libs/ion.rangeSlider.min.js"></script>
    <script src="./js/libs/amcharts.js"></script>
    <script src="./js/libs/serial.js"></script>
    <script src="./dev/js/main1.js"></script>
</body>

</html>
