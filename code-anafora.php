<?php
session_start();
include('config/db.php');

// Το κουμπί Διαγραφής del-anafora-btn στην φόρμα Διαγραφής Αναφοράς
if (isset($_POST['del-anafora-btn'])){
       
    
    $anafora_id = $_POST['del-anafora-btn']; 
    echo $anafora_id;
    
    
    try {

        $query = "DELETE FROM anafores WHERE id=:anaf_id";
        $query_run = $pdo->prepare($query);
        $data= [':anaf_id' => $anafora_id];
        $query_execute = $query_run ->execute($data);

        if ($query_execute){
            $_SESSION['message']='Εγινε επιτυχής Διαγραφή Αναφοράς';
            header('Location:index.php');
            exit(0);
            } else {
                $_SESSION['message']='ΔΕΝ έγινε Διαγραφή Αναφοράς';
                header('Location:index.php');
                exit(0);
                } 

    } catch(PDOException $e){
        echo $e->getMessage();
        }

}



// Το κουμπί αποθήκευσης save-anafora-btn στην φόρμα Εισαγωγής Αναφοράς
if (isset($_POST['save-anafora-btn']) ){ //&& isset($_FILES['pdfFile'])
    $event_id = $_POST['event_id'];   
    $meso = $_POST['meso'];
    $dimosieusi = $_POST['dimosieusi'];    
    echo 'date='.$dimosieusi;
    echo '<br>';
    $title = $_POST['title'];
    $link = $_POST['link'];
    $llink = $_POST['llink'];
    
    //εδω code για το pdf αρχειο
    // $uploaddir = 'C:\\drasi\\anafores\\';
    // $newDirName = pathinfo($_FILES['pdfFile']['name'])["filename"];
    // $newpath = $uploaddir . $dimosieusi . '_' .$newDirName;

    // echo 'newpath='.$newpath;
    // echo '<br>';
    // if (!file_exists($newpath)){
    //  mkdir($newpath);   
    // }
    
    // $uploadfile = $newpath. '\\' . basename($_FILES["pdfFile"]["name"]);
    // echo 'uploadfile='. $uploadfile;
    // echo '<br>';

    // if (copy(($_FILES['pdfFile']['tmp_name']),$uploadfile)) {     //move_uploaded_file copy
    //     echo 'copy file successful!';    
    //     $llink = $uploadfile;
    // } else {
    //     echo 'No copy';
    // }



    // echo 'hello';
    // echo '<pre>';
    // print_r($_FILES['pdfFile']);
    // print_r(pathinfo($_FILES['pdfFile']['name']));
    // var_dump(pathinfo($_FILES['pdfFile']['name']));
    // echo (pathinfo($_FILES['pdfFile']['name'])["filename"]);
    // echo '<br>';
    //var_dump(realpath_cache_get());
    //echo realpath($_FILES['pdfFile']) . "<br />";
    //echo '</pre>';
//} 
// else {
//         echo 'Not taken pdfFile';  
//     }

try {
$query = "INSERT INTO anafores(event_id,meso,dimosieusi,title,link,llink, pdf) VALUES (:event_id,:meso,:dimosieusi,:title,:link,:llink, :pdf)";
$query_run = $pdo->prepare($query);
$data = [
    ':event_id'=>$event_id,
    ':meso'=>$meso,
    ':dimosieusi'=>$dimosieusi,
    ':title'=>$title,
    ':link'=>$link,
    ':llink'=>$llink,
    ':pdf'=>NULL
];
//echo $event_id;
$query_execute = $query_run->execute($data);

if ($query_execute){
    $_SESSION['message']='Εγινε επιτυχής εισαγωγή Αναφοράς';
    header('Location:index.php');
    exit(0);
    } else {
        $_SESSION['message']='ΔΕΝ έγινε εισαγωγή Αναφοράς';
        header('Location:index.php');
        exit(0);
        } 

} 
catch(PDOException $e){
        echo $e->getMessage();
}

} //end of save-anafora-btn

// Το κουμπί αποθήκευσης update-anafora-btn στην φόρμα επεξεργασίας Αναφοράς
if (isset($_POST['update-anafora-btn'])){
    $id = $_POST['id'];   
    $event_id = $_POST['event_id'];   
    echo $event_id;
    $meso = $_POST['meso'];
    $dimosieusi = $_POST['dimosieusi'];    
    $title = $_POST['title'];
    $link = $_POST['link'];
    $llink = $_POST['llink'];
    //εδω code για το pdf αρχειο
    
    try {

        $query = "UPDATE anafores SET event_id=:event_id, meso=:meso, dimosieusi=:dimosieusi,title=:title,link=:link,llink=:llink WHERE id=:anaf_id LIMIT 1" ;
        $query_run = $pdo->prepare($query);
        $data = [
            ':event_id'=>$event_id,
            ':meso'=>$meso,
            ':dimosieusi'=>$dimosieusi,
            ':title'=>$title,
            ':link'=>$link,
            ':llink'=>$llink,
            ':anaf_id'=>$id
            //δεν πειράζω το pdf αρχειο
        ];
        //echo $event_id;
        $query_execute = $query_run->execute($data);

        if ($query_execute){
            $_SESSION['message']='Εγινε επιτυχής Ανανέωση Αναφοράς';
            header('Location:index.php');
            exit(0);
            } else {
                $_SESSION['message']='ΔΕΝ έγινε Ανανέωση Αναφοράς';
                header('Location:index.php');
                exit(0);
                } 

    }   
    catch(PDOException $e){
        echo 'EDO EIMASTE';   
        echo $e->getMessage();
        }
} //end of update-anafora-btn

?>