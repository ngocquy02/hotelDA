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

//Room order
function get_room_order($id) {
    global $db;
    $query = '
        SELECT *
        FROM room_order
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


function get_list_room_order() {
    global $db;
    $query = '
        SELECT * FROM room_order';
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

function add_room_order($room_id,$status_id,$note,$date_check_in,$date_checkout,$date_order,$customer_id,$price,$quantity) {
    global $db;
    $query = 'INSERT INTO room_order
                 (`room_id`, `status_id`, `note`, `date_check_in`, `date_checkout`, `date_order`, `customer_id`, `price`, `quantity`)
              VALUES
                 (:room_id, :status_id, :note, :date_check_in, :date_checkout,:date_order,:customer_id,:price,:quantity)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':room_id', $room_id);
        $statement->bindValue(':status_id', $room_type_id);
        $statement->bindValue(':img', $img);
        $statement->bindValue(':description', $status_id);
        $statement->bindValue(':note', $note);
        $statement->bindValue(':date_check_in', $date_check_in);
        $statement->bindValue(':date_checkout', $date_checkout);
        $statement->bindValue(':date_order', $date_order);
        $statement->bindValue(':quantity', $quantity);
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

function update_room_order($id,$status_id) {
    global $db;
    $query = 'UPDATE `room_order` SET `status_id`=:status_id WHERE id=:id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':status_id', $status_id);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function delete_room_order($id) {
    global $db;
    $query = 'DELETE FROM room_order WHERE id = :id';
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