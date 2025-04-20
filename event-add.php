<?php include('include/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>Εισαγωγή Γεγονότων
                        <a href="index.php" class="btn btn-primary float-end">Αρχική Σελίδα</a>
                    </h3>
                    <div class="card-body">
                        <form action="code-event.php" method="post" class="needs-validation">
                            <div class="mt-3">
                                <label>Ημερομηνία</label>
                                <input type="date" name="date" class="form-control" placeholder="Δώσε ημερομηνία γεγονότος" required>
                            </div>
                            <div class="mt-3">
                                <label>Τοποθεσία</label>
                                <input type="text" name="place" class="form-control" placeholder="Δώσε τοποθεσία γεγονότος" required>
                            </div>
                            <div class="mt-3">
                                <label>Περιγραφή</label>
                                <textarea name="perigrafi" class="form-control" rows="6" placeholder="Δώσε περιγραφή γεγονότος..." required></textarea>
                            </div>
                            <div class="mt-3">
                                <button type="submit" name="save-event-btn" class="btn btn-primary">Αποθήκευση</button>
                            </div>
                            </div> <!--form-->
                        </form>
                    </div>
                </div>

            </div>
        </div> <!--col-md-12 mt-4-->
    </div> <!--row-->
</div> <!--container-->

<?php include('include/footer.php'); ?>