<div class="sidebar">
    <aside>
        <nav>
            <a href="/522/view/catalogue.php">Catalogue</a>
            <a href="/522/view/about.php">About</a>
            <a href="/522/view/contact.php">Contact</a>
            <a href="/522/view/login.php">Customer Login</a>
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
                    <a href="/522/view/user/userhome.php">My Home</a>
                    <a href="/522/view/user/userprofile.php">Profile</a>
                    <a href="/522/view/user/userdepartments.php">My Departments</a>
                    <a href="/522/view/user/userorders.php">Orders</a>
                </nav>
            </aside>
    <?php } ?>
</div>