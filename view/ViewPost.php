<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="./view/style.css">
    <title>Document</title>
</head>
<body>
<div class="container-fluid bg-dark">
<div class="container">

    <div class="row box">
    <?php
    foreach ($results as $result) {?>

    <div class="card col-3 text-center ms-2 mb-2" >
        <img src="https://aymeric-auberton.fr/img/cours/cours-php-max.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?=$result['Title']?></h5>
            <h6 class="card-subtitle mb-2 text-muted">Ecrit par <?=$result['Author']?> le : <?=$result['CreationTimestamp']?></h6>
            <p class="card-text"><?=$result['Contents']?></p>
            <a href= "<?=BASE_URL?>controller/Controller.php?route=<?=$result['Id']?>" class="btn btn-primary">Commentaires</a>
        </div>
    </div>

    <?php
    }
    ?>
    </div>   
    
</div>
</div>

    

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>