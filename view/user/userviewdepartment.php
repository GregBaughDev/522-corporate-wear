<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/522/controller/class/item.php");
    include("../templates/header.php");
    include("../templates/sidebar.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/522/model/catalogue.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/522/model/userviewdepartment.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/522/model/conn/conn.php");

    $department = retrieveDepartment($_SESSION['user'][0]['id'], $_GET['id'], $conn);
    $departmentName = ucfirst($department[0][0]['name']);
    
    if (!isset($_SESSION['order'][$_GET['id']]['products'])) {
        $_SESSION['order'][$_GET['id']]['products'] = array();
    }

    $sizes = array('XS', 'S', 'M', 'L', 'XL');
    $genders = array('Male', 'Female', 'Unisex');

    $id = $_GET['id'];

    if(!isset($_SESSION['authenticate'])) {
        header("Location: ../login.php");
    }

    if(!isset($_GET['id'])) {
        header("Location: ./userdepartments.php");
    }

    if($_GET['succ'] === 'true'){
        unset($_SESSION['order'][$_GET['id']]['products']);
    };
?>

<link rel="stylesheet" href="../../public/styles/userviewdepartment.css">

            <div class="main-body">
                <header>
                    <h1><a href="/522/index.php">CorporateWear</a></h1>
                </header>
                <div>
                    <h2><?= $departmentName ?></h2>
                </div>
                <section>
                    <?php if (isset($_GET['del']) && $_GET['del'] === '1') { ?> 
                        <h3>Item successfully removed from <?= $departmentName ?></h3>    
                    <?php } ?>
                    <table>
                        <thead>
                            <tr>
                                <td>Product</td>
                                <td>Qty</td>
                                <td>Colour</td>
                                <td>Size</td>
                                <td>Gender</td>
                                <td>Add to order</td>
                                <td>Delete</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($department[1] as $deptProduct) { ?>
                                <tr>
                                    <td>
                                        <form action="../../controller/userviewdepartmentsaddtoorder.php?dept=<?= $_GET['id'] ?>" method="POST">
                                            <input type="hidden" name="product-name" value="<?= $deptProduct['name'] ?>"/>
                                            <input type="hidden" name="product-id" value="<?= $deptProduct['id'] ?>"/>
                                            <p><?= $deptProduct['name'] ?></p>
                                    </td>
                                    <td>
                                            <input name="qty" type="number" min="1" required>
                                    </td>
                                    <td>
                                            <input name="colour" type="color">
                                    </td>
                                    <td>
                                            <select name="product-size">
                                                <?php foreach($sizes as $size) { ?>
                                                    <option value="<?= $size ?>"><?= $size ?></option>
                                                <?php } ?>
                                            </select>
                                    </td>
                                    <td>
                                            <select name="product-gender">
                                                <?php foreach($genders as $gender) { ?>
                                                    <option value="<?= $gender ?>"><?= $gender ?></option>
                                                <?php } ?>
                                            </select>
                                    </td>
                                    <td>
                                            <button type="submit">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="../../model/userviewdepartmentsdelete.php?dept=<?= $_GET['id'] ?>" method="POST">
                                            <input type="hidden" name="product" value="<?= $deptProduct['id'] ?>">
                                            <button type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#064663">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </form>
                                    </td>
                                <tr>
                            <?php } ?>
                            <tr id="add-prod" class="no-display">
                                <td>
                                    <form action="../../model/userviewdepartmentaddprod.php?deptid=<?= $_GET['id'] ?>" method="POST">
                                        <select name="product-select">
                                            <?php foreach($allCatalogue as $product) { ?>
                                                <option value="<?= $product['id'] ?>"><?= $product['name'] ?></option>    
                                            <?php } ?>
                                        </select>
                                </td>
                                <td>
                                        <button type="submit">Save to <?= $departmentName ?></button>
                                    </form>
                                </td>
                            <tr>
                        </tbody>
                    </table>
                    <button id="add-prod-btn" class="add-dept" type="button">
                        <h4>Add item to <?= $departmentName ?></h4>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#064663">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                </section>
                <?php if(isset($_SESSION['order'][$_GET['id']]['products']) && count($_SESSION['order'][$_GET['id']]['products']) > 0) { ?>
                    <section>
                        <h3>Current Order</h3>
                        <table>
                            <thead>
                                <tr>
                                    <td>Product</td>
                                    <td>Qty</td>
                                    <td>Colour</td>
                                    <td>Size</td>
                                    <td>Gender</td>
                                    <td>Remove from order</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($_SESSION['order'][$_GET['id']]['products'] as $order) { ?>
                                    <tr>
                                        <td>
                                            <?= $order->getItem("name") ?>
                                        </td>
                                        <td>
                                            <?= $order->getItem("quantity") ?>
                                        </td>
                                        <td>
                                            <input type="color" value="<?= $order->getItem("colour") ?>" disabled>
                                        </td>
                                        <td>
                                            <?= $order->getItem("size") ?>
                                        </td>
                                        <td>
                                            <?= $order->getItem("gender") ?>
                                        </td>
                                        <td>
                                            <?php $itemPos = array_search($order, $_SESSION['order'][$_GET['id']]['products']); ?>
                                            <form action="../../controller/userviewdepartmentsremoveitem.php?dept=<?= $_GET['id'] ?>" method="POST">
                                                <input type="hidden" name="item-remove" value="<?= $itemPos ?>">
                                                <button type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#064663">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <form action="../../controller/userviewdepartmentsubmitorder.php?dept=<?= $_GET['id'] ?>" method="POST">
                            <button id="add-prod-btn" class="add-dept" type="submit">
                                <h4>Submit order</h4>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#064663">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>
                        </form>
                    </section>
                <?php } ?>
            </div>
        </main>
        <script src="../../controller/js/userviewdepartments.js"></script>
    </body>
</html>