<?php
    include("../templates/header.php");
    include("../templates/sidebar.php");

    include("../../model/userdepartments.php");

    if(!isset($_SESSION['authenticate'])) {
        header("Location: ../login.php");
    }
?>

<link rel="stylesheet" href="../../public/styles/userdepartments.css">

            <div class="main-body">
                <header>
                    <h1><a href="/522/index.php">CorporateWear</a></h1>
                </header>
                <div>
                    <h2>My Departments</h2>
                </div>
                <section>
                    
                </section>
            </div>
        </main>
    </body>
</html>