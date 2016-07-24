<?php

function get_customer($customer_email) {
    global $db;
    $query = '
        SELECT *
        FROM customer
        WHERE email = :customer_email';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':customer_email', $customer_email);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function get_customer_id($id) {
    global $db;
    $query = '
        SELECT *
        FROM customer
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

function get_list_customer() {
    global $db;
    $query = '
        SELECT * FROM customer';
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

function add_customer($name,$adress,$birth_day,$city,$email,$gender,$password,$passport,$phone) {
    global $db;
    $query = 'INSERT INTO customer
                 (`name`, `birth_day`, `passport`, `email`, `password`, `phone`, `gender`, `adress`, `city`)
              VALUES
                 (:name, :birth_day, :passport, :email, :password, :phone, :gender, :adress, :city)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':adress', $adress);
        $statement->bindValue(':birth_day', $birth_day);
        $statement->bindValue(':city', $city);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':gender', $gender);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':passport', $passport);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':phone', $phone);
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

function add_customer_order($name,$adress,$birth_day,$city,$email,$gender,$passport,$phone) {
    global $db;
    $query = 'INSERT INTO customer
                 (`name`, `birth_day`, `passport`, `email`, `phone`, `gender`, `adress`, `city_id`)
              VALUES
                 (:name, :birth_day, :passport, :email, :phone, :gender, :adress, :city)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':adress', $adress);
        $statement->bindValue(':birth_day', $birth_day);
        $statement->bindValue(':city', $city);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':gender', $gender);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':passport', $passport);
        $statement->bindValue(':phone', $phone);
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


function update_customer($email, $password) {
    global $db;
    $query = '
        UPDATE customer
        SET password = :password
        WHERE email = :email';
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

function delete_customer($email) {
    global $db;
    $query = 'DELETE FROM customer WHERE email = :email';
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

function delete_customer_id($id) {
    global $db;
    $query = 'DELETE FROM customer WHERE id = :id';
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