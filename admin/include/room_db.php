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

function add_room($name,$adress,$birth_day,$city_id,$email,$gender,$level_id,$password,$passport,$phone,$employee_number) {
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

function update_admin($name,$adress,$birth_day,$city_id,$email,$gender,$phone) {
    global $db;
    $query = 'UPDATE `user_admin` SET `adress`=:adress,`birth_day`=:birth_day,`city_id`=:city_id,`gender`=:gender,`name`=:name,`phone`=:phone WHERE email=:email';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':adress', $adress);
        $statement->bindValue(':birth_day', $birth_day);
        $statement->bindValue(':city_id', $city_id);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':gender', $gender);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':phone', $phone);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function update_password($password,$email) {
    global $db;
    $query = 'UPDATE `user_admin` SET `password`=:password WHERE email=:email';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function delete_admin($id) {
    global $db;
    $query = 'DELETE FROM user_admin WHERE id = :id';
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

?>