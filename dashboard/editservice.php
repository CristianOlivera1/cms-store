<?php
include "header.php";
$todo = mysqli_real_escape_string($con, $_GET['id']);
include "sidebar.php";
?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Service</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">User</a></li>
                                <li class="breadcrumb-item active">Service</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <?php
            $query = "SELECT * FROM service WHERE id='$todo'";
            $result = mysqli_query($con, $query);
            while ($row = mysqli_fetch_array($result)) {
                $id = $row['id'];
                $service_title = $row['service_title'];
                $service_desc = $row['service_desc'];
                $service_detail = $row['service_detail'];
                $service_image = $row['ufile'];
            }
            ?>

            <div class="row">
                <div class="col-xxl-9">
                    <div class="card mt-xxl-n5">
                        <div class="card-header">
                            <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="false">
                                        <i class="fas fa-home"></i> Edit Service
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <?php
                        $status = "OK"; //initial status
                        $msg = "";
                        if (isset($_POST['save'])) {
                            $service_title = mysqli_real_escape_string($con, $_POST['service_title']);
                            $service_desc = mysqli_real_escape_string($con, $_POST['service_desc']);
                            $service_detail = mysqli_real_escape_string($con, $_POST['service_detail']);

                            // Handle image upload
                            if (!empty($_FILES['service_image']['name'])) {
                                $uploads_dir = 'uploads/services';
                                $tmp_name = $_FILES["service_image"]["tmp_name"];
                                $name = basename($_FILES["service_image"]["name"]);
                                $random_digit = rand(0000, 9999);
                                $new_file_name = $random_digit . $name;
                                move_uploaded_file($tmp_name, "$uploads_dir/$new_file_name");
                                $service_image = $new_file_name;
                            }

                            if ($status == "OK") {
                                $qb = mysqli_query($con, "UPDATE service SET service_title='$service_title', service_desc='$service_desc', service_detail='$service_detail', ufile='$service_image' WHERE id='$todo'");

                                if ($qb) {
                                    $errormsg = "
                                    <div class='alert alert-success alert-dismissible alert-outline fade show'>
                                        Service Updated successfully.
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    </div>";
                                }
                            } elseif ($status !== "OK") {
                                $errormsg = "
                                <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                    " . $msg . " <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>";
                            } else {
                                $errormsg = "
                                <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                    Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help.
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>";
                            }
                        }
                        ?>

                        <div class="card-body p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                    <?php
                                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        print $errormsg;
                                    }
                                    ?>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="firstnameInput" class="form-label">Service Title</label>
                                                    <input type="text" class="form-control" id="firstnameInput" name="service_title" value="<?php print $service_title ?>" placeholder="Enter Service Title">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="descriptionInput" class="form-label">Short Description</label>
                                                    <textarea class="form-control" id="descriptionInput" name="service_desc" rows="2"><?php print $service_desc ?></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="detailInput" class="form-label">Service Detail</label>
                                                    <textarea class="form-control" id="detailInput" name="service_detail" rows="3"><?php print $service_detail ?></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="imageInput" class="form-label">Service Image</label>
                                                    <input type="file" class="form-control" id="imageInput" name="service_image">
                                                    <?php if ($service_image): ?>
                                                        <img src="uploads/services/<?php print $service_image ?>" alt="Current Image" class="img-thumbnail mt-2" width="150">
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="submit" name="save" class="btn btn-primary">Update Service</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                                <!--end tab-pane-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <?php include "footer.php"; ?>
</div>