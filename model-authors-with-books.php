<?php
function selectAuthors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT author_id, author_name, author_gender FROM `author`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectBooksByAuthor($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT  b.book_id, book_title, book_genre, position, book_author_id, author_id
FROM `book` b join book_author ba ON ba.book_id=b.book_id WHERE ba.author_id=? ");
        $stmt->bind_param("i", $aid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectAuthorsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT author_id, author_name FROM `author` order by author_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectBooksForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT book_id, book_title FROM `book` order by book_title");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertBook_Author($aid, $bid, $position) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `book_author` (`author_id`, `book_id`, `position`) VALUES (?, ?, ?)");
        $stmt->bind_param("iis", $aid, $bid, $position);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateBook_Author($aid, $bid, $position, $baid) {
    try {
        $conn = get_db_connection();
       $stmt = $conn->prepare("update `book_author` set `author_id` = ?, `book_id` = ?, `position` = ? WHERE `book_author_id` = ?");

        $stmt->bind_param("iisi", $aid, $bid, $position, $baid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteBook_Author($baid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from book_author where book_author_id=?");
        $stmt->bind_param("i", $baid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
