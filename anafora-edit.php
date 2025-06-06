<?php 
include('include/header.php'); 
include('config/db.php'); 
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>Επεξεργασία Αναφορών
                        <a href="index.php" class="btn btn-primary float-end">Αρχική Σελίδα</a>
                    </h3>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['id'])){
                            $anafora_id = $_GET['id'];
                            // Fetch the Anafora details based on the provided ID
                            $query = 'SELECT * FROM anafores WHERE id = :anaf_id LIMIT 1';
                            $stmt = $pdo->prepare($query);
                            $stmt->execute(['anaf_id' => $anafora_id]); 
                            $Anafora = $stmt->fetch();
                            }
                        
                        ?>
                        <form action="code-anafora.php" method="post" class="needs-validation">
                        
                            <input type="hidden" name="id" value="<?= $Anafora->id?>" > 
                            <div class="mt-3">
                                    <label>id Γεγονότος</label>
                                    <?php 
                                    // Fetch event details based on event_id
                                        $queryEvent = 'SELECT * FROM events WHERE id = :event_id';
                                        $stmtEvent = $pdo -> prepare($queryEvent);
                                        $stmtEvent ->execute(['event_id' => $Anafora->event_id]);
                                        $event = $stmtEvent->fetch();
                                        echo '<input type="text" name="event_id" value="'.$Anafora->event_id.' '.$event->date.': '.$event->perigrafi.'" class="form-control" style="background-color:lightgrey" readonly>';
                                    ?>
                            </div>
                            <div class="mt-3">
                                <label>Ημερομηνία δημοσίευσης</label>
                                <input type="date" name="dimosieusi" value="<?= $Anafora->dimosieusi?>" class="form-control" required>
                            </div>
                            <div class="mt-3">
                                <label>Μέσο</label>
                                <input type="text" name="meso" class="form-control" value="<?= $Anafora->meso?>" required>
                            </div>
                            <div class="mt-3">
                                <label>Τίτλος</label>
                                <input type="text" name="title" class="form-control" value="<?= $Anafora->title?>" required>
                            </div>
                            <div class="mt-3">
                                <label>Σύνδεσμος</label>
                                <input type="text" name="link" class="form-control" value="<?= $Anafora->link?>" required>
                            </div>
                            <div class="mt-3">
                                <label>Τοπικός Σύνδεσμος Αρχείου</label>
                                <input type="text" name="llink" class="form-control" value="<?= $Anafora->llink?>">
                            </div>
                            <div class="form-group mt-3">
                                <label for="formFile" class="form-label">Pdf Αρχείο</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>

                            <div class="mt-3">
                                <button type="submit" name="update-anafora-btn" class="btn btn-primary">Αποθήκευση</button>
                            </div>
                        </form> <!--form-->
                </div>
            </div>

        </div>
    </div>
    <!--col-md-12 mt-4-->
</div>
<!--row-->
</div>
<!--container-->

<?php include('include/footer.php'); ?>