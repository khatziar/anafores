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

                              $query = 'SELECT * FROM anafores WHERE id = :anaf_id LIMIT 1';
                                $stmt = $pdo->prepare($query);
                                $stmt ->execute(['anaf_id' => $anafora_id]); 
                                $Anafora = $stmt->fetch(); 
                            }
                        
                        ?>
                        <form action="code-anafora.php" method="post" class="needs-validation">
                            <!-- <input type="hidden" name="event_id" value="<?php echo $Anafora->$event_id?>" -->
                        
                            <input type="hidden" name="id" value="<?= $Anafora->id?>" >
                            <!--
                                <div class="mt-3">
                                <label>id Αναφοράς</label>
                                <input type="text" name="id" value="<?= $Anafora->id?>" class="form-control" readonly>
                                </div>
                             -->
                            <div class="mt-3">
                                <!--<label>id Γεγονότος</label>-->
                                    <label>id Γεγονότος</label>
                                    <select class="form-select" name="event_id">
                                        <?php 
                                            $queryEvents = 'SELECT * FROM events ORDER BY date';
                                            $stmtEvents = $pdo -> prepare($queryEvents);
                                            $stmtEvents ->execute();
                                            $events = $stmtEvents->fetchAll();
                                            foreach ($events as $event) {
                                                $option_msg = '<option value='.$event->id;
                                                if($Anafora->event_id==$event->id) {
                                                    $option_msg = $option_msg . ' selected';
                                                    }
                                                $option_msg = $option_msg . '>'.$event->id.': '.$event->date.': '.$event->perigrafi.'</option>';
                                                echo $option_msg;
                                                }
                                                //echo '<option value='.$event->id.'>'.$event->date.': '.$event->perigrafi.'</option>';
                                                //echo '<option value='.$event->id.' '.if($Anafora->event_id==$event->id) echo 'selected="selected">'.$event->id.':'.$event->date.':'.$event->perigrafi.'</option>';
                                        ?>
                                    </select>
                                <!--<input type="text" name="event_id" value="<?= $Anafora->event_id?>" class="form-control"> --> <!--placeholder="Δώσε ημερομηνία δημοσίευσης Αναφοράς"-->
                            </div>
                            <div class="mt-3">
                                <label>Ημερομηνία δημοσίευσης</label>
                                <input type="date" name="dimosieusi" value="<?= $Anafora->dimosieusi?>" class="form-control" required> <!--placeholder="Δώσε ημερομηνία δημοσίευσης Αναφοράς"-->
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