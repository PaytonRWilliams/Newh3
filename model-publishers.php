<?php
function selectAuthors() {
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

?>
