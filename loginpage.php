<?php
//include("./includes/logincon.php");
session_start();
include("header.php");
?>


<body>
    <div class="container">
        <div class="login-box">
            <h3>Logga in</h3>

            <form action="includes/logincon.php" method="POST">
                <div>
                    <label>Username</label>
                    <input type="text" name="username" class="form-con" required>
                </div>
                <div>
                    <label>Lösenord</label>
                    <?php $errorMsg ?>
                    <input type="password" name="password" class="form-con" required>
                </div>
                <button type="submit" name="login-user" class="btn-login">Logga in</button>


            </form>

        </div>
        <div>
            <p>Inte medlem än? Registrera dig <a href="regpage.php"> här! </a> </p>
        </div>


    </div>

</body>

</html>

<?php include("footer.php"); ?>