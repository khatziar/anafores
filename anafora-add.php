<?php 
    include('include/header.php'); 
    if (isset($_GET['event_id'])){
        $event_id = $_GET['event_id']; 
        }
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>Εισαγωγή Αναφορών
                        <a href="index.php" class="btn btn-primary float-end">Αρχική Σελίδα</a>
                    </h3>
                    <div class="card-body">
                        <form action="code-anafora.php" method="post" enctype="multipart/form-data" class="needs-validation">
                            <input type="hidden" name="event_id" value="<?php echo $event_id?>" />
                            <div class="mt-3">
                                <label>Ημερομηνία δημοσίευσης</label>
                                <input type="date" name="dimosieusi" class="form-control" placeholder="Δώσε ημερομηνία δημοσίευσης Αναφοράς" required>
                            </div>
                            <div class="mt-3">
                                <label>Μέσο</label>
                                <input type="text" name="meso" class="form-control" placeholder="Δώσε το Μέσο δημοσίευσης" required>
                            </div>
                            <div class="mt-3">
                                <label>Τίτλος</label>
                                <input type="text" name="title" class="form-control" placeholder="Δώσε Τίτλο της δημοσίευσης" required>
                            </div>
                            <div class="mt-3">
                                <label>Σύνδεσμος</label>
                                <input type="text" name="link" class="form-control" placeholder="Δώσε Σύνδεσμο της δημοσίευσης" required>
                            </div>
                            <div class="mt-3">
                                <label>Τοπικός Σύνδεσμος Αρχείου</label>
                                <input type="text" name="llink" class="form-control" placeholder="Δώσε Τοπικό σύνδεσμο του αρχείου">
                            </div>
                            <div class="form-group mt-3">
                                <label for="formFile" class="form-label">Pdf Αρχείο</label>
                                <input class="form-control" type="file" id="formFile" name="pdfFile" >
                            </div>

                            <div class="mt-3">
                                <button type="submit" name="save-anafora-btn" class="btn btn-primary">Αποθήκευση</button>
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