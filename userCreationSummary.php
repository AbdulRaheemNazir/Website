<?php include("NavBar.php"); 

$result = $_GET['createcustomer']; //you can also use $_REQUEST[''] do reseach whats the difference!


include_once("createUserSQL.php");
?>

<div class="container pb-5">
        <main role="main" class="pb-3">
        <h2>User Creation Result</h2><br>

        <div>
            <?php
                if($result){
                    echo "A user successfully created";



                }
                else{
                    echo "Error";
                }

                

            ?>
<p>Here is your autogenerated Username - make sure to note this down as you will need this to login to your account to access our facilities: </p>





            <div><a href="createUserPage.php">Back</a></div>
        </div>
</div>

<?php
    include("Footer.php"); 
?>