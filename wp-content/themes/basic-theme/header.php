<!doctype html>
<html lang="he_Il" style="direction: rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Site</title>

    <?php wp_head(); ?>


    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.17.3'><\/script>".replace("HOST", location.hostname));
        //]]></script>
</head>
<body>

<header class="container-fluid">
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="row">
                <div class="col-10 d-flex">
                    <nav class="nav-bar-menu ">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'top_menu',
                            'container' => false,
                            'depth' => 0,
                            //'walker'         => new SogoToolbarWalker()
                        ));
                        ?>
                    </nav>

                </div>
                <div class="col-2">
                    ss
                </ div>
            </div>
        </div>

    </div>
</header>
