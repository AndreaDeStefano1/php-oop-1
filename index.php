<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <?php 
  require_once __DIR__ . '/class/Movie.php';
  $titanic = new Movie('Titanic', ['Drama','Fantascientifico'],'ENG');
  ?>
  <title>Document</title>
</head>
<body>
  <header>HEADER</header>
  <h1 class="text-center">Movie</h1>

  <ul>
    <li>  
      <h2><?php echo $titanic->getName() ?></h2>
      <ul>
        <?php foreach ($titanic->getGenre() as $genre) : ?>
          <li><?php echo $genre ?></li>
        <?php endforeach; ?>
      </ul>
    </li>
  </ul>
</body>
</html>