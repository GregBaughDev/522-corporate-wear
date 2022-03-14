<div class="sidebar">
    <aside>
        <nav>
            <a href="/522/view/catalogue.php">Catalogue</a>
            <a href="/522/view/about.php">About</a>
            <a href="/522/view/contact.php">Contact</a>
            <?php if(!isset($_SESSION['authenticate'])) { ?>
                <a href="/522/view/login.php">Login</a>
            <?php } else { ?>
                <a href="/522/controller/logout.php">Logout</a>
                <a href="/522/view/user/userhome.php">My Home</a>
            <?php } ?>
        </nav>
    </aside>

    <?php
        if($currPage === 'catalogue') { ?>
            <aside>
                <nav>
                    <a href="/522/view/catalogue.php">All</a>
                    <a href="/522/view/catalogue.php?fil=clo">Clothing</a>
                    <a href="/522/view/catalogue.php?fil=mer">Merchandise</a>
                </nav>
            </aside>
    <?php } else if ($currPage === 'user') { ?>
            <aside>
                <nav>
                    <a href="/522/view/user/userprofile.php">Profile</a>
                    <a href="/522/view/user/userdepartments.php">My Departments</a>
                    <!-- <a href="/522/view/user/userorders.php">Orders</a> -->
                </nav>
            </aside>
    <?php } ?>
</div>