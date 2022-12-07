<?php require("NavBar.php");

$errorusername = $errorfname = $errorlname = $errordatebirth = $erroremail = $errorpostcode = $errorpassword = "";
$allFields = "yes";

?>

	<div class="container">
        	<main role="main" class="pb-3">
		

        	<h2>Customer Forgot Password</h2>

<div class="row">
            <div class="col-6">

                <form method="post">
                   <div class="form-group col-md-6">
                        <label class="control-label labelFont">Username</label>
                        <input class="form-control" type="text" name = "username">
                        <span class="text-danger"><?php echo $errorusername; ?></span>
                   </div>

                <form method="post">
                   <div class="form-group col-md-6">
                        <label class="control-label labelFont">Postcode</label>
                        <input class="form-control" type="text" name = "postcode">
                        <span class="text-danger"><?php echo $errorpostcode; ?></span>
                   </div>

                   <div class="form-group col-md-6">
                        <label class="control-label labelFont">Email</label>
                        <input class="form-control" type="text" name = "email">
                        <span class="text-danger"><?php echo $erroremail; ?></span>
                   </div>

                   <div class="form-group col-md-6">
                        <label class="control-label labelFont">Month of Birth</label>
                        <input class="form-control" type="text" name = "datebirth">
                        <span class="text-danger"><?php echo $errordatebirth; ?></span>
                   </div>

                   <div class="form-group col-md-4">
                        <input class="btn btn-primary" type="submit" value="Create customer" name ="submit">
                   </div>
                </form>
            </div>
        </div>



		</main>
	</div>

<?php require("Footer.php");?>


