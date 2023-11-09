<?php

require __DIR__.'/../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ｖａｐｏｒ░ｄｒｅａｍ</title>
        <style>
            body, .banner {
              margin: 0;
              height: 100vh;
              display: flex;
              align-items: center;
              justify-content: center;
              overflow: hidden;
            }
            
            .gradient-container {
              width: 100%;
              height: 100%;
              background: linear-gradient(to right, #ff00ff, #00ff00);
              background-size: 200% 100%;
              animation: gradientAnimation 5s linear infinite;
            }
            
            @keyframes gradientAnimation {
              0% {
                background-position: 0% 50%;
              }
              50% {
                background-position: 100% 50%;
              }
              100% {
                background-position: 0% 50%;
              }
            }
        </style>
    </head>
    <body>
        <div class="gradient-container">
            <p class="banner">ａｅｓｔｈｅｔｉｘ　トろク</p>
        </div>
    </body>
</html>
