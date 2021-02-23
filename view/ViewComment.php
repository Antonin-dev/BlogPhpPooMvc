<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container-fluid bg-dark">
<div class="container">

<div class="row text-center">
<?php
foreach ($results as $result) {?>

  <div class="card col-12 mb-2">
    
    <div class="card-body">
        <h5 class="card-title"><?=$result['NickName']?></h5>
          <h6 class="card-subtitle mb-2 text-muted">Ecrit le : <?=$result['CreationTimestamp']?></h6>
          <p class="card-text"><?=$result['Contents']?></p>
          <button class="btn btn-danger"><a href="http://localhost:8080/adrar2021/TD-BLOG/model/DeleteComment.php?delete=<?=$result['Id']?>&route=<?=$result['Post_Id']?>">Supprimer</a></button>
    </div>
  </div>

<?php
}
?>
</div>
<a href="http://localhost:8080/adrar2021/TD-BLOG/" class="btn btn-success col-12">Voir les articles</a>
<h2>Ajouter un commentaire</h2>
<form method="POST" action="http://localhost:8080/adrar2021/TD-BLOG/model/SaveComment.php?id=<?=$result['Post_Id']?>">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name" name="prenom">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1"></label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </div>
</form>


</div>
</div>   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>