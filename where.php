<?php include("doctype.php");?>
<body id="where">
<!--<body data-spy="scroll" data-target=".scrollspy">-->
<!-- Navigation only for mobile -->
<?php include("navbar.php");?>

<div class="retailer-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="thumbnail thumbnail_retailer">

                    <div class="caption">
                        <h1>MagBalloon <span>Retailers</span></h1>
                        <p>MagBalloon is available at the following online and high street retailers.</p>
                        <p><a href="#">Tesco</a></p>
                        <p><a href="#">Sainsbury</a></p>
                        <p><a href="#">M&S</a></p>
                        <p><a href="#">Party House</a></p>
                        <p><a href="#">Ebay</a></p>
                        <p><a href="#">My event Website</a></p>
                    </div>
                </div>
            </div>
            <!--<div class="clearfix visible-xs-block"></div>-->
            <div class="col-xs-12 col-sm-6">
                <div class="caption fixed_height">
                    <h1>Become <span>a Retailer</span></h1>
                    <p>To become a MagBalloon retailer or distributor,<br/>
                        please email us at <strong>sales@magballoons.co.uk</strong> or use the form below.</p>

                </div>
                <div class="thumbnail thumbnail_retailer2">
                    <form class="form-horizontal" id="form-retailer">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Company</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Phone</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-5 col-sm-6">
                                <button type="submit" class="btn btn-default btn-retailer">Submit</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

</div> <!--end of retailer-section-->

<div id="empty-section">
    <div class="container">

    </div>
</div>

<div id="info-general2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="thumbnail thumbnail-prod-range">
                    <a href="products.php"><img src="images/Product_Range.png" alt="Wedding Balloons"></a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="thumbnail thumbnail-in-action">
                    <a href="#"><img src="images/In_Action.png" alt="Party Balloons"></a>

                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="thumbnail thumbnail-faq">
                    <a href="contact.html"><img src="images/FAQ.png" alt="Celebration and Party Balloon"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php");?>

<?php include("scripts.php");?>

</body>
</html>