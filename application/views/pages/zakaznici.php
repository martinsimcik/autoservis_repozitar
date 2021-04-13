<html>
    <head>
        <title>Zákaznící</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>  
    </head>
    <body>
        <style>
            .vertical-center {
  
  position: absolute;
  bottom: 78%;
  right: 22%;

}
.vertical-center-b {
  
  position: absolute;
  bottom: 78%;
  right: 34%;

}
.spodek
{
    position: absolute;
    bottom:0%;
    right: 40%
}
</style>
        <div class="container">
  <div class="vertical-center">
        <a href="<?php echo base_url() . "auth/formularZak"; ?>" class="btn btn-dark" class="vertical-center">Zapsání zákazníka</a>
        
  </div> 
  

 <div><br>&nbsp</div>
  <div><br>&nbsp</div>
  <?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from majitel"); // fetch data from database

?>
  <div class="container" class="text-center">
<h1>Seznam zákazníků</h1>

<div class="row">
        <?php while($data = mysqli_fetch_array($records))
{
?>
        
     <div class="col">   
    <div class="card" style="width: 18rem; height: 13rem;">
            <h4>Jméno: <?php echo $data['jmeno']; ?> <?php echo$data['prijmeni']; ?></h4>
                <p>Adresa: <?php echo $data['adresa']; ?></p>
                <p>Telefon: <?php echo $data['telefon']; ?></p>
                <p>Email: <?php echo $data['email']; ?></p>
                <a class ="spodek"href="upravaZak/<?php echo $data['id']; ?>">Upravit</a>
                
    </div>
         <p>&nbsp</p>
     </div>
    <p>&nbsp</p>
        <?php } ?>
        
  </div>
    <p>&nbsp</p>
    </div>
<p>&nbsp</p>
  </div>
</div>
</body>
</html>



