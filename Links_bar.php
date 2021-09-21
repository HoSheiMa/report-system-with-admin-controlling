 <ul id="main-menu" class="main-menu">
                <!-- add class "multiple-expanded" to allow multiple submenus to open -->
                <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
                <li class="opened active">
                    <a href="index.php">
                        <i class="entypo-gauge"></i>
                        <span class="title">Dashboard</span>
                    </a>

                </li>

                <li>
                    <a href="create_project.php">
                        <i class="entypo-newspaper"></i>
                        <span class="title"><b>Create Project</b></span>
                    </a>
                </li>

                <li>
                    <a href="Projects_view.php">
                        <i class="entypo-menu"></i>
                        <span class="title"><b>Manage Projects</b></span>
                    </a>
                </li>
                     <li>
                        <a href="content-tools.php">
                            <i class="entypo-book-open"></i>
                            <span class="title">Content Tools</span>
                        </a>
                    </li>
                    <li>
                        <a href="tutorials.php">
                            <i class="entypo-video"></i>
                            <span class="title"><b>Tutorials</b></span>
                        </a>
                    </li>

                    <li>
                        <a href="bonuses.php">
                            <i class="entypo-download"></i>
                            <span class="title">Free Bonuses</span>
                        </a>
                    </li>

                    <li>
                        <a href="seotools.php">
                            <i class="entypo-rocket"></i>
                            <span class="title">Marketing Tools</span>
                        </a>
                    </li>

                <li>
                        <a href="change_password.php">
                            <i class="entypo-user"></i>
                            <span class="title">Edit Profile</span>
                        </a>
                    </li>
                    <li>

                        <a href="?simple_auth_action=logout">
                           <i class="entypo-logout right"></i> Log Out
                        </a>

                    </li>



                <?php
                $role = $_SESSION['simple_auth']['role'];
                if ($role == "admin") {
                    ?>
                    <li>
                        <a href="Create_user.php">
                            <i class="entypo-menu"></i>
                            <span class="title"><b>Create User</b></span>
                        </a>
                    </li>
                      <li>
                        <a href="categories.php">
                            <i class="entypo-menu"></i>
                            <span class="title"><b>Categories</b></span>
                        </a>
                    </li>
                    <li>
                        <a href="members_permissions.php">
                            <i class="entypo-menu"></i>
                            <span class="title"><b>Members Permissions</b></span>
                        </a>
                    </li>
                      <li>
                        <a href="statues.php">
                            <i class="entypo-menu"></i>
                            <span class="title"><b>statues</b></span>
                        </a>
                    </li>
                    <li>
                        <a href="users.php">
                            <i class="entypo-menu"></i>
                            <span class="title"><b>users</b></span>
                        </a>
                    </li>
                       <li>
                        <a href="Generate_users.php">
                            <i class="entypo-menu"></i>
                            <span class="title"><b>Generate Users</b></span>
                        </a>
                    </li>
                     <li>
                        <a href="token.php">
                            <i class="entypo-menu"></i>
                            <span class="title"><b>Api Token</b></span>
                        </a>
                    </li>
                    <?php
                }
                ?>

<br><br<br><br><br<br><br<br><br><br<br><br<br><br><br<br><br<br><br><br<br><br<br><br><br<br>
<li>

                        <a href="">
                           Powered by: Copywriterr v1.0.5
                        </a>

                    </li>
            </ul>
