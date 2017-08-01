<?php include "includes/header.php"; ?>

<section class="articles">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <?php

                if (isset($_GET['category'])){
                    $post_category = $_GET['category'];
                }

//                $query = "SELECT * FROM posts WHERE post_category_id = '{$post_category}' AND post_status = 'publish'";
                $stmt = mysqli_prepare($connection, "SELECT post_id, post_category_id, post_title, post_author, post_date, post_image, post_content, post_status FROM posts WHERE post_category_id = ? AND post_status = ? ");
                $published = 'publish';
//                $select_all_posts = mysqli_query($connection, $query);

                mysqli_stmt_bind_param($stmt, "is", $post_category, $published);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt, $post_id, $post_category_id, $post_title, $post_author, $post_date, $post_image, $post_content, $post_status);

//                while ($row = mysqli_fetch_assoc($select_all_posts)) {
                while ($row = mysqli_stmt_fetch($stmt)) :
//                    $post_id = $row['post_id'];
//                    $post_category_id = $row['post_category_id'];
//                    $post_title = $row['post_title'];
//                    $post_author = $row['post_author'];
//                    $post_date = $row['post_date'];
//                    $post_image = $row['post_image'];
//                    $post_content = substr($row['post_content'], 0, 500) . " [.....]";
//                    $post_status = $row['post_status'];

                    ?>
                    <article class="article-item">
                        <div class="enter-media">
                            <div class="article-heading">
                                <h2>
                                    <a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a>
                                </h2>
                                <div class="enter-date">
                                    <ul>
                                        <li><a href="javascript:void(0)"> <i class="fa
                                    fa-calendar">&nbsp;&nbsp;<?php echo $post_date?></i></a></li>
                                        <li><a href="authors_post.php?author=<?php echo
                                            $post_author?>&p_id=<?php echo $post_id; ?>"><i
                                                    class="fa fa-user">&nbsp;</i> <?php echo $post_author; ?></a>
                                        </li>
                                        <?php
//                                        $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id}";
                                        $query = "SELECT cat_id, cat_title FROM categories WHERE cat_id = ?";
                                        $stmt = mysqli_prepare($connection, $query);
                                        mysqli_stmt_bind_param($stmt, "i", $post_category_id);
                                        mysqli_stmt_execute($stmt);
                                        mysqli_stmt_bind_result($stmt, $cat_id, $cat_title);
//                                        $select_cat_query = mysqli_query($connection, $query);
//                                        confirmQuery($select_cat_query);
//                                        while ($row = mysqli_fetch_assoc($select_cat_query)){
                                        while (mysqli_stmt_fetch($stmt)) :
//                                            $cat_id = $row['cat_id'];
//                                            $cat_title = $row['cat_title'];

                                            echo "<li><a href='category.php?category=$cat_id&title=$cat_title'><i class='fa fa-folder-open-o'>&nbsp;</i> {$cat_title}</a> </li>";
//                                        }
                                        endwhile;
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="article-body">
                                <img src="images/<?php echo $post_image; ?>" alt="Image">
                                <p>
                                    <?php echo $post_content; ?>
                                </p>
                            </div>
                            <div class="article-footer">
                                <div class="row">
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <a href="post.php?p_id=<?php echo $post_id; ?>"
                                           class="button blog-button">Read More</a>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="share-social-article">
                                            <a href="javascript:;"><i class="fa
                                        fa-facebook"></i></a>
                                            <a href="javascript:;"><i class="fa
                                        fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <?php
                endwhile;
                mysqli_stmt_close($stmt);
                ?>
            </div>
            <?php include "includes/article_sidebar.php"; ?>
        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>
