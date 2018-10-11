<?php
require '../vendor/autoload.php';
?>

<html>
    <head><link rel="manifest" href="/manifest.json"></head>
    <body>
        <h2>site</h2>
        <p><?=App\User::getUser();?></p>
        <p><?=App\Lib\Util::dumpObject("dfasd");?></p>
        <script src="serviceWorker.js"></script>
    </body>
</html>


