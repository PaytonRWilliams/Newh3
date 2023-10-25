<?php
function selectBooks() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT book_id, book_title, book_genre FROM `book` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertBooks($bTitle, $bGenre, $pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `book` (`book_title`, `book_genre`, `publisher_id`) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $bTitle, $bGenre, $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateBooks($bTitle, $bGenre, $bid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `book` SET `book_title`=?, `book_genre`=? WHERE `book_id` = ?");
        $stmt->bind_param("ssi", $bTitle, $bGenre, $bid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteBooks($bid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from book where book_id=?");
        $stmt->bind_param("i", $bid);
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

