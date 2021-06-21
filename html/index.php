<?php 
    if(isset($_GET['prod']))
    {
        $prod = $_GET['prod'];
    }else{
        $prod = '';
    }
?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tiyapuy</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="main.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
  <div class="App paso1">
      <header class="App-header">
        <img src="img/1.png" class="App-logo" alt="logo" />
      </header>
      <img
        src="https://firebasestorage.googleapis.com/v0/b/tiyapuy.appspot.com/o/BlockchainPasta02.jpg?alt=media&amp;token=60184017-e688-41dc-809f-b580a8c43fca"
        class="video"
        alt="logo"
      />
      
    </div>
     <!-- BEGIN: Page JS-->

    <!-- END: Page JS-->
    
    <script>
        
        const prod = '<?php echo $prod ?>';
        window.addEventListener("DOMContentLoaded", e => {
            if(prod == 'PapasChipsAndinas')
            {
                location.href = 'papas.html';
            }else if(prod == 'PastadeGranosAndinos'){
                location.href = 'pastas.html';
            }
        });


    </script>

</body>

