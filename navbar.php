<?php

echo' <nav id="mobile-menu" class="navbar navbar-inverse navbar-fixed-top hidden-md hidden-lg">
             <div class="container">
                 <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                         <span class="sr-only">Toggle navigation</span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                     </button>
                     <a class="navbar-brand" href="#"><abbr title="Phone">P:</abbr> (123) 456-7890</a>
                 </div>
                 <div id="navbar" class="collapse navbar-collapse">
                     <ul class="nav navbar-nav">
                         <li><a href="index.php">Home</a></li>
                         <li><a href="products.php">Product Range</a></li>
                         <li><a href="where.php">Where to Buy</a></li>
                         <!--<li><a href="#">Our Balloon in Action</a></li>-->
                         <li><a href="retailer.php">Become a Retailer</a></li>
                         <li><a href="contact.php">Contact Us</a></li>
                     </ul>
                 </div><!--/.nav-collapse -->
             </div>
         </nav>

     <!-- Static navbar -->
         <div id="top-info" class="navbar navbar-default navbar-static-top hidden-xs">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12">
                         <nav class="info">
                             <a class="info-nav-item" href="#"><span>Phone:</span> 125 125 1254</a>
                             <a class="info-nav-item" href="mailto:#"><span>Email:</span> enquires@magballoon.co.uk</a>
                             <a class="social-icon" href="#"><img src="images/Youtube.png" alt="" /></a>
                             <a class="social-icon" href="#"><img src="images/twitter.png" alt="" /></a>
                             <a class="social-icon" href="#"><img src="images/facebook.png" alt="" /></a>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>

         <div class="logo-section">
             <div class="container">
                 <div class="row">
                     <div class="col-xs-12">
                         <h1 id="logo">
                             <a href="index.php">MagBalloon</a>
                         </h1>
                     </div>
                 </div>
             </div>
         </div>


         <div id="desktop-navigation" class="hidden-xs affix-top" data-spy="affix">
             <div class="container">
                 <div class="row">
                     <div class="col-sm-12 scrollspy">
                         <ul id="nav" class="nav nav-pills" >
                             <li role="presentation"><a href="index.php"><span>Home</span></a></li>
                             <li role="presentation"><a href="products.php"><span>Product</span> Range</a></li>
                             <li role="presentation"><a href="where.php"><span>Where</span> to Buy</a></li>
                             <!--<li role="presentation"><a href="#"><span>Our Balloon</span> in Action</a></li>-->
                             <li role="presentation"><a href="retailer.php"><span>Become</span> a Retailer</a></li>
                             <li role="presentation"><a href="contact.php"><span>Contact</span> Us</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>'
?>