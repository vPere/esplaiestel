<?php
function loadContent(): void
{
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        include 'commons/' . $page . '/' . $page . '.html';
    } elseif (isset($_GET['grup'])) {
        $grup = $_GET['grup'];
        if (isset($_GET['content'])) {
            $content = $_GET['content'];
            include 'grups/' . $grup . '/' . $content . '.html';
        } else {
            include 'grups/' . $grup . '/' . $grup . '.html';
        }
    } else {
        include 'main.php';
    }
}
