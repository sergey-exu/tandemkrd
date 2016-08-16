<?php use yii\helpers\Html;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
use yii\widgets\Menu;
use frontend\assets\AppAsset;
use frontend\widgets\GoogleAnalytics;
AppAsset::register($this);
?> 
<?php $this->beginPage() ?>
<!DOCTYPE html> 
<html lang="<?= Yii::$app->language ?>">
<head> 
    <meta charset="<?= Yii::$app->charset ?>"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <?=Html::csrfMetaTags() ?> 
    <title>Тандем - <?=Html::encode($this->title) ?></title>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
<?php $this->head() ?> 
    <meta name="google-site-verification" content="GmKIV7pTg3FVDKkVYz7MdAzbBlx_eebUj6qLUZ2FUPw" />
    <meta name="yandex-verification" content="fb1eb7c14f9dd86a" />
</head> 
<body class="home page page-id-3283 page-template page-template-portfolio page-template-portfolio-php has-page-borders body-lg-skin-kalium-default wpb-js-composer js-comp-ver-4.12 vc_responsive">
     <?php $this->beginBody() ?>
    <div class="page-border" data-wow-duration="1s" data-wow-delay="0.2s"> 
         <div class="top-border"></div>
         <div class="right-border"></div>
         <div class="bottom-border"></div>
         <div class="left-border"></div>
     </div>
     <!--Мобильное меню-->
    <div class="mobile-menu-wrapper">
          <div class="mobile-menu-container ps-container ps-theme-default" data-ps-id="9e94c223-7bfb-252d-abfc-50631f920b1d">
              <?php
                if ($menuItems = \backend\modules\menu\models\Menu::find()->where(['name' => 'mobile'])->one()) {
                    $menuItems = json_decode($menuItems['data'], true);
                        echo Menu::widget([
                                    'items' => $menuItems,
                                    'options' => ['id'=>'menu-main-menu-1','class' => 'menu'],
                            ]);
                        } else Yii::error('Не найдены настройки основного меню (mane "main")');
                    ?>
               
                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
                    <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;">
                    <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                </div>
        </div>
    </div>
      <!-- конец Мобильное меню-->
    <div class="mobile-menu-overlay"></div>
    <!--Основное меню-->
    <div class="top-menu-container menu-type-top-menu menu-skin-dark">
        <div class="container">
            <div class="row row-table row-table-middle">
                <div class="col-sm-4">
                    <nav class="top-menu menu-row-items-1">
                        <?php
                        if ($menuItems = \backend\modules\menu\models\Menu::find()->where(['name' => 'main'])->one()) {
                            $menuItems = json_decode($menuItems['data'], true);
                                echo Menu::widget([
                                            'items' => $menuItems,
                                            'options' => ['id'=>'menu-main-menu-1','class' => 'menu'],
                                    ]);
                                } else Yii::error('Не найдены настройки основного меню (mane "main")');
                            ?>
                    </nav>
                </div>
                <div class="col-sm-8">
                    <div class="row blog-sidebar">
                        <div class="col-sm-6">
                            <div class="sidebar-box-holder wp-widget rotatingtweets_widget-4 widget_rotatingtweets_widget">
                                <h3 class="sidebar-entry-title">О нас</h3>
                                <div class="textwidget">
                                    Оптовая продажа упаковочных материалов для пищевых продуктов от ведущих отечетственных производителей
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="sidebar-box-holder wp-widget text-3 widget_text">
                                <h3 class="sidebar-entry-title">Контакты</h3>
                                <div class="textwidget">
                                    <ul class="fa-ul" itemscope itemtype="http://schema.org/Organization">
                                        <li class="no-padding"><i class="fa-li fa fa-angle-double-right" aria-hidden="true"></i><span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> Адрес: <?=Html::decode(Yii::$app->settings->get('contact.address'));?></span></li>
                                        <li class="no-padding"><i class="fa-li fa fa-angle-double-right" aria-hidden="true"></i> Телефон:<span itemprop="telephone"><?=Html::decode(Yii::$app->settings->get('contact.mainphone'));?></span></li>
                                        <li class="no-padding"><i class="fa-li fa fa-angle-double-right" aria-hidden="true"></i> Email: <a href="mailto:<?=Html::decode(Yii::$app->settings->get('contact.mainemail'));?>"><span itemprop="email"><?=Html::decode(Yii::$app->settings->get('contact.mainemail'));?></span></a></li>
                                    </ul>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- конец Основное меню-->
    <div class="wrapper" id="main-wrapper" style="margin-top: 0px;">
         <header class="main-header menu-type-top-menu" style="top: 0px;">
             <div class="container">
                 <div class="logo-and-menu-container">
                     <div class="logo-column">
                         <a href="/" class="header-logo">
                             <img src="/storage/img/logo_dark.png" alt="Тандем">
                         </a>
                     </div>
                     <div class="menu-column">
                         <a class="menu-bar menu-skin-dark" href="/">
                             <span class="ham"></span>
                         </a>
                     </div>
                 </div>
             </div>
         </header>
         <div class="container">
            <?= $content ?>     
         </div>
    </div>
    <!--Футер-->
    <footer id="footer" class="main-footer footer-bottom-vertical">
        <div class="container"></div> 
    </footer>
    <script>
        var headerOptions = {
            "stickyMenu": false,
            "currentMenuSkin": "menu-skin-dark"
        };
    </script>
<?php $this->endBody() ?>
<?= GoogleAnalytics::widget(['trackingId'=> Yii::$app->settings->get('analitycs.gaTrackingId')]); ?>

<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter39014535 = new Ya.Metrika({ id:39014535, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/39014535" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

</body>
</html>
<?php $this->endPage() ?>