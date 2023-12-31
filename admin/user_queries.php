<?php 
require('include/essentials.php');
require('include/db_config.php');
adminLogin();
//mark as read
if(isset($_GET['seen'])){
    $frm_data = filteration($_GET);

    if($frm_data['seen']=='all'){

    }
    else{
        $q = "UPDATE `user_queries` SET `seen`=? WHERE 'sr_no'=?";
        $values = [1,$frm_data['seen']];
        if(update($q,$values,'ii')){
            alert('success','mark as read!');
        }
        else{
            alert('error','Operation failed!');
        }
    }

    
}


//Delete
if(isset($_GET['del'])){
    $frm_data = filteration($_GET);

    if($frm_data['del']=='all'){

    }
    else{
        $q = "DELETE FROM `user_queries` WHERE 'sr_no'=?";
        $values = [$frm_data['del']];
        if(delete($q,$values,'i')){
            alert('success','Data Deleted!');
        }
        else{
            alert('error','Operation failed!');
        }
    }

    
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panal -User Queries</title>
    <?php require('include/links.php'); ?>
</head>

<body classs="bg-light">
    <?php require('include/header.php'); ?>


    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">USER QUERIES</h3>
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="table-responsive-md" style="height: 450px; overflow-y:scroll;">
                            <table class="table table-hover border">
                                <thead class="sticky-top">
                                    <tr class="bg-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col" widht="20%">Subject</th>
                                        <th scope="col" widht="30%">Message</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $q = "SELECT * FROM `user_queries` ORDER BY `sr_no` DESC";
                                    $data = mysqli_query($con,$q);
                                    $i=1;

                                    while($row = mysqli_fetch_assoc($data)){

                                        $seen = '';
                                        if($row['seen']!=1){
                                            $seen = "<a href='?seen=$row[sr_no]' class='btn btn-sm rounded-pill btn-primary'>Mark as read</a>";
                                        }
                                        $seen.="<a href='?del=$row[sr_no]' class='btn btn-sm rounded-pill btn-danger mt-2'>Delete</a>";
                                        echo<<<query
                                            <tr>
                                                <td>$i</td>
                                                <td>$row[name]</td>
                                                <td>$row[email]</td>
                                                <td>$row[subject]</td>
                                                <td>$row[message]</td>
                                                <td>$row[date]</td>
                                                <td>$seen</td>
                                                
                                                
                                                
                                            </tr>

                                        query;
                                        $i++;
                                    }
                                     ?>

                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>






    <?php require('include/scripts.php'); ?>
</body>

</html>