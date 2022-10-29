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
        <!--FontAwsome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="table-responsive mt-4">
                    <table id="mytable" class="table table-bordred table-responsive table-striped">
                        <thead>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Posting Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Add</th>
                        </thead>
                        <tbody>
                            <?php
                            require_once'db.php';
                            $fetchdata=new DB_con();
                            $sql=$fetchdata->fetchdata();
                            $cnt=1;
                            while($row=mysqli_fetch_array($sql))
                            {
                            ?>
                            <tr>
                                <td><?php echo htmlentities($cnt);?></td>
                                <td><?php echo htmlentities($row['FirstName']);?></td>
                                <td><?php echo htmlentities($row['LastName']);?></td>
                                <td><?php echo htmlentities($row['EmailId']);?></td>
                                <td><?php echo htmlentities($row['ContactNumber']);?></td>
                                <td><?php echo htmlentities($row['Address']);?></td>
                                <td><?php echo htmlentities($row['PostingDate']);?></td>
                                <td><a href="update.php?id=<?php echo htmlentities($row['id']);?>"><button class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></button></a></td>
                                <td><a href="delete.php?del=<?php echo htmlentities($row['id']);?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash"></i></button></a></td>
                                <td><a href="insert.php"><button class="btn btn-success btn-xs"><i class="fa fa-plus"></i></button></a></td>
                            </tr>
                            <?php
                            // for serial number increment
                            $cnt++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>