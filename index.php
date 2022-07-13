<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet"/>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="model/style.css">
    <title>Planetas</title>
</head>
<body>

    <?php
        include_once('view/header.php');
    ?>

    <main>

    <div class="container1">
        <h1>Planetas:</h1>
    </div>

    <div class="container">

    <div class="listaplaneta">

    <a href="view/planeta.php?id=1">
        <img src="img/terra.png" height="300" class="planetas"/>
    </a>
    
    <a href="view/planeta.php?id=2">
        <img src="img/mars.png" height="300" class="planetas"/>
    </a>

    <a href="view/planeta.php?id=3">
        <img src="img/jupiter.png" height="300" class="planetas"/>
    </a>

    <a href="view/planeta.php?id=4">
        <img src="img/saturn.png" height="300" class="planetas"/>
    </a>

    </div>
    </div>

    </main>

    <?php
        include_once('view/footer.php');
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>