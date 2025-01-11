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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body" style="overflow: auto;">
                                    <table id="datatable-buttons"
                                        class="table table-bordered dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>S.no.</th>
                                                <th>Date</th>
                                                <th>Transaction Id</th>
                                                <th>Membership Type</th>
                                                <th>Amount</th>
                                                <th>Duration</th>
                                                <!-- <th>Duration From</th> -->
                                                <!-- <th>Duration To</th> -->
                                                <th>Premium</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            if (!empty($payment)) {
                                                foreach ($payment as $row) {
                                                    $count = getNumRows('payment', array('id' => $row['id']));
                                                    ?>

                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= convertDatedmy($row['create_date']); ?></td>
                                                        <td><?= $row['trans_id']; ?></td>
                                                        <td><?= $row['name']; ?></td>
                                                        <td><?= $row['amount']; ?></td>
                                                        <td><?= $row['duration_to']; ?></td>
                                                        <td>
                                                            <select name="status" class="form-control statusdm"
                                                                id="status<?= $row['id'] ?>" data-id="<?= $row['id'] ?>">
                                                                <option value="0" <?= (($row['is_status'] == '0') ? 'selected' : '') ?>>Initiated</option>
                                                                <option value="1" <?= (($row['is_status'] == '1') ? 'selected' : '') ?>>Accepted</option>
                                                                <option value="2" <?= (($row['is_status'] == '2') ? 'selected' : '') ?>>Rejected</option>
                                                            </select>
                                                        </td>
                                                        <!-- <td><input type="checkbox" <?php if ($row['is_subscription'])
                                                            echo 'checked'; ?>></td> -->


                                                        <!-- <td><?= $row['is_subscription']; ?></td> -->

                                                        <!-- <td><a href="<?= base_url('feature-delete/' . $row['id']) ?>" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-danger">Delete</a></td> -->
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
                    </div>
                </div>

            </div>

            <?php include ('includes/footer.php') ?>
        </div>
        <!-- end main content-->
    </div>
    <?php include ('includes/footer-link.php'); ?>
    <script>
        $('.statusdm').change(function () {

            var pid = $(this).data('id');
            var status = $('#status' + pid).val();
            $.ajax({
                method: "POST",
                url: "<?= base_url('AdminDashboard/statusUpdate') ?>",
                data: {
                    status: status,
                    pid: pid
                },
                success: function (response) {
                    alert("Updated Status");
                }
            });
        });
    </script>

</body>

</html>