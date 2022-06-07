<?php
/*
## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/
$matches = [
  [
    'casa' => 'Virtus Pallacanestro Bologna',
    'ospite' => 'Fortitudo Pallacantro Bologna 103',
    'punti' => [
      'casa' => '45',
      'ospite' => '45',
    ]
  ],
  [
    'casa' => 'Polisportiva Dinamo',
    'ospite' => 'New Basket Brindisi',
    'punti' => [
      'casa' => '55',
      'ospite' => '70',
    ]
  ],
  [
    'casa' => 'Pallacanestro Reggiana',
    'ospite' => 'Guerino Vanoli Basket',
    'punti' => [
      'casa' => '70',
      'ospite' => '35',
    ]
  ],
  [
    'casa' => 'Aquila Baket Trento',
    'ospite' => 'Pallacanestro Varese',
    'punti' => [
      'casa' => '25',
      'ospite' => '45',
    ]
  ],
];
var_dump($matches);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
</head>
<body>
<ul>
    <?php for($i = 0; $i < count($matches); $i++): ?>
      <!-- il codice HTML verrà ciclato -->
      <li><?php echo $matches[$i]['casa'] . ' - ' . $matches[$i]['ospite'] . ' | ' . $matches[$i]['punti']['casa'] . ' - ' . $matches[$i]['punti']['ospite']?></li>
      
    <?php endfor; ?>
  </ul>
  
</body>
</html>