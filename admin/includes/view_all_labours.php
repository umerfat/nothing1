<table id="datatable-responsive" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>ID</th>
        <th>Author</th>
        <th>Title</th>
        <th>Category</th>
        <th>Status</th>
        <th>Image</th>
        <th>Tags</th>
        <th>Comments</th>
        <th>Date</th>
        <th>Take Action</th>
    </tr>
    </thead>
    <tbody>

    <?php

    $query  = "SELECT posts.post_id, posts.post_author, posts.post_title, ";
    $query .= "posts.post_category_id, posts.post_status, posts.post_image, ";
    $query .= "posts.post_tags, posts.post_comment_count, posts.post_date, ";
    $query .= "categories.cat_id, categories.cat_title ";
    $query .= "FROM posts LEFT JOIN categories ON ";
    $query .= "posts.post_category_id = categories.cat_id ORDER BY posts.post_id DESC";

    $select_posts = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_posts)){

        $post_id = $row['post_id'];
        $post_author = $row['post_author'];
        $post_title = $row['post_title'];
        //$post_content = $row['post_content'];
        $post_category_id = $row['post_category_id'];
        $post_status = $row['post_status'];
        $post_image = $row['post_image'];
        $post_tags = $row['post_tags'];
        $post_comment_count = $row['post_comment_count'];
        $post_date = $row['post_date'];

        $category_id = $row['cat_id'];
        $category_title = $row['cat_title'];

        echo "<tr>";
        echo "<td>{$post_id}</td>";
        echo "<td>{$post_author}</td>";
        echo "<td class='col-sm-1'>{$post_title}</td>";
        echo "<td>{$category_title}</td>";
        echo "<td>{$post_status}</td>";
        echo "<td><img src='../images/{$post_image}' height='40px'></td>";
        echo "<td class='col-sm-1'>{$post_tags}</td>";

        $query = "SELECT * FROM comments WHERE comment_post_id = {$post_id}";
        $select_query = mysqli_query($connection, $query);
        confirmQuery($select_query);
        $row = mysqli_fetch_array($select_query);
        $comment_id = $row['comment_id'];
        $comment_count = mysqli_num_rows($select_query);
        echo "<td><a href='post_comment.php?id={$post_id}' style='color: #169F85' </i> {$comment_count}</a></td>";

        echo "<td>{$post_date}</td>";
        echo "<td class='col-sm-2'>
            <ul class='take-action'>
            <li><a href='../post.php?p_id={$post_id}' class='btn btn-success'><i class='fa fa-folder'></i>
        </a></li>
            <li><a href='posts.php?labour=edit_post&p_id={$post_id}' class='btn btn-info'><i class='fa fa-pencil'></i> 
        </a></li>
            <li><a onclick=\"javascript:; return confirm('Are you sure you want to delete')\" href='posts.php?delete={$post_id}' class='btn btn-danger'><i
         class='fa fa-trash-o'></i> 
        </a></li>
            </ul>
      </td>";
        echo "</tr>";
    }

    ?>

    </tbody>
</table>
