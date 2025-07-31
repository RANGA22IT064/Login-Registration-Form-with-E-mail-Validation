<?php 
include('authentication.php');
session_start();

$page_title="Dashboard";
include('include/header.php');
include('include/navbar.php');
 ?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
            <?php
                    if (isset($_SESSION['status'])) 
                    {
                        ?>
                        <div class="alter alter-success">
                        <h5><?= $_SESSION['status'];?></h5>
                        </div>
                        <?php
                        unset($_SESSION['status']); 
                    }
                    ?>
                <div class="card">
                    <div class="card-header">
                        <h1>User</h1>
                    </div>
                    <div class="card-body">
                        <h2 >
                            Login to access
                        </h2>
                        <br>
                        <h5>Username: <?= $_SESSION['auth_user']['username']; ?></h5>
                        <h5>Mobile No: <?= $_SESSION['auth_user']['phone']; ?></h5>
                        <h5>E-mail: <?= $_SESSION['auth_user']['email']; ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>