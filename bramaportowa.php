<?php

?>


<section>
    <img src="brama.png">
    <?php
    zabytki();
    ?>
</section>


<form action="index.php?page=bramaportowa" method="POST">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="imie" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="nazwisko" placeholder="Your last name..">

    <label for="subject">Subject</label>
    <textarea id="subject" name="komentarz" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" name="przycisk">
</form>

<?php
if (isset($_POST['przycisk'])) {
    addComment($_POST['imie'], $_POST['nazwisko'], $_POST['komentarz'], $strona);
}
showComment($strona);

?>