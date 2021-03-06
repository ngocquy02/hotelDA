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

function add_new_room($name_room,$room_type_id,$name_img,$description,$price) {
    global $db;
    $query = 'INSERT INTO room
                 (`name`, `room_type_id`, `img`, `description`, `price`)
              VALUES
                 (:name_room, :room_type_id, :name_img, :description, :price)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':name_room', $name_room);
        $statement->bindValue(':room_type_id', $room_type_id);
        $statement->bindValue(':name_img', $name_img);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->execute();
        $statement->closeCursor();

        // Get the last product ID that was automatically generated
        $hotel_id = $db->lastInsertId();
        return $hotel_id;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}
function update_room($id,$room_type_id,$img,$description,$price) {
    global $db;
    $query = 'UPDATE `room` SET `room_type_id`=:room_type_id,`img`=:img,`description`=:description,`price`=:price WHERE id=:id';
    try {
        $statement = $db->prepare($query);
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
        $statement->bindValue(':description', $status_id);
        $statement->bindValue(':note', $note);
        $statement->bindValue(':date_check_in', $date_check_in);
        $statement->bindValue(':date_checkout', $date_checkout);
        $statement->bindValue(':date_order', $date_order);
        $statement->bindValue(':quantity', $quantity);
        $statement->bindValue(':price', $price);
        $statement->execute();
        $statement->closeCursor();

        // Get the last product ID that was automatically generated
        $hotel_id = $db->lastInsertId();
        return $hotel_id;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function add_room_order_search($room_id,$date_check_in,$date_checkout,$date_order,$customer_id,$price,$quantity) {
    global $db;
    $query = 'INSERT INTO room_order
                 (`room_id`,`date_check_in`, `date_checkout`, `date_order`, `customer_id`,`price`,`quantity`)
              VALUES
                 (:room_id, :date_check_in, :date_checkout,:date_order,:customer_id,:price,:quantity)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':room_id', $room_id);
        $statement->bindValue(':customer_id', $customer_id);
        $statement->bindValue(':date_check_in', $date_check_in);
        $statement->bindValue(':date_checkout', $date_checkout);
        $statement->bindValue(':date_order', $date_order);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':quantity', $quantity);
        $statement->execute();
        $statement->closeCursor();

        // Get the last product ID that was automatically generated
        $hotel_id = $db->lastInsertId();
        return $hotel_id;
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

function get_result_search($date_check_in,$date_checkout,$room_type_id) {
    global $db;
    $query = 'SELECT * FROM room WHERE id NOT IN (
        SELECT `room_id` FROM `room_order` WHERE
            (date_check_in >= :date_check_in AND date_check_in <= :date_checkout) OR
            (date_checkout >= :date_check_in2 AND date_checkout <= :date_checkout2) OR
            (date_check_in <= :date_check_in3 AND date_checkout >= :date_checkout3)
    ) AND room_type_id=:room_type_id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':date_check_in', $date_check_in);
        $statement->bindValue(':date_check_in2', $date_check_in);
        $statement->bindValue(':date_check_in3', $date_check_in);
        $statement->bindValue(':date_checkout', $date_checkout);
        $statement->bindValue(':date_checkout2', $date_checkout);
        $statement->bindValue(':date_checkout3', $date_checkout);
        $statement->bindValue(':room_type_id', $room_type_id);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo $error_message;
        display_db_error($error_message);
    }
}


// select max room order ID
//SELECT * FROM room_order ORDER BY ID DESC LIMIT 1


function get_room_order_max_id() {
    global $db;
    $query = 'SELECT * FROM room_order ORDER BY ID DESC LIMIT 1';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo $error_message;
        display_db_error($error_message);
    }
}

?>