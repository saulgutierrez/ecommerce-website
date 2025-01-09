<?php
    require('../config/connection.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        echo $id;
    }
?>