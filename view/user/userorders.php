<?php
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
                    <?php if(isset($_SESSION['orders'])) {
                        // Below doesn't work
                        foreach($_SESSION['orders'] as $order) { ?>
                            <h5><?= $order->orderDept(); ?></h5>
                        <?php } 
                    } ?>
                    <a class="add-order-btn" href="./userordersnew.php">
                        <h4>New order</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#064663">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </section>
            </div>
        </main>
    </body>
</html>