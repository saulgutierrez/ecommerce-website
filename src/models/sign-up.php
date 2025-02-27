<?php

    require('../../config/connection.php');

    session_start();

    # Si se recibieron los datos desde el frontend, los almacenamos para insercion
    if (isset($_POST['name'], $_POST['email'], $_POST['password'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        # Evitar inyección SQL
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
        $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');

        $rutaFotoPorDefecto = "../../public/img/profile-default.svg";
        
        $cryptPass = sha1($password);

        # Realizamos un chequeo para evitar emails duplicados
        $sql_check = "SELECT COUNT(*) AS count FROM costumer WHERE username = ?";
        $statement_check = $conn->prepare($sql_check);
        $statement_check->bind_param("s", $email);
        $statement_check->execute();
        $result_check = $statement_check->get_result();
        $row = $result_check->fetch_assoc();

        # Si el nombre de usuario es unico, insertamos en la base de datos
        if ($row['count'] == 0) {
            $sql = "INSERT INTO costumer (username, name, password, last_updated, registration_date, photograpy) VALUES (?, ?, ?, NOW(), NOW(), ?)";
            $statement = $conn->prepare($sql);
            $statement->bind_param("ssss", $email, $name, $cryptPass, $rutaFotoPorDefecto);

            if ($statement->execute()) {
                $_SESSION['name'] = $name;
                echo 0;
            } else {
                echo "Error al insertar registro";
            }
            $statement->close();
        } else {
            echo 1;
        }
        $statement_check->close();
    } else {
        echo "Error de comunicación con el servidor: " . $conn->error;
    }
    $conn->close();
?>