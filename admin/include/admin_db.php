<?php

function get_admin_email($admin_email) {
    global $db;
    $query = '
        SELECT *
        FROM user_admin
        WHERE email = :admin_email';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':admin_email', $admin_email);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function get_admin_id($id) {
    global $db;
    $query = '
        SELECT *
        FROM user_admin
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


function get_list_admin() {
    global $db;
    $query = '
        SELECT * FROM user_admin';
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

function add_admin($name,$adress,$birth_day,$city_id,$email,$gender,$level_id,$password,$passport,$phone,$employee_number) {
    global $db;
    $query = 'INSERT INTO user_admin
                 (`adress`, `birth_day`, `city_id`, `email`, `gender`, `level_id`, `name`, `passport`, `password`, `phone`, `employee_number`)
              VALUES
                 (:adress, :birth_day, :city_id, :email, :gender, :level_id, :name, :passport, :password, :phone, :employee_number)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':adress', $adress);
        $statement->bindValue(':birth_day', $birth_day);
        $statement->bindValue(':city_id', $city_id);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':gender', $gender);
        $statement->bindValue(':level_id', $level_id);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':passport', $passport);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':phone', $phone);
        $statement->bindValue(':employee_number', $employee_number);
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