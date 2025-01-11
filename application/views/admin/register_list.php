<?php include ('includes/header.php'); ?>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include ('includes/top-header.php'); ?>
        <?php include ('includes/menu.php'); ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <?php include ('includes/pagetitle.php'); ?>
                    <div class="row">
                        <div class="col-12" style="overflow-x: auto;">
                            <div class="card">
                                <div class="card-body">

                                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap ">
                                        <thead>
                                            <tr>
                                                <th>S.no.</th>
                                                <th>Is Featured</th>
                                                <th>Is Visible</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <!-- <th>Address</th> -->
                                                <th>Image</th>
                                                <th>More Details</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            if (!empty($register_list)) {
                                                foreach ($register_list as $row) {
                                                    $count = getNumRows('register', array('id' => $row['id']));
                                                    $country = getSingleRowById('countries', array('id' => $row['country']));
                                                    $state = getSingleRowById('states', array('id' => $row['state']));
                                                    $city = getSingleRowById('cities', array('id' => $row['city']));
                                                    ?>
                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <!-- <td><input type="checkbox" <?php if ($row['is_featured'])
                                                            echo 'checked'; ?>></td> -->
                                                        <td>
                                                            <select name="featured" class="form-control featuredhm"
                                                                id="featured<?= $row['id'] ?>" data-id="<?= $row['id'] ?>">
                                                                <option value="1" <?= (($row['is_featured'] == '1') ? 'selected' : '') ?>>Yes</option>
                                                                <option value="0" <?= (($row['is_featured'] == '0') ? 'selected' : '') ?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="is_visible" class="form-control visibleRS"
                                                                id="visible<?= $row['id'] ?>" data-id="<?= $row['id'] ?>">
                                                                <option value="1" <?= (($row['is_visible'] == '1') ? 'selected' : '') ?>>Yes</option>
                                                                <option value="0" <?= (($row['is_visible'] == '0') ? 'selected' : '') ?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td><?= $row['name'] ?></td>
                                                        <td><?= $row['email'] ?></td>
                                                        <td><?= $row['phone'] ?></td>
                                                        <!-- <td><?= $row['address'] ?></td> -->
                                                        <td><img src="<?= base_url('uploads/' . $row['image']) ?>" width="50" />
                                                        </td>
                                                        <td>
                                                            <a href="" class="btn btn-primary" data-bs-toggle="modal"
                                                                data-bs-target="#exModal<?= $row['id'] ?>"><i
                                                                    class='bx bx-show'></i>View</a>
                                                        </td>
                                                        <td><a href="<?= base_url('adminDashboard/register_delete/' . $row['id']) ?>"
                                                            onclick="return confirm('Are you sure to delete this data?')"
                                                            class="btn btn-danger">Delete</a></td>
                                                            
                                                        <!-- --------items modal --------- -->
                                                        <div class="modal fade" id="exModal<?= $row['id'] ?>" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" style="width: 700px;">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="exampleModalLabel<?= $row['id'] ?>">More Details</h1>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                <h5><b>Country</b> :
                                                                                    <?= $country['name'] ?></h5>
                                                                                <h5><b>State </b> :
                                                                                    <?= $state['name'] ?></h5>
                                                                                <h5><b>City </b> : <?= $city['name'] ?>
                                                                                </h5>
                                                                                <h5><b>Marital Status </b> : <?= $row['mstatus'] ?>
                                                                                </h5>
                                                                                <h5><b>Height </b> : <?= $row['height'] ?>
                                                                                </h5>
                                                                                </div>
                                                                                
                                                                                <div class="col-md-6">
                                                                                <h5><b>Mother Tongue </b> : <?= $row['tongue'] ?>
                                                                                </h5>
                                                                                <h5><b>Date of Birth </b> : <?= $row['dob'] ?>
                                                                                </h5>
                                                                                <h5><b>Religion </b> : <?= $row['religion'] ?>
                                                                                </h5>
                                                                                <h5><b>Have Child </b> : <?= $row['child'] ?>
                                                                                </h5>
                                                                                <h5><b>Address </b> : <?= $row['address'] ?>
                                                                                </h5>
                                                                                </div>
                                                                                
                                                                               
                                                                            </div>
                                                                        </div>
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>

            <?php include ('includes/footer.php') ?>
        </div>
        <!-- end main content-->

    </div>

    <?php include ('includes/footer-link.php'); ?>
    <script>
        $('.featuredhm').change(function () {
            var pid = $(this).data('id');
            var featured = $('#featured' + pid).val();
            $.ajax({
                method: "POST",
                url: "<?= base_url('AdminDashboard/featuredProduct') ?>",
                data: {
                    featured: featured,
                    pid: pid
                },
                success: function (response) {

                    alert("Product is featured Now");
                }
            });
        });
    </script>
    <script>
        $('.visibleRS').change(function () {

            var pid = $(this).data('id');
            var visible = $('#visible' + pid).val();
            $.ajax({
                method: "POST",
                url: "<?= base_url('AdminDashboard/isVisibleUser') ?>",
                data: {
                    visible: visible,
                    pid: pid
                },
                success: function (response) {

                    alert("Updated Now");
                }
            });
        });
    </script>

</body>

</html>