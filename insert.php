    <?php
        // include database connection file
        require_once'db.php';
        // Object creation
        $insertdata=new DB_con();
        if(isset($_POST['insert']))
        {
        // Posted Values
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $emailid=$_POST['emailid'];
        $contactno=$_POST['contactno'];
        $address=$_POST['address'];
        //Function Calling
        $sql=$insertdata->insert($fname,$lname,$emailid,$contactno,$address);
        if($sql)
        {
        // Message for successfull insertion
        echo "<script>alert('Record inserted successfully');</script>";
        echo "<script>window.location.href='index.php'</script>";
        }
        else
        {
        // Message for unsuccessfull insertion
        echo "<script>alert('Something went wrong. Please try again');</script>";
        echo "<script>window.location.href='index.php'</script>";
        }
        }
    ?>           
    
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
        <div class="container">
            <div class="row justify-content-center pt-4">
                <div class="col-12">
                    <form name="insertrecord" method="post">
                        <div class="row">
                            <div class="col-md-4"><b>First Name</b>
                                <input type="text" name="firstname" class="form-control" required>
                            </div>
                            <div class="col-md-4"><b>Last Name</b>
                                <input type="text" name="lastname" class="form-control" required>
                            </div>
                            </div>
                        <div class="row">
                            <div class="col-md-4"><b>Email id</b>
                                <input type="email" name="emailid" class="form-control" required>
                            </div>
                            <div class="col-md-4"><b>Contactno</b>
                                <input type="text" name="contactno" class="form-control" maxlength="10" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8"><b>Address</b>
                                <textarea class="form-control" name="address" required></textarea>
                            </div>
                        </div>
                        <div class="row" style="margin-top:1%">
                            <div class="col-md-8">
                                <input type="submit" name="insert" value="Submit" class="btn btn-info">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>