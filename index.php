<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--    THIS IS JUST THE BASIC TITLE UNTIL WE CHOOSE WHAT WHAT WE REALLY WANT TO CALL OURSELVES-->
    <title>SCRZ DEVELOPMENT</title>
</head>

<body>






    <div class="jumbotron">
<!--        <img id='logo' src="imgs/scrz-logo-circle-detail-2.png">-->

        <nav id="navigation">
            <ol>
                <li> <a href="about.html">About</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ol>


        </nav>


    </div>

    <img id="banner" src="imgs/scrz-logo-4.png">
    <a href="#bottom"><img id="down-arrow" src="imgs/down-arrow-2.png"></a>
    
<!--
    <a href="#bottom">
    <div id="down-arrow"></div></a>
-->

    <div id='button-box'>
        <div class="button-one">Need a website > </div>
        <div class="button-two">Looking to hire > </div>


    </div>



    <div id="body-mask"> </div>
    <section>

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="imgs/free-code-image.jpg" alt="...">
                    <div class="caption">
                        <h3>Who we are</h3>
                        <p>Lorem ipsum dolor sit amet, et propriae percipit his, decore partem accusata ea sea, verterem repudiandae sed ne. An vidit fabulas fuisset per, movet deseruisse theophrastus ut per. Ad libris partiendo aliquando sed. Cu quodsi aeterno eos, usu omnis possit civibus ne, eam ne veri periculis. Ut usu error pericula molestiae, expetendis consectetuer vis ei.</p>

                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="imgs/free-code-image.jpg" alt="...">
                    <div class="caption">
                        <h3>What we do</h3>
                        <p>Lorem ipsum dolor sit amet, et propriae percipit his, decore partem accusata ea sea, verterem repudiandae sed ne. An vidit fabulas fuisset per, movet deseruisse theophrastus ut per. Ad libris partiendo aliquando sed. Cu quodsi aeterno eos, usu omnis possit civibus ne, eam ne veri periculis. Ut usu error pericula molestiae, expetendis consectetuer vis ei.</p>

                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="imgs/free-code-image.jpg" alt="...">
                    <div class="caption">
                        <h3>What we can do for you!</h3>
                        <p>Lorem ipsum dolor sit amet, et propriae percipit his, decore partem accusata ea sea, verterem repudiandae sed ne. An vidit fabulas fuisset per, movet deseruisse theophrastus ut per. Ad libris partiendo aliquando sed. Cu quodsi aeterno eos, usu omnis possit civibus ne, eam ne veri periculis. Ut usu error pericula molestiae, expetendis consectetuer vis ei.</p>

                    </div>
                </div>
            </div>
        </div>

        <hr id="bottom">

        <section id="location">

            <h3>Where We Work </h3>
                <p>The <span style="color:#1ea077; font-weight: bold; ">SCRZ</span> Development team are working nomads when it comes to development and design.</p>


        </section>
        <!--GOOGLE MAPS API-->

        <div id="googleMap"></div>


    </section>
    
    <footer>
        <copyright>&copy; SCRZ Development 2017</copyright>

    </footer>

    <script src="js/script.js"></script>

    <!--    GOOGLE API LINKAGE-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCy_4rN3JIrl878Te092Tx06AD-_Qy0TxI&callback=myMap"></script>
</body>

</html>