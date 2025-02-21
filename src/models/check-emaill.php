<?php

    require('../../config/connection.php');

    if (!isset($_SESSION)) {
        session_start();
    }

    if (isset($_POST['email'])) {
        $email = $_POST['email'];

        $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');

        $sql = $conn->prepare("SELECT * FROM usuarios WHERE username = ?");

        if ($sql) {
            $sql->bind_param("s", $email);

            if ($sql->execute()) {
                $result = $sql->get_result();
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $counter++;
                        $user = $row['usuario'];
                    }

                    if (!isset($_SESSION['user'])) {
                        $_SESSION['user'] = $user;
                    }

                    echo 0;
                } else {
                    echo 1;
                }
            }
        }
    }
?>