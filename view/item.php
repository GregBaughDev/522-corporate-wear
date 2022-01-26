<?php
    include("./templates/header.php");
    include("./templates/sidebar.php");

    include($_SERVER['DOCUMENT_ROOT'] . "/522/model/item.php");
    $item = getItem($_GET['id'], $conn);

?>

<link rel="stylesheet" href="../public/styles/item.css">

            <div class="main-body">
                <header>
                    <h1><a href="/522/index.php">CorporateWear</a></h1>
                </header>
                <div>
                    <h2><?= $item[0]['name'] ?></h2>
                </div>
                <section>
                    <img src="../<?= $item[0]['img'] ?>" alt="image of <?= $item[0]['name'] ?>">
                </section>
                <!-- Add quantity, size, colour and add to cart if logged in functions -->
            </div>
        </main>
    </body>
</html>