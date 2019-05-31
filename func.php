<?php

/**
 * Create DB connection
 */
function connect(){
    require('db.env.php');
    $conn = false;
    try {
        $conn = new PDO("mysql:server = $host;dbname=$db", $user, $pass);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    } catch(Exception $e) {
        echo "Failed: " . $e;
    }

    return $conn;
}

/**
 * Store POST data into DB
 */
function storeTask(){
    
    if($conn = connect()){
        try{
            $sql = "INSERT INTO dicoding_azure_submission1.tasks (task, done) VALUES(?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $_POST['task']);
            $stmt->bindValue(2, 0);
            $stmt->execute();
            return true;
        } catch(Exception $e) {
            echo "Failed: " . $e;
        }

        return false;
    }
    
}

/**
 * Load all tasks from DB
 */
function loadTasks(){
    $tasks = null;
    if($conn = connect()){
        try{
            $sql = "SELECT * FROM dicoding_azure_submission1.tasks";
            $stmt = $conn->query($sql);
            $tasks = $stmt->fetchAll();
        } catch(Exception $e) {
            echo "Failed: " . $e;
        }
    }

    return $tasks;
}
