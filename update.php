<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OOP CRUD</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <?php
            // Get the userid
            require_once'db.php';
            $userid=intval($_GET['id']);
            $onerecord=new DB_con();
            $sql=$onerecord->fetchonerecord($userid);
            $cnt=1;
            while($row=mysqli_fetch_array($sql))
            {
        ?>
        <div class="container">
            <div class="row justify-content-center pt-4">
                <div class="col-12">
                    <form name="insertrecord" method="post">
                        <div class="row">
                            <div class="col-md-4"><b>First Name</b>
                                <input type="text" name="firstname" value="<?php echo htmlentities($row['FirstName']);?>" class="form-control" required>
                            </div>
                            <div class="col-md-4"><b>Last Name</b>
                                <input type="text" name="lastname" value="<?php echo htmlentities($row['LastName']);?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><b>Email id</b>
                                <input type="email" name="emailid" value="<?php echo htmlentities($row['EmailId']);?>" class="form-control" required>
                            </div>
                            <div class="col-md-4"><b>Contactno</b>
                                <input type="text" name="contactno" value="<?php echo htmlentities($row['ContactNumber']);?>" class="form-control" maxlength="10" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8"><b>Address</b>
                                <textarea class="form-control" name="address" required><?php echo htmlentities($row['Address']);?></textarea>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="row" style="margin-top:1%">
                            <div class="col-md-8">
                                <input type="submit" name="update" value="Update" class="btn btn-success">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
// include database connection file
include_once("db.php");
//Object
$updatedata=new DB_con();
if(isset($_POST['update']))
{
// Get the userid
$userid=intval($_GET['id']);
// Posted Values
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$emailid=$_POST['emailid'];
$contactno=$_POST['contactno'];
$address=$_POST['address'];
//Function Calling
$sql=$updatedata->update($fname,$lname,$emailid,$contactno,$address,$userid);
// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='index.php'</script>";
}
?>