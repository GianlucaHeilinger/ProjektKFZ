<!DOCTYPE html><html lang="de"><head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head><body>
<?php

//Datenbank-Verbindung herstellen
$host_name = 'localhost';
$user_name = 'root';
$password = '';
$database = 'dbkfz';
$connect = mysqli_connect($host_name, $user_name, $password, $database);

mysqli_query($connect, "SET NAMES 'utf8'");

//Ausgewählte Datensätze löschen:
for($i=1; $i<=999999; $i++){
    if(isset($_POST["auswahl$i"])){
        $deleteAnweisung = "DELETE FROM reparaturdetails WHERE repdetid=$i";
        $result = mysqli_query($connect, $deleteAnweisung);
        echo "<div class='alert alert-danger' role='alert'>
        <h1>Datensatz mit der ID $i wurde gelöscht. </h1></div><br>";
        
    }
}
?>
<!-- <a href="auftragedit.php" class="btn btn-info btn-lg">Zurück zum Auftrag</a> -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script language="javascript" type="text/javascript">
window.setTimeout('window.location = "auftragedit.php"',1500);
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body></html>