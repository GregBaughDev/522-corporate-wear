<?php
    include("../templates/header.php");
    include("../templates/sidebar.php");

    if(!isset($_SESSION['authenticate'])) {
        header("Location: ../login.php");
    }

?>

<link rel="stylesheet" href="../../public/styles/userhome.css">

            <div class="main-body">
                <header>
                    <h1><a href="/522/index.php">CorporateWear</a></h1>
                </header>
                <div>
                    <h2>My Home</h2>
                </div>
                <section>
                    <h3>Welcome back <?php echo($_SESSION['user'][0]['contact']); ?></h3>
                    <p>Please select an option from the selection on the left!</p>
                </section>
            </div>
        </main>
    </body>
</html>
