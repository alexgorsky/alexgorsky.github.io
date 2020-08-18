<html class="no-js" lang="ru" dir="ltr">

<head>



    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация - Цепная Реакция</title>
    <meta name="description" content="description">
    <link href="./index2_files/main.css" rel="stylesheet">
    <link href="./index2_files/main_custom.css" rel="stylesheet">
    <style>
    #lastName-error,
    #leadPhone-error,
    #email-error,
    #firstName-error {
        text-align: center;
        color: red;
    }

    @media (max-width: 340px) {
        body {
            line-height: 1.2;
        }

        .pattern2 .teaser {
            font-size: 15px;
        }

        .support h2 {
            font-size: 25px;
        }
    }
    </style>
    <style type="text/css">
    .fancybox-margin {
        margin-right: 17px;
    }
    </style>
    <style type="text/css">
    .fancybox-margin {
        margin-right: 15px;
    }
    </style>
</head>
<?php
    function debug_to_console($data) {
        $output = $data;
        if (is_array($output))
            $output = implode(',', $output);

        echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }
    $fname = $_POST['fname'];
    echo $fname;
    debug_to_console("Test");
    debug_to_console($fname);
    debug_to_console($_POST['fname']);
?>

<body style="" class="" id="" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <div class="wrapper header">
        <div class="orange-strip">
            <div class="header-logo">
                <img src="./index2_files/Main-Logo.png" class="" alt="Цепная Реакция">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-4">
                        <img src="./index2_files/trusted.png" class="img-responsive center-block" alt="Цепная Реакция">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper subheader pattern2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="teaser">
                        ВЫ ВСЕГО В <b>3 ШАГАХ,</b> <br> ПОЖАЛУЙСТА ДОСМОТРИТЕ ВИДЕО ЧТОБЫ УЗНАТЬ,<b>ЧТО ДЕЛАТЬ ДАЛЬШЕ!</b>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <div class="video-wrapper">
                        <div class="video">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe id="main-video" width="560" height="315" src="https://www.youtube.com/embed/aSEAoAU9RQc?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1&amp;enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .intl-tel-input {
                    width: 100%;
                }
            </style>
                <div class="col-xs-12 col-sm-4">
                    <h2>Бесплатная регистрация</h2>
                    <div class="signup regForm aos-init aos-animate" id="regFormb281bbdb2a1347c1aef3f1aa8f50f21e">
                        <div id="regFormContent_regFormb281bbdb2a1347c1aef3f1aa8f50f21e" class="reg-form">
                            <form method="POST" action="http://chainm.pro/thanks.php" class="intgrtn-form-signup">
                                <input name="affiliate" value="1" type="hidden">
                                <input name="campaign" value="chain-system" type="hidden">
                                <input name="clickId" class="click_id" type="hidden">
                                <input name="source" value="1" type="hidden">
                                <input class="form-control input-group-field req firstName" name="firstName" placeholder="Введите имя" type="text" value="Ваше имя" required="required" id='regFormf241f4ab30534f7894d48374bf2b4de7_fname'>
                                <input class="form-control input-group-field req" name="lastName" placeholder="Введите фамилию" type="text" value="" required="required">
                                <input class="form-control input-group-field req userEmail" name="email" placeholder="Введите e-mail" type="email" value="Ваш адрес электронной почты" required="required" id='regFormf241f4ab30534f7894d48374bf2b4de7_email'>
                                <div class="intgrtn-input-holder intgrtn-input-holder-phone">
                                    <center>
                                        <div style="width: 28%;    display: inline-block;">
                                            <select name="codeNum" class="form-control req phone_code" required="required">
                                                <option data-iso='Ad' value='7'> +7</option>
                                                <option data-iso='AD' value='376'> +376</option>
                                                <option data-iso='AE' value='971'> +971</option>
                                                <option data-iso='AF' value='93'> +93</option>
                                                <option data-iso='AG' value='1268'> +1268</option>
                                                <option data-iso='AI' value='1264'> +1264</option>
                                                <option data-iso='AL' value='355'> +355</option>
                                                <option data-iso='AM' value='374'> +374</option>
                                                <option data-iso='AN' value='599'> +599</option>
                                                <option data-iso='AO' value='244'> +244</option>
                                                <option data-iso='AQ' value='672'> +672</option>
                                                <option data-iso='AR' value='54'> +54</option>
                                                <option data-iso='AS' value='1684'> +1684</option>
                                                <option data-iso='AT' value='43'> +43</option>
                                                <option data-iso='AU' value='61'> +61</option>
                                                <option data-iso='AW' value='297'> +297</option>
                                                <option data-iso='AX' value='358'> +358</option>
                                                <option data-iso='AZ' value='994'> +994</option>
                                                <option data-iso='BA' value='387'> +387</option>
                                                <option data-iso='BB' value='1246'> +1246</option>
                                                <option data-iso='BD' value='880'> +880</option>
                                                <option data-iso='BE' value='32'> +32</option>
                                                <option data-iso='BF' value='226'> +226</option>
                                                <option data-iso='BG' value='359'> +359</option>
                                                <option data-iso='BH' value='973'> +973</option>
                                                <option data-iso='BI' value='257'> +257</option>
                                                <option data-iso='BJ' value='229'> +229</option>
                                                <option data-iso='BL' value='590'> +590</option>
                                                <option data-iso='BM' value='1441'> +1441</option>
                                                <option data-iso='BN' value='673'> +673</option>
                                                <option data-iso='BO' value='591'> +591</option>
                                                <option data-iso='BQ' value='599'> +599</option>
                                                <option data-iso='BR' value='55'> +55</option>
                                                <option data-iso='BS' value='1242'> +1242</option>
                                                <option data-iso='BT' value='975'> +975</option>
                                                <option data-iso='BW' value='267'> +267</option>
                                                <option data-iso='BY' value='375'> +375</option>
                                                <option data-iso='BZ' value='501'> +501</option>
                                                <option data-iso='CA' value='1'> +1</option>
                                                <option data-iso='CC' value='61'> +61</option>
                                                <option data-iso='CD' value='243'> +243</option>
                                                <option data-iso='CF' value='236'> +236</option>
                                                <option data-iso='CG' value='242'> +242</option>
                                                <option data-iso='CH' value='41'> +41</option>
                                                <option data-iso='CI' value='225'> +225</option>
                                                <option data-iso='CK' value='682'> +682</option>
                                                <option data-iso='CL' value='56'> +56</option>
                                                <option data-iso='CM' value='237'> +237</option>
                                                <option data-iso='CN' value='86'> +86</option>
                                                <option data-iso='CO' value='57'> +57</option>
                                                <option data-iso='CR' value='506'> +506</option>
                                                <option data-iso='CS' value='381'> +381</option>
                                                <option data-iso='CU' value='53'> +53</option>
                                                <option data-iso='CV' value='238'> +238</option>
                                                <option data-iso='CW' value='599'> +599</option>
                                                <option data-iso='CX' value='61'> +61</option>
                                                <option data-iso='CY' value='357'> +357</option>
                                                <option data-iso='CZ' value='420'> +420</option>
                                                <option data-iso='DE' value='49'> +49</option>
                                                <option data-iso='DJ' value='253'> +253</option>
                                                <option data-iso='DK' value='45'> +45</option>
                                                <option data-iso='DM' value='1767'> +1767</option>
                                                <option data-iso='DO' value='1809'> +1809</option>
                                                <option data-iso='DZ' value='213'> +213</option>
                                                <option data-iso='EC' value='593'> +593</option>
                                                <option data-iso='EE' value='372'> +372</option>
                                                <option data-iso='EG' value='20'> +20</option>
                                                <option data-iso='EH' value='212'> +212</option>
                                                <option data-iso='ER' value='291'> +291</option>
                                                <option data-iso='ES' value='34'> +34</option>
                                                <option data-iso='ET' value='251'> +251</option>
                                                <option data-iso='EU' value='3444'> +3444</option>
                                                <option data-iso='FI' value='358'> +358</option>
                                                <option data-iso='FJ' value='679'> +679</option>
                                                <option data-iso='FK' value='500'> +500</option>
                                                <option data-iso='FM' value='691'> +691</option>
                                                <option data-iso='FO' value='298'> +298</option>
                                                <option data-iso='FR' value='33'> +33</option>
                                                <option data-iso='GA' value='241'> +241</option>
                                                <option data-iso='GB' value='44'> +44</option>
                                                <option data-iso='GD' value='1473'> +1473</option>
                                                <option data-iso='GE' value='995'> +995</option>
                                                <option data-iso='GF' value='594'> +594</option>
                                                <option data-iso='GG' value='441481'> +441481</option>
                                                <option data-iso='GH' value='233'> +233</option>
                                                <option data-iso='GI' value='350'> +350</option>
                                                <option data-iso='GL' value='299'> +299</option>
                                                <option data-iso='GM' value='220'> +220</option>
                                                <option data-iso='GN' value='224'> +224</option>
                                                <option data-iso='GP' value='590'> +590</option>
                                                <option data-iso='GQ' value='240'> +240</option>
                                                <option data-iso='GR' value='30'> +30</option>
                                                <option data-iso='GS' value='500'> +500</option>
                                                <option data-iso='GT' value='502'> +502</option>
                                                <option data-iso='GU' value='1671'> +1671</option>
                                                <option data-iso='GW' value='245'> +245</option>
                                                <option data-iso='GY' value='592'> +592</option>
                                                <option data-iso='HK' value='852'> +852</option>
                                                <option data-iso='HN' value='504'> +504</option>
                                                <option data-iso='HR' value='385'> +385</option>
                                                <option data-iso='HT' value='509'> +509</option>
                                                <option data-iso='HU' value='36'> +36</option>
                                                <option data-iso='ID' value='62'> +62</option>
                                                <option data-iso='IE' value='353'> +353</option>
                                                <option data-iso='IL' value='972'> +972</option>
                                                <option data-iso='IM' value='441624'> +441624</option>
                                                <option data-iso='IN' value='91'> +91</option>
                                                <option data-iso='IO' value='246'> +246</option>
                                                <option data-iso='IQ' value='964'> +964</option>
                                                <option data-iso='IR' value='98'> +98</option>
                                                <option data-iso='IS' value='354'> +354</option>
                                                <option data-iso='IT' value='39'> +39</option>
                                                <option data-iso='JE' value='441534'> +441534</option>
                                                <option data-iso='JM' value='1876'> +1876</option>
                                                <option data-iso='JO' value='962'> +962</option>
                                                <option data-iso='JP' value='81'> +81</option>
                                                <option data-iso='KE' value='254'> +254</option>
                                                <option data-iso='KG' value='996'> +996</option>
                                                <option data-iso='KH' value='855'> +855</option>
                                                <option data-iso='KI' value='686'> +686</option>
                                                <option data-iso='KM' value='269'> +269</option>
                                                <option data-iso='KN' value='1869'> +1869</option>
                                                <option data-iso='KP' value='850'> +850</option>
                                                <option data-iso='KR' value='82'> +82</option>
                                                <option data-iso='KV' value='381'> +381</option>
                                                <option data-iso='KW' value='965'> +965</option>
                                                <option data-iso='KY' value='1345'> +1345</option>
                                                <option data-iso='KZ' value='7'> +7</option>
                                                <option data-iso='LA' value='856'> +856</option>
                                                <option data-iso='LB' value='961'> +961</option>
                                                <option data-iso='LC' value='1758'> +1758</option>
                                                <option data-iso='LI' value='423'> +423</option>
                                                <option data-iso='LK' value='94'> +94</option>
                                                <option data-iso='LR' value='231'> +231</option>
                                                <option data-iso='LS' value='266'> +266</option>
                                                <option data-iso='LT' value='370'> +370</option>
                                                <option data-iso='LU' value='352'> +352</option>
                                                <option data-iso='LV' value='371'> +371</option>
                                                <option data-iso='LY' value='218'> +218</option>
                                                <option data-iso='MA' value='212'> +212</option>
                                                <option data-iso='MC' value='377'> +377</option>
                                                <option data-iso='MD' value='373'> +373</option>
                                                <option data-iso='ME' value='382'> +382</option>
                                                <option data-iso='MF' value='590'> +590</option>
                                                <option data-iso='MG' value='261'> +261</option>
                                                <option data-iso='MH' value='692'> +692</option>
                                                <option data-iso='MK' value='389'> +389</option>
                                                <option data-iso='ML' value='223'> +223</option>
                                                <option data-iso='MM' value='95'> +95</option>
                                                <option data-iso='MN' value='976'> +976</option>
                                                <option data-iso='MO' value='853'> +853</option>
                                                <option data-iso='MP' value='1670'> +1670</option>
                                                <option data-iso='MQ' value='596'> +596</option>
                                                <option data-iso='MR' value='222'> +222</option>
                                                <option data-iso='MS' value='1664'> +1664</option>
                                                <option data-iso='MT' value='356'> +356</option>
                                                <option data-iso='MU' value='230'> +230</option>
                                                <option data-iso='MV' value='960'> +960</option>
                                                <option data-iso='MW' value='265'> +265</option>
                                                <option data-iso='MX' value='52'> +52</option>
                                                <option data-iso='MY' value='60'> +60</option>
                                                <option data-iso='MZ' value='258'> +258</option>
                                                <option data-iso='NA' value='264'> +264</option>
                                                <option data-iso='NC' value='687'> +687</option>
                                                <option data-iso='NE' value='227'> +227</option>
                                                <option data-iso='NF' value='672'> +672</option>
                                                <option data-iso='NG' value='234'> +234</option>
                                                <option data-iso='NI' value='505'> +505</option>
                                                <option data-iso='NL' value='31'> +31</option>
                                                <option data-iso='NO' value='47'> +47</option>
                                                <option data-iso='NP' value='977'> +977</option>
                                                <option data-iso='NR' value='674'> +674</option>
                                                <option data-iso='NU' value='683'> +683</option>
                                                <option data-iso='NZ' value='64'> +64</option>
                                                <option data-iso='OM' value='968'> +968</option>
                                                <option data-iso='PA' value='507'> +507</option>
                                                <option data-iso='PE' value='51'> +51</option>
                                                <option data-iso='PF' value='689'> +689</option>
                                                <option data-iso='PG' value='675'> +675</option>
                                                <option data-iso='PH' value='63'> +63</option>
                                                <option data-iso='PK' value='92'> +92</option>
                                                <option data-iso='PL' value='48'> +48</option>
                                                <option data-iso='PM' value='508'> +508</option>
                                                <option data-iso='PN' value='64'> +64</option>
                                                <option data-iso='PR' value='1'> +1</option>
                                                <option data-iso='PS' value='970'> +970</option>
                                                <option data-iso='PT' value='351'> +351</option>
                                                <option data-iso='PW' value='680'> +680</option>
                                                <option data-iso='PY' value='595'> +595</option>
                                                <option data-iso='QA' value='974'> +974</option>
                                                <option data-iso='RE' value='262'> +262</option>
                                                <option data-iso='RO' value='40'> +40</option>
                                                <option data-iso='RU' value='7'> +7</option>
                                                <option data-iso='RU' value='7'> +7</option>
                                                <option data-iso='RW' value='250'> +250</option>
                                                <option data-iso='SA' value='966'> +966</option>
                                                <option data-iso='SB' value='677'> +677</option>
                                                <option data-iso='SC' value='248'> +248</option>
                                                <option data-iso='SD' value='249'> +249</option>
                                                <option data-iso='SE' value='46'> +46</option>
                                                <option data-iso='SG' value='65'> +65</option>
                                                <option data-iso='SH' value='290'> +290</option>
                                                <option data-iso='SH' value='247'> +247</option>
                                                <option data-iso='SI' value='386'> +386</option>
                                                <option data-iso='SJ' value='47'> +47</option>
                                                <option data-iso='SK' value='421'> +421</option>
                                                <option data-iso='SL' value='232'> +232</option>
                                                <option data-iso='SM' value='378'> +378</option>
                                                <option data-iso='SN' value='221'> +221</option>
                                                <option data-iso='SO' value='252'> +252</option>
                                                <option data-iso='SR' value='597'> +597</option>
                                                <option data-iso='SS' value='211'> +211</option>
                                                <option data-iso='ST' value='239'> +239</option>
                                                <option data-iso='SV' value='503'> +503</option>
                                                <option data-iso='SX' value='1721'> +1721</option>
                                                <option data-iso='SY' value='963'> +963</option>
                                                <option data-iso='SZ' value='268'> +268</option>
                                                <option data-iso='TC' value='1649'> +1649</option>
                                                <option data-iso='TD' value='235'> +235</option>
                                                <option data-iso='TF' value='262'> +262</option>
                                                <option data-iso='TG' value='228'> +228</option>
                                                <option data-iso='TH' value='66'> +66</option>
                                                <option data-iso='TJ' value='992'> +992</option>
                                                <option data-iso='TK' value='690'> +690</option>
                                                <option data-iso='TL' value='670'> +670</option>
                                                <option data-iso='TM' value='993'> +993</option>
                                                <option data-iso='TN' value='216'> +216</option>
                                                <option data-iso='TO' value='676'> +676</option>
                                                <option data-iso='TR' value='90'> +90</option>
                                                <option data-iso='TT' value='1868'> +1868</option>
                                                <option data-iso='TV' value='688'> +688</option>
                                                <option data-iso='TW' value='886'> +886</option>
                                                <option data-iso='TZ' value='255'> +255</option>
                                                <option data-iso='UG' value='256'> +256</option>
                                                <option data-iso='UM' value='699'> +699</option>
                                                <option data-iso='US' value='1'> +1</option>
                                                <option data-iso='UY' value='598'> +598</option>
                                                <option data-iso='UZ' value='998'> +998</option>
                                                <option data-iso='VA' value='379'> +379</option>
                                                <option data-iso='VC' value='1784'> +1784</option>
                                                <option data-iso='VE' value='58'> +58</option>
                                                <option data-iso='VG' value='1284'> +1284</option>
                                                <option data-iso='VI' value='1340'> +1340</option>
                                                <option data-iso='VN' value='84'> +84</option>
                                                <option data-iso='VU' value='678'> +678</option>
                                                <option data-iso='WF' value='681'> +681</option>
                                                <option data-iso='WS' value='685'> +685</option>
                                                <option data-iso='YE' value='967'> +967</option>
                                                <option data-iso='YT' value='262'> +262</option>
                                                <option data-iso='ZA' value='27'> +27</option>
                                                <option data-iso='ZM' value='260'> +260</option>
                                                <option data-iso='ZW' value='263'> +263</option>
                                            </select>
                                        </div>
                                        <input class="form-control input-group-field req" name="phonenum" placeholder="Введите телефон" style="width: 70%;    display: inline-block;" type="text" required="required">
                                    </center>
                                </div>
                                <button name="submitBtn" class="default smaller reg-btn" type="submit">
                                    ЗАРЕГИСТРИРУЙТЕСЬ
                                    <nobr>ПРЯМО СЕЙЧАС</nobr>
                                </button>
                                <button class="default smaller wait-btn" style="display:none;">
                                    Ожидайте...
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="bottom-arrow"></div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div data-aos="zoom-in" data-aos-duration="1000" class="aos-init aos-animate">
                        <h1>
                            ЦЕПНАЯ РЕАКЦИЯ
                        </h1>
                    </div>
                    <div id="currtime">
                        Время ( <span class="timezone">GMT+3</span>)
                        <span class="date">2020/04/12</span> <span class="time">03:51:55</span>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div id="curresults" class="table-responsive">
                        <table class="table" id="live-table">
                            <tbody>
                                <tr class="headerwrapper">
                                    <th>
                                        <span>Актив</span>
                                    </th>
                                    <th>
                                        <span>Направление</span>
                                    </th>
                                    <th>
                                        <span>Сумма</span>
                                    </th>
                                    <th>
                                        <span>Время открытия</span>
                                    </th>
                                    <th>
                                        <span>Время экспирации</span>
                                    </th>
                                    <th>
                                        <span>Статус</span>
                                    </th>
                                    <th>
                                        <span>Выплата</span>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        USD/CHF
                                    </td>
                                    <td>
                                        КОЛЛ
                                    </td>
                                    <td>
                                        $106.52
                                    </td>
                                    <td>
                                        2020/04/08 01:03:01
                                    </td>
                                    <td>
                                        2020/04/08 02:44:44
                                    </td>
                                    <td class="result">
                                        ПРИБЫЛЬ
                                    </td>
                                    <td>
                                        $196
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        EUR/USD
                                    </td>
                                    <td>
                                        КОЛЛ
                                    </td>
                                    <td>
                                        $203.12
                                    </td>
                                    <td>
                                        2020/04/08 03:01:42
                                    </td>
                                    <td>
                                        2020/04/08 03:31:44
                                    </td>
                                    <td class="result">
                                        ПРИБЫЛЬ
                                    </td>
                                    <td>
                                        $373
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        USD/JPY
                                    </td>
                                    <td>
                                        ПУТ
                                    </td>
                                    <td>
                                        $98.14
                                    </td>
                                    <td>
                                        2020/04/08 04:12:22
                                    </td>
                                    <td>
                                        2020/04/08 04:27:25
                                    </td>
                                    <td class="result">
                                        ПРИБЫЛЬ
                                    </td>
                                    <td>
                                        $180,57
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        EUR/USD
                                    </td>
                                    <td>
                                        ПУТ
                                    </td>
                                    <td>
                                        $150.12
                                    </td>
                                    <td>
                                        2020/04/08 05:00:01
                                    </td>
                                    <td>
                                        2020/04/08 06:00:03
                                    </td>
                                    <td class="result">
                                        ПРИБЫЛЬ
                                    </td>
                                    <td>
                                        $276
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        GBP/USD
                                    </td>
                                    <td>
                                        КОЛЛ
                                    </td>
                                    <td>
                                        $160.70
                                    </td>
                                    <td>
                                        2020/04/08 08:16:45
                                    </td>
                                    <td>
                                        2020/04/08 08:30:47
                                    </td>
                                    <td class="result">
                                        ПРИБЫЛЬ
                                    </td>
                                    <td>
                                        $295.68
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        EUR/GBP
                                    </td>
                                    <td>
                                        ПУТ
                                    </td>
                                    <td>
                                        $102.52
                                    </td>
                                    <td>
                                        2020/04/08 10:11:23
                                    </td>
                                    <td>
                                        2020/04/08 10:41:24
                                    </td>
                                    <td class="result">
                                        ПРИБЫЛЬ
                                    </td>
                                    <td>
                                        $188,63
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        USD/CHF
                                    </td>
                                    <td>
                                        КОЛЛ
                                    </td>
                                    <td>
                                        $112.33
                                    </td>
                                    <td>
                                        2020/04/08 10:15:16
                                    </td>
                                    <td>
                                        2020/04/08 10:45:18
                                    </td>
                                    <td class="result">
                                        ПРИБЫЛЬ
                                    </td>
                                    <td>
                                        $206,68
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        EUR/USD
                                    </td>
                                    <td>
                                        КОЛЛ
                                    </td>
                                    <td>
                                        $142.54
                                    </td>
                                    <td>
                                        2020/04/08 11:45:01
                                    </td>
                                    <td>
                                        2020/04/08 12:00:03
                                    </td>
                                    <td class="result">
                                        ПРИБЫЛЬ
                                    </td>
                                    <td>
                                        $262.27
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        AUD/USD
                                    </td>
                                    <td>
                                        ПУТ
                                    </td>
                                    <td>
                                        $132.17
                                    </td>
                                    <td>
                                        2020/04/08 12:04:12
                                    </td>
                                    <td>
                                        2020/04/08 12:34:44
                                    </td>
                                    <td class="result">
                                        ПРИБЫЛЬ
                                    </td>
                                    <td>
                                        $243.19
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        EUR/JPY
                                    </td>
                                    <td>
                                        ПУТ
                                    </td>
                                    <td>
                                        $118.65
                                    </td>
                                    <td>
                                        2020/04/08 13:03:23
                                    </td>
                                    <td>
                                        2016/01/19 14:00:01
                                    </td>
                                    <td class="result">
                                        ПРИБЫЛЬ
                                    </td>
                                    <td>
                                        $218.31
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        USD/JPY
                                    </td>
                                    <td>
                                        ПУТ
                                    </td>
                                    <td>
                                        $110.85
                                    </td>
                                    <td>
                                        2020/04/08 15:16:45
                                    </td>
                                    <td>
                                        2020/04/08 15:44:02
                                    </td>
                                    <td class="result">
                                        ПРИБЫЛЬ
                                    </td>
                                    <td>
                                        $203.96
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        USD/CAD
                                    </td>
                                    <td>
                                        КОЛЛ
                                    </td>
                                    <td>
                                        $127.69
                                    </td>
                                    <td>
                                        2020/04/08 15:25:13
                                    </td>
                                    <td>
                                        2020/04/08 15:35:13
                                    </td>
                                    <td class="result">
                                        ПРИБЫЛЬ
                                    </td>
                                    <td>
                                        $234.94
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        EUR/USD
                                    </td>
                                    <td>
                                        ПУТ
                                    </td>
                                    <td>
                                        $142.48
                                    </td>
                                    <td>
                                        2020/04/08 16:05:27
                                    </td>
                                    <td>
                                        2020/04/08 16:15:02
                                    </td>
                                    <td class="result">
                                        ПРИБЫЛЬ
                                    </td>
                                    <td>
                                        $262.16
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        GBP/USD
                                    </td>
                                    <td>
                                        КОЛЛ
                                    </td>
                                    <td>
                                        $102.17
                                    </td>
                                    <td>
                                        2020/04/08 16:36:48
                                    </td>
                                    <td>
                                        2020/04/08 17:00:03
                                    </td>
                                    <td class="result">
                                        ПРИБЫЛЬ
                                    </td>
                                    <td>
                                        $187.99
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div data-aos-once="" data-aos-duration="2000" class="aos-init">
                        <h1>
                            САМЫЕ ЧАСТЫЕ ВОПРОСЫ
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row faqs">
                <div class="col-xs-12">
                    <!--FAQ-->
                    <div class="faq faq1 aos-init">
                        <div class="question">
                            Нужно ли мне иметь какой-то опыт?
                        </div>
                        <div class="answer">
                            Нет, программа и моя команда помогут вам зарабатывать КАЖДЫЙ ДЕНЬ, даже если вы никогда раньше не работали
                            онлайн
                        </div>
                    </div>
                    <div class="faq faq2 aos-init">
                        <div class="question">
                            «Цепная реакция» действительно бесплатна?
                        </div>
                        <div class="answer">
                            Да, за то, чтобы получить программу, вам не нужно будет платить ни копейки. В дальнейшем, когда вы уже
                            будете зарабатывать деньги, определенный процент сверх вашего заработка будем получать я и моя команда. Но
                            этот процент не снимается с вашего счета – он идет непосредственно с прибыли до зачисления на ваш счет. При
                            этом с каждой сделки вы будете получать 75 – 85% прибыли, как это обычно происходит в финансовом трейдинге.
                        </div>
                    </div>
                    <div class="faq faq3 aos-init">
                        <div class="question">
                            Сколько я смогу заработать?
                        </div>
                        <div class="answer">
                            Все пользователи программы «Цепная реакция» получают, как минимум, 1000$ в день, и если вы
                            зарегистрируетесь, вы будете зарабатывать так же!
                        </div>
                    </div>
                    <div class="faq faq4 aos-init">
                        <div class="question">
                            Что мне нужно для того, чтобы начать зарабатывать?
                        </div>
                        <div class="answer">
                            Только компьютер, ноутбук или смартфон с выходом в интернет.
                        </div>
                    </div>
                    <div class="faq faq5 aos-init">
                        <div class="question">
                            Зачем мне пополнять торговый счет?
                        </div>
                        <div class="answer">
                            Программа «Цепная реакция» подключается к мировому финансовому рынку, и, естественно, для того чтобы начать
                            торговать бинарными опционами, вам нужен некий стартовый капитал. Впрочем, учитывая, что минимальная сумма
                            пополнения депозита – всего 250$, вы вернете эти деньги уже за один день.
                        </div>
                    </div>
                    <div class="faq faq7 aos-init">
                        <div class="question">
                            Мне нужно будет что-то скачивать?
                        </div>
                        <div class="answer">
                            Нет, программа работает онлайн, на любом девайсе, подключенном к интернету.
                        </div>
                    </div>
                    <div class="faq faq8 aos-init">
                        <div class="question">
                            Могу ли я зайти в свой аккаунт со смартфона или с MAC-бука?
                        </div>
                        <div class="answer">
                            Да, программа «Цепная реакция» совместима с любой системой и с любым устройством – будь то компьютер или
                            ноутбук на базе Windows или Apple, а так же смартфон или планшете на базе Android, IOS или Windows Mobile.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container narrow">
            <div class="row">
                <div class="col-xs-12">
                    <div class="toolbar">
                        <div class="toolbar_logo">
                            <div class="toolbar_logo_img link"></div>
                        </div>
                        <div class="toolbar_wrapper">
                            <ul class="toolbar_nav">
                                <li class="toolbar_nav_i">
                                    <div class="toolbar_nav_a toolbar_nav_a__messa">
                                        <div class="toolbar_nav_i_ic">
                                            <div unselectable="on" class="toolbar_nav_i_tx-w usel-off">Сообщения</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="toolbar_nav_i">
                                    <div class="toolbar_nav_a toolbar_nav_a__discu">
                                        <div class="toolbar_nav_i_ic">
                                            <div unselectable="on" class="toolbar_nav_i_tx-w usel-off">Обсуждения</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="toolbar_nav_i">
                                    <div class="toolbar_nav_a toolbar_nav_a__notif">
                                        <div class="toolbar_nav_i_ic">
                                            <div unselectable="on" class="toolbar_nav_i_tx-w usel-off">Оповещения</div>
                                        </div>
                                        <span class="new-marker"></span>
                                    </div>
                                </li>
                                <li class="toolbar_nav_i">
                                    <div class="toolbar_nav_a toolbar_nav_a__guests">
                                        <div class="toolbar_nav_i_ic">
                                            <div unselectable="on" class="toolbar_nav_i_tx-w usel-off">Гости</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="toolbar_nav_i">
                                    <div class="toolbar_nav_a toolbar_nav_a__marks">
                                        <div class="toolbar_nav_i_ic">
                                            <div unselectable="on" class="toolbar_nav_i_tx-w usel-off">Оценки</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="toolbar_nav_i">
                                    <div class="toolbar_nav_a toolbar_nav_a__audio">
                                        <div class="toolbar_nav_i_ic">
                                            <div unselectable="on" class="toolbar_nav_i_tx-w usel-off">Музыка</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="toolbar_nav_i">
                                    <div class="toolbar_nav_a toolbar_nav_a__video">
                                        <div class="toolbar_nav_i_ic">
                                            <div unselectable="on" class="toolbar_nav_i_tx-w usel-off">Видео</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="toolbar_search" class="toolbar_search">
                            <div class="it_w ">
                                цепная реакция
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="feed">
                        <div class="messages">
                            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                                <div class="message">
                                    <div class="userphoto">
                                        <img src="./index2_files/ok-01.jpg">
                                    </div>
                                    <div class="content">
                                        <div class="username">
                                            Екатерина Разумовская
                                        </div>
                                        <div class="usertext">
                                            Эта программа что-то просто невероятное, а ваша команда – очень отзывчивые люди. <br> Спасибо за
                                            то, что помогли мне заработать достаточно денег, чтобы купить мужу часы, о которых он всегда мечтал.
                                            Раньше для нас это была недостижимая блажь, а с «Цепной реакцией» я накопила на них за неделю <span class="smile"></span><span class="smile"></span><span class="smile"></span><span class="smile"></span>)))))
                                            <img src="./index2_files/proof_01.jpg" class="img-responsive">
                                        </div>
                                        <div class="action comment">
                                            Комментировать
                                            <span>67</span>
                                        </div>
                                        <div class="action share">
                                            <span>43</span>
                                        </div>
                                        <div class="action like">
                                            <span>681</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="message">
                                    <div class="userphoto">
                                        <img src="./index2_files/ok-02.jpg">
                                    </div>
                                    <div class="content">
                                        <div class="username">
                                            Игорь Филимонов
                                        </div>
                                        <div class="usertext">
                                            Вы и ваша команда стали для меня просто героями – снимаю шляпу! Думаю, для моих подписчиков это
                                            будут не пустые слова! Я вам не сказал сразу, но вообще я занимаюсь обзором торговых систем. Ищу
                                            программы, которые не работают или работают не так, как обещают их создатели, и выкладываю обзоры в
                                            своем блоге… И естественно, их целая куча… К счастью для вас и ваших клиентов я не смог найти у
                                            вашей программы ни одного недостатка. Это действительно высоко технологичное, продуманное решение.
                                            Всего за 9 дней торговли с «Цепной реакцией» я заработал 9 385$. Так держать!
                                            <img src="./index2_files/proof_02.jpg" class="img-responsive">
                                        </div>
                                        <div class="action comment">
                                            Комментировать
                                            <span>67</span>
                                        </div>
                                        <div class="action share">
                                            <span>82</span>
                                        </div>
                                        <div class="action like">
                                            <span>681</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="message">
                                    <div class="userphoto">
                                        <img src="./index2_files/ok-03.jpg">
                                    </div>
                                    <div class="content">
                                        <div class="username">
                                            Марина Михалева
                                        </div>
                                        <div class="usertext">
                                            Я должна поблагодарить своего мужа Сашу за то, что он нашел эту программу и настоял на том, чтобы мы
                                            ее попробовали. Мне сказали, что мне не потребуется какой-то специальный опыт, и я сказала – «ок,
                                            давайте попробуем». Мне обещали поддержку 24/7, в это мне тоже как-то верилось с трудом. А когда мне
                                            сказали, что я буду зарабатывать 1000$ в день… я решила, что это просто бред! Я очень рада, что это
                                            оказалось не так и СПАСИБО Саше за то, что он все-таки уговорил меня попробовать! Это наш результат
                                            за 7 дней… СПАСИБО ОГРОМНОЕ ЗА ПРОГРАММУ И ПОМОЩЬ!
                                            <img src="./index2_files/proof_03.jpg" class="img-responsive">
                                        </div>
                                        <div class="action comment">
                                            Комментировать
                                            <span>843</span>
                                        </div>
                                        <div class="action share">
                                            <span>211</span>
                                        </div>
                                        <div class="action like">
                                            <span>2648</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="message">
                                    <div class="userphoto">
                                        <img src="./index2_files/ok-04.jpg">
                                    </div>
                                    <div class="content">
                                        <div class="username">
                                            Николай Горошин
                                        </div>
                                        <div class="usertext">
                                            Пользуюсь программой несколько недель, и, думаю, пора сказать СПАСИБО и показать, чего мне удалось
                                            добиться с вашей помощью! Всего за несколько недель я накопил на первый взнос на просторную квартиру
                                            в отличном спальном районе Москвы! Лена (моя жена) и я хотим поблагодарить вас за то, что мы и наши
                                            дети теперь можем жить совершенно в других условиях и не бояться за свое будущее!
                                            <img src="./index2_files/proof_04.jpg" class="img-responsive">
                                        </div>
                                        <div class="action comment">
                                            Комментировать
                                            <span>168</span>
                                        </div>
                                        <div class="action share">
                                            <span>91</span>
                                        </div>
                                        <div class="action like">
                                            <span>1206</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="message">
                                    <div class="userphoto">
                                    </div>
                                    <div class="content">
                                        <div class="username">
                                            Алексей Шибенко
                                        </div>
                                        <div class="usertext">
                                            Не знаю, в курсе ли вы, но у нас тут на Украине сейчас работу просто не найти! Тем более с хорошей
                                            зарплатой и ТЕМ БОЛЕЕ, ЕСЛИ ТЫ СТУДЕНТ! Ваша программа «Цепная Реакция» просто спасла меня… теперь я
                                            зарабатываю 5 000 долларов в неделю. А тут такие деньги не заработать и за полгода! Благослови вас
                                            Бог!
                                            <img src="./index2_files/proof_05.jpg" class="img-responsive">
                                        </div>
                                        <div class="action comment">
                                            Комментировать
                                            <span>84</span>
                                        </div>
                                        <div class="action share">
                                            <span>17</span>
                                        </div>
                                        <div class="action like">
                                            <span>584</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="message">
                                    <div class="userphoto">
                                        <img src="./index2_files/ok-06.jpg">
                                    </div>
                                    <div class="content">
                                        <div class="username">
                                            Максим Волошин
                                        </div>
                                        <div class="usertext">
                                            Я тестировал эту программу 10 дней, и теперь хочу, чтобы весь мир узнал о том, насколько она
                                            эффективна! У меня много подписчиков – и на Facebook, и в ВКонтакте – и я не хочу держать в секрете
                                            это открытие. Думаю, они будут просто в шоке, когда узнают, что всю эту неделю я зарабатывал больше
                                            1000$ в день.
                                            <img src="./index2_files/proof_06.jpg" class="img-responsive">
                                        </div>
                                        <div class="action comment">
                                            Комментировать
                                            <span>47</span>
                                        </div>
                                        <div class="action share">
                                            <span>49</span>
                                        </div>
                                        <div class="action like">
                                            <span>706</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper pattern3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h1>Бесплатная регистрация</h1>
                    <div class="signup regForm" id="regForm14f4d57fbf874315aaac78ecadba4b1e">
                        <div id="regFormContent_regForm14f4d57fbf874315aaac78ecadba4b1e" class="reg-form">
                            <form method="POST" action="http://chainm.pro/thanks.php" class="intgrtn-form-signup">
                                <input name="affiliate" value="1" type="hidden">
                                <input name="campaign" value="chain-system" type="hidden">
                                <input name="clickId" class="click_id" type="hidden">
                                <input name="extCampaign" value="chain-system.chain-sys.site" type="hidden">
                                <input name="facebookPixel" value="" type="hidden">
                                <input name="source" value="1" type="hidden">
                                <input class="form-control input-group-field req firstName" name="firstName" placeholder="Введите имя" type="text" value="test" required="required" id='regFormbbb9d0c446d2430cad6864a070dbe5d6_fname1'>
                                <input class="form-control input-group-field req" name="lastName" placeholder="Введите фамилию" type="text" value="" required="required">
                                <input class="form-control input-group-field req userEmail" name="email" placeholder="Введите e-mail" type="email" value="test@test.ru" required="required" id='regFormbbb9d0c446d2430cad6864a070dbe5d6_email'>
                                <div class="intgrtn-input-holder intgrtn-input-holder-phone">
                                    <center>
                                        <div style="width: 28%;    display: inline-block;">
                                            <select name="codeNum" class="form-control req phone_code" required="required">
                                                <option data-iso='AB' value='7'> +7</option>
                                                <option data-iso='AD' value='376'> +376</option>
                                                <option data-iso='AE' value='971'> +971</option>
                                                <option data-iso='AF' value='93'> +93</option>
                                                <option data-iso='AG' value='1268'> +1268</option>
                                                <option data-iso='AI' value='1264'> +1264</option>
                                                <option data-iso='AL' value='355'> +355</option>
                                                <option data-iso='AM' value='374'> +374</option>
                                                <option data-iso='AN' value='599'> +599</option>
                                                <option data-iso='AO' value='244'> +244</option>
                                                <option data-iso='AQ' value='672'> +672</option>
                                                <option data-iso='AR' value='54'> +54</option>
                                                <option data-iso='AS' value='1684'> +1684</option>
                                                <option data-iso='AT' value='43'> +43</option>
                                                <option data-iso='AU' value='61'> +61</option>
                                                <option data-iso='AW' value='297'> +297</option>
                                                <option data-iso='AX' value='358'> +358</option>
                                                <option data-iso='AZ' value='994'> +994</option>
                                                <option data-iso='BA' value='387'> +387</option>
                                                <option data-iso='BB' value='1246'> +1246</option>
                                                <option data-iso='BD' value='880'> +880</option>
                                                <option data-iso='BE' value='32'> +32</option>
                                                <option data-iso='BF' value='226'> +226</option>
                                                <option data-iso='BG' value='359'> +359</option>
                                                <option data-iso='BH' value='973'> +973</option>
                                                <option data-iso='BI' value='257'> +257</option>
                                                <option data-iso='BJ' value='229'> +229</option>
                                                <option data-iso='BL' value='590'> +590</option>
                                                <option data-iso='BM' value='1441'> +1441</option>
                                                <option data-iso='BN' value='673'> +673</option>
                                                <option data-iso='BO' value='591'> +591</option>
                                                <option data-iso='BQ' value='599'> +599</option>
                                                <option data-iso='BR' value='55'> +55</option>
                                                <option data-iso='BS' value='1242'> +1242</option>
                                                <option data-iso='BT' value='975'> +975</option>
                                                <option data-iso='BW' value='267'> +267</option>
                                                <option data-iso='BY' value='375'> +375</option>
                                                <option data-iso='BZ' value='501'> +501</option>
                                                <option data-iso='CA' value='1'> +1</option>
                                                <option data-iso='CC' value='61'> +61</option>
                                                <option data-iso='CD' value='243'> +243</option>
                                                <option data-iso='CF' value='236'> +236</option>
                                                <option data-iso='CG' value='242'> +242</option>
                                                <option data-iso='CH' value='41'> +41</option>
                                                <option data-iso='CI' value='225'> +225</option>
                                                <option data-iso='CK' value='682'> +682</option>
                                                <option data-iso='CL' value='56'> +56</option>
                                                <option data-iso='CM' value='237'> +237</option>
                                                <option data-iso='CN' value='86'> +86</option>
                                                <option data-iso='CO' value='57'> +57</option>
                                                <option data-iso='CR' value='506'> +506</option>
                                                <option data-iso='CS' value='381'> +381</option>
                                                <option data-iso='CU' value='53'> +53</option>
                                                <option data-iso='CV' value='238'> +238</option>
                                                <option data-iso='CW' value='599'> +599</option>
                                                <option data-iso='CX' value='61'> +61</option>
                                                <option data-iso='CY' value='357'> +357</option>
                                                <option data-iso='CZ' value='420'> +420</option>
                                                <option data-iso='DE' value='49'> +49</option>
                                                <option data-iso='DJ' value='253'> +253</option>
                                                <option data-iso='DK' value='45'> +45</option>
                                                <option data-iso='DM' value='1767'> +1767</option>
                                                <option data-iso='DO' value='1809'> +1809</option>
                                                <option data-iso='DZ' value='213'> +213</option>
                                                <option data-iso='EC' value='593'> +593</option>
                                                <option data-iso='EE' value='372'> +372</option>
                                                <option data-iso='EG' value='20'> +20</option>
                                                <option data-iso='EH' value='212'> +212</option>
                                                <option data-iso='ER' value='291'> +291</option>
                                                <option data-iso='ES' value='34'> +34</option>
                                                <option data-iso='ET' value='251'> +251</option>
                                                <option data-iso='EU' value='3444'> +3444</option>
                                                <option data-iso='FI' value='358'> +358</option>
                                                <option data-iso='FJ' value='679'> +679</option>
                                                <option data-iso='FK' value='500'> +500</option>
                                                <option data-iso='FM' value='691'> +691</option>
                                                <option data-iso='FO' value='298'> +298</option>
                                                <option data-iso='FR' value='33'> +33</option>
                                                <option data-iso='GA' value='241'> +241</option>
                                                <option data-iso='GB' value='44'> +44</option>
                                                <option data-iso='GD' value='1473'> +1473</option>
                                                <option data-iso='GE' value='995'> +995</option>
                                                <option data-iso='GF' value='594'> +594</option>
                                                <option data-iso='GG' value='441481'> +441481</option>
                                                <option data-iso='GH' value='233'> +233</option>
                                                <option data-iso='GI' value='350'> +350</option>
                                                <option data-iso='GL' value='299'> +299</option>
                                                <option data-iso='GM' value='220'> +220</option>
                                                <option data-iso='GN' value='224'> +224</option>
                                                <option data-iso='GP' value='590'> +590</option>
                                                <option data-iso='GQ' value='240'> +240</option>
                                                <option data-iso='GR' value='30'> +30</option>
                                                <option data-iso='GS' value='500'> +500</option>
                                                <option data-iso='GT' value='502'> +502</option>
                                                <option data-iso='GU' value='1671'> +1671</option>
                                                <option data-iso='GW' value='245'> +245</option>
                                                <option data-iso='GY' value='592'> +592</option>
                                                <option data-iso='HK' value='852'> +852</option>
                                                <option data-iso='HN' value='504'> +504</option>
                                                <option data-iso='HR' value='385'> +385</option>
                                                <option data-iso='HT' value='509'> +509</option>
                                                <option data-iso='HU' value='36'> +36</option>
                                                <option data-iso='ID' value='62'> +62</option>
                                                <option data-iso='IE' value='353'> +353</option>
                                                <option data-iso='IL' value='972'> +972</option>
                                                <option data-iso='IM' value='441624'> +441624</option>
                                                <option data-iso='IN' value='91'> +91</option>
                                                <option data-iso='IO' value='246'> +246</option>
                                                <option data-iso='IQ' value='964'> +964</option>
                                                <option data-iso='IR' value='98'> +98</option>
                                                <option data-iso='IS' value='354'> +354</option>
                                                <option data-iso='IT' value='39'> +39</option>
                                                <option data-iso='JE' value='441534'> +441534</option>
                                                <option data-iso='JM' value='1876'> +1876</option>
                                                <option data-iso='JO' value='962'> +962</option>
                                                <option data-iso='JP' value='81'> +81</option>
                                                <option data-iso='KE' value='254'> +254</option>
                                                <option data-iso='KG' value='996'> +996</option>
                                                <option data-iso='KH' value='855'> +855</option>
                                                <option data-iso='KI' value='686'> +686</option>
                                                <option data-iso='KM' value='269'> +269</option>
                                                <option data-iso='KN' value='1869'> +1869</option>
                                                <option data-iso='KP' value='850'> +850</option>
                                                <option data-iso='KR' value='82'> +82</option>
                                                <option data-iso='KV' value='381'> +381</option>
                                                <option data-iso='KW' value='965'> +965</option>
                                                <option data-iso='KY' value='1345'> +1345</option>
                                                <option data-iso='KZ' value='7'> +7</option>
                                                <option data-iso='LA' value='856'> +856</option>
                                                <option data-iso='LB' value='961'> +961</option>
                                                <option data-iso='LC' value='1758'> +1758</option>
                                                <option data-iso='LI' value='423'> +423</option>
                                                <option data-iso='LK' value='94'> +94</option>
                                                <option data-iso='LR' value='231'> +231</option>
                                                <option data-iso='LS' value='266'> +266</option>
                                                <option data-iso='LT' value='370'> +370</option>
                                                <option data-iso='LU' value='352'> +352</option>
                                                <option data-iso='LV' value='371'> +371</option>
                                                <option data-iso='LY' value='218'> +218</option>
                                                <option data-iso='MA' value='212'> +212</option>
                                                <option data-iso='MC' value='377'> +377</option>
                                                <option data-iso='MD' value='373'> +373</option>
                                                <option data-iso='ME' value='382'> +382</option>
                                                <option data-iso='MF' value='590'> +590</option>
                                                <option data-iso='MG' value='261'> +261</option>
                                                <option data-iso='MH' value='692'> +692</option>
                                                <option data-iso='MK' value='389'> +389</option>
                                                <option data-iso='ML' value='223'> +223</option>
                                                <option data-iso='MM' value='95'> +95</option>
                                                <option data-iso='MN' value='976'> +976</option>
                                                <option data-iso='MO' value='853'> +853</option>
                                                <option data-iso='MP' value='1670'> +1670</option>
                                                <option data-iso='MQ' value='596'> +596</option>
                                                <option data-iso='MR' value='222'> +222</option>
                                                <option data-iso='MS' value='1664'> +1664</option>
                                                <option data-iso='MT' value='356'> +356</option>
                                                <option data-iso='MU' value='230'> +230</option>
                                                <option data-iso='MV' value='960'> +960</option>
                                                <option data-iso='MW' value='265'> +265</option>
                                                <option data-iso='MX' value='52'> +52</option>
                                                <option data-iso='MY' value='60'> +60</option>
                                                <option data-iso='MZ' value='258'> +258</option>
                                                <option data-iso='NA' value='264'> +264</option>
                                                <option data-iso='NC' value='687'> +687</option>
                                                <option data-iso='NE' value='227'> +227</option>
                                                <option data-iso='NF' value='672'> +672</option>
                                                <option data-iso='NG' value='234'> +234</option>
                                                <option data-iso='NI' value='505'> +505</option>
                                                <option data-iso='NL' value='31'> +31</option>
                                                <option data-iso='NO' value='47'> +47</option>
                                                <option data-iso='NP' value='977'> +977</option>
                                                <option data-iso='NR' value='674'> +674</option>
                                                <option data-iso='NU' value='683'> +683</option>
                                                <option data-iso='NZ' value='64'> +64</option>
                                                <option data-iso='OM' value='968'> +968</option>
                                                <option data-iso='PA' value='507'> +507</option>
                                                <option data-iso='PE' value='51'> +51</option>
                                                <option data-iso='PF' value='689'> +689</option>
                                                <option data-iso='PG' value='675'> +675</option>
                                                <option data-iso='PH' value='63'> +63</option>
                                                <option data-iso='PK' value='92'> +92</option>
                                                <option data-iso='PL' value='48'> +48</option>
                                                <option data-iso='PM' value='508'> +508</option>
                                                <option data-iso='PN' value='64'> +64</option>
                                                <option data-iso='PR' value='1'> +1</option>
                                                <option data-iso='PS' value='970'> +970</option>
                                                <option data-iso='PT' value='351'> +351</option>
                                                <option data-iso='PW' value='680'> +680</option>
                                                <option data-iso='PY' value='595'> +595</option>
                                                <option data-iso='QA' value='974'> +974</option>
                                                <option data-iso='RE' value='262'> +262</option>
                                                <option data-iso='RO' value='40'> +40</option>
                                                <option data-iso='RU' value='7'> +7</option>
                                                <option data-iso='RU' value='7'> +7</option>
                                                <option data-iso='RW' value='250'> +250</option>
                                                <option data-iso='SA' value='966'> +966</option>
                                                <option data-iso='SB' value='677'> +677</option>
                                                <option data-iso='SC' value='248'> +248</option>
                                                <option data-iso='SD' value='249'> +249</option>
                                                <option data-iso='SE' value='46'> +46</option>
                                                <option data-iso='SG' value='65'> +65</option>
                                                <option data-iso='SH' value='290'> +290</option>
                                                <option data-iso='SH' value='247'> +247</option>
                                                <option data-iso='SI' value='386'> +386</option>
                                                <option data-iso='SJ' value='47'> +47</option>
                                                <option data-iso='SK' value='421'> +421</option>
                                                <option data-iso='SL' value='232'> +232</option>
                                                <option data-iso='SM' value='378'> +378</option>
                                                <option data-iso='SN' value='221'> +221</option>
                                                <option data-iso='SO' value='252'> +252</option>
                                                <option data-iso='SR' value='597'> +597</option>
                                                <option data-iso='SS' value='211'> +211</option>
                                                <option data-iso='ST' value='239'> +239</option>
                                                <option data-iso='SV' value='503'> +503</option>
                                                <option data-iso='SX' value='1721'> +1721</option>
                                                <option data-iso='SY' value='963'> +963</option>
                                                <option data-iso='SZ' value='268'> +268</option>
                                                <option data-iso='TC' value='1649'> +1649</option>
                                                <option data-iso='TD' value='235'> +235</option>
                                                <option data-iso='TF' value='262'> +262</option>
                                                <option data-iso='TG' value='228'> +228</option>
                                                <option data-iso='TH' value='66'> +66</option>
                                                <option data-iso='TJ' value='992'> +992</option>
                                                <option data-iso='TK' value='690'> +690</option>
                                                <option data-iso='TL' value='670'> +670</option>
                                                <option data-iso='TM' value='993'> +993</option>
                                                <option data-iso='TN' value='216'> +216</option>
                                                <option data-iso='TO' value='676'> +676</option>
                                                <option data-iso='TR' value='90'> +90</option>
                                                <option data-iso='TT' value='1868'> +1868</option>
                                                <option data-iso='TV' value='688'> +688</option>
                                                <option data-iso='TW' value='886'> +886</option>
                                                <option data-iso='TZ' value='255'> +255</option>
                                                <option data-iso='UG' value='256'> +256</option>
                                                <option data-iso='UM' value='699'> +699</option>
                                                <option data-iso='US' value='1'> +1</option>
                                                <option data-iso='UY' value='598'> +598</option>
                                                <option data-iso='UZ' value='998'> +998</option>
                                                <option data-iso='VA' value='379'> +379</option>
                                                <option data-iso='VC' value='1784'> +1784</option>
                                                <option data-iso='VE' value='58'> +58</option>
                                                <option data-iso='VG' value='1284'> +1284</option>
                                                <option data-iso='VI' value='1340'> +1340</option>
                                                <option data-iso='VN' value='84'> +84</option>
                                                <option data-iso='VU' value='678'> +678</option>
                                                <option data-iso='WF' value='681'> +681</option>
                                                <option data-iso='WS' value='685'> +685</option>
                                                <option data-iso='YE' value='967'> +967</option>
                                                <option data-iso='YT' value='262'> +262</option>
                                                <option data-iso='ZA' value='27'> +27</option>
                                                <option data-iso='ZM' value='260'> +260</option>
                                                <option data-iso='ZW' value='263'> +263</option>
                                            </select>
                                        </div> <input class="form-control input-group-field req" name="phonenum" placeholder="Введите телефон" style="width: 70%;display: inline-block;" type="text" required="required">
                                    </center>
                                </div>
                                <button name="submitBtn" class="default smaller reg-btn" type="submit">
                                    ЗАРЕГИСТРИРУЙТЕСЬ
                                    <nobr>ПРЯМО СЕЙЧАС</nobr>
                                </button>
                                <button class="default smaller wait-btn" style="display:none;">
                                    Ожидайте...
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 support">
                <div class="spacer">
                    <img src="./index2_files/support.png">
                </div>
                <h2>ТЕХ. ПОДДЕРЖКА 24/7</h2>
                <p>
                    Не стесняйтесь задавать вопросы! Дружелюбные сотрудники тех.поддержки с радостью помогут вам в любое время
                    <br>
                </p>
            </div>
            <div class="col-xs-12">
                <div class="footer-logo-dark">
                    <img src="./index2_files/Small-White-Logo.png" class="" alt="Цепная Реакция">
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper footer pattern">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>2020 <a href="" style="cursor: auto; color: #ddd;">©</a> Цепная Реакция. Все права защищены.</p>
                    <p>
                        <a href="" target="_blank">Уведомление о рисках</a> |
                        <a href="" target="_blank">Условия пользования</a> |
                    </p>
                    <p>
                        Торговля бинарными опционами может привести к потере инвестированного капитала. Любые сведения о прошлой доходности не гарантируют прибыли в будущем. Услуги предоставляются только лицам старше 18 лет.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="./index2_files/jquery.js"></script>
    <script src="./index2_files/bootstrap.js"></script>
    <script src="./index2_files/jqueryval.js"></script>
    <script>
    $(document).ready(function() {
        $('option[data-iso="RU').css('color', 'red').prop('selected', true);
    });
    </script>
    <script>
    function setCookie(key, value, expiry) {
        var expires = new Date();
        expires.setTime(expires.getTime() + (expiry * 24 * 60 * 60 * 1000));
        document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
    }

    function getCookie(key) {
        var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
        return keyValue ? keyValue[2] : null;
    }

    function eraseCookie(key) {
        var keyValue = getCookie(key);
        setCookie(key, keyValue, '-1');
    }
    var country = 'RU';
    $.get("https://ipinfo.io?token=c5ef26d18ad42d", function(response) {
        var select = document.querySelectorAll('.phone_code');
        for (var i = 0; i < select.length; i++) {
            var option = select[i].getElementsByTagName('option');
            for (var j = 0; j < option.length; j++) {
                if (option[j].dataset.iso && option[j].dataset.iso === response.country) {
                    option[j].selected = true;
                    country = response.country;
                }
            }
        }
    }, "jsonp");
    var search = decodeURI(window.location.search),
        s = '';
    if (search) {
        var a = search.replace('?', '').split('&');
        a.forEach(function(b) {
            if (b.split('=')) {
                if (b.split('=')[0].toLowerCase() == 'email') {
                    $('#regFormf241f4ab30534f7894d48374bf2b4de7_email').val(b.split('=')[1]);
                    $('#regFormbbb9d0c446d2430cad6864a070dbe5d6_email').val(b.split('=')[1]);
                }
                if (b.split('=')[0].toLowerCase() == 'fname') {
                    $('#regFormbbb9d0c446d2430cad6864a070dbe5d6_fname1').val(b.split('=')[1]);
                    $('#regFormf241f4ab30534f7894d48374bf2b4de7_fname').val(b.split('=')[1]);
                }
            }
        });
    }

    function setCookie(key, value, expiry) {
        var expires = new Date();
        expires.setTime(expires.getTime() + (expiry * 24 * 60 * 60 * 1000));
        document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
    }

    function getCookie(key) {
        var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
        return keyValue ? keyValue[2] : null;
    }

    function eraseCookie(key) {
        var keyValue = getCookie(key);
        setCookie(key, keyValue, '-1');
    }

    var fname = getCookie('fname');
    var sname = getCookie('sname');
    var email = getCookie('email');
    var number = getCookie('number');
    if (email&& email!=='undefined'){
        $('#regFormf241f4ab30534f7894d48374bf2b4de7_email').val(email);
        $('#regFormbbb9d0c446d2430cad6864a070dbe5d6_email').val(email);
    } 
    if (fname&& fname!=='undefined') {
       $('#regFormbbb9d0c446d2430cad6864a070dbe5d6_fname1').val(fname); 
       $('#regFormf241f4ab30534f7894d48374bf2b4de7_fname').val(fname);
    }
    if (number&& number!=='undefined') {
       $('input[name = phonenum]').val(number.replace('+7',""));
    }
    if (sname && sname!=='undefined' ) {
       $('input[name = lastName]').val(sname);
    }
    $('button[name=submitBtn]').on('click', function(e) {
        $('button[name=submitBtn]').prop('disabled', true);
        setTimeout(function() {
            $('button[name=submitBtn]').prop('disabled', false);
        }, 5000);

        var formJs = $(this).parents('form');
        var firstName = formJs.find('input[name = firstName]').val();
        var lastName = formJs.find('input[name = lastName]').val();
        var email = formJs.find('input[name = email]').val();
        var telIndex = formJs.find('select[name = codeNum]').val();
        var usrtel = formJs.find('input[name = phonenum]').val();

        $('<style>.error::placeholder {color: red;opacity: 1;}</style>').appendTo('head');

        var phone_number = telIndex + usrtel;
        var re = /^(([^<>()\[\]\.,;:\s@"]+(\.[^<>()\[\]\.,;:\s@"]+)*)|(".+"))@(([^<>()[\]\.,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,})$/i;

        if (firstName == '') {

            formJs.find('input[name = firstName]').addClass('error');
            formJs.find('input[name = firstName]').attr('placeholder', 'Вы забыли указать Имя');
            return false;
        } else
        if (lastName == '') {

            formJs.find('input[name = lastName]').addClass('error');
            formJs.find('input[name = lastName]').attr('placeholder', 'Вы забыли указать Фамилию');
            return false;
        } else
        if (email == '' || !re.test(email)) {

            formJs.find('input[name = email]').addClass('error');
            formJs.find('input[name = email]').val('');
            formJs.find('input[name = email]').attr('placeholder', 'Введите корректный emal');
            return false;
        } else
        if (usrtel == '') {

            formJs.find('input[name = phonenum]').addClass('error');
            formJs.find('input[name = phonenum]').attr('placeholder', 'Вы забыли указать телефон');
            return false;
        } else {
            var search = window.location.search,
                utm = '';
            if (search) {
                var a = search.replace('?', '').split('&');
                a.forEach(function(b) {
                    if (b.split('=') && ['aff1', 'aff2', 'aff3'].indexOf(b.split('=')[0].toLowerCase()) > -1) {
                        utm += '|' + b.split('=')[1];
                    }
                });
            }
            var msg = 'Affiliate1|chainreact' + utm;
            var random = Math.round(Math.random());
            random = 998;
            var s = new URLSearchParams;
            s.append("title", "Заказ");
            s.append("firstName", firstName);
            s.append("lastName", lastName);
            s.append("email", email);
            s.append("phone", usrtel);
            /*var t = new XMLHttpRequest();


            if (random == 999) {
                t.open("POST", "mail.php");
                t.send(s);
            } else if (random == 998) {
                t.open("POST", "mail4.php",true);
                t.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                t.onreadystatechange = function() {
        if(xhr.readyState === 4) { // xhr.status === 200 not needed in your case
            data = JSON.parse(request.reponse);
            console.log( data );
        }
    };
                t.send(s);
            } else if (random === 0) {
                t.open("POST", "mail2.php");
                t.send(s);
            } else t.open("POST", "mail3.php");
            t.send(s);
            var request = new XMLHttpRequest();
            request.open('POST', 'mail4.php', true);*/
            /*var request = new XMLHttpRequest();
            request.open('POST', 'mail5.php', true);
            request.onreadystatechange = function() {
                if (xhr.readyState === 4) { // xhr.status === 200 not needed in your case
                    data = JSON.parse(request.reponse);
                    console.log(data);
                }
            };*/

            // request.send(s);
            var url = "https://script.google.com/macros/s/AKfycbxkdCtW3LdHul89ae3OJgjsaJZzKw59gOh4hlKNVf_0BTeXx7zr/exec?p1=" + firstName + "&mobile=" + usrtel + "&phone_code=" + telIndex + "&geo=" + country + "&p2=" + lastName + "&p3=" + email + "&p4=" + phone_number + "&p5=binarysuccess&p6=" + utm;
            $.getJSON(url, function(returnValue) { console.log(returnValue); });
            setTimeout(function() {
                document.location.href = "thanks.html";
            }, 1000);

        }
    });
    </script>
</body>

</html>