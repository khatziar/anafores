<?php
include('include/header.php');
include('config/db.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>Επεξεργασία Γεγονότος
                        <a href="index.php" class="btn btn-primary float-end">Αρχική Σελίδα</a>
                    </h3>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];

                            $query = 'SELECT * FROM events WHERE id = :ev_id LIMIT 1';
                            $stmt = $pdo->prepare($query);
                            $stmt->execute(['ev_id' => $id]);
                            $Event = $stmt->fetch();
                        }

                        ?>
                        <form action="code-event.php" method="post" class="needs-validation">
                            <!--<input type="hidden" name="id" value="<?php echo $Event->$id ?>">-->
                            <div class="mt-3">
                                <label>id Γεγονότος</label>
                                <input type="text" name="id" value="<?= $Event->id ?>" class="form-control" readonly>
                            </div>
                            <div class="mt-3">
                                <label>Ημερομηνία</label>
                                <input type="date" name="date" value="<?= $Event->date ?>" class="form-control" required>
                            </div>
                            <div class="mt-3">
                                <label>Τοποθεσία</label>
                                <input type="text" name="place" class="form-control" value="<?= $Event->place ?>" required>
                            </div>
                            <div class="mt-3">
                                <label>Περιγραφή</label>
                                <textarea name="perigrafi" class="form-control" rows="6" required><?= $Event->perigrafi ?></textarea>
                            </div>
                            <div class="mt-3">
                                <label>Σημειώσεις</label>
                                <textarea name="simeioseis" class="form-control" rows="6"><?= $Event->simeioseis ?></textarea>
                            </div>
                            <div class="mt-3">
                                <button type="submit" name="update-event-btn" class="btn btn-primary">Αποθήκευση</button>
                            </div>
                        </form>
                        <!--form-->
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