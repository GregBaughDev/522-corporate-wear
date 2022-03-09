<?php
    include("../templates/header.php");
    include("../templates/sidebar.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/522/model/catalogue.php");

    $sizes = array('XS', 'S', 'M', 'L', 'XL');
    $genders = array('Male', 'Female', 'Unisex');
    // Products array which is populated from DB
    // Products array push and pop products
    // Update the DB on save

    // Submit order
    // Store each item in an array and submit each item to DB
    // Confirmation on submit order

    $id = $_GET['id'];

    if(!isset($_SESSION['authenticate'])) {
        header("Location: ../login.php");
    }

    if(!isset($_GET['id'])) {
        header("Location: ./userdepartments.php");
    }
?>

<link rel="stylesheet" href="../../public/styles/userviewdepartment.css">

            <div class="main-body">
                <header>
                    <h1><a href="/522/index.php">CorporateWear</a></h1>
                </header>
                <div>
                    <h2>View {department name}</h2>
                </div>
                <section>
                    <table>
                        <thead>
                            <tr>
                                <td>Product</td>
                                <td>Qty</td>
                                <td>Colour</td>
                                <td>Size</td>
                                <td>Gender</td>
                                <td>Add to order</td>
                                <td>Save to {department name}</td>
                                <td>Remove from {department name}</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select name="product-select">
                                        <?php foreach($allCatalogue as $product) { ?>
                                            <option value="<?= $product['name'] ?>"><?= $product['name'] ?></option>    
                                        <?php } ?>
                                    </select>
                                </td>
                                <td>
                                    <input type="number" min="1">
                                </td>
                                <td>
                                    <input type="color">
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
                            <tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </main>
    </body>
</html>