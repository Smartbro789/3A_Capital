<!DOCTYPE html>

<?php
include('lang/lang.php');
?>

<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>AAA Capital</title>
</head>

<body>
    <div class="background">
        <header id="header">
            <div class="container">
                <div class="header_logo">AAA Capital</div>
                <a class="link" href="page.html"><?=$lang['page1']?></a>
                <a class="link" href="table.html"><?=$lang['page2']?></a>
            </div>
        </header>
        <div class="slogan">
            <p><?=$lang['slogan']?></p>
            <?=$lang['wish']?>
        </div>
        <div style="padding-left: 10px;">
            <a class="link" href="review.html"><?=$lang['review1']?></a>
            <a class="link" href="review2.html"><?=$lang['review2']?></a>
            <a class="link" href="review3.html"><?=$lang['review3']?></a>
        </div>

        <div class="table">
            <div>
                <table border="1">
                    <?=$lang['table']?>
                </table>
            </div>


        </div>
        <div class="form">
               <!--  <form action="https://mobile-review.com/news/obnaruzhena-novaya-skam-sxema-obmana-predprinimatelej-v-internete"> -->
                 <form action="#">
                    <p><?=$lang['ninput']?></p>
                <fieldset>
                            <label for="price"><?=$lang['investment']?></label>
                            <select name="price" id="price">
                                  <option value="bomj">100</option>
                                  <option value="middle">2000</option>
                                  <option value="krutelyk" selected="selected">5000</option>
                            </select>
                    <p><input type="submit" onclick="message()"></p>
                </fieldset>
                </form>
            </div>
        <div class="list">
            <div class="container">
                <?=$lang['recomendations']?>
            </div>
        </div>
        <div id="minfin-informer-m1Fn-currency" class="informer">
            <?=$lang['informer']?>
        </div>
        <script>
            var iframe = '<ifra' + 'me width="275" height="120" fram' + 'eborder="0" src="https://informer.minfin.com.ua/gen/course/?color=yellow" vspace="0" scrolling="no" hspace="0" allowtransparency="true"style="width:275px;height:120px;ove' + 'rflow:hidden;"></iframe>';
            var cl = 'minfin-informer-m1Fn-currency';
            document.getElementById(cl).innerHTML = iframe; 
        </script>
    </div>
    <div class="weather">
        <a target="_blank" href="https://nochi.com/weather/kiev-18881"><img
                src="https://w.bookcdn.com/weather/picture/32_18881_1_20_34495e_250_2c3e50_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=604&anc_id=1337"
                alt="booked.net" /></a>
    </div>
    <div class="cloak">
        <script type="text/javascript">
            var css_file = document.createElement("link");
            css_file.setAttribute("rel", "stylesheet");
            css_file.setAttribute("type", "text/css");
            css_file.setAttribute("href", "//s.bookcdn.com//css/cl/bw-cl-120x45.css");
            document.getElementsByTagName("head")[0].appendChild(css_file); 
        </script>
        <div id="tw_6_1246519141">
            <div style="width:130px; height:45px; margin: 0 auto;">
                <a href="https://nochi.com/time/kiev-18881">Киев</a><br />
            </div>
        </div>
        <script type="text/javascript">
            function setWidgetData_1246519141(data) {
                if (typeof (data) != 'undefined' && data.results.length > 0) {
                    for (var i = 0; i < data.results.length; ++i) {
                        var objMainBlock = ''; var params = data.results[i];
                        objMainBlock = document.getElementById('tw_' + params.widget_type + '_' + params.widget_id); if
                            (objMainBlock !== null) objMainBlock.innerHTML = params.html_code;
                    }
                }
            } var clock_timer_1246519141 = -1;
        </script>

</body>

</html>