<?php function carryHTMLHead() { ?>
<!doctype html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <title>CARRY Maternity</title>
        
        <!-------Meta Information------>    
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Carry, maternity, Rhonda, expecting, clothing, motherhood, Yorkville, stylish,                       pregnancy, Toronto">
        <meta name="description" content="Stylish and affordable maternity clothing.">
        <meta name="author" content="ONMEDIA">       
        
        <!-------Stylesheets------>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
        <style>
            
            @font-face {
                font-family: "gotham-medium";
                src: url(assets/fonts/gotham-medium.ttf) format('truetype');
            }
            @font-face {
                font-family: "gotham-book";
                src:url(assets/fonts/gotham-book.ttf) format('truetype');
            }
            @font-face {
                font-family: "Quattrocento-Regular";
                src:url(assets/fonts/Quattrocento-Regular.ttf) format('truetype');
            }           
            @font-face {
                font-family: "Quattrocento-Regular";
                src:url(assets/fonts/Quattrocento-Regular.otf) format('opentype');
            }                       
            @font-face {
                font-family: "Cantarell-Regular";
                src:url(assets/fonts/Cantarell-Regular.ttf) format('opentype');
            }                       
            @font-face {
                font-family: "Cantarell-Bold";
                src:url(assets/fonts/Cantarell-Bold.ttf) format('opentype');
            }       
        </style>
        
        <!-------Javascript------>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
        <script src="assets/js/core.js"></script>
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
<?php function carryHeader() { ?>
        <div id="header">
                <img id ="logoImg" src="assets/img/CM_Logo.png" border="0" />
            <div id="nav">
                <ul id="navLeft">
                    <a href="#"><li id ="department" style="margin-left:2px" class="subMenuLink">
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
                                    <td colspan="3">Coats & Jackets</td>
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
                    </a>
                    <a href="#"><li class="liPaddingLeft" class="menuLink">LOOK BOOK</li></a>
                    <a href="#"><li id ="designer" class="liPaddingLeft subMenuLink">
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
                                    <td colspan="3">Jules & Jimi</td>
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
                    </a>
                </ul>
                <ul id="navRight">
                    <a href="#"><li class="liPaddingRight menuLink">BLOG</li></a>
                    <a href="#"><li class="liPaddingRight menuLink">ABOUT US</li></a>
                    <a href="#"><li style="margin-right:2px " class="menuLink">CONTACT</li></a>
                </ul>
            </div>
        </div>

<?php } ?>
<?php function carryPage() { ?>

        <?php carryHeader(); ?>
        <div id="pageContent">
            <div id="welcomeBanner">
                <div id="welcomeBannerText">
                    <br/><br/><br/>
                    <h3>WELCOME TO CARRY MATERNITY</h2>
                    <br/><br/>
                    <h5>VIEW COLLECTION</h5>
                    <h5>WATCH VIDEO</h5>
                    <h5>LEARN WHAT’S NEW</h5>
                </div>
            </div>
            <br><hr class="greyBorder"><br>
            <div id="updatesBanner">
                <div id="newArrivals">
                    <div class="updatesBannerText">
                        <h4>NEW ARRIVAL</h4>
                        <h3>
                            VIEW<br>
                            AUTUMN<br>
                            COLLECTION
                        </h3>
                    </div>
                </div>
                <div id="updates">
                    <div class="updatesBannerText">
                        <h4>UPDATES</h4>
                        <h3>
                            A DAY IN<br>
                            A LIFE<br>
                            VIDEO
                        </h3>
                    </div>
                </div>
                <div id="blog">
                    <div class="updatesBannerText">
                        <h4>FROM THE BLOG</h4>
                        <h3>
                            EATING HEALTHY<br>
                            DURING<br>
                            PREGNANCY
                        </h3>
                    </div>
                </div>
            </div>              
            <br><hr class="greyBorder"><br>
            
            <div id="featuredProducts">
                <div id="featuredProductsTitle">THIS WEEK’S FEATURED PRODUCTS</div>
                <div id="featuredProductsPanel">
                    <div id="featuredProduct1" class="featuredProduct">
                        <div id ="product1Image" class="productImage" ></div>
                        <br>
                        <div id="product1Title" class="productTitle">CARRY MATERNITY</div>
                        <br>
                        <div id="product1Category" class="productCategory">SILK DRESS</div>
                        <br>
                        <div id="product1Prize" class="productPrize">159 CAD</div>
                    </div>
                    <div id="featuredProduct2" class="featuredProduct">
                        <div id ="product2Image" class="productImage" ></div>
                        <br>
                        <div id="product2Title" class="productTitle">PETUNIA PICKLE BOTTOM</div>
                        <br>
                        <div id="product2Category" class="productCategory">SILK DRESS</div>
                        <br>
                        <div id="product2Prize" class="productPrize">129 CAD</div>
                    </div>
                    <div id="featuredProduct3" class="featuredProduct">
                        <div id ="product3Image" class="productImage" ></div>
                        <br>
                        <div id="product3Title" class="productTitle">PETUNIA PICKLE BOTTOM</div>
                        <br>
                        <div id="product3Category" class="productCategory">SILK DRESS</div>
                        <br>
                        <div id="product3Prize" class="productPrize">129 CAD</div>
                    </div>
                    <div id="featuredProduct4" class="featuredProduct">
                        <div id ="product4Image" class="productImage" ></div>
                        <br>
                        <div id="product4Title" class="productTitle">PETUNIA PICKLE BOTTOM</div>
                        <br>
                        <div id="product4Category" class="productCategory">SILK DRESS</div>
                        <br>
                        <div id="product4Prize" class="productPrize">129 CAD</div>
                    </div>                      
                    </div>                
                </div>
            </div>
        </div>
<?php } ?>
