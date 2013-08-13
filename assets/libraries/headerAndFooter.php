<?php function carryHTMLHead($pageCSS, $pageJS, $pageTitle) { ?>
<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <title>CARRY Maternity<?php echo $pageTitle; ?></title>
        
        <!-------Meta Information------>    
        <meta charset="UTF-8" />
        <meta name="keywords" content="Carry, maternity, Rhonda, expecting, clothing, motherhood, Yorkville, stylish,                       pregnancy, Toronto">
        <meta name="description" content="Stylish and affordable maternity clothing.">
        <meta name="author" content="ONMEDIA">       
        
        <!-------Stylesheets------>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/<?php echo $pageCSS; ?>.css"/>
        <style>
			@font-face {
                font-family: "Quattrocento-Regular";
                src:url(assets/fonts/Quattrocento-Regular.ttf) format('truetype');
                src:url(assets/fonts/Quattrocento-Regular.otf) format('opentype');
            } 
            @font-face {
                font-family: "Cantarell-Regular";
                src:url(assets/fonts/Cantarell-Regular.svg) format('svg');
				src:url(assets/fonts/Cantarell-Regular.ttf) format('truetype');				
            }                       
            @font-face {
                font-family: "Cantarell-Bold";
                src:url(assets/fonts/Cantarell-Bold.ttf) format('truetype');
            }       
        </style>
        
        <!-------Javascript------>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
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
        <div id="header">
                <div id ="logoImg"><a href="index.php"><img src="assets/img/CM_Logo.png" border="0" /></a></div>
            <div id="nav">
                <ul id="navLeft">
                    <li id ="department" style="margin-left:2px" class="subMenuLink">
                       <span>DEPARTMENTS</span>
                        <div id="departmentSubMenu" class="subMenuList">
                            <table>
                                <tr>
                                    <td colspan="3">VIEW ALL</td>
                                    <td colspan="3">Dresses</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="3">Denim</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="3">Tops</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="3">Skirts</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="3">Nursing</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="3">Coats &amp; Jackets</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="3">Maternity</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="3">Accessories</td>
                                </tr>
                            </table>                            
                        </div>                    
                    </li>
                    <a href="#"><li class="liPaddingLeft" class="menuLink">LOOK BOOK</li></a>
                    <li id ="designer" class="liPaddingLeft subMenuLink">
                        <span>DESIGNERS</span>
                        <div id="designerSubMenu" class="subMenuList">
                            <table>
                                <tr>
                                    <td colspan="3">VIEW ALL</td>
                                    <td colspan="3">Carry Maternity</td>
                                    <td colspan="3">Paige</td>
                                    <td colspan="3">Queen Mum</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="3">Olian Maternity</td>
                                    <td colspan="3">BellaBand</td>
                                    <td colspan="3">Neka</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="3">Maichael Stars</td>
                                    <td colspan="3">Isabella Oliver</td>
                                    <td colspan="3">boob</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="3">OiOi</td>
                                    <td colspan="3">Citizens of Humanity</td>
                                    <td colspan="3">SoYoung</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="3">Noppies</td>
                                    <td colspan="3">Ripe Maternity</td>
                                    <td colspan="3">The M Coat</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="3">Cake Lingerie</td>
                                    <td colspan="3">Jules &amp; Jimi</td>
                                    <td colspan="3">bravado!</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="3">Petunia Pickle Bottom</td>
                                    <td colspan="3">Belabumbum</td>
                                </tr>
                            </table>                              
                        </div>
                    </li>
                </ul>
                <ul id="navRight">
                    <a href="#"><li class="liPaddingRight menuLink">BLOG</li></a>
                    <a href="about.php"><li class="liPaddingRight menuLink">ABOUT US</li></a>
                    <a href="contact.php"><li style="margin-right:2px " class="menuLink">CONTACT</li></a>
                </ul>
            </div>
        </div>

<?php } ?>
<?php function carryHTMLFooter() { ?>
    </body>
</html>
<?php } ?>
