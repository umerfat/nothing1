<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="dashboard.php" class="site_title"><img src="../IMAGES/3.jpg" height="40px"></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
            <?php
            $query = "SELECT * FROM users WHERE username = '{$_SESSION['admin_username']}'";
            $select_query = mysqli_query($connection, $query);
            confirmQuery($select_query);
            while ($row = mysqli_fetch_assoc($select_query)) {

                $user_image = $row['user_image'];

                if (empty($user_image)){
                    echo "<img src='../USER_IMAGES/efault_profile_photo.png' alt='' class='img-circle profile_img'>";
                }
                else{
                    echo "<img src='../USER_IMAGES/$user_image' alt=''  class='img-circle profile_img'>";
                }
            }
            ?>
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['admin_username'];?></h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br/>