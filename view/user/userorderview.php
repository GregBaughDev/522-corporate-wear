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
                    <table>
                        <thead>
                            <tr>
                                <td>Product</td>
                                <td>Qty</td>
                                <td>Colour</td>
                                <td>Gender</td>
                                <td>Type</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($order as $row) { ?>
                                <tr>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['qty'] ?></td>
                                    <td><input type="color" value="<?= $row['colour'] ?>" disabled></td>
                                    <td><?= $row['gender'] ?></td>
                                    <td><?= $row['category'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </main>
    </body>
</html>