<?php require 'partial/head.php' ?>
<!------------------SIDE NAV---------------------------->

<?php require 'partial/sidebar.php' ?>
<?php require 'partial/header.php' ?>
<div id="accordion" class="main body">
    <!-- FIRST -->
    <div class="container p-3">
        <div class="row mt-3">
            <?php foreach ($select as $list): ?>

                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div id="card">
                        <div class="d-flex justify-content-between">
                            <h5 class="fs-6">Just Now</h5>
                            <h5 class="badge rounded-pill bg-info fs-6">
                                <?= $list['TAG'] ?>
                            </h5>
                        </div>
                        <h3 class="fs-3 mt-2">
                            <?= $list['TITLE'] ?>
                        </h3>
                        <div class="mt-1" id="card-body">
                            <?= $list['ABOUT'] ?>
                        </div>
                    </div>
                </div>

            <?php endforeach ?>
        </div>
    </div>
</div>
<?php require 'partial/footer.php' ?>