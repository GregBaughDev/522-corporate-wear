<?php
    include("../templates/header.php");
    include("../templates/sidebar.php");

    if(!isset($_SESSION['authenticate'])) {
        header("Location: ../login.php");
    }
?>

<link rel="stylesheet" href="../../public/styles/userprofile.css">

            <div class="main-body">
                <header>
                    <h1><a href="/522/index.php">CorporateWear</a></h1>
                </header>
                <div>
                    <h2>Profile</h2>
                </div>
                <section class="profile">
                    <div>
                        <h3>Company</h3>
                        <h4><?= $_SESSION['user'][0]['company'] ?></h4>
                    </div>
                    <div>
                        <h3>Address</h3>
                        <h4><?= $_SESSION['user'][0]['streetAddress']; ?></h4>
                    </div>
                    <div>
                        <h3>City</h3>
                        <h4><?= $_SESSION['user'][0]['city']; ?> <?= $_SESSION['user'][0]['postcode']; ?> <?= $_SESSION['user'][0]['state']; ?></h4>
                    </div>
                    <div>
                        <h3>Email</h3>
                        <h4><?= $_SESSION['user'][0]['email'] ?></h4>
                    </div>
                    <div>
                        <h3>Phone</h3>
                        <h4><?= $_SESSION['user'][0]['phone'] ?></h4>
                    </div>
                </section>
            </div>
        </main>
    </body>
</html>