<?php
    include("./templates/header.php");
    include("./templates/sidebar.php");

    include($_SERVER['DOCUMENT_ROOT'] . "/522/model/catalogue.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/522/controller/catalogue.php");

    $filterTerm = isset($_GET['fil']) ? $_GET['fil'] : "All";
    $headerFilter = filter($filterTerm);
?>

<link rel="stylesheet" href="../public/styles/catalogue.css">

            <div class="main-body">
                <header>
                    <h1><a href="/522/index.php">CorporateWear</a></h1>
                </header>
                <div>
                    <h2>Catalogue</h2>
                </div>
                <section>
                    <?php if(isset($_GET['item']) && $_GET['item'] === 'add') { ?>
                        <h4>Item added successfully!</h4>
                    <?php } ?>
                    <h3><?= $headerFilter ?></h3>
                    <div class="cat-display">
                        <?php for($i = 0; $i < count($allCatalogue); $i++) {
                            if($filterTerm === 'clo' && $allCatalogue[$i]['category'] === 'clothing') {
                                echo(itemComponent($allCatalogue[$i]['name'], $allCatalogue[$i]['img'], $allCatalogue[$i]['id']));
                            } else if ($filterTerm === 'mer' && $allCatalogue[$i]['category'] === 'merchandise') {
                                echo(itemComponent($allCatalogue[$i]['name'], $allCatalogue[$i]['img'], $allCatalogue[$i]['id']));
                            } else if ($filterTerm === 'All') {
                                echo(itemComponent($allCatalogue[$i]['name'], $allCatalogue[$i]['img'], $allCatalogue[$i]['id']));
                            }
                        } ?>
                    </div>
                </section>
            </div>
        </main>
    </body>
</html>