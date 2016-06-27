<?php
function get_gender($gender) {
    global $db;
    $query = '
        SELECT *
        FROM gender';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':gender', $gender);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function get_level($level) {
    global $db;
    $query = '
        SELECT *
        FROM level';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':level', $level);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function get_status($status) {
    global $db;
    $query = '
        SELECT *
        FROM status';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':status', $status);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function get_city($city) {
    global $db;
    $query = '
        SELECT *
        FROM city';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':city', $city);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

?>