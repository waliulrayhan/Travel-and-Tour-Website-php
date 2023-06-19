<?php
require 'partials/header.php';

// fetch post from database if UpazilasId is set
if (isset($_GET['UpazilasId'])) {
    $UpazilasId = filter_var($_GET['UpazilasId'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM upazilas WHERE UpazilasId=$UpazilasId";
    $result = mysqli_query($connection, $query);
    $place = mysqli_fetch_assoc($result);
} else {
    header('location: ' . ROOT_URL . 'blog.php');
    die();
}
?>


</br>


<div class="container-fluid">
    <div class="row">
        <div class="col-7 vh-100">
            <div class="row d-flex align-items-center justify-content-center">
                <h2 class="section-title text-center mb-3">
                    <?= $place['UpazilasName'] ?>
                </h2>
            </div>
            <div>
                <p>
                    <?= $place['Description'] ?>
                </p>
            </div>
        </div>
        <div class="col-5 vh-100">
            </br>
            </br>
            </br>
            </br>

            <iframe align="right" src="<?= $place['VisitingMapLocation'] ?>" height=500 width=700
                style="border: 1px solid black; border-radius: 10px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<h6><a href="book.php">Tour Now..</a></h6></br>

<?php include 'partials/footer.php' ?>