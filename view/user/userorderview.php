<?php
    include("../templates/header.php");
    include("../templates/sidebar.php");
    include("../../model/userorderretrieve.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/522/model/conn/conn.php");

    if(!isset($_SESSION['authenticate'])) {
        header("Location: ../login.php");
    }

    if(!isset($_GET['order'])) {
        header("Location: ./userorders.php");
    }

    $order = retrieveOrder($conn, $_GET['order']);
    var_dump($order);
?>

<link rel="stylesheet" href="../../public/styles/userorders.css">

            <div class="main-body">
                <header>
                    <h1><a href="/522/index.php">CorporateWear</a></h1>
                </header>
                <div>
                    <h2>Order <?= $_GET['order'] ?></h2>
                </div>
                <section>


                </section>
            </div>
        </main>
    </body>
</html>