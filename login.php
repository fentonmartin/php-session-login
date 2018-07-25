<?php
    session_start();
?>

<html>
	<body>
		<form method="post">
	        Username
	        <input type="text" name="text">
		</br></br>
	        Password
	        <input type="password" name="pwd">
		</br></br>
			<input type="submit" value="Sign In" name="submit">
		</form>
	</body>
</html>

<?php
    if (isset($_POST['submit'])) {
        $v1 = "1";
        $v2 = "1";
        $v3 = $_POST['text'];
        $v4 = $_POST['pwd'];
        if ($v1 == $v3 && $v2 == $v4) {
            $_SESSION['luser'] = $v1;
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (10);
            header('Location: http://localhost/suraudigital/homepage.php');
        } else {
            echo "Please enter the username or password again!";
        }
    }
?>