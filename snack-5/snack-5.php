<?php
//Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
$text = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore beatae voluptatum deleniti pariatur modi enim asperiores. Praesentium saepe ut delectus. Cupiditate qui dolor nobis, ab earum omnis, reprehenderit laudantium laboriosam neque consectetur maiores itaque delectus consequatur veniam tempora magnam! Eum porro qui tenetur quis id voluptatem nam ab voluptates incidunt.';

$text2 = explode('.', $text);
var_dump($text2)


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack</title>
</head>
<body>
  <ul>
  <?php for($i = 0; $i < count($text2); $i++) :?>
    <li> <?php echo $text2[$i] ?> </li>
  <?php endfor; ?>
  </ul>
</body>
</html>