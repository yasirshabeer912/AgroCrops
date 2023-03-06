<div class="nav-header">
    <a href="../Home.php" class="brand-logo">
        <div class="logo-abbr">
            <img src="../PICS/logo.svg" alt="" style="height:30%  ; width:200px" alt="">

        </div>

        <img class="logo-compact" src="../PICS/logo.svg" alt="" style="height:30%  ; width:200px" alt="">
        <div class="brand-title">

        </div>



    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        Admin Dashboard
                    </div>
                </div>
                <ul class="navbar-nav header-right">

                    <?php
                    $id = $_SESSION['user_id'];
                    $sql = $con->query("select * from users where id='$id'")->fetch_assoc();
                    ?>


                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0)" role="button" data-bs-toggle="dropdown">
                            <?php

                            if ($sql['image'] == !"") {
                            ?>
                                <img src="../PICS/<?php echo $sql['image'] ?>" width="20" alt="">
                            <?php
                            } else {
                                echo "no image";
                            }
                            ?>

                            <div class="header-info">
                                <span class="text-black"><?php echo $sql['fname'] ?></span>
                                <p class="fs-12 mb-0">Seller</p>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="profile.php" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span class="ms-2">Profile </span>
                            </a>

                            <a href="logout.php" class="dropdown-item ai-icon">
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                <span class="ms-2">Logout </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>