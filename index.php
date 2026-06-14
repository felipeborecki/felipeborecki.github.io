<?php
if (strpos($_SERVER['HTTP_HOST'], 'www.') === 0) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: https://' . substr($_SERVER['HTTP_HOST'], 4) . $_SERVER['REQUEST_URI']);
    exit();
}
readfile('index.html');
?>
