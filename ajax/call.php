<?php

if (isset($_GET['name'])) {
    echo $_GET['name'];
}

if (isset($_POST['name'])) {
    echo json_encode([
        'name' => $_POST['name']
    ]);
}