<?php
    $connect = mysqli_connect("localhost","root","","autoservis");
    if(isset($_POST['submitinserdetails'])) {
        
        $datum = $_POST['datum'];
        $zavada = $_POST['zavada'];
        $cas = $_POST['cas'];
        $naklady = $_POST['naklady'];
        
    if(!empty($datum) && !empty($zavada) && !empty($cas) && !empty($naklady) )   {
    
        
        $sql = "INSERT INTO `oprava`(`datum`, `zavada`, `cas`, `naklady`)"
                               . " VALUES ('$datum','$zavada','$cas','$naklady')" ;
    $qry = mysqli_query($connect, $sql);
    if($qry){
        echo "Oprava byla úspěšně zapsána";
    }   
        
    } else {
        echo "Všechny kolonky musí být vyplněné";
    }
        
    
    
    }
    
?>
<html>
    <head>
        <title>Formulář</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

</style>
    </head>
    <body>
        <h2>Zápis opravy</h2>
        <form action="" method="POST">
            
            <label for="datum">Datum opravy:</label>
<input type="text" name="datum">
<label for="zavada">Závada:</label>
<input type="text" name="zavada">
<label for="cas">Čas opravy:</label>
<input type="text" name="cas">
<label for="naklady">Náklady:</label>
<input type="text" name="naklady" ><br ><br >
<input type="submit" name="submitinserdetails" value="Odeslat">
</form>
    </body>
</html>