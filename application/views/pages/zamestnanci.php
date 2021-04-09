<html>
    <head>
        <title>Zaměstnanci</title>
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
.vertical-center-C {
  
  position: absolute;
  bottom: 78%;
  right: 46%;

}
.hlava
{
   position: absolute;
   right: 85%;
   top:0%;
   font-size: 15px;
}
</style>
        <div class="container">
  <div class="vertical-center">
        <a href="<?php echo base_url() . "auth/formularZam"; ?>" class="btn btn-dark" class="vertical-center">Zapsání zaměstnanců</a>
        
  </div> 
            <div class="vertical-center-b">
        <a href="<?php echo base_url() . "auth/upZamestnancu"; ?>" class="btn btn-dark" class="vertical-center">Upravit zaměstnance</a>
        
  </div>
            <div class="vertical-center-c">
        <a href="<?php echo base_url() . "auth/php_delete_data_from_mysql_database"; ?>" class="btn btn-dark" class="vertical-center">Smazat</a>
        
  </div>

 <div><br>&nbsp</div>
  <div><br>&nbsp</div>
  <div class="container" class="text-center">
<h1>Seznam zaměstnanců</h1>
<div class="row">
                   <?php foreach ($zamestnanec as $zame) { ?>

    <div class="col">
        
    <div class="card" style="width: 18rem; height: 7rem;">
        <p class="hlava">ID:<?= $zame->id; ?></p> 
            <h4>Jméno: <?= $zame->jmeno; ?> <?= $zame->prijmeni; ?></h4>
                <p>Osobní číslo: <?= $zame->osobni_cislo; ?></p>
    </div>
        <p>&nbsp</p>
  </div>
    <?php } ?>
    </div>
  </div>
        </div>
        </body>
</html>