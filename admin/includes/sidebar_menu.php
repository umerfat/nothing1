
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <ul class="nav side-menu">
            <li>
                <a href="dashboard.php"><i class="fa fa-home"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="javascript:;"><i class="fa fa-edit"></i> Labours
                    <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                    <li><a href="labours.php">View All Labours</a></li>
                    <li><a href="labours.php?labour=add_labour">Add Labour</a></li>
                </ul>
            </li>
            <li>
                <a href="categories.php"><i class="fa fa-folder-o"></i>
                    Categories
                </a>
            </li>
            <li>
                <a href="comments.php"><i class="fa fa-comments-o"></i>
                    Reviews
                </a>
            </li>

            <?php
            $query = "SELECT * FROM users";
            $select_query = mysqli_query($connection, $query);
            confirmQuery($select_query);
            while ($row = mysqli_fetch_assoc($select_query)) {

                $user_id = $row['user_id'];
                $username = $row['username'];
                $user_role = $row['user_role'];


                if ($username == $_SESSION['admin_username'] && $_SESSION['admin_user_role'] == 'Admin'){

                    echo "<li>
                            <a href='javascript:;'><i class='fa fa-users'></i> Users
                                <span class='fa fa-chevron-down'></span>
                            </a>
                            <ul class='nav child_menu'>
                                <li><a href='users.php'>View All Users</a></li>
                                <li><a href='users.php?source=add_user'>Add User</a></li>
                            </ul>
                           </li>";
                }
            }
            ?>

            <li>
                <a href="subscribers.php"><i class="fa fa-envelope"></i>
                    Subscribers
                </a>
            </li>
            <li>
                <a href="customers.php"><i class="fa fa-user-secret"></i>
                    Customers
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- /sidebar menu -->
</div>
</div>