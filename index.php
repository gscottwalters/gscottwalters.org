<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>Suppablog - Minimal Blog Html Template</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Template by Colorlib" />
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
        <meta name="author" content="Colorlib" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="images/favicon.png" />
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CLibre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css"  href='css/clear.css' />
        <link rel="stylesheet" type="text/css"  href='css/common.css' />
        <link rel="stylesheet" type="text/css"  href='css/font-awesome.min.css' />
        <link rel="stylesheet" type="text/css"  href='css/carouFredSel.css' />
        <link rel="stylesheet" type="text/css"  href='css/sm-clean.css' />
        <link rel="stylesheet" type="text/css"  href='style.css' />

        <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
        <![endif]-->

    </head>


    <body class="home blog">

        <!-- Preloader Gif -->
        <table class="doc-loader">
            <tbody>
                <tr>
                    <td>
                        <img src="images/ajax-document-loader.gif" alt="Loading...">
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Left Sidebar -->
        <div id="sidebar" class="sidebar">
            <div class="menu-left-part">
                <div class="search-holder">
                    <label>
                        <input type="search" class="search-field" placeholder="Type here to search..." value="" name="s" title="Search for:">
                    </label>
                </div>
                <div class="site-info-holder">
                    <h1 class="site-title">Suppablog</h1>
                    <p class="site-description">
                        Suppablog is simple and yet cool wordpress theme to lorem ipsum dolor sit.
                    </p>
                </div>
                <nav id="header-main-menu">
                    <ul class="main-menu sm sm-clean">
                        <li><a href="index.php" class="current">Home</a></li>
                        <li><a href="about.html">About</a></li>
                    </ul>
                </nav>
                <footer>
                    <div class="footer-info">
                        © 2018 SUPPABLOG HTML TEMPLATE. <br> CRAFTED WITH <i class="fa fa-heart"></i> BY <a href="https://colorlib.com">COLORLIB</a>.
                    </div>
                </footer>
            </div>
            <div class="menu-right-part">
                <div class="logo-holder">
                    <a href="index.php">
                        <img src="images/logo.png" alt="Suppablog WP">
                    </a>
                </div>
                <div class="toggle-holder">
                    <div id="toggle">
                        <div class="menu-line"></div>
                    </div>
                </div>
                <div class="social-holder">
                    <div class="social-list">
                        <a href="https://twitter.com/gscottwalters"><i class="fa fa-twitter"></i></a>
                        <a href="https://linkedin.com/in/gscottwalters"><i class="fa fa-linkedin"></i></a>
			<a href="https://github.com/gscottwalters/gscottwalters.org"><i class="fa fa-git"></i></a>
                    </div>
                </div>
                <div class="fixed scroll-top"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i></div>
            </div>
            <div class="clear"></div>
        </div>

        <!-- Home Content -->
        <div id="content" class="site-content">
            <div id="blog-wrapper">
                <div class="blog-holder center-relative">
<?php
// Set default timezone
date_default_timezone_set('America/Chicago');
// Set name of XML file
$file = "http://technicallyscott.blogspot.com/atom.xml";
// Load specified XML file or report failure
$xml = simplexml_load_file($file) or die ("Unable to load XML file!");
// Load blog entries
$xml =  $xml ->entry;
$i = 1;
// Run loop for the number of available entries
foreach( $xml as $row )
{
 // Load the entry publish time
 $dtime = date("D jS M, Y", strtotime(strtok($row->published, 'T')));
 // Load the link of each blog entry
 $titlelink = $row->link[4][href];
 // Load the text for Comment and comment counts
 $comments = $row->link[1][href];
 $comm = $row->link[1][title][0];

 /* Display the contents (use your own imaginations here =).) */
if ($i == 1) { 
	echo "<article id=\"post-1\" class=\"blog-item-holder featured-post\">";
	} 
else {
	echo "<article id=\"post-2\" class=\"blog-item-holder featured-post\">";
}
echo "<div class=\"entry-content relative\">";
echo "<div class=\"content-1170 center-relative\">";
echo "<div class=\"entry-date published\">"; 
echo $dtime; 
echo "</div>";
echo "<h2 class=\"entry-title\">";  
echo $row->title;
echo "<a href=\"single.html\"></a>";
echo "</h2>";
echo "<div class=\"excerpt\">";
echo $row->content;
#echo "<a class=/"read-more/" href=/"single.html/"></a>";
echo "</div>";
echo "</article>";

$i++;
if($i > 4) break;

// Display number of comments
#echo   $comm;
}
?>


                </div>
                <div class="clear"></div>
            </div>

            <div class="featured-image-holder">
                <div class="featured-post-image" style="background-image: url(images/autumn-computer-concept-296084.jpg)"></div>

            </div>
            <div class="clear"></div>
        </div>



        <!--Load JavaScript-->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type='text/javascript' src='js/imagesloaded.pkgd.js'></script>
        <script type='text/javascript' src='js/jquery.nicescroll.min.js'></script>
        <script type='text/javascript' src='js/jquery.smartmenus.min.js'></script>
        <script type='text/javascript' src='js/jquery.carouFredSel-6.0.0-packed.js'></script>
        <script type='text/javascript' src='js/jquery.mousewheel.min.js'></script>
        <script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
        <script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
        <script type='text/javascript' src='js/main.js'></script>
    </body>
</html>
