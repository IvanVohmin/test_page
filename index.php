

<?php 
    require_once 'config.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://lk.wapico.ru/widget/plugin/components/font-awesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://lk.wapico.ru/widget/plugin/czm-chat-support.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">

    <title>Услуги Ассенизатора</title>
  </head>
  <body>
    <div id="example"></div>
    <script src="https://lk.wapico.ru/widget/plugin/components/jquery/jquery-1.9.0.min.js"></script>
<script src="https://lk.wapico.ru/widget/plugin/components/moment/moment.min.js"></script>
<script src="https://lk.wapico.ru/widget/plugin/components/moment/moment-timezone-with-data.min.js"></script>
<script src="https://lk.wapico.ru/widget/plugin/czm-chat-support.min.js"></script>
<script>

$('#example').czmChatSupport({

    /* Button Settings */
    button: {
        position: "right", /* left, right or false. "position:false" does not pin to the left or right */
        style: 1, /* Button style. Number between 1 and 7 */
        src: '<i class="fab fa-whatsapp"></i>', /* Image, Icon or SVG */
        backgroundColor: "#10c379", /* Html color code */
        effect: 1, /* Button effect. Number between 1 and 7 */
        notificationNumber: "1", /* Custom text or false. To remove, (notificationNumber:false) */
        speechBubble: "Хотите заказать нашу услугу?", /* To remove, (speechBubble:false) */
        pulseEffect: true, /* To remove, (pulseEffect:false) */
        text: { /* For Button style larger than 1 */
            title: "", /* Writing is required */
            description: "Администратор", /* To remove, (description:false) */
            online: "I'm Online", /* To remove, (online:false) */
            offline: false /* To remove, (offline:false) */
        }
    },

    /* Popup Settings */
    popup: {
        automaticOpen: false, /* true or false (Open popup automatically when the page is loaded) */
        outsideClickClosePopup: true, /* true or false (Clicking anywhere on the page will close the popup) */
        effect: 1, /* Popup opening effect. Number between 1 and 15 */
        header: {
            backgroundColor: "#10c379", /* Html color code */
        },

        /* Representative Settings */
        persons: [

        /* Copy for more representatives [::Start Copy::] */
        {
            avatar: {
                src: '<img src="https://lk.wapico.ru/widget/assets/img/person/1.jpg" alt="">', /* Image, Icon or SVG */
                backgroundColor: "#ffffff", /* Html color code */
                onlineCircle: true /* Avatar online circle. To remove, (onlineCircle:false) */
            },
            text: {
                title: "Евгений", /* Writing is required */
                description: "Администратор", /* To remove, (description:false) */
                
                /* Used on one account only */
                message: "Здравствуйте! Заинтересованы в наших услугах?", /* Shows message bubble. To remove, (message:false) */
                textbox: "Сообщение...", /* Allows the visitor to write the message they want. This feature is currently only available on Whatsapp. To remove, (textbox:false) */
                button: false /* Except for Whatsapp, you only need to use the button. For example: (button:"Start Chat") To remove, (button:false) */
            },
            link: {
                desktop: "https://web.whatsapp.com/send?phone=+79635323203&text=Здравствуйте", /* Writing is required */
                mobile: "https://wa.me/+79635323203/?text=Здравствуйте" /* If it is hidden desktop link will be valid. To remove, (mobile:false) */
            },
            onlineDay: {
                /* Change the day you are offline like this. (sunday:false) */
                sunday: "00:00-23:59",
                monday: "00:00-23:59",
                tuesday: "00:00-23:59",
                wednesday: "00:00-23:59",
                thursday: "00:00-23:59",
                friday: "00:00-23:59",
                saturday: "00:00-23:59"
            }
        },
        /* [::End Copy::] */

        ]
    },

    /* Other Settings */
    sound: true, /* true (default sound), false or custom sound. Custom sound example, (sound:'https://lk.wapico.ru/widget/assets/sound/notification.mp3') */
    changeBrowserTitle: "Новое Сообщение", /* Custom text or false. To remove, (changeBrowserTitle:false) */
    cookie: false, /* It does not show the speech bubble, notification number, pulse effect and automatic open popup again for the specified time. For example, do not show for 1 hour, (cookie:1) or to remove, (cookie:false) */
});

</script>
    <nav class="navbar navbar-expand-md fixed-top">
    	<a href="" class="navbar-brand"><span class="A">А</span><span class="brand-none">ссенизатор в Барнауле</span></a>
        <p class="phone_number ml-auto" id="phone"><i class="fa fa-phone"></i>   +7-963-532-3203</p>
    </nav>




    <section class="header d-flex align-items-center">
    	<div class="container text-center">
    		<p class="header-title"><span style="font-size: 20px;">НЕДОРОГИЕ УСЛУГИ<br></span><span style="font-family: 'Oswald', sans-serif;">АССЕНИЗАТОРА</span><br><span style="font-size: 20px;">В БАРНАУЛЕ</span></p>
    		<p class="header-text">Связаться с нами можно по <span style="font-style: oblique;">WhatsApp</span> на сайте!<br>Также наши услуги есть на:</p>

    		<div class="header-buttons text-center">
    			<a href="https://www.avito.ru/barnaul/predlozheniya_uslug/uslugi_assenizatora_otkachka_kanalizatsii_259889646" class="avito-link" target="blank_"><img src="img/avito.png" width="" height="" alt="" class="header-img"></a>
    		</div>

		</div>

        <style>
            .header img {
                margin-top: 20px;
                transition: 0.2s;
            }
            .header img:hover {
                transform: translateY(-3px);
            }
        </style>


	</section>


    <section class="car_foto" style="margin-top: 80px;">
        <h3 class="car_foto_title text-center" style="color: rgb(255,175,0); font-size: 40px; font-family: 'Oswald', sans-serif; font-weight: 700; margin-bottom: 45px;">НАШA ТЕХНИКА</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://86.img.avito.st/640x480/10809984686.jpg" style="max-width: 600px; max-height: 600px;" width="100%" height="auto" alt="" class="car_img mb-3">
                </div>
                <div class="col-md-6">
                    <img src="http://img2.board.com.ua/a/2000737826/wm/1-assenizator-gaz-53.JPG" style="max-width: 600px; max-height: 600px;" width="100%" height="auto" alt="" class="car_img">

                    <style>
                        .car_foto img {
                            transition: 0.2s all;
                        }
                        .car_foto img:hover {
                            cursor: pointer;
                            transform: scale(1.1);
                        }
                    </style>
                </div>
            </div>
        </div>
    </section>

    <section class="why-we">
        <h3 class="why-we-title text-center" style="color: rgb(255,175,0); font-size: 40px; font-family: 'Oswald', sans-serif; font-weight: 700; margin-bottom: 0; margin-top: 20px;">ПОЧЕМУ МЫ?</h3>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4">
    				<div class="card">
    					<p class="card-title text-center">Быстро</p>
    					<div class="card-body">
    						<p class="card-text">Быстро приедем и выполним свою работу</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="card">
    					<p class="card-title text-center">Низкая цена</p>
    					<div class="card-body">
    						<p class="card-text">Берем за работу чашечку кофе.</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="card">
    					<p class="card-title text-center">Качественно</p>
    					<div class="card-body">
    						<p class="card-text">Высокая квалификация работников</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>



    <section class="otzivi">
    	<div class="container">
    		<div class="otzivi-inner">

                <a class="btn btn-ad-otziv mb-3" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-plus"></i> Написать отзыв</a>

                <div class="collapse" id="collapseExample">
                    <form action="create.php" method="post" class="add-otziv">
                        <div class="form">
                            <input type="text" name="user_name" class="form-control mb-2" placeholder="Ваше Имя">
                            <textarea name="user_comment" id="" cols="10" rows="3" class="form-control mb-2" placeholder="Отзыв..."></textarea>

                            <button class="btn btn-ad-otziv mb-3" name="post_it" type="submit">Опубликовать</button>

                        </div>
                    </form>
                </div>

                <?php 

                    $comments = mysqli_query($connect, "SELECT * FROM `comments`");
                    $comments = mysqli_fetch_all($comments);

                    foreach ($comments as $comment) {
                        ?>
                        <div class="otziv">
                            <p class="otziv_name"><i class="fa fa-user"></i>    <?= $comment[1] ?></p>
                            <hr>
                            <p class="otziv_text"><?= $comment[2] ?></p>
                        </div>
                        <?php
                    }

                ?>

    		</div>
    	</div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>