<?php
    include("./templates/header.php");
    include("./templates/sidebar.php");

    include("../controller/catalogue.php");

    $filterTerm = isset($_GET['fil']) ? $_GET['fil'] : "All";
    $headerFilter = filter($filterTerm);
?>

<link rel="stylesheet" href="../public/styles/catalogue.css">

            <div class="main-body">
                <header>
                    <h1><a href="/522/index.php">CorporateWear</a></h1>
                </header>
                <div>
                    <h2>Catalogue</h2>
                </div>
                <section>
                    <h3><?= $headerFilter ?></h3>
                </section>
            </div>
        </main>
    </body>
</html>