<?php
session_start();
include('config/db.php');

// Το κουμπί Διαγραφής del-event-btn στην φόρμα Διαγραφής Γεγονότος
if (isset($_POST['del-event-btn'])){
    $id = $_POST['del-event-btn']; 
    //echo $id;
    
try {

    $query = "DELETE FROM events WHERE id=:ev_id";
    $query_run = $pdo->prepare($query);
    $data= [':ev_id' => $id];
    $query_execute = $query_run ->execute($data);

    if ($query_execute){
        $_SESSION['message']='Εγινε επιτυχής Διαγραφή Γεγονότος';
        header('Location:index.php');
        exit(0);
        } else {
            $_SESSION['message']='ΔΕΝ έγινε Διαγραφή Γεγονότος';
            header('Location:index.php');
            exit(0);
            } 

} catch(PDOException $e){
    echo $e->getMessage();
    }

}

// Το κουμπί αποθήκευσης save-event-btn στην φόρμα Εισαγωγής Γεγονότος
if (isset($_POST['save-event-btn'])) {
    $date = $_POST['date'];
    $place = $_POST['place'];
    $perigrafi = $_POST['perigrafi'];

    try {
        $query = "INSERT INTO events(date, place, perigrafi) VALUES (:date, :place, :perigrafi)";
        $query_run = $pdo->prepare($query);
        $data = [
            ':date' => $date,
            ':place' => $place,
            ':perigrafi' => $perigrafi
        ];
        $query_execute = $query_run->execute($data);

        if ($query_execute) {
            $_SESSION['message'] = 'Εγινε επιτυχής εισαγωγή Γεγονότος';
            header('Location:index.php');
            exit(0);
        } else {
            $_SESSION['message'] = 'ΔΕΝ έγινε εισαγωγή Γεγονότος';
            header('Location:index.php');
            exit(0);
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
} 

// Το κουμπί αποθήκευσης update-event-btn στην φόρμα επεξεργασίας Γεγονότος
if (isset($_POST['update-event-btn'])) {
        $id = $_POST['id'];
        $date = $_POST['date'];
        $place = $_POST['place'];
        $perigrafi = $_POST['perigrafi'];
    
    try {
        $query = "UPDATE events SET date=:date,place=:place,perigrafi=:perigrafi WHERE id=:ev_id LIMIT 1";
        $query_run = $pdo->prepare($query);
        $data = [
            ':date' => $date,
            ':place' => $place,
            ':perigrafi' => $perigrafi,
            ':ev_id' => $id
        ];

        $query_execute = $query_run->execute($data);
        if ($query_execute) {
            $_SESSION['message'] = 'Εγινε επιτυχής Ανανέωση Γεγονότος';
            header('Location:index.php');
            exit(0);
        } else {
            $_SESSION['message'] = 'ΔΕΝ έγινε Ανανέωση Γεγονότος';
            header('Location:index.php');
            exit(0);
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
