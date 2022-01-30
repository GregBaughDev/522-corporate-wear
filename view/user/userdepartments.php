<?php
    include("../templates/header.php");
    include("../templates/sidebar.php");

    include("../../model/userdepartments.php");
    include("../../controller/userdepartments.php");
 
    if(!isset($_SESSION['authenticate'])) {
        header("Location: ../login.php");
    };
    
?>

<link rel="stylesheet" href="../../public/styles/userdepartments.css">

            <div class="main-body">
                <header>
                    <h1><a href="/522/index.php">CorporateWear</a></h1>
                </header>
                <div>
                    <h2>My Departments</h2>
                </div>
                <section class="depts">
                    <?php if(isset($_GET['del']) && $_GET['del'] === 'succ') {
                        echo(deleteSuccess());
                    } else if (isset($_GET['del']) && $_GET['del'] === 'fail') {
                        echo(deleteFailure());
                    } ?>
                    <table>
                        <thead>
                            <tr>
                                <td><h3>Department</h3></td>
                                <td><h3>Delete</h3></td>
                            </tr>
                        </thead>
                        <tbody id="dept-tbody">
                            <?php foreach($departments as $department) { ?>
                                <tr id="edit-dept">
                                    <td><?= ucfirst($department['name']) ?></td>
                                    <td>
                                        <form action="../../model/userdepartmentsdelete.php" method="POST">
                                            <input type="hidden" name="dept" value="<?= $department['id'] ?>">
                                            <button type="submit" value="<?= $department['id'] ?>">
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
                    <button class="add-dept" type="button" id="add" onClick="deptFunc()">
                        <h4>Add department</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#064663">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                </section>
            </div>
        </main>
    </body>
</html>