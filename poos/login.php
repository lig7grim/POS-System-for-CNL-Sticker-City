<?php 
include('Includes/header.php'); 

if(isset($_SESSION['loggedIn'])){
 ?>
 <script>window.location.href = 'index.php';</script>
 <?php
}
?>
<style>
    body {
        background-image: url('./assets/bg/bg.jpg');
        background-repeat: no-repeat;
        background-size: fill;
        width: 100%;
        height: 100%;
    }
</style>

<div class="py";>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow rounded-4">
                    <div class="p-5">
                        <?php alertMessage(); ?>
                        <h4 class="text-dark mb-3">Login</h4>
                        <form action="login-code.php" method="POST">

                        <div class="mb-3">
                            <label>Username</label>
                            <input type="email" name="email" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="loginBtn" class="btn btn-primary w-100 mb-2">
                                Login
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('Includes/footer.php'); ?>