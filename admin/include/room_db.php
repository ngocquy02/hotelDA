<?php
function get_room($id) {
    global $db;
    $query = '
        SELECT *
        FROM room
        WHERE id = :id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}


function get_list_room() {
    global $db;
    $query = '
        SELECT * FROM room';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function add_room($name,$room_type_id,$img,$description,$price) {
    global $db;
    $query = 'INSERT INTO room
                 (`name`, `room_type_id`, `img`, `description`, `price`)
              VALUES
                 (:name, :room_type_id, :img, :description, :price)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':room_type_id', $room_type_id);
        $statement->bindValue(':img', $img);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->execute();
        $statement->closeCursor();

        // Get the last product ID that was automatically generated
        $category_id = $db->lastInsertId();
        return $category_id;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function update_room($id,$name,$room_type_id,$img,$description,$price) {
    global $db;
    $query = 'UPDATE `room` SET `name`=:name,`room_type_id`=:room_type_id,`img`=:img,`description`=:description,`price`=:price WHERE id=:id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':room_type_id', $room_type_id);
        $statement->bindValue(':img', $img);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function delete_room($id) {
    global $db;
    $query = 'DELETE FROM room WHERE id = :id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

?>