<?php include('includes/header.php'); ?>


<div class="container-fluid px-4">



    <div class="row">
        <div class="col-md-12">
            <h1 class="mt-4"> Home Page </h1>
            <?php alertMessage(); ?>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card card-body p-3">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">
                    Total Category
                </p>
                <h5 class="fw-bold mb-0">
                    <?= getCount('categories');   ?>
                </h5>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card card-body p-3">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">
                    Total Product
                </p>
                <h5 class="fw-bold mb-0">
                    <?= getCount('products');   ?>
                </h5>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card card-body p-3">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">
                    Total Admin
                </p>
                <h5 class="fw-bold mb-0">
                    <?= getCount('admins');   ?>
                </h5>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
