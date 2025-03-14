<?php

    require('../../config/connection.php');

    if (!isset($_SESSION)) {
        session_start();
    }

    if (isset($_POST['email'], $_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        $password = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');
        $cryptPass = sha1($password);

        $sql = $conn->prepare("SELECT * FROM costumer WHERE username = ? AND password = ?");

        if ($sql) {
            $sql->bind_param("ss", $email, $cryptPass);

            if ($sql->execute()) {
                $result = $sql->get_result();
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $user = $row['username'];
                    }

                    if (!isset($_SESSION['user'])) {
                        $_SESSION['user'] = $user;
                    }

                    echo 0;
                } else {
                    echo 1;
                }
            } else {
                echo "Error en la consulta: " . $conn->error;
            }
        } else {
            echo "Error en la consulta: " . $conn->error;
        }
    } else {
        echo "Error de comunicación con el servidor." . $conn->error;
    }
?>