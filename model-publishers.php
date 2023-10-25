<?php
function selectPublishers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT publisher_id, publisher_name, publisher_city FROM `publisher` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}



function insertPublishers($pName, $pCity) {
   try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `publisher` (`publisher_name`, `publisher_city`) VALUES (?, ?)");
        $stmt->bind_param("ss", $pName, $pCity);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}



function updatePublishers($pName, $pCity, $pid) {
    try {
        $conn = get_db_connection();
       $stmt = $conn->prepare("UPDATE `publisher` SET `publisher_name`=?, `publisher_city`=? WHERE publisher_id = ?");
        $stmt->bind_param("ssi", $pName, $pCity, $pid);
       $success= $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}



function deletePublishers($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from publisher where publisher_id=?");
       $stmt->bind_param("i", $pid);
       $success= $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}



?>
