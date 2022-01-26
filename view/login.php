<?php
    include("./templates/header.php");
    include("./templates/sidebar.php");
?>

<link rel="stylesheet" href="../public/styles/login.css">

            <div class="main-body">
                <header>
                    <h1><a href="/522/index.php">CorporateWear</a></h1>
                </header>
                <div>
                    <h2>Customer Login</h2>
                </div>
                <section class="user-login">
                    <form action="../model/login.php" method="POST">
                        <label for="user">Email</label>
                            <input type="email" name="user" id="user" required>
                        <label for="pass">Password</label>
                            <input type="password" name="pass" id="pass" required>
                        <input type="submit" value="Login">
                    </form>
                </section>
            </div>
        </main>
    </body>
</html>