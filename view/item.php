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
                <section class="item-display">
                    <img src="../<?= $item[0]['img'] ?>" alt="image of <?= $item[0]['name'] ?>">
                    <?php if(isset($_SESSION['authenticate'])) { ?>
                        <form action="../controller/item.php?item=<?= $item[0]['id'] ?>&cat=<?= $item[0]['category']?>&name=<?= $item[0]['name'] ?>" method="POST">
                            <label for="quantity">Quantity</label>
                                <input type="number" name="quantity" id="quantity" min=1 required>
                            <label for="colour">Colour</label>
                                <input type="color" name="colour" id="colour" required>
                            <label for="size">Size</label>
                                <select name="size" id="size">
                                    <option value="xs">XS</option>
                                    <option value="s">S</option>
                                    <option value="m">M</option>
                                    <option value="l">L</option>
                                    <option value="xl">XL</option>
                                </select>
                            <label for="gender">Gender</label>
                                <select name="gender" id="gender">
                                    <option value="female">Female</option>
                                    <option value="male">Male</option>
                                    <option value="unisex">Unisex</option>
                                </select>
                            <input type="submit" value="Add to order">
                        </form>
                    <?php } else { ?>
                        <p>Login to your account to order this item</p>
                    <?php } ?>
                </section>
            </div>
        </main>
    </body>
</html>