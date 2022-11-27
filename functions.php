<?php
$host = "localhost";
$user = "root";
$passwd = "";
$db = "zabytki";

$con = mysqli_connect($host, $user, $passwd, $db);


if (!$con) {
    die("Connection filed " . mysqli_connect_error());
}

function addComment($imie, $nazwisko, $komentarz, $strona)
{
    global $con;
    $sql = "INSERT INTO `komentarze` (`ID`,`imie`,`nazwisko`,`komentarz`,`strona`) VALUES(null, '$imie','$nazwisko','$komentarz','$strona')";

    if ($result = $con->query($sql)) echo "Dodano komenarz";
    else echo "Nie udało się dodać komenatrza";
}

function showComment()
{
    global $con;
    $sql = "SELECT * FROM komentarze";
    $result = $con->query($sql);
    while ($row = mysqli_fetch_row($result)) {
        echo "<h3>" . $row[1] . " " . $row[2] . "</h3><p>" . $row[3] . "</p>";
    }
}

function zabytki()
{
    global $con;

    $sql = "SELECT * FROM Lista_zabytkow";
    $query = $con->query($sql);

    if ($query->num_rows > 0) {
        while ($row = $query->fetch_assoc()) {
            echo "
            <section class='zabytek'>
              <p class='nazwa'>{$row['Nazwa']}</p>
              <p class='opis'>{$row['Data_powstania']}</p>
            </section>
          ";
        }
    }
}
