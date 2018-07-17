<html>
    <header>
        <head>
            <link rel='shortcut icon' type='image/x-icon' href='system_images/nds_logo.png' />
            <meta name="description" content="Na Yombi" />
            <meta name="description" content="Nkuwikorera" />
            <meta name="description" content="Digital Rwanda" />
            <meta name="description" content="Serve Rwanda" />
            <meta name="description" content="Services In Rwanda" />
            <meta name="description" content="Services.com" />
            <meta name="description" content="Services" />
            <meta name="description" content="Ogeniuspriority.com" />
            <meta name="description" content="O'Genius Priority" />
            <meta name="description" content="OgeniusServices.com" />
            <meta name="description" content="O'Genius Services" />
            <meta name="description" content="NozaServices.com" />
            <meta name="description" content="Noza Services" />
            <meta name="description" content="NezaServices.com" />
            <meta name="description" content="Neza Services" />
            <meta name="description" content="NezaDigitalService.com" />
            <meta name="description" content="Neza Digital Service" />
            <meta name="description" content="O'Genius Priority Ltd." />
            <meta name="description" content="O' genius priority for empowering genuine welfare" />
            <meta name="description" content="MD Igiraneza Origene" />
            <meta name="description" content="CTO Mugabo Shyaka Cedric" />
            <meta name="description" content="COO Rutayisire Christian" />
            <title> NDS(Neza Digital Service)</title>
        </head>
    </header>
    <body>
        <?php
        //header("Location:home.php");
        redirect("home.php");

        // $url should be an absolute url
        function redirect($url) {
            if (headers_sent()) {
                die('<script type="text/javascript">window.location.href="' . $url . '";</script>');
            } else {
                header('Location: ' . $url);
                die();
            }
        }
        ?>
    </body>
</html>