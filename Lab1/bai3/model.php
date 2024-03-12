<?php
function get_user($email){
    include 'config.php';
    $sql = "SELECT * FROM users WHERE email = ?";
    $stm = $connection->prepare($sql);
    $stm ->bind_param("s", $email);
    $stm->execute();

    $result = $stm->get_result();
    if($result->rum_rows > 0){
        $row = $result->fetch_array(MYSQLI_ASSOC);
        return $row;
    }
    $connection->close();
}

?>