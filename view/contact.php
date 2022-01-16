<?php
    include("./templates/header.php");
    include("./templates/sidebar.php");
?>

<link rel="stylesheet" href="../public/styles/contact.css">

            <div class="main-body">
                <header>
                    <h1><a href="/522/index.php">CorporateWear</a></h1>
                </header>
                <div>
                    <h2>Contact</h2>
                </div>
                <section class="contact">
                    <div>
                        <p>
                            You can contact us using the below form. 
                            Please provide as much information as possible and a member of our team will be in touch within 2 business days.
                        </p>
                    </div>
                    <!-- Add action -->
                    <form>
                        <div>
                            <label for="name">Name *</label>
                            <input type="text" name="name" id="name" required>
                        </div>
                        <div>
                            <label for="email">Email *</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div>
                            <label for="phone">Phone</label>
                            <input type="tel" name="phone" id="phone">
                        </div>
                        <div>
                            <label for="message">Message *</label>
                            <textarea id="message" name="message"></textarea>
                        </div>
                        <div>
                            <aside>* required</aside>
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </section>
            </div>
        </main>
    </body>
</html>