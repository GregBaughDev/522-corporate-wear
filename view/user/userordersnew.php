<?php
    include("../templates/header.php");
    include("../templates/sidebar.php");

    include("../../model/userdepartments.php");

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
                    <h2>New Order</h2>
                </div>
                <section class="order-display">
                    <form action="../../controller/userordersnew.php" method="POST">
                        <label for="dept">Department</label>
                            <select name="dept" id="dept">
                                <?php foreach($departments as $department ) { ?>
                                    <option value="<?= $department['name'] ?>"><?= $department['name'] ?></option>
                                <?php } ?>
                            </select>
                            <button type="submit">
                                <h4>Create Order</h4>
                            </button>
                    </form>
                </section>
            </div>
        </main>
    </body>
</html>