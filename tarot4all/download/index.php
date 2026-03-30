
<!DOCTYPE html>
<html>
    <head>        
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11117484128"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'AW-11117484128');
        </script>
    </head>
    <body>
    <?php
        //Detect special conditions devices
        
        $iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
        $iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
        $iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
        $Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
        $webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");

        if($iPhone || $iPad){
            //header("Location: https://apps.apple.com/us/app/tarot4all/id6444630101");
            sleep(1);
            echo "<script>window.location = 'https://apps.apple.com/us/app/tarot4all/id6444630101';</script>";
            echo "Redirecting to iOS...";
        }else if($Android){
            //header("Location: https://play.google.com/store/apps/details?id=com.SafonBookStoreSL.Tarot4All");
            sleep(1);
            echo "<script>window.location = 'https://play.google.com/store/apps/details?id=com.SafonBookStoreSL.Tarot4All';</script>";
            echo "Redirecting to Android...";
        }
    ?>
    </body>
</html> 



