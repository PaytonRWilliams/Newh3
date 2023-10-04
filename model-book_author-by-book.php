<?php
function selectBook_AuthorByBook($baid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT  b.book_id, book_title, book_genre, position
FROM `book` b join book_author ba ON ba.book_id=b.book_id WHERE ba.book_id=? ");
        $stmt->bind_param("i", $baid);
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
