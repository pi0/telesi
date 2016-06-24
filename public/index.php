<!doctype html>
<html lang=en>
<head>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Telesi Web</title>
    <link rel=stylesheet href=css/app.css>
    <link rel=icon href=favicon.ico type=image/x-icon>
    <link rel=apple-touch-icon href=img/iphone_home120.png>
    <link rel=apple-touch-icon sizes=120x120 href=img/iphone_home120.png>
    <link rel=apple-touch-startup-image media="(device-width: 320px)" href=img/iphone_startup.png>
    <meta name=apple-mobile-web-app-title content="Telesi Web">
    <meta name=mobile-web-app-capable content=yes>
    <meta name=apple-mobile-web-app-capable content=yes>
    <meta name=apple-mobile-web-app-status-bar-style content=black-translucent>
    <meta name=theme-color content=#497495>
    <meta property=og:title content="Telesi Web">
    <meta property=og:url content="https://Telesi.org/">
    <meta property=og:image content=https://web.Telesi.org/img/logo_share.png>
    <meta property=og:site_name content="Telesi Web">
    <meta property=og:description
          content="Welcome to the Web application of Telesi messenger. See https://github.com/pi0/telesi for more info.">
</head>

<body>

<div class=page_container>
    <div class=page_wrap id="app">
        <?php include '../partials/app.php'; ?>
    </div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/jquery.nanoscroller/nanoscroller.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/vue/vue.js"></script>
<script src=js/app.js></script>

</body>
</html>