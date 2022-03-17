<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Онлайн-школа Карамель</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="../public/css/style.css">

    <!-- link font 'Roboto' to goole fonts cdn -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- fontawesom icons -->
    <script src="https://kit.fontawesome.com/d3a720d887.js"></script>
</head>

<body>

    <!-- header -->
    <header>
        <?php include('../modules/includes/header.php') ;?>
    </header>

    <!-- content -->
    <main>
        <div class="content-confectioners wrapper">
            <section>
                <h3>Ученики онлайн-школы кондитеров &laquo;Карамель&raquo;</h3>

                <info>
                    <div class="address">
                        <h5>Москва</h5>
                        <div class="address__people">
                            <h6>Светлана</h6>
                            <a target="_blank" href="https://www.instagram.com/svetlanin_tortik/">https://www.instagram.com/svetlanin_tortik/</a>
                        </div>
                        <div class="address__people">
                            <h6>Наталья</h6>
                            <a target="_blank" href="https://www.instagram.com/natali_roi/">https://www.instagram.com/natali_roi/</a>
                        </div>
                        <div class="address__people">
                            <h6>Ирина Петрова</h6>
                            <a target="_blank" href="https://www.instagram.com/tort.nazakazmoskva/">https://www.instagram.com/tort.nazakazmoskva/</a>
                        </div>
                    </div>
                    <div class="address">
                        <h5>Московская область</h5>
                        <div class="address__people">
                            <h6>Солнечногорск Татьяна</h6>
                            <a target="_blank" href="https://www.instagram.com/ber.tanusha/">https://www.instagram.com/ber.tanusha/</a>
                        </div>
                        <div class="address__people">
                            <h6>Ирина</h6>
                            <a target="_blank" href="https://www.instagram.com/sweet_dom37">https://www.instagram.com/sweet_dom37</a>
                        </div>
                        <div class="address__people">
                            <h6>г. Коломна - Анна</h6>
                            <a target="_blank" href="https://www.instagram.com/ab.cake.kolomna/">https://www.instagram.com/ab.cake.kolomna/</a>
                        </div>
                        <div class="address__people">
                            <h6>г.Чехов - Зухра</h6>
                            <a target="_blank" href="https://www.instagram.com/sovunya_cakes/">https://www.instagram.com/sovunya_cakes/</a>
                        </div>
                    </div>
                    <div class="address">
                        <h5>Санкт-Петербург</h5>
                        <div class="address__people">
                            <h6>Виктория</h6>
                            <a target="_blank" href="https://www.instagram.com/vf.cake/">https://www.instagram.com/vf.cake/</a>
                        </div>
                        <div class="address__people">
                            <h6>Наргиз</h6>
                            <a target="_blank" href="https://www.instagram.com/gourmand.cake/">https://www.instagram.com/gourmand.cake/</a>
                        </div>
                        <div class="address__people">
                            <h6>Любовь</h6>
                            <a target="_blank" href="https://www.instagram.com/lubin_tort/">https://www.instagram.com/lubin_tort/</a>
                        </div>
                    </div>
                </info>

                <!-- popular master class -->
                <div class="pupular-masterClass">
                    <h4 class="uppercase">Популярное</h4>
                    <div class="popular-masterClass__container">
                        <img src="/public/images/products/mk1.jpg" alt="фото отсутсвует" title="Прага">
                        <h4>Торт &laquo;Прага&raquo;<br>на самый первый день рождения ребенку</h4>
                        <h5>Продолжительность &mdash; 50 минут</h5>
                        <h6>1 720 ₽</h6>

                        <button class="product-card__sale">Получить урок</button>
                    </div>
                    <div class="popular-masterClass__container">
                        <img src="/public/images/products/mk3.jpg" alt="фото отсутсвует" title="Ежевичный и Медовый бисквит">
                        <h4>Ежевичный и Медовый бисквиты. Бонус урок &mdash; &laquo;Швейцарская Меренга&raquo;</h4>
                        <h5>Продолжительность &mdash; 29 минут</h5>
                        <h6>1 380 ₽</h6>

                        <button class="product-card__sale">Получить урок</button>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- footer -->
    <footer>
        <?php include('../modules/includes/footer.php') ;?>
        <!-- scroll to top widget -->
        <?php include('../modules/includes/scroll-to-top-widget.php') ;?>
    </footer>


<!-- jQuery library connect cdn -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<!-- <script src="https://code.jquery.com/jquery-2.1.0.js"></script> -->
    <!-- <script>
        $(".vhod,.icon").fadeOut(3000).fadeIn(2000);
        $(".icon").fadeOut(3000).fadeIn(2000);
    </script> -->

<script type="text/javascript">
// scroll to top
$(function() {
$(window).scroll(function() {
if($(this).scrollTop() != 0) {
$('#toTop').fadeIn();
} else {
$('#toTop').fadeOut();
}
});
$('#toTop').click(function() {
$('body,html').animate({scrollTop:0},800);
});
});

</body>
</html>
