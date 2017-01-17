<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="Sports News HTML Template">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
    <title>Home</title>
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/homestyle.css') !!}
</head>
<body>
<header class="main_nav" style="">
    <div class="container">
        <div class="row">
            <nav>
                <figure>
                    <img id="logo" class="img-responsive" src="images/entrance_image/bcmchlogo.png" />
                </figure>
            </nav>
        </div>
    </div>
</header>

<section id="first_section">
    <div class="row">
        <figure>
            <img class="img-responsive" src="images/entrance_image/BELIEVERS-CHURCH-WEB.jpg" />
        </figure>
    </div>
</section>

<section>
    <div class="row">
        <div class="believer_bible">
            <a class="beli_col_link" href="{{ url('/church/') }}">
                <div class="first_web">
                    <span>Believer Church<br>Myanmar</span>
                    <p class="btn_visit">Visit</p>
                </div>
            </a>
            <img class="img-responsive" src="images/entrance_image/medical-students.jpg" />
        </div>

        <div class="believer_bible">
            <a class="beli_col_link" href="#">
                <div class="second_web">
                    <span>Believer Church<br>Bible Colledge</span>
                    <p class="btn_visit">Visit</p>
                </div>
            </a>
            <img class="img-responsive" src="images/entrance_image/hospital_home.jpg" />
        </div>
    </div>
</section>

<footer id="footer"></footer>

</body>
</html>