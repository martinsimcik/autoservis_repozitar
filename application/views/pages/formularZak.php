<?php
    $connect = mysqli_connect("localhost","root","","autoservis");
    if(isset($_POST['submitinserdetails'])) {
        
        $jmeno = $_POST['jmeno'];
        $prijmeni = $_POST['prijmeni'];
        $adresa = $_POST['adresa'];
        $telefon = $_POST['telefon'];
        $email = $_POST['email'];
        
    if(!empty($jmeno) && !empty($prijmeni) && !empty($adresa) && !empty($telefon) && !empty($email) )   {
    
        
        $sql = "INSERT INTO `majitel`(`jmeno`, `prijmeni`, `adresa`, `telefon`, `email`)"
                               . " VALUES ('$jmeno','$prijmeni','$adresa','$telefon','$email')" ;
    $qry = mysqli_query($connect, $sql);
    if($qry){
        echo "Zákazník byl úspěšně přidán";
    }   
        
    } else {
        echo "Všechny kolonky musí být vyplněné";
    }
        
    
    
    }
    
?>
<html>
    <head>
        <title>Formulář zákaznící</title>
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
        <h2>Zápis zákazníka</h2>
        <form action="" method="POST">
            
            <label for="jmeno">Jméno:</label>
<input type="text" name="jmeno">
<label for="prijmeni">Příjmení:</label>
<input type="text" name="prijmeni">
<label for="adresa">Adresa:</label>
<input type="text" name="adresa">
<label for="telefon">Telefon:</label>
<input type="text" name="telefon" >
<label for="email">Email:</label>
<input type="text" name="email">
<input type="submit" name="submitinserdetails" value="Odeslat">
</form>
    </body>
</html>