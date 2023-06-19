<?php
include 'partials/header.php';
?>

<form action="<?= ROOT_URL ?>search-logic.php" method="GET">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="col-5">
            <div class="input-group mb-3">
                <input type="search" name="search" class="form-control" placeholder="Search Anything" aria-label="Recipient's username"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="submit">Search</button>
                </div>
            </div>
        </div>
    </div>
</form>



<?php
include 'partials/footer.php';
?>