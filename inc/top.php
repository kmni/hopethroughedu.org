<?php
    if (isset($_POST['nav'])) {
         header("Location: $_POST[nav]");
    }
?>
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8" />

    <!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Hope Through Education</title>

    <!-- Included CSS Files -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:200,300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="stylesheets/app.css">
    <link rel="stylesheet" href="flexslider/flexslider.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="javascripts/foundation/modernizr.foundation.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38045413-13']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>

    <div class="row">
        <div class="eight columns offset-by-four top-social">
             <div id="mc_embed_signup">
            <form action="http://hopethroughedu.us6.list-manage2.com/subscribe/post?u=a92913e9a809c3284c936ec58&amp;id=8e77958688" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate><input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></form>
            </div>
            <a href="http://www.facebook.com/pages/Hope-Through-Education-Inc/148297208634757"><img src="images/facebook.png"></a> 
             <div id="donate-btn">
                 <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="NKJH8ZW8XY87J">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
             </div>
        </div>
    </div>

    <div class="row nav top-nav">
        <div class="three columns logo"><a href="index.php"><img src="images/logo.png"></a></div>
        <div class="nine columns top-nav-wrap">
            <div class="inner-top-nav">
                <ul>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="projects.php">Projects/Events</a></li>
                    <li><a href="partners.php">Partners</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="sponsors.php">Sponsors</a></li>
                    <li><a href="social-media.php">Social Media</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                        <form id="page-changer" class="show-for-small" action="" method="post">
                            <select name="nav" id="customDropdown">
                                <option selected>Go to page...</option>
                                <option value="index.php">Home</option>
                                <option value="about.php">About Us</option>
                                <option value="projects.php">Projects</option>
                                <option value="partners.php">Partners</option>
                                <option value="gallery.php">Gallery</option>
                                <option value="sponsors.php">Sponsors</option>
                                <option value="social-media.php">Social Media</option>
                                <option value="contact.php">Contact</option>
                            </select>
                            <input type="submit" value="Go" id="submit" />
                        </form>
                    <a class="radius button show-for-small" href="donate.php">Donate</a>
            </div>
        </div>
    </div>