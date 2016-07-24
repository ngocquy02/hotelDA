<?php
function get_service($id) {
    global $db;
    $query = '
        SELECT *
        FROM service
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


function get_list_service() {
    global $db;
    $query = '
        SELECT * FROM service';
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

function add_service($name,$description,$price) {
    global $db;
    $query = 'INSERT INTO service
                 (`name`,`description`, `price`)
              VALUES
                 (:name, :description, :price)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
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

function update_service($id,$name,$description,$price) {
    global $db;
    $query = 'UPDATE `service` SET `name`=:name,`description`=:description,`price`=:price WHERE id=:id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
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

function delete_service($id) {
    global $db;
    $query = 'DELETE FROM service WHERE id = :id';
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


// service order


function get_room_service($id) {
    global $db;
    $query = '
        SELECT *
        FROM room_service
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


function get_list_room_service() {
    global $db;
    $query = '
        SELECT * FROM room_service';
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

//SELECT * FROM room_service
function get_list_room_service_room_order_id($room_order) {
    global $db;
    $query = '
        SELECT * FROM room_service WHERE room_order_id = :room_order AND quantity > 0';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':room_order', $room_order);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}
function add_room_service($room_order_id,$service_id,$price,$quantity) {
    global $db;
    $query = 'INSERT INTO room_service
                 (`room_order_id`,`service_id`,`price`,`quantity`)
              VALUES
                 ( :room_order_id, :service_id,:price,:quantity)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':room_order_id', $room_order_id);
        $statement->bindValue(':service_id', $service_id);
        $statement->bindValue(':price', $price);
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

function update_room_service($id,$room_order_id,$service_id,$price,$quantity) {
    global $db;
    $query = 'UPDATE `service` SET `room_order_id`=:room_order_id,`service_id`=:service_id,`price`=:price , `quantity`=:quantity WHERE id=:id';
    try {
        $statement = $db->prepare($query);
         $statement->bindValue(':id', $id);
        $statement->bindValue(':room_order_id', $room_order_id);
        $statement->bindValue(':service_id', $service_id);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':quantity', $quantity);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function delete_room_service($id) {
    global $db;
    $query = 'DELETE FROM room_service WHERE id = :id';
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

function sum_service() {
    global $db;
    $query = '
        SELECT SUM(price*quantity) FROM room_service';
    try {
        $statement = $db->prepare($query);
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