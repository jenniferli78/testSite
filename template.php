<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        
        <!--
        <script type="text/javascript">
        !function(e){if(!window.pintrk){window.pintrk=function(){window.pintrk.queue.push(Array.prototype.slice.call(arguments))};var n=window.pintrk;n.queue=[],n.version="3.0";var t=document.createElement("script");t.async=!0,t.src=e;var r=document.getElementsByTagName("script")[0];r.parentNode.insertBefore(t,r)}}("https://s.pinimg.com/ct/core.js");

        pintrk('load','2612644166577');
        pintrk('page');
        </script>
        <noscript>
        <img height="1" width="1" style="display:none;" alt=""
        src="https://ct.pinterest.com/v3/?tid=2612644166577&noscript=1" />
        </noscript>
        -->
        
    </head>
    
    
    <body>
        <div id="wrapper">
        <a data-pin-do="embedUser" data-pin-board-width="1065" data-pin-scale-height="120" data-pin-scale-width="115" href="https://www.pinterest.com/jenniferlipinterest/"></a>            
            
        <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="page.php">Test Page</a></li>
                    <li><a href="product.php">Product</a></li>
                    <li><a href="recipe.php">Recipe</a></li>
                    <li><a href="article.php">Article</a></li>
                </ul>
            </nav>
            
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
            <footer>
                <p>Tutorial/References by Michiel Wouters</p>
            </footer>
        </div>
    <script async defer src="//assets.pinterest.com/js/pinit.js"></script>
    </body>
</html>
