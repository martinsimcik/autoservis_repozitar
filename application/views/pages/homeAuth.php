<html>
    <head>
        <title>Domovská stránka</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet/less" type="text/css" href="styles.less">
        <script src="less.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <img src="<?php echo base_url('vendor/fotky/images/car-banner.jpg'); ?>"  alt="Obázek autoservisu"/>
        <div><br>&nbsp</div>
        <div class="container">
        <h1 class="text-center "><b><i class="fas fa-wrench"></i>Autoservis Šimčík</b></h1>
        <h3 class="text-center "><u><b>Něco o nás</b></u></h3>
        <p class="text-center" style = "font-family:Cambria;">
            Jsme rodinný autoservis, který byl založen v roce 2002 novomanželským párem.<br>
            Začínali jsme zde pouze v malém počtu, se základním vybavením.<br>
            Jak čas plynul, začínali nám přibývat zákazníci a spolu s nimi jsme začali zaměstnávat nové kolegy.<br>
            Postupem času jsme zvětšovali naše prostory a spolu s tím jsme sháněli nové dodavatele.<br>
            Podnik stále vzkvétal až do podoby, ve které je dnes.<br>
        </p>
        <h3 class="text-center "><u><b>Naše služby</b></u></h3>
        <p class="text-center" style = "font-family:Cambria;">
        <div class="row">
  <div class="column">
    <div class="card">
      
      <p>&nbsp</p>
      <h4>Výměny autoskel</h4>
      <p>&nbsp</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p>&nbsp</p>
      <h4>Diagnostiku motorů</h4>
      <p>&nbsp</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p>&nbsp</p>
      <h4>Seřízení geometrie</h4>
      <p>&nbsp</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p>&nbsp</p>
      <h4>Pneuservis</h4>
      <p>&nbsp</p>
    </div>
  </div>
</div>
        <div><br>&nbsp</div>
        <div class="row">
  <div class="column">
    <div class="card">
      
      <p>&nbsp</p>
      <h4>Výměna oleje</h4>
      <p>&nbsp</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p>&nbsp</p>
      <h4>Seřízení brzd</h4>
      <p>&nbsp</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p>&nbsp</p>
      <h4>Servis světel</h4>
      <p>&nbsp</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p>&nbsp</p>
      <h4>Opravy autoskel</h4>
      <p>&nbsp</p>
    </div>
  </div>
</div>
        </div>
    </body>
</html>