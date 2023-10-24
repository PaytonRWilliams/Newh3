<?php
function selectAuthors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT author_id, author_name, author_gender FROM `author` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}



function insertAuthors($aName, $aGender) {
   try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `author` (`author_name`, `author_gender`) VALUES (?, ?)");
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
        $stmt = $conn->prepare("update 'book' set 'book_title'=?, 'book_genre'= ? where book_id = ? ");
        $stmt->bind_param("ssi", $bTitle, $bGenre, $bid);
       $success= $stmt->execute();
        $result = $stmt->get_result();
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
