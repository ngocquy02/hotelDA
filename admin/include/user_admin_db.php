<?php

function get_user_admin($user_admin_id) {
    global $db;
    $query = '
        SELECT *
        FROM user_admin
        WHERE id = :user_admin_id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':user_admin_id', $category_id);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function add_user_admin($name,$adress,$birth_day,$city,$email,$gender_id,$level_id,$password,$passport,$phone,$employee_number) {
    global $db;
    $query = 'INSERT INTO user_admin
                 (`adress`, `birth_day`, `city`, `email`, `gender_id`, `level_id`, `name`, `passport`, `password`, `phone`, `employee_number`)
              VALUES
                 (:adress, :birth_day, :city, :email, :gender_id, :level_id, :name, :passport, :password, :phone, :employee_number)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':adress', $adress);
        $statement->bindValue(':birth_day', $birth_day);
        $statement->bindValue(':city', $city);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':gender_id', $gender_id);
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

function update_category($email, $password) {
    global $db;
    $query = '
        UPDATE user_admin
        SET password = :password
        WHERE categoryID = :category_id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function delete_category($email) {
    global $db;
    $query = 'DELETE FROM user_admin WHERE email = :email';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

?>