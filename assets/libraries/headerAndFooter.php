<?php function carryHTMLHead($pageCSS, $pageJS, $pageTitle) { ?>
<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <title>CARRY Maternity<?php echo $pageTitle; ?></title>
        
        <!-------Meta Information------>    
        <meta charset="UTF-8" />
        <meta name="keywords" content="Carry, maternity, Rhonda, expecting, clothing, motherhood, Yorkville, stylish, pregnancy, Toronto">
        <meta name="description" content="Stylish and affordable maternity clothing.">
        <meta name="author" content="ONMEDIA">       
        
        <!-------Stylesheets------>
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/<?php echo $pageCSS; ?>.css"/>
        <style>
            @font-face {
                font-family: "Cantarell-Regular";
                src:url(assets/fonts/Cantarell-Regular.svg) format('svg');
				src:url(assets/fonts/Cantarell-Regular.ttf) format('truetype');				
            }                       
            @font-face {
                font-family: "Cantarell-Bold";
                src:url(assets/fonts/Cantarell-Bold.ttf) format('truetype');
            }
            @font-face {
                font-family: "Baskerville-Regular";
                src:url(assets/fonts/LibreBaskerville-Regular.otf) format('opentype');
            }
            @font-face {
                font-family: "Baskerville-Italic";
                src:url(assets/fonts/LibreBaskerville-Italic.otf) format('opentype');
            }
            @font-face {
                font-family: "Baskerville-Bold";
                src:url(assets/fonts/LibreBaskerville-Bold.otf) format('opentype');
            }
        </style>
        
        <!-------Javascript------>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="assets/js/form.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/core.js"></script>
        <script src="assets/js/<?php echo $pageJS; ?>.js"></script>
        <script>
            window.addEventListener("load",function() {
            setTimeout(function(){
            window.scrollTo(0, 0);
            }, 0);
            });
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            
            ga('create', 'UA-42678876-1', 'carrymaternity.ca');
            ga('send', 'pageview');
        </script>
    </head>
    <body>
<?php } ?>
<?php function carryNavigationPanel() { ?>
	<div id="navLogoContainer">
    	<div id="logoCont">
        	<a href="/"><img src="assets/img/official_carry_logo_2013.png" alt="Carry Maternity Logo" title="Carry Maternity"></a>
        </div>	
        <div id="navCont">
        	<ul id="nav">
            	<a href="newArrivals.php"><li><span id="newArrivals">NEW ARRIVALS</span></li></a><br />
                <a href="departments.php"><li><span id="departments">DEPARTMENTS</span></li></a><br />
                <a href="#"><li><span id="designers">DESIGNERS</span></li></a><br />
                <a href="lookbook.php"><li><span id="lookbook">LOOKBOOK</span></li></a><br />
                <a href="contact.php"><li><span id="contact">CONTACT US</span></li></a><br />
                <a href="about.php"><li><span id="about">ABOUT US</span></li></a><br />
                <a href="#"><li><span id="blog">BLOG</span></li></a><br />
            </ul>
        </div>
    </div>
       

<?php } ?>
<?php function carryHTMLFooter() { ?>
    </body>
</html>
<?php } ?>
