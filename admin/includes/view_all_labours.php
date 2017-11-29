<table id="datatable-responsive" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>F Name</th>
        <th>L Name</th>
        <th>Category</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Registration Date</th>
        <th>Take Action</th>
    </tr>
    </thead>
    <tbody>

    <?php
   // SELECT tbl_labour.labour_id,tbl_labour_info.first_name, tbl_labour_address.labour_phone FROM tbl_labour LEFT JOIN tbl_labour_info ON ( tbl_labour_info.labour_id = tbl_labour.labour_id) LEFT JOIN tbl_labour_address ON (tbl_labour_address.labour_id = tbl_labour.labour_id)

    
   // Used with first labour table structure
    // $query  = "SELECT tbl_labour.labour_id, labour.labour_category_id,labour.labour_first_name, ";
    // $query .= "labour.labour_last_name, labour.labour_govt_id, labour.labour_phone, ";
    // $query .= "labour.labour_address, labour.labour_email, labour.labour_creation_date,labour.labour_image, ";
    // $query .= "categories.cat_id, categories.cat_name ";
    // $query .= "FROM labour LEFT JOIN categories ON ";
    // $query .= "labour.labour_category_id = categories.cat_id ORDER BY labour.labour_id DESC";

    $query  = "SELECT tbl_labour.labour_id, tbl_labour.cat_id,tbl_labour.created_date, tbl_labour_info.first_name, ";
    $query .= "tbl_labour_info.last_name, tbl_labour_info.labour_image, tbl_labour_address.labour_phone, ";
    $query .= "tbl_labour_address.labour_email,tbl_category.cat_name ";
    $query .= "FROM tbl_labour LEFT JOIN tbl_labour_info ON (tbl_labour_info.labour_id = tbl_labour.labour_id) ";
    $query .= "LEFT JOIN tbl_labour_address ON (tbl_labour_address.labour_id = tbl_labour.labour_id)";
    $query .= "LEFT JOIN tbl_category ON (tbl_category.cat_id = tbl_labour.cat_id)";

 //var_dump($query);
    $select_labours = mysqli_query($connection, $query);
    //var_dump($select_labours);
    while ($row = mysqli_fetch_assoc($select_labours)){

        $labour_id           = $row['labour_id'];
        $labour_category_id  = $row['cat_id'];
        $labour_date         = $row['created_date'];
        $labour_first_name   = $row['first_name'];
        $labour_last_name    = $row['last_name'];
        $labour_phone        = $row['labour_phone'];
        $labour_email        = $row['labour_email'];
        $labour_image        = $row['labour_image'];
        $category_name       = $row['cat_name'];
        echo "<tr>";
        echo "<td>{$labour_id}</td>";
         echo "<td><img src='../IMAGES/LABOUR_IMAGES/{$labour_image}' height='40px'></td>";
        echo "<td>{$labour_first_name}</td>";
        echo "<td>{$labour_last_name}</td>";
        //echo "<td class='col-sm-1'>{$post_title}</td>";
        echo "<td>{$category_name}</td>";
        //echo "<td>{$labour_govt_id}</td>";
        echo "<td>{$labour_phone}</td>";
        //echo "<td>{$labour_address}</td>";
        echo "<td>{$labour_email}</td>";
        // $query = "SELECT * FROM comments WHERE comment_post_id = {$post_id}";
        // $select_query = mysqli_query($connection, $query);
        // confirmQuery($select_query);
        // $row = mysqli_fetch_array($select_query);
        // $comment_id = $row['comment_id'];
        // $comment_count = mysqli_num_rows($select_query);
        echo "<td>{$labour_date}</td>";
        // echo "<td><a href='post_comment.php?id={$post_id}' style='color: #169F85' </i> {$comment_count}</a></td>";
        echo "<td class='col-sm-2'>
            <ul class='take-action'>
        <!--     <li><a href='../labours.php?p_id={$labour_id}' class='btn btn-success'><i class='fa fa-folder'></i>
        </a></li> -->
            <li><a href='labours.php?labour=edit_labour&p_id={$labour_id}' class='btn btn-info'><i class='fa fa-pencil'></i> 
        </a></li>
            <li><a onclick=\"javascript:; return confirm('Are you sure you want to delete')\" href='labours.php?delete={$labour_id}' class='btn btn-danger'><i
         class='fa fa-trash-o'></i> 
        </a></li>
            </ul>
      </td>";
       echo "</tr>";
    }
    ?>
    </tbody>
</table>
<?php

//deleting post
if (isset($_GET['delete'])){

    $delete_labour_id = $_GET['delete'];
    $query = "DELETE FROM labour WHERE labour_id = {$delete_labour_id}";
    $delete_query = mysqli_query($connection, $query);

    redirect("labours.php");
}
