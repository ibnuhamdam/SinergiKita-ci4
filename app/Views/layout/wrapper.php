<?php
if ($content == "Home/index") {
    echo view('layout/header.php');
    echo view('layout/content.php');
} else {
    echo view('layout/header.php');
    echo view('layout/navbar.php');
    echo view('layout/content.php');
    echo view('layout/footer.php');
}
