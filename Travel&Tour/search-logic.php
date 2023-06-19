<?php
require 'partials/header.php';

if (isset($_GET['search']) && isset($_GET['submit'])) {
    $search = filter_var($_GET['search'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $query = "SELECT * FROM district WHERE DistrictName LIKE '%$search%'";
    $districtNames = mysqli_query($connection, $query);
    $districtName = mysqli_fetch_assoc($districtNames);
    $FindDistrictId = $districtName['DistrictId'];


    $query2 = "SELECT * FROM upazilas WHERE DistrictId='$FindDistrictId'";
    $upazilasNames = mysqli_query($connection, $query2);


} else {
    header('location: ' . ROOT_URL . 'home.php');
    die();
}
?>


</br>
<div class="d-flex align-items-center justify-content-center">
    <div>
        <iframe align="justify"
            src="<?= $districtName['MapLocation'] ?>"
            height=400 width=1900 style="border: 1px solid black; border-radius: 10px;" allowfullscreen=""
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

</br>
</br>

<div class="untree_co-section">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-6">
            <h2 class="section-title text-center mb-3">
                <?= $districtName['DistrictName'] ?>
            </h2>
        </div>
    </div>
    <?php while ($upazilasName = mysqli_fetch_assoc($upazilasNames)): ?>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-4" align="center">
                <img src="./images/<?= $upazilasName['Image'] ?>" height="400px" width="1000px" alt="Image" class="img-fluid">
                <h3>
                    <?= $upazilasName['UpazilasName'] ?>
                </h3>
                <!-- <h6><a href="visiting-place.php">See More...</a></h6></br> -->
                <h6><a href="<?= ROOT_URL ?>visiting-place.php?UpazilasId=<?= $upazilasName['UpazilasId'] ?>">See More...</a></h6></br>
            </div>
        </div>
    <?php endwhile ?>
</div>

<?php include 'partials/footer.php' ?>