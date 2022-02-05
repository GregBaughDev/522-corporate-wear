<?php
    include("../../controller/class/item.php");
    include("../templates/header.php");
    include("../templates/sidebar.php");

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
                    <?php if(isset($_GET['succ']) && $_GET['succ'] === 'true') {
                        unset($_SESSION['orders']);
                        $_SESSION['orders'] = array(); ?>
                        <div>
                            <h3>Order successfully submitted!</h3>
                        </div>
                    <?php } else if (isset($_GET['succ']) && $_GET['succ'] === 'false') { ?>
                        <div>
                            <h3>Error submitting order</h3>
                        </div>
                    <?php } ?>
                    <?php if(count($_SESSION['orders']) === 0) { ?>
                        <a class="add-order-btn" href="./userordersnew.php">
                            <h4>New order</h4>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#064663">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                    <?php } else { ?>
                        <h3>Order for: <?= $_SESSION['orders'][0]['dept'] ?></h3>
                        <?php foreach($_SESSION['orders'][0]['items'] as $item) { ?>
                            <div class="order-items">
                                <h5>Item name: <?= $item->getItem('name') ?></h5>
                                <h6>Qty: <?= $item->getItem('quantity') ?></h6>
                            </div>
                            <?php } ?>
                    <?php } ?>
                    <?php if(isset($_SESSION['orders'][0]['items']) && count($_SESSION['orders'][0]['items']) > 0) { ?>
                        <form action="../../model/userordersubmit.php" method="POST">
                                <input class="order-submit" type="submit" value="Submit order">
                        </form>
                    <?php } ?>
                </section>
            </div>
        </main>
    </body>
</html>