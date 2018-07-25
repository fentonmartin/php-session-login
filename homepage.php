<?php
    session_start();

    if (!isset($_SESSION['luser'])) {
        echo "Please Login again";
        echo "<a href='http://localhost/suraudigital/login.php'>Click Here to Login</a>";
    }
    else {
        // Checking time when home page starts
        $now = time();

        if ($now > $_SESSION['expire']) {
            session_destroy();
            echo "Your session has expired! <a href='http://localhost/suraudigital/login.php'>Login here</a>";
        }
        else {
?>
            <html>
                Welcome
                <?php
                    echo $_SESSION['luser'];
                    echo "<a href='http://localhost/suraudigital/logout.php'>Log out</a>";
                ?>
            </html>
<?php
        }
    }
?>