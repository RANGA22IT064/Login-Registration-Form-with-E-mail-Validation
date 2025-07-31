<?php 
session_start();
$page_title="Register page";
include('include/header.php');
include('include/navbar.php');
 ?>


<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="alert" color="red">
                    <?php
                    if (isset($_SESSION['status'])) 
                    {
                        echo"<h4>".$_SESSION['status']."</h4>";
                        unset($_SESSION["status"]); 
                    }
                    ?>
                </div>
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Register Here</h5>
                    </div>
                    <div class="card-body" >

                        <form action="code.php" method="POST">
                            <div class="form-group mb-3">
                            <label for="">User Name</label>
                                <input type="text" name="name" aria-placeholder="User name" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                            <label for="">Mobile Number</label>
                                <input type="text" name="phone" aria-placeholder="Ph_Number"class="form-control">
                            </div>
                            <div class="form-group mb-3">
                            <label for="">E-mail</label>
                                <input type="text" name="email" aria-placeholder="E_mail"class="form-control">
                            </div>
                            <div class="form-group mb-3">
                            <label for="">Password</label>
                                <input type="text" name="password" aria-placeholder="Password"class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" name="register_btn" class="btn btn-primary" >Register Now</button>
                            </div>

                        </form>

                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>


 
<?php include('include/footer.php'); ?>