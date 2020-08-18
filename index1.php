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
    <title>Прибыльные сигналы для торговли бинарными опционами</title>
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.min.css" >
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
                        <img class="header_logo_img" src="./img/logo.png" alt=""/>
                    </a>
                </div>
                <p class="header_desc">Прибыльные сигналы для торговли<br> бинарными опционами</p>
                <div class="header_right">
                    <a class="header_phone" href="mailto:binary@yandex.ru">binary@yandex.ru</a><br>
                    <a href="#cabinet" class="header_cabinet fancybox-popup">Войти в личный кабинет</a>
                </div>
            </div>
        </header>
        <div class="wrapper banner" id="block_2">
            <div class="inner">
                <h1 class="banner_head">Заработай $2 280 за 20 дней<span class="color">*</span></h1>
                <p class="banner_after_head">Прибыльные сигналы для торговли бинарными опционами<br>
                    с 68% верными сделками</p>
                <ul class="banner_ul">
                    <li class="banner_li">68% верных сделок - достоверная статистика, проверьте сами;</li>
                    <li class="banner_li">Бесплатная подписка на 30 дней;</li>
                    <li class="banner_li">До 970% прибыли в первый месяц.</li>
                </ul>
                <a href="#banner_form" class="banner_button big no_gr_sw fancybox-popup">Получить бесплатный демо-доступ к сигналам</a>
                <p class="banner_header_more"><span class="color">*</span> по результатам работы 3 214 трейдеров, использующих сигналы Trade Signals</p>
            </div>
        </div>
    </div>
    <div class="wrapper reviews" id="block_3">
        <div class="inner">
            <h2 class="default_head">Посмотрите результаты трейдеров,<br>
                которые работают с сигналами Trade Signals</h2>
            <div class="reviews_slider_wrap">
                <ul class="reviews_slider" id="reviews_slider">
                    <li class="review clearfix">
                        <a href="./img/review_img_1.jpg" class="review_a zoom fancybox">
                            <img src="./img/review_img_1.jpg" alt="" class="review_img">
                        </a>
                        <div class="review_info">
                            <div class="info_ul_group clearfix">
                                <ul class="info_ul">
                                    <li class="info_li"><span class="heavy">Начальный депозит:</span> $10</li>
                                    <li class="info_li"><span class="heavy">Текущий баланс:</span> $19 867</li>
                                    <li class="info_li"><span class="heavy">Средний заработок в месяц:</span> $2 800</li>
                                </ul>
                                <ul class="info_ul">
                                    <li class="info_li"><span class="heavy">Опыт работы:</span> 10 месяцев</li>
                                    <li class="info_li"><span class="heavy">Процент успешных сделок:</span> 86%</li>
                                </ul>
                            </div>
                            <p class="info_txt">«Хочу поблагодарить Trade Signals за качественные сигналы и внимательное отношение к клиенту. Зная рекламные приемы, я с легкостью могу распознать «сайт-лохотрон». К данному сайту у меня сразу возникло доверие. С меня не требовали оплаты или открытия счета, а предложили бесплатный доступ и ответили на все мои вопросы. Уже два месяца я являюсь подписчиком у ребят.»</p>
                            <p class="info_name"><span class="name">Мария Краснова</span>, менеджер по рекламе</p>
                        </div>
                    </li>
                    <li class="review clearfix">
                        <a href="./img/review_img_1.jpg" class="review_a zoom fancybox">
                            <img src="./img/review_img_1.jpg" alt="" class="review_img">
                        </a>
                        <div class="review_info">
                            <div class="info_ul_group clearfix">
                                <ul class="info_ul">
                                    <li class="info_li"><span class="heavy">Начальный депозит:</span> $10</li>
                                    <li class="info_li"><span class="heavy">Текущий баланс:</span> $19 867</li>
                                    <li class="info_li"><span class="heavy">Средний заработок в месяц:</span> $2 800</li>
                                </ul>
                                <ul class="info_ul">
                                    <li class="info_li"><span class="heavy">Опыт работы:</span> 10 месяцев</li>
                                    <li class="info_li"><span class="heavy">Процент успешных сделок:</span> 86%</li>
                                </ul>
                            </div>
                            <p class="info_txt">«Хочу поблагодарить Trade Signals за качественные сигналы и внимательное отношение к клиенту. Зная рекламные приемы, я с легкостью могу распознать «сайт-лохотрон». К данному сайту у меня сразу возникло доверие. С меня не требовали оплаты или открытия счета, а предложили бесплатный доступ и ответили на все мои вопросы. Уже два месяца я являюсь подписчиком у ребят.»</p>
                            <p class="info_name"><span class="name">Мария Краснова</span>, менеджер по рекламе</p>
                        </div>
                    </li>
                    <li class="review clearfix">
                        <a href="./img/review_img_1.jpg" class="review_a zoom fancybox">
                            <img src="./img/review_img_1.jpg" alt="" class="review_img">
                        </a>
                        <div class="review_info">
                            <div class="info_ul_group clearfix">
                                <ul class="info_ul">
                                    <li class="info_li"><span class="heavy">Начальный депозит:</span> $10</li>
                                    <li class="info_li"><span class="heavy">Текущий баланс:</span> $19 867</li>
                                    <li class="info_li"><span class="heavy">Средний заработок в месяц:</span> $2 800</li>
                                </ul>
                                <ul class="info_ul">
                                    <li class="info_li"><span class="heavy">Опыт работы:</span> 10 месяцев</li>
                                    <li class="info_li"><span class="heavy">Процент успешных сделок:</span> 86%</li>
                                </ul>
                            </div>
                            <p class="info_txt">«Хочу поблагодарить Trade Signals за качественные сигналы и внимательное отношение к клиенту. Зная рекламные приемы, я с легкостью могу распознать «сайт-лохотрон». К данному сайту у меня сразу возникло доверие. С меня не требовали оплаты или открытия счета, а предложили бесплатный доступ и ответили на все мои вопросы. Уже два месяца я являюсь подписчиком у ребят.»</p>
                            <p class="info_name"><span class="name">Мария Краснова</span>, менеджер по рекламе</p>
                        </div>
                    </li>
                    <li class="review clearfix">
                        <a href="./img/review_img_1.jpg" class="review_a zoom fancybox">
                            <img src="./img/review_img_1.jpg" alt="" class="review_img">
                        </a>
                        <div class="review_info">
                            <div class="info_ul_group clearfix">
                                <ul class="info_ul">
                                    <li class="info_li"><span class="heavy">Начальный депозит:</span> $10</li>
                                    <li class="info_li"><span class="heavy">Текущий баланс:</span> $19 867</li>
                                    <li class="info_li"><span class="heavy">Средний заработок в месяц:</span> $2 800</li>
                                </ul>
                                <ul class="info_ul">
                                    <li class="info_li"><span class="heavy">Опыт работы:</span> 10 месяцев</li>
                                    <li class="info_li"><span class="heavy">Процент успешных сделок:</span> 86%</li>
                                </ul>
                            </div>
                            <p class="info_txt">«Хочу поблагодарить Trade Signals за качественные сигналы и внимательное отношение к клиенту. Зная рекламные приемы, я с легкостью могу распознать «сайт-лохотрон». К данному сайту у меня сразу возникло доверие. С меня не требовали оплаты или открытия счета, а предложили бесплатный доступ и ответили на все мои вопросы. Уже два месяца я являюсь подписчиком у ребят.»</p>
                            <p class="info_name"><span class="name">Мария Краснова</span>, менеджер по рекламе</p>
                        </div>
                    </li>
                    <li class="review clearfix">
                        <a href="./img/review_img_1.jpg" class="review_a zoom fancybox">
                            <img src="./img/review_img_1.jpg" alt="" class="review_img">
                        </a>
                        <div class="review_info">
                            <div class="info_ul_group clearfix">
                                <ul class="info_ul">
                                    <li class="info_li"><span class="heavy">Начальный депозит:</span> $10</li>
                                    <li class="info_li"><span class="heavy">Текущий баланс:</span> $19 867</li>
                                    <li class="info_li"><span class="heavy">Средний заработок в месяц:</span> $2 800</li>
                                </ul>
                                <ul class="info_ul">
                                    <li class="info_li"><span class="heavy">Опыт работы:</span> 10 месяцев</li>
                                    <li class="info_li"><span class="heavy">Процент успешных сделок:</span> 86%</li>
                                </ul>
                            </div>
                            <p class="info_txt">«Хочу поблагодарить Trade Signals за качественные сигналы и внимательное отношение к клиенту. Зная рекламные приемы, я с легкостью могу распознать «сайт-лохотрон». К данному сайту у меня сразу возникло доверие. С меня не требовали оплаты или открытия счета, а предложили бесплатный доступ и ответили на все мои вопросы. Уже два месяца я являюсь подписчиком у ребят.»</p>
                            <p class="info_name"><span class="name">Мария Краснова</span>, менеджер по рекламе</p>
                        </div>
                    </li>
                </ul>
                <div id="bx-pager" class="review_pager">
                    <a data-slide-index="0" href="" class="review_pager_a">
                        <img src="./img/review_pager_1.jpg" alt="" class="review_pager_img">
                        <p class="review_pager_name">Мария<br> Краснова</p>
                    </a>
                    <a data-slide-index="1" href="" class="review_pager_a">
                        <img src="./img/review_pager_1.jpg" alt="" class="review_pager_img">
                        <p class="review_pager_name">Мария<br> Краснова</p>
                    </a>
                    <a data-slide-index="2" href="" class="review_pager_a">
                        <img src="./img/review_pager_1.jpg" alt="" class="review_pager_img">
                        <p class="review_pager_name">Мария<br> Краснова</p>
                    </a>
                    <a data-slide-index="3" href="" class="review_pager_a">
                        <img src="./img/review_pager_1.jpg" alt="" class="review_pager_img">
                        <p class="review_pager_name">Мария<br> Краснова</p>
                    </a>
                    <a data-slide-index="4" href="" class="review_pager_a">
                        <img src="./img/review_pager_1.jpg" alt="" class="review_pager_img">
                        <p class="review_pager_name">Мария<br> Краснова</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper merge_money" id="block_4">
        <div class="inner">
            <div class="merge_money_wrap">
                <h2 class="merge_money_head">Cливаете деньги?</h2>
                <ul class="merge_money_ul">
                    <li class="merge_money_li">Сотни стратегий...</li>
                    <li class="merge_money_li">Тысячи индикаторов...</li>
                    <li class="merge_money_li">В голове полная каша</li>
                </ul>
                <p class="merge_money_info">Из-за постоянных неудач оправдываете себя тем, что бинарные опционы - это лохотрон?</p>
            </div>
        </div>
    </div>
    <div class="wrapper experienced" id="block_5">
        <img src="./img/experienced_men.png" alt="" class="experienced_men">
        <div class="inner clearfix">
            <h2 class="default_head">Чтобы стать опытным трейдером, вам пришлось бы:</h2>
            <div class="experienced_wrap">
                <ul class="experienced_ul">
                    <li class="experienced_li">Выучить технический анализ;</li>
                    <li class="experienced_li">Выучить фундаментальный анализ;</li>
                    <li class="experienced_li">Выявить из сотен стратегий лучшую;</li>
                    <li class="experienced_li">Одновременно анализировать десяток индикаторов; </li>
                    <li class="experienced_li">Ежедневно тратить 4 часа на работу над ошибками и составление торгового плана;</li>
                </ul>
                <p class="experienced_p">Все это равноценно получению<br> полноценного высшего образования.</p>
            </div>
        </div>
        <div class="experienced_line">
            <div class="inner clearfix">
                <div class="line_wrap">
                    <p class="line_txt">По статистике<span class="color">*</span> только 1% трейдеров добиваются успеха и начинают зарабатывать.</p>
                    <div class="line_info"><span class="color">*</span>Статистика предоставлена <a href="http://www.nytimes.com/2010/03/28/business/28trader.html?pagewanted=1&sq=traders&st=cse&scp=1&_r=0" class="link" target="_blank"><img src="./img/line_icon.png" alt="" class="line_icon"></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper signals" id="block_6">
        <div class="inner">
            <h2 class="default_head">Рабочие сигналы Trade Signals
            <span class="after_head">Просто следуйте нашим рекомендациям и зарабатывайте <span class="red">от $500 до $25 000 в месяц</span></span></h2>
            <div class="signals_head">
                <div class="signals_head_item">
                    <img src="./img/item_head_icon_1.png" alt="" class="item_icon">
                    <p class="item_txt"><strong>Без навыков трейдера,</strong><br>
                        доступно даже новичку</p>
                </div>
                <div class="signals_head_item">
                    <img src="./img/item_head_icon_2.png" alt="" class="item_icon">
                    <p class="item_txt"><strong>Без установки</strong><br>
                        программного обеспечения</p>
                </div>
            </div>
            <div class="signals_wrap clearfix">
                <div class="signals_item">
                    <h3 class="item_head"><span class="green">Сигналы Trade Signals оповещают вас о предстоящих выгодных сделках</span> в режиме реального времени без задержек.</h3>
                    <p class="item_after_head">Вам поступают рекомендации, с какими параметрами следует открыть сделку у брокера:</p>
                    <ul class="item_ul">
                        <li class="item_li"><span class="li_num">1</span> Какой актив выбрать;</li>
                        <li class="item_li"><span class="li_num">2</span> Куда пойдет цена, вверх или вниз (тип опциона);</li>
                        <li class="item_li"><span class="li_num">3</span> Цена входа в сделку;</li>
                        <li class="item_li"><span class="li_num">4</span> Время экспирации</li>
                    </ul>
                    <p class="item_info">Вам остается лишь повторить сделку у своего брокера, дождаться времени закрытия сделки и получить прибыль!</p>
                </div>
                <div class="signals_item">
                    <img src="./img/signals_item_right.png" alt="" class="item_img">
                </div>
            </div>
            <a href="#banner_form" class="signals_button large fancybox-popup">Получить бесплатный демо-доступ к сигналам</a>
        </div>
    </div>
    <div class="wrapper triggers" id="block_7">
        <div class="inner">
            <div class="triggers_wrap">
                <div class="trigger">
                    <img class="trigger_icon" src="./img/trigger_icon_1.png" alt=""/>
                    <div class="trigger_info">
                        <p class="info_head">68% сигналов верны</p>
                        <p class="info_txt">Для того, чтобы работать "в плюс", необходимо совершать 57% успешных сделок. Мы же гарантируем вам 68% верных сделок.</p>
                    </div>
                </div>
                <div class="trigger">
                    <img class="trigger_icon" src="./img/trigger_icon_2.png" alt=""/>
                    <div class="trigger_info">
                        <p class="info_head">10 сигналов каждый час</p>
                        <p class="info_txt">Торгуйте в свободное время, не опасаясь, что не дождетесь сигнала. Частота сигналов не влияет на качество их прогнозов.</p>
                    </div>
                </div>
                <div class="trigger">
                    <img class="trigger_icon" src="./img/trigger_icon_3.png" alt=""/>
                    <div class="trigger_info">
                        <p class="info_head">24 часа в сутки</p>
                        <p class="info_txt">Торгуйте в самое выгодное время работы крупнейших бирж - Токио, Лондон, Нью-Йорк, Сидней.</p>
                    </div>
                </div>
                <div class="trigger">
                    <img class="trigger_icon" src="./img/trigger_icon_4.png" alt=""/>
                    <div class="trigger_info">
                        <p class="info_head">Экспирации от 2 до 60 минут</p>
                        <p class="info_txt">Это позволяет получать до 90% вознаграждения брокера, а не 50-60%, как это бывает с короткими экспирациями.</p>
                    </div>
                </div>
                <div class="trigger">
                    <img class="trigger_icon" src="./img/trigger_icon_5.png" alt=""/>
                    <div class="trigger_info">
                        <p class="info_head">Моментальное оповещение</p>
                        <p class="info_txt">Звуковое оповещение приходит в ваш личный кабинет. Мы не используем СМС, скайп или E-mail, т.к. эти способы имеют задержки в несколько минут.</p>
                    </div>
                </div>
                <div class="trigger">
                    <img class="trigger_icon" src="./img/trigger_icon_6.png" alt=""/>
                    <div class="trigger_info">
                        <p class="info_head">30 дней бесплатной подписки</p>
                        <p class="info_txt">Проверьте точность прогнозов благодаря бесплатной подписке на 30 дней.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    <div class="wrapper video" id="block_8">-->
<!--        <div class="inner">-->
<!--            <h2 class="default_head">Посмотрите видео инструкцию,-->
<!--                как просто получать прибыль с помощью сигналов</h2>-->
<!--            <a href="https://www.youtube.com/embed/lgT1AidzRWM?rel=0&autoplay=1" class="video_a fancybox-media"><img src="./img/mac.png" alt="" class="video_img"></a>-->
<!--        </div>-->
<!--        <img src="./img/mac_shadow.png" alt="" class="mac_shadow">-->
<!--    </div>-->
    <div class="wrapper statistics _after_video" id="block_9">
        <div class="inner">
            <h2 class="default_head txt_shadow">Честная статистика - проверьте<br> результаты наших сигналов
                <span class="after_head">Вы можете проверить достоверность данных на официальном сайте своего брокера. В этом наше отличие от других поставщиков сигналов.</span></h2>
        </div>
        <div class="statistics_tabs">
            <div class="inner">
                <span class="tabs_item active" data-id="date">Статистика за <?php echo date("d.m.y");?></span>
                <span class="tabs_item" data-id="month">Результаты за месяц</span>
                <span class="tabs_item" data-id="half-year">Результаты за полгода</span>
                <span class="tabs_item" data-id="year">Результаты за год</span>
            </div>
        </div>
        <div class="inner">
            <div class="statistics_time">
                <img src="./img/time_icon.png" alt="" class="time_icon"><span class="time_txt">Наше время:</span><span class="time_count">10:23:24</span>
            </div>
            <div class="statistics_wrap">
                <div class="statistics_item active" data-id="date">
                    <div id="table" class="tableHome tableNEW">
                        <div class="tr">
                            <div class="thead">
                                <span class="li_1">Актив</span>
                                <span class="li_2">Тип</span>
                                <span class="li_3">Время Входа</span>
                                <span class="li_4">Цена Входа</span>
                                <span class="li_5">Время Выхода</span>
                                <span class="li_6">Цена Выхода</span>
                                <span class="li_7">Ставка</span>
                                <span class="li_8">Результат</span>
                            </div>
                            <div class="tbody"></div>
                        </div>
                    </div>
                </div>
                <div class="statistics_item" data-id="month">
                    <div id="chartdiv_1" class="chart"></div>
                </div>
                <div class="statistics_item" data-id="half-year">
                    <div id="chartdiv_2" class="chart"></div>
                </div>
                <div class="statistics_item" data-id="year">
                    <div id="chartdiv_3" class="chart"></div>
                </div>
            </div>
            <div class="statistics_total">
                <span class="total_item">Итого на данный час:</span>
                <span class="total_item">Количество сделок: <span class="red"></span></span>
                <span class="total_item">Прибыль: <span class="red"></span></span>
            </div>
        </div>
    </div>
    <div class="wrapper calculate" id="block_10">
        <div class="inner">
            <h2 class="default_head shadow">Рассчитайте свой доход за первый месяц
                <span class="after_head">По умолчанию выставлены средние значения, полученные от 3 214 наших трейдеров</span></h2>
            <div class="calculate_wrap">
                <div class="calculate_range_wrap">
                    <div class="range_item nave_line">
                        <div class="item_head clearfix">
                            <div class="head_name">Ежедневно готов торговать</div>
                            <div class="head_value green">
                                <input type="text" class="value js_hour_value" name="hour" value="1" maxlength="2"/>
                                <span class="txt js_hour_txt">час</span>
                            </div>
                        </div>
                        <div class="item_slide green">
                            <input type="text" class="range_hour" name="range_hour" value="" />
                        </div>
                    </div>
                    <div class="range_item nave_line">
                        <div class="item_head clearfix">
                            <div class="head_name">Количество рабочих дней</div>
                            <div class="head_value blue">
                                <input type="text" class="value js_days_value" name="days" value="22" maxlength="2"/>
                                <span class="txt js_days_txt">дня</span>
                            </div>
                        </div>
                        <div class="item_slide blue">
                            <input type="text" class="range_days" name="range_days" value="" />
                        </div>
                    </div>
                    <div class="range_item nave_line">
                        <div class="item_head clearfix">
                            <div class="head_name">Размер депозита у брокера</div>
                            <div class="head_value pink">
                                <input type="text" class="value js_deposit_value" name="deposit" value="200" maxlength="3"/>
                                <span class="txt">$</span>
                            </div>
                        </div>
                        <div class="item_slide pink">
                            <input type="text" class="range_deposit" name="range_deposit" value="" />
                        </div>
                    </div>
                    <div class="range_item">
                        <div class="item_head clearfix">
                            <div class="head_name">Вознаграждение брокера</div>
                            <div class="head_value yellow">
                                <input type="text" class="value js_fee_value" name="fee" value="80" maxlength="2"/>
                                <span class="txt">%</span>
                            </div>
                        </div>
                        <div class="item_slide yellow">
                            <input type="text" class="range_fee" name="range_fee" value=""/>
                        </div>
                    </div>
                    <div class="range_item">
                        <div class="item_head clearfix">
                            <div class="head_name no_mgn">Рекомендованная ставка при<br>
                                депозите в $<span class="js_deposit_txt">100</span></div>
                            <div class="head_value red">
                                <span class="value no_line">$<span class="js_rate_value">5</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="calculate_total">
                    <p class="total_head">Ваш доход составляет:</p>
                    <div class="total_value">$ <span class="js_total_sum">500</span></div>
                    <p class="total_txt">Доход рассчитывается при условии инвестирования <strong>5% депозита в каждую сделку</strong></p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper horizontal_form" id="block_11">
        <div class="inner">
            <h2 class="default_head white">Получите бесплатный демо-доступ к сигналам на 30 дней
                и начните зарабатывать уже сегодня!</h2>
            <form action="./handlers/send-form-demo.php" class="form_horizontal" method="post">
                <label class="form_label">
                    <input type="text" name="name" class="form_input no_bg white" required value="" placeholder="Введите Ваше имя"/>
                </label>
                <label class="form_label is_last">
                    <input type="text" name="email" class="form_input no_bg white" required value="" placeholder="Введите Ваш E-mail"/>
                </label>
                <input type="hidden" name="utm_medium" class="input_hid" value="<?php echo($utm_medium);?>" />
                <input type="hidden" name="utm_source" class="input_hid" value="<?php echo($utm_source);?>" />
                <input type="hidden" name="utm_campaign" class="input_hid" value="<?php echo($utm_campaign);?>" />
                <input type="hidden" name="utm_content" class="input_hid" value="<?php echo($utm_content);?>" />
                <input type="hidden" name="utm_term" class="input_hid" value="<?php echo($utm_term);?>" />
                <input type="hidden" name="cm_title" class="input_hid" value="<?php echo($cm_title);?>" />
                <input type="hidden" name="position" class="input_hid" value="Бесплатный демо-доступ" />
                <input type="hidden" name="mail" class="input_hid" value="" />
                <input type="submit" class="form_button md" value="Получить бесплатный демо-доступ" />
            </form>
            <p class="form_wrap_bottom_info">Демо-доступ придет вам на Email в течение 30 секунд</p>
        </div>
    </div>
    <div class="wrapper accuracy" id="block_12">
        <div class="inner clearfix">
            <div class="accuracy_wrap">
                <h2 class="accuracy_head">Почему точность наших сигналов 68%</h2>
                <p class="accuracy_info">Сигналы генерируются роботом, а значит, на принятие решения не влияет психология и человеческий фактор (неуверенность, невнимательность, усталость и т.п.)</p>
                <p class="accuracy_info">Робот использует 20 индикаторов и целый комплекс алгоритмов на широком наборе торговых инструментов и таймфреймов. В общей сложности мы используем около 50 автоматизированных источников сигналов.</p>
            </div>
        </div>
    </div>
<!--    <div class="wrapper account" id="block_13">-->
<!--        <div class="inner">-->
<!--            <h2 class="default_head">Проверенные и рекомендованные брокеры-->
<!--                <span class="after_head">Открой счет у брокера и получи 30 дней доступа к нашему сервису <span class="yellow">в подарок</span></span></h2>-->
<!--            <div class="account_wrap">-->
<!--                <div class="account_item">-->
<!--                    <img src="./img/account_img_1.jpg" alt="" class="item_img">-->
<!--                    <a href="#" class="item_button" target="_blank">Открыть счет</a>-->
<!--                </div>-->
<!--                <div class="account_item">-->
<!--                    <img src="./img/account_img_2.jpg" alt="" class="item_img">-->
<!--                    <a href="http://aff.utrader.com/goto/track/?scheme_id=4531&aff_id=1863&campaign=major&lcw=1" class="item_button" target="_blank">Открыть счет</a>-->
<!--                </div>-->
<!--                <div class="account_item">-->
<!--                    <img src="./img/account_img_3.jpg" alt="" class="item_img">-->
<!--                    <a href="http://go.binaryoptions.partners/visit/?bta=35814&nci=5558" class="item_button" target="_blank">Открыть счет</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <div class="wrapper articles" id="block_14">
        <div class="inner">
            <h2 class="default_head">Не знаешь, с чего начать?
                <span class="after_head">Прочти статьи наших трейдеров</span></h2>
            <div class="articles_wrap">
                <div class="articles_item">
                    <img src="./img/articles/articles_img_1.jpg" alt="" class="item_img">
                    <a href="./articles/article-1.html" class="item_link articles_link fancybox-popup fancybox.ajax">Что такое бинарные опционы?</a>
                    <p class="item_txt">Просто о сложном. Принципы торговли бинарными опционами и основные термины. </p>
                </div>
                <div class="articles_item">
                    <img src="./img/articles/articles_img_2.jpg" alt="" class="item_img">
                    <a href="./articles/article-2.html" class="item_link articles_link fancybox-popup fancybox.ajax">1000% прибыли в месяц: миф или реальность?</a>
                    <p class="item_txt">Математически точный и однозначный ответ на вопрос, можно ли увеличить стартовый капитал в 10 раз за один месяц. </p>
                </div>
                <div class="articles_item">
                    <img src="./img/articles/articles_img_3.jpg" alt="" class="item_img">
                    <a href="./articles/article-3.html" class="item_link articles_link fancybox-popup fancybox.ajax">Брокеры бинарных опционов с демо-доступом</a>
                    <p class="item_txt">Учись торговать бинарными опционами без вложений и рисков.</p>
                </div>
                <div class="articles_item">
                    <img src="./img/articles/articles_img_4.jpg" alt="" class="item_img">
                    <a href="./articles/article-4.html" class="item_link articles_link fancybox-popup fancybox.ajax">Как правильно пользоваться демо-доступом?</a>
                    <p class="item_txt">Для чего нужен демо-доступ к нашим сигналам, и как его использовать.</p>
                </div>
                <div class="articles_item">
                    <img src="./img/articles/articles_img_5.jpg" alt="" class="item_img">
                    <a href="./articles/article-5.html" class="item_link articles_link fancybox-popup fancybox.ajax">Коварство бинарных опционов</a>
                    <p class="item_txt">Важные моменты, как не потерять ваши деньги на торговле бинарными опционами.  </p>
                </div>
                <div class="articles_item">
                    <img src="./img/articles/articles_img_6.jpg" alt="" class="item_img">
                    <a href="./articles/article-6.html" class="item_link articles_link fancybox-popup fancybox.ajax">Бизнес-план</a>
                    <p class="item_txt">Пошаговая инструкция, как достигнуть дохода свыше 2000$ в месяц в сжатые сроки. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper faq" id="block_15">
        <div class="inner">
            <h2 class="default_head">Часто задаваемые вопросы</h2>
            <div class="faq_wrap">
                <div class="faq_item">
                    <p class="item_head">Сколько сигналов я получу за день?</p>
                    <div class="item_info">
                        <p class="info_p">Мы транслируем от 150 до 200 сигналов в сутки в зависимости от активности рынка.</p>
                    </div>
                </div>
                <div class="faq_item">
                    <p class="item_head">Каким образом генерируется такое большое количество сигналов?</p>
                    <div class="item_info">
                        <p class="info_p">Это достигается за счет использования целого комплекса алгоритмов на широком наборе торговых инструментов и таймфреймов. В общей сложности мы используем около 50 автоматизированных источников сигналов.</p>
                    </div>
                </div>
                <div class="faq_item">
                    <p class="item_head">Какова точность сигналов?</p>
                    <div class="item_info">
                        <p class="info_p">Процент выигрышных сигналов варьируется день ото дня, но на длительной дистанции превышает 65%.</p>
                    </div>
                </div>
                <div class="faq_item">
                    <p class="item_head">Бывают ли убыточные дни?</p>
                    <div class="item_info">
                        <p class="info_p">Да, конечно, и это нормально для спекулятивной торговли, но их количество незначительно.</p>
                    </div>
                </div>
                <div class="faq_item">
                    <p class="item_head">Зачем вы продаете сигналы, если и так зарабатываете на торговле бинарными опционами?</p>
                    <div class="item_info">
                        <p class="info_p">У любой торговой стратегии есть предел монетизации. В нашем случае мы достигли максимальной ставки у нашего брокера. Таким образом, продавая сигналы, мы извлекаем дополнительную прибыль из нашей торговли.</p>
                    </div>
                </div>
                <div class="faq_item">
                    <p class="item_head">В какое время приходят сигналы?</p>
                    <div class="item_info">
                        <p class="info_p">Сигналы транслируются в рабочие дни с 03.00 до 00.00 по московскому времени.</p>
                    </div>
                </div>
                <div class="faq_item">
                    <p class="item_head">Обучаете ли вы торговле по вашим стратегиям?</p>
                    <div class="item_info">
                        <p class="info_p">Нет, никто в здравом уме не станет продавать действительно прибыльный алгоритм. Вспомните поговорку «Кто умеет – делает, кто не умеет – учит». Мы продаем качественные сигналы, а обучением занимаются различные псевдо-гуру, не добившиеся успеха в спекулятивной торговле.</p>
                    </div>
                </div>
                <div class="faq_item_hidden_group">
                    <div class="faq_item">
                        <p class="item_head">Какой размер депозита необходим для торговли по вашим сигналам?</p>
                        <div class="item_info">
                            <p class="info_p">Размер депозита должен быть как минимум в 20 раз больше минимальной ставки у вашего брокера. Например, если минимальная ставка 10 долларов, то мы рекомендуем начинать торговлю хотя бы с 200 долларов по правилам грамотного управления капиталом.</p>
                        </div>
                    </div>
                    <div class="faq_item">
                        <p class="item_head">Используете ли вы мартингейл (удвоение ставки после проигрыша) в вашей торговле?</p>
                        <div class="item_info">
                            <p class="info_p">Нет, мы его не используем и никому не рекомендуем, это прямой путь к потере депозита.</p>
                        </div>
                    </div>
                    <div class="faq_item">
                        <p class="item_head">На что стоит обратить внимание при выборе брокера?</p>
                        <div class="item_info">
                            <p class="info_p">Обратите внимание на наличие у брокера необходимых лицензий – CySEC, FSA или ЦРОФР. Напишите в чат технической поддержки на сайте брокера, чтобы проверить ее качество. Наиболее популярных брокеров, Вы можете найти <a class="info_a js_scroll" href="#block_12" data-scroll-block="#block_12">ЗДЕСЬ!</a></p>
                        </div>
                    </div>
                    <div class="faq_item">
                        <p class="item_head">Стоит ли брать бонус у брокера при открытии счета?</p>
                        <div class="item_info">
                            <p class="info_p">Это ваше личное дело, в любом случае вы сможете этот бонус снять только после выполнения определенных условий. Мы рекомендуем торговать только на свои деньги.</p>
                        </div>
                    </div>
                    <div class="faq_item">
                        <p class="item_head">В Интернете масса проектов, которые предлагают сигналы для бинарных опционов бесплатно. Почему вы берете за это деньги?</p>
                        <div class="item_info">
                            <p class="info_p">Мы считаем, что бесплатный сыр бывает только в мышеловке. К тому же, у нас тоже предусмотрены бесплатные варианты подписки.</p>
                        </div>
                    </div>
                    <div class="faq_item">
                        <p class="item_head">Сколько я могу заработать с Вашими сигналами?</p>
                        <div class="item_info">
                            <p class="info_p">Мы не будем вам обещать огромные проценты прибыли, но мы обещаем, что наши сигналы помогут вам иметь стабильный доход. Размер прибыли будет зависеть и от Ваших первоначальных условий: начального депозита и количества часов, которые Вы сможете тратить на торговлю. Мы специально разработали простой калькулятор, который поможет  Вам это рассчитать. Кроме того, наш эксперт подготовил <a href="./articles/article-6.html" class="info_a fancybox-popup fancybox.ajax">«Бизнес план»</a>, как в сжатые сроки с начальных 200$ выйти на ежемесячный доход в 2000$. Ознакомиться с данной статьей можно, перейдя <a href="./articles/article-6.html" class="info_a fancybox-popup fancybox.ajax">по ссылке</a>.</p>
                        </div>
                    </div>
                    <div class="faq_item">
                        <p class="item_head">Как получить бесплатный демо-доступ?</p>
                        <div class="item_info">
                            <p class="info_p">Для начала Вам необходимо зарегистрироваться на нашем сайте.
                                На Ваш электронный адрес придет ссылка с подтверждением авторизации, и вторым письмом придет ваш пароль.  В личном кабинете в разделе торговые сигналы вам будут доступны сигналы по всем валютным парам.</p>
                        </div>
                    </div>
                    <div class="faq_item">
                        <p class="item_head">Сколько стоит подписка после демо-доступа?</p>
                        <div class="item_info">
                            <p class="info_p">Стоимость варьируется от  0 до 200$ за месяц подписки. У нас есть несколько спецпредложений: первый месяц бесплатно и месяц с 50% скидкой. Ознакомиться со всеми тарифами и выбрать наиболее удобный для вас, Вы сможете в личном кабинете в разделе «Тарифы».</p>
                        </div>
                    </div>
                    <div class="faq_item">
                        <p class="item_head">Сколько будет действовать демо-доступ?</p>
                        <div class="item_info">
                            <p class="info_p">Срок действия демо-доступа не ограничен</p>
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
                    Задайте их нашему финансовому эксперту</h2>
                <form action="./handlers/send-form-contact.php" class="form_vertical" method="post">
                    <label class="form_label">
                        <input type="text" name="name" class="form_input no_bg white" required value="" placeholder="Введите Ваше имя"/>
                    </label>
                    <label class="form_label">
                        <input type="text" name="email" class="form_input no_bg white" required value="" placeholder="Введите Ваш E-mail"/>
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
                        <img class="footer_logo_img" src="./img/logo.png" alt=""/>
                    </a>
                </div>
                <p class="footer_desc">Прибыльные сигналы для торговли<br> бинарными опционами</p>
                <div class="footer_right">
                    <a class="footer_phone" href="mailto:binary@yandex.ru">binary@yandex.ru</a><br>
                    <a class="footer_privacy fancybox-popup" href="#privacy">Политика конфиденциальности</a><br>
                    <a class="footer_privacy fancybox-popup" href="#terms">Правила и условия сервиса</a>
                    <div class="footer_cm">
                        <div class="convert">
                            <p class="convert_p">Сделано в</p>
                            <a href="http://convertmonster.ru/landing-page/?utm_source=google.com.&amp;utm_medium=footer&amp;utm_campaign=landing" class="convert_logo" title="Создано в Convert Monster" target="_blank">
                                <img class="convert_logo_img" src="./img/convert.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<div class="hidden_form" id="custom">
    <h2 class="form_wrap_head js_custom_head">&nbsp;</h2>
    <p class="form_wrap_p js_custom_after_head">&nbsp;</p>
    <form action="./handlers/send-form.php" class="form_vertical" method="post">
        <label class="form_label">
            <input type="text" name="name" class="form_input" required value="" placeholder="Введите Ваше имя"/>
        </label>
        <label class="form_label is_last">
            <input type="text" name="number" maxlength="18" class="form_input" required value="" placeholder="Введите Ваш телефон"/>
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
            <input type="text" name="name" class="form_input" required value="" placeholder="Введите Ваше имя"/>
        </label>
        <label class="form_label is_last">
            <input type="text" name="email" class="form_input" required value="" placeholder="Введите Ваш E-mail"/>
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
    <form action="./handlers/send-form-cabinet.php" class="form_vertical" method="post">
        <label class="form_label">
            <input type="text" name="login" class="form_input" required value="" placeholder="Введите ваш логин"/>
        </label>
        <label class="form_label is_last">
            <input type="password" name="password" class="form_input" required value="" placeholder="Введите пароль"/>
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
    <p class="privacy_p">3. Копирование и ретрансляция сигналов запрещены без предварительного согласия  правообладателей.</p>
    <p class="privacy_p">4. Запрещено совместное использование одной учетной записи более, чем одним Пользователем. В случае выявления данного нарушения учетная запись блокируется без права восстановления, денежные средства, уплаченные за подписку, не возвращаются.</p>
    <p class="privacy_p">5. Ответственность за сохранность логина и пароля от учетной записи полностью лежит на Пользователе. В случае, если существует вероятность, что логин и пароль стали известны третьим лицам, Пользователь должен самостоятельно предпринять меры для их смены, или уведомить об этом Администрацию Сервиса любым доступным способом.</p>
    <p class="privacy_p">6. Сервис не несет ответственности за любые убытки Пользователя, возникших в случае технических сбоев оборудования или в сети Интернет, в результате действий злоумышленников и третьих лиц, а также в случае некачественного копирования сигналов Пользователем, или его низкой компетенции в торговле бинарными опционами.</p>
    <p class="privacy_p">7. Пользователь понимает, что международный валютный рынок Форекс является внебиржевым, и не имеет единого центра котировок. По этой причине допускаются незначительные расхождения в ценах на активы, указанных в сигналах Сервиса, и ценах на активы в брокерском терминале Пользователя.</p>
    <p class="privacy_p">8. Торговые сигналы, предоставляемые Сервисом, носят рекомендательный характер. Пользователь самостоятельно принимает решения об открытии позиций и размере собственных средств, задействованных в каждой сделке.</p>
    <p class="privacy_p">9. Служба технической поддержки Сервиса не обязана решать проблемы с программным обеспечением на стороне Пользователя, делающие невозможным нормальное функционирование Сервиса. Пользователь должен самостоятельно поддерживать свое аппаратное и программное обеспечение в исправном состоянии.</p>
    <p class="privacy_p">10. Служба технической поддержки Сервиса может оставить без ответа сообщения Пользователей, если сочтет их: провокационными, заданными не по существу, оскорбительными для Администрации или сотрудников Сервиса. Сообщения, содержащие нецензурные выражения, игнорируются. Если сообщения с бранью приходят от зарегистрированного Пользователя, его учетная запись блокируется, IP-адрес заносится в блок-лист. Деньги, уплаченные за подписку, не возвращаются. Не гарантируются ответы на сообщения, написанные латиницей.</p>
    <p class="privacy_p">11. Служба технической поддержки Сервиса не обязана давать консультации по вопросам, касающихся работы брокеров, а также решения возможных проблем, возникших у Пользователя с его брокером.</p>
    <p class="privacy_p">12. Пользователь имеет право вернуть средства, уплаченные за подписку, если получил убыток при использовании торговых сигналов Сервиса. Для этого Пользователь должен прислать выписку из личного кабинета брокера, содержащую не менее 100 сделок, открытых точно по сигналам Сервиса. В случае, если подлинность выписки, предоставленной Пользователем, вызывает сомнения, Пользователь  обязан обеспечить  удаленный доступ к компьютеру посредством программы TeamViewer для сверки выписок. Если Пользователь использовал не более 3% средств собственного депозита в каждой сделке, и открывал позиции по ценам не хуже, чем указанные в сигналах, точно на указанное время экспирации, средства, потраченные на подписку, ему могут быть возвращены. Все вопросы касательно возврата средств решаются переговорным путем посредством электронной почты.</p>
    <p class="privacy_p">13. Мы имеем право заблокировать учетную запись пользователя, если: пользователь умышленно передал доступ от своей учетной записи третьим лицам или ретранслирует  наши сигналы; при отсутствии торговой активности на брокерском счету пользователя, открытом по нашей партнерской ссылке; при обнаружении множественных регистраций одного пользователя на нашем сайте с целью повторного использования спец.предложений и скидок; замечена подозрительная активность, свойственная злоумышленникам. Если ваша учетная запись оказалась заблокированной, и вы не согласны с действиями Администрации, пожалуйста, свяжитесь с нами одним из удобных способов.</p>
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
<script src="./js/main.min.js"></script>
</body>
</html>