<main>
	<header>Zaloguj się</header>
	<form action="logowanie.php" method="post">
		<input type="text" name="Login" placeholder="Login" spellcheck="false">
		<div>
			<input id="password" name="haslo" type="password" placeholder="Hasło" spellcheck="false">
			<span id="eye" class="material-icons">visibility</span>
			<span id="crossedEye" class="material-icons">visibility_off</span>
		</div>
		<input name="Zalogujsie" type="submit" value="Zaloguj się">
	</form>
	<a href="index.html">Zarejestruj się</a>
	<a href="index.html">Zapomniałeś hasła?</a>
</main>


<?php

if (isset($_POST['Zalogujsie'])) {
	if (isset($_POST['Login']) && isset($_POST['haslo'])) {
		echo "Zarejestrowales sie!";
	} else {
		echo "Cześć nieznajomy.";
	}
}

?>

</html>