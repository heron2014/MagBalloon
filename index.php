<?php include("doctype.php");?>
<body id="home">
<!--<body data-spy="scroll" data-target=".scrollspy">-->
<!-- Navigation only for mobile -->
<?php include("navbar.php");?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!--Indicators-->
        <!--<ol class="carousel-indicators">-->
            <!--<li class="active" data-slide-to="0" data-target="#myCarousel"></li>-->
            <!--<li data-slide-to="1" data-target="#myCarousel"></li>-->
            <!--<li data-slide-to="2" data-target="#myCarousel"></li>-->
            <!--<li data-slide-to="3" data-target="#myCarousel"></li>-->
        <!--</ol>-->
        <!--wrapper for slides-->
        <div class="carousel-inner">
            <div class="item active" id="slide1">
                <div class="carousel-caption">
                    <!--<h4>Some main text</h4>-->
                    <!--<p>Optional text</p>-->
                </div>
            </div>

            <div class="item" id="slide2">
                <div class="carousel-caption">
                    <!--<h4>Some main text2</h4>-->
                    <!--<p>Optional text2</p>-->
                </div>
            </div>

            <div class="item" id="slide3">
                <div class="carousel-caption">
                    <!--<h4>Some main text3</h4>-->
                    <!--<p>Optional text3</p>-->
                </div>
            </div>

            <div class="item" id="slide4">
                <div class="carousel-caption">
                    <!--<h4>Some main text4</h4>-->
                    <!--<p>Optional text4</p>-->
                </div>
            </div>
        </div><!--end of carousel-inner-->

        <!--Controls-->
        <a class="left carousel-control" data-slide="prev" href="#myCarousel"><span class="icon-prev"></span></a>
        <a class="right carousel-control" data-slide="next" href="#myCarousel"><span class="icon-next"></span></a>

    </div> <!--end of myCarousel-->

    <div id="info-general">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>What is <span>MagBalloon?</span></h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="instruct-general">
        <div class="container">
            <h1>Setup <span>& Party!</span></h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

            <div class="row">
                <div class="col-xs-12">
                    <div class="graph-wrapper">
                        <div class="img1" id="inflate"><img src="images/inflate_225x225.png" alt="Inflate MagBalloon">
                            <span class="caption">Inflate</span>
                        </div>
                        <div class="img1" id="party"><img src="images/place_225x225.png" alt="Place MagBalloon">
                            <span class="caption">Place</span>
                        </div>
                        <div class="img1" id="play"><img src="images/party_225x225.png" alt="Party MagBalloon">
                            <span class="caption">Party!</span>
                        </div>

                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-8"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
                <div class="col-xs-6 col-sm-4">
                    <a class="btn btn-default" href="where.php" role="button">Where <span>to Buy</span></a>
                </div>
            </div>
        </div>
    </div>

<?php include("footer.php");?>

<?php include("scripts.php");?>

</body>
</html>