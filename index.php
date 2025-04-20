<?php session_start(); ?>
<?php include('include/header.php');
require('config/db.php');
// view Γεγονότα
$sql = 'SELECT * FROM events ORDER BY date'; // WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute([]);
$events = $stmt->fetchAll();

$counter_event = 0;
?>

<div class="container">
    <h1 class='text-center'>e-Αναφορές για τα γεγονότα της Δράσης</h1>
    <div class="row">
        <div class="col-md-12 mt-4">
            <?php if (isset($_SESSION['message'])) : ?>
                <h5 class="alert alert-success"> <?= $_SESSION['message']; ?></h5>
            <?php
                unset($_SESSION['message']);
            endif;
            ?>
            <div class="card">
                <div class="card-header">
                    <h3>Γεγονότα
                        <a href="event-add.php" class="btn btn-primary float-end">Πρόσθεσε Γεγονός</a>
                    </h3>
                </div>
                <div class="card-body">
                    <?php foreach ($events as $event) {
                        $event_id = $event->id;
                        $counter_event++; ?>
                        <div class="card">
                            <div class="card-header bg-warning">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <h3>Γεγονός Νο
                                        <?php echo $counter_event; ?>
                                        </h3>
                                    </div>
                                    <!--<a href="event-delete.php?event_id=<?php echo $event_id ?>" class="btn btn-danger float-end ">Διαγραφή</a>-->
                                    <div class="col-sm-1">
                                        <a href="event-edit.php?id=<?php echo $event_id ?>" class="btn btn-success float-end ">Επεξεργασία</a>
                                    </div>
                                    <div class="col-sm-1">
                                        <form action="code-event.php" method="POST">
                                            <button type="submit" name="del-event-btn" value="<?php echo $event->id ?>" class="btn btn-danger float-end">Διαγραφή</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body bg-light text-dark">
                                <div class="row">
                                    <div class="col">
                                        <?php
                                        echo 'id  = ' . $event->id . '<br>';
                                        echo 'Ημερομηνία  = ' . $event->date . '<br>';
                                        echo 'Τόπος   = ' . $event->place . '<br>';
                                        echo 'Περιγραφή  = ' . $event->perigrafi;
                                        ?>
                                    </div>
                                    <div class="col align-self-center">
                                        <a href="anafora-add.php?event_id=<?php echo $event_id ?>" class="btn btn-primary float-end ">Πρόσθεσε Αναφορά</a>
                                    </div>
                                    <br>



                                    <?php
                                    // Για το κάθε Γεγονός να βρούμε τις Αναφορές
                                    $sqlAnafora = 'SELECT * FROM anafores WHERE event_id = :event_id';
                                    $stmtAnafora = $pdo->prepare($sqlAnafora);
                                    $stmtAnafora->execute(['event_id' => $event->id]); //'id' => $id
                                    $Anafores = $stmtAnafora->fetchAll();
                                    $plithosAnaforon = count($Anafores);

                                    ?>

                                    <table class='table table-bordered table-stripped'>
                                        <thead>
                                            <tr>
                                                <th>αα</th>
                                                <th>Τίτλος</th>
                                                <th>Ημερομηνία</th>
                                                <th>Μέσο</th>
                                                <th>Σύνδεσμος</th>
                                                <th>Τοπικό Αρχείο</th>
                                                <th class="text-center">Λειτουργίες</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($Anafores) {
                                                $counter_anafora = 0;
                                                foreach ($Anafores as $anafora) {
                                                    $counter_anafora++; ?>
                                                    <tr>
                                                        <td><?php echo $counter_anafora ?></td>
                                                        <td><?php echo $anafora->title ?></td>
                                                        <td><?php echo $anafora->dimosieusi ?></td>
                                                        <td><div class="word-wrap"><?php echo $anafora->meso ?></div></td>
                                                        <td><a href='<?php echo $anafora->link ?>' target='blank'>Σύνδεσμος</a></td>
                                                        <td><a href='<?php echo $anafora->llink ?>' target='blank' >Πάτα εδώ</a></td>
                                                        <td>
                                                            <div class="d-flex flex-row">   
                                                                <div class="mx-auto m-1"> <!--class="col text-center"-->
                                                                    <a href="anafora-edit.php?id=<?php echo $anafora->id ?>" class="btn btn-success">Edit</a>
                                                                </div>
                                                                <div class="mx-auto m-1"> 
                                                                    <!-- <a href="code-anafora.php?id=<?php echo $anafora->id ?>" class="btn btn-success">Edit</a> -->
                                                                     <form action="code-anafora.php" method="POST">
                                                                        <button type="submit" name="del-anafora-btn" onsubmit="return confirm('Do you really want to delete Anafora?');" value="<?php echo $anafora->id ?>" class="btn btn-danger">Del</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                                <!-- end foreach($Anafores as $anafora)-->
                                            <?php } else { ?>
                                                <tr>
                                                    <td colspan='7' class="alert-danger">Δεν υπάρχουν Αναφορές</td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>

                                </div> <!-- card-body για κάθε γεγονός-->
                            </div> <!-- card-body για κάθε row-->
                        </div> <!-- card μικρή για κάθε γεγονός-->

                    <?php } ?>
                    <!-- end foreach($events as $event) -->
                </div>
            </div>
        </div>
        <!--col-md-12 mt-4-->
    </div>
    <!--row-->
</div>
<!--container-->

<?php include('include/footer.php'); ?>