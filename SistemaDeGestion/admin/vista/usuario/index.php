<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gestión de usuarios</title>
</head>
<body>

    <form onsubmit="return buscarPorCedula()">
        <input type="text" id="cedula" name="cedula" value="">
        <input type="button" id="buscar" name="buscar" value="Buscar" onclick="buscarPorCedula()">
    </form>
    <div id="informacion"><b>Datos de la persona</b></div>

    <table style="width:100%">
        <tr>
        <th>Cedula</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Dirección</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Fecha Nacimiento</th>
        </tr>
        <?php
            include '../../../config/conexionBD.php';
            $sql = "SELECT * FROM usuario";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo " <td>" . $row["usu_cedula"] . "</td>";
                    echo " <td>" . $row['usu_nombres'] ."</td>";
                    echo " <td>" . $row['usu_apellidos'] . "</td>";
                    echo " <td>" . $row['usu_direccion'] . "</td>";
                    echo " <td>" . $row['usu_telefono'] . "</td>";
                    echo " <td>" . $row['usu_correo'] . "</td>";
                    echo " <td>" . $row['usu_fecha_nacimiento'] . "</td>";
                    echo " <td> <a href='eliminar.php?codigo=" . $row['usu_codigo'] . "'>Eliminar</a> </td>";
                    echo " <td> <a href='modificar.php?codigo=" . $row['usu_codigo'] . "'>Modificar</a> </td>";
                    echo " <td> <a href='cambiar_contrasena.php?codigo=" . $row['usu_codigo'] . "'>Cambiar contraseña</a> </td>";
                    echo "</tr>";

                }
            } else {
                echo "<tr>";
                echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
                echo "</tr>";
            }
            $conn->close();
        ?>
    </table>

    <?php
        session_start();
        $_SESSION['isLogged'] = FALSE;
        session_destroy();
        header("Location: /SistemaDeGestion/public/vista/login.html");
    ?>
</body>
</html>
