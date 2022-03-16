<?php
    include("../templates/header.php");
    include("../templates/sidebar.php");
    include("../../model/userorders.php");

    if(!isset($_SESSION['authenticate'])) {
        header("Location: ../login.php");
    }

?>

<link rel="stylesheet" href="../../public/styles/userorders.css">

            <div class="main-body">
                <header>
                    <h1><a href="/522/index.php">CorporateWear</a></h1>
                </header>
                <div>
                    <h2>Orders</h2>
                </div>
                <section class="order-display">
                    <table>
                        <thead>
                            <td>Order</td>
                            <td>Department</td>
                            <td>Payment</td>
                        </thead>
                        <tbody>
                            <?php if(isset($userOrders) && count($userOrders) > 0) {
                                foreach($userOrders as $order) { ?>
                                    <tr>
                                        <td><?= $order[0] ?></td>
                                        <td><?= $order['name'] ?></td>
                                        <td><?= $order['payment'] ?></td>
                                        <td><a href="./userorderview.php?order=<?= $order[0] ?>">View order</a></td>
                                    </tr>
                            <?php }
                            } ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </main>
    </body>
</html>