<!DOCTYPE html>


<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Porfolio Marek Korsak</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animations.css" type="text/css">


</head>

<body>
    <footer class="socialHight">
        <a href="https://www.linkedin.com/in/marek-korsak-81b8b8b7/" target="_blank"><img src="imgs/linkedinHight.png"></a>
        <a href="https://github.com/masterkors" target="_blank"><img src="imgs/githubHight.png"></a>
        <a href="https://www.facebook.com" target="_blank"><img src="imgs/facebookHight.png"></a>
    </footer>

    <header class="header" id="top">
        <div class="slower animatedParent">
            <div class="container">
                <h1 class="slower animated bounceInLeft">Projektowanie stron internetowych</h1>
                <p class="slower animated bounceInRight">Front-end Developer Marek Korsak</p>
            </div>
            <img src="imgs/header1.jpg" class="img"></img>
        </div>
    </header>

    <nav class="nav">
        <div class="topnav" id="myTopnav">
            <a href="#top" class="active"><i class="fa fa-home"></i></a>
            <a href="#about">O mnie</a>
            <a href="#tech">Technologie</a>
            <a href="#projects">Projekty</a>
            <a href="#contact">Kontakt</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
        </div>
    </nav>

    <section class="containerabout" id="about">

        <div class="slower animatedParent">

            <h2>O mnie</h2>
            <div class="textabout">

                <p>Some text about me. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                <img src="imgs/me.png" alt="WebDeveloperMarekKorsak"></img>
            </div>
        </div>
    </section>



    <section class="containertech" id="tech">
        <h2>Technologie</h2>

        <div class="texttech">

            <img src="imgs/html.png" alt="html"></img>
            <img src="imgs/css.png" alt="css"></img>
            <img src="imgs/js.png" alt="javascript"></img>
            <img src="imgs/jquery.png" alt="jquery"></img>
            <img src="imgs/gulp.png" alt="gulp"></img>
            <img src="imgs/git.png" alt="git"></img>
        </div>
        </div>
    </section>




    <section class="sectionpro" id="projects">

        <h2>Projekty</h2>

        <div class="containerpro">
            <div class="card1">
                <a href="https://masterkors.github.io/Fruits/" target="_blank"><img src="imgs/fruits.jpg" alt="Fruits"></a>
                <div class="containercard">
                    <b>Fruits</b>
                    <p>Html, Css, Parallax Scrolling</p>
                </div>
            </div>

            <div class="card1">
                <a href="https://masterkors.github.io/Snowboard-Challenge/" target="_blank"><img src="imgs/SnowboardChallenge.png" alt="SnowboardChallenge"></a>
                <div class="containercard">
                    <b>Snowboard Challenge</b>
                    <p>Html, Css, Js</p>
                </div>
            </div>

            <div class="card1">
                <a href="https://masterkors.github.io/Login/" target="_blank"><img src="imgs/login.png" alt="login"></a>
                <div class="containercard">
                    <b>Login</b>
                    <p>Html, Css, Js</p>
                </div>
            </div>

    </section>


    <section class="sectioncontact" id="contact">

        <h2>Kontakt</h2>
        <div class="containercontact">

            <div class="Contactform">

<?php
                    
$to      = 'marek.kors@wp.pl';
$name    = $_POST['name'];
$email   = $_POST['email'];
$subject = 'Nowy e-mail od ' . $name . ' (' . $email . ')';
$message = $_POST['message'];
$headers = 'From: ' . $name . ' (' . $email . ')';
$headers .= 'Content-Type: text/html; charset=utf-8';
mail($to, $subject, $message, $headers);

echo '<a href="http://front-enddevelopermarekkorsak.prv.pl/"><h2>Wysłano wiadomość</h2></a>';
                
?>
            </div>
            <div class="Contactpic">
                <img src="imgs/kontakt2.jpg" alt="Kontakt-Marek-Korsak">
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d297071.4218077656!2d18.373638763849048!3d54.4299200297929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd0aa24f8d325b%3A0xf6d7e82b367965ac!2sTricity!5e0!3m2!1spl!2spl!4v1528391103722" frameborder="0" allowfullscreen></iframe>
        </div>

    </section>


    <footer class="social">
        <a href="https://github.com/masterkors" target="_blank"><img src="imgs/github.png"></a>
        <a href="https://www.facebook.com" target="_blank"><img src="imgs/facebook.png"></a>
        <a href="https://www.linkedin.com/in/marek-korsak-81b8b8b7/" target="_blank"><img src="imgs/linkedin.png"></a>
    </footer>


    <footer class="foo">
        <a href="https://github.com/masterkors" target="_blank">
            <h5>Created by kors &copy 2018</h5>
        </a>
    </footer>


    <script src="js/jquery.js"></script>
    <script src="js/stickyfill.js"></script>
    <script src="js/css3-animate-it.js"></script>

    <script>
        $('.nav').Stickyfill();

        $(function() {
            $('a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').stop().animate({
                            scrollTop: target.offset().top - 70
                        }, 1000);
                        return false;
                    }
                }
            });
        });

    </script>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

    </script>


</body>

</html>
