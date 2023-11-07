-<?php
include_once("../env.php");
$data = array();

switch ($_POST['comprobar']) {
    case 'verificar':
        $mail = $_POST["mail"];
        $pass = $_POST["password"];
        $sql = "SELECT * FROM `usuarios` WHERE `mail` = '$mail' AND `password` = '$pass'";
        $result = mysqli_query($con, $sql);
        if ($result && mysqli_num_rows($result) == 1) {
            $info = mysqli_fetch_assoc($result);
            $data["error"] = "1";
            $data["info"] = $info;
        } else {
            echo json_encode(array('error' => 0));
        }
        echo json_encode($data);
        break;
    case 'nada':
        // Hacer algo si es necesario
        break;
}
?>
