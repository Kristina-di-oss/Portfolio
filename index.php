<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Онлайн-школа Карамель</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="/public/css/style.css">

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
        <?php include('./modules/includes/header.php') ;?>
    </header>

    <!-- content -->
    <main>
        <div class="content wrapper">
            <section>
                <h3>Самые популярные мастер-классы</h3>
                <div class="product-card grid">
                    <div class="card grid-item">
                        <img src="/public/images/products/mk1.jpg" alt="фото отсутсвует" title="Прага">
                        <h4>Торт &laquo;Прага&raquo;<br>на самый первый день рождения ребенку</h4>
                        <h5>Продолжительность &mdash; 50 минут</h5>
                        <h6>1 720 ₽</h6>

                        <button class="product-card__sale">Получить урок</button>
                    </div>
                    <div class="card grid-item">
                        <img src="/public/images/products/mk2.jpg" alt="фото отсутсвует" title="Красный Бархат">
                        <h4>Бисквиты &laquo;Красный Бархат&raquo; &mdash; Шоколадный на кипятке + 2 бонуса</h4>
                        <h5>Продолжительность &mdash; 27 минут</h5>
                        <h6>1 630 ₽</h6>

                        <button class="product-card__sale">Получить урок</button>
                    </div>
                    <div class="card grid-item">
                        <img src="/public/images/products/mk3.jpg" alt="фото отсутсвует" title="Ежевичный и Медовый бисквит">
                        <h4>Ежевичный и Медовый бисквиты. Бонус урок &mdash; &laquo;Швейцарская Меренга&raquo;</h4>
                        <h5>Продолжительность &mdash; 29 минут</h5>
                        <h6>1 380 ₽</h6>

                        <button class="product-card__sale">Получить урок</button>
                    </div>
                    <div class="card grid-item">
                        <img src="/public/images/products/mk4.jpg" alt="фото отсутсвует" title="Швейцарский масляный">
                        <h4>Швейцарский масляный. Шоколадный Пражский крем</h4>
                        <h5>Продолжительность &mdash; 17 минут</h5>
                        <h6>780 ₽</h6>

                        <button class="product-card__sale">Получить урок</button>
                    </div>
                </div>
            </section>

            <section>
                <?php include('./modules/includes/surprise.php') ;?>
            </section>

            <section>
                <h3 class="uppercase">Автор и преподаватель онлайн-школы кондитеров</h3>
                <h4 class="couch-heading">Александра Филлимонова</h4>

                <div class="couch grid">
                    <div class="grid-item right">
                        <p>6 лет назад<br>в декрете начала печь на<br>заказ</p>
                        <p>Провела более 100<br>оффлайн мастер-классов для<br>начинающих кондитеров и не<br>только</p>
                    </div>
                    <div class="grid-item">
                        <img src="/public/images/ui/couch.png" alt="фото отсутствует" title="Александра Филлимонова">
                    </div>
                    <div class="grid-item">
                        <p>Более 65 тыс. учеников, которые<br>начали печь торты и десерты с<br>нуля</p>
                        <p>Развила свой кондитерский<br>блог до 130 000 подписчиков,<br>снимая рецепты и видеоуроки</p>
                    </div>
                </div>
            </section>
        </div>

        <section>
            <div class="profit">
                <h3 class="profit-heading">Почему выгодно учиться у нас?</h3>

                <div class="profit-items grid">
                    <div class="grid-item">
                        <!-- <img src="/public/images/ui/sertif.png" alt=""> -->
                        <i class="fas fa-medal"></i>
                        <h5>Сертификат</h5>
                        <p>Именной электронный сертификат школы получатвсе ученики, в срок закончившие курс</p>
                    </div>
                    <div class="grid-item">
                        <!-- <img src="/public/images/ui/maps.png" alt=""> -->
                        <i class="far fa-file-alt"></i>
                        <h5>Технологические карты</h5>
                        <p>Подробные пошаговые рецепты для скачивания, по которым легко готовить десерты любой сложности</p>
                    </div>
                    <div class="grid-item">
                        <!-- <img src="/public/images/ui/hands.png" alt=""> -->
                        <i class="far fa-handshake"></i>
                        <h5>Список поставщиков</h5>
                        <p>Скидки ученикам от наших магазинов-партнёров. Экономьте уже на старте!</p>
                    </div>
                    <div class="grid-item">
                        <!-- <img src="/public/images/ui/stock.png" alt=""> -->
                        <i class="fas fa-certificate"></i>
                        <h5>Скидка</h5>
                        <p>Зафиксированная скидка 50% на любой следующий курс в течение 3 месяцев с момента окончания курса</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <img class="support" src="/public/images/ui/icon-burger.png" alt="">
            <h3>Техническая поддержка</h3>
            <?php include('./modules/includes/support-form.php') ;?>
        </section>
    </main>

    <!-- footer -->
    <footer>
        <?php include('./modules/includes/footer.php') ;?>
        <!-- scroll to top widget -->
        <?php include('./modules/includes/scroll-to-top-widget.php') ;?>
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

</script>

</body>
</html>
