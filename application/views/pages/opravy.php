<html>
    <head>
        <title>Formulář</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </head>
    <body>
        <div><style>
            .vertical-center {
  
  position: absolute;
  bottom: 78%;
  right: 22%;

}
</style>
<div class="container">
  <div class="vertical-center">
        <a href="<?php echo base_url() . "auth/formular"; ?>" class="btn btn-dark" class="vertical-center">Sepsání opravy</a>
        
  </div>
        


 <div><br>&nbsp</div>
  <div><br>&nbsp</div>
  <div class="container" class="text-center">
<h1>Seznam provedených oprav</h1>
    <table class="table">
        <?php foreach ($oprava as $oprav) { ?>
            <tr>
                <th>Datum opravy:</th>
                <td><?= $oprav->datum; ?></td>
            </tr>
            <tr>
                <th>Závada:</th>
                <td><?= $oprav->zavada; ?></td>
            </tr>
            <tr>
                <th>Čas opravy:</th>
                <td><?= $oprav->cas; ?></td>
            </tr>
            <tr>
            <th>Náklady:</th>
                <td><?= $oprav->naklady; ?></td>
            </tr>
        <?php } ?>
    </table>
</div>
</div>
        </div>
    </body>
</html>