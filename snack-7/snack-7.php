<?php
/*
## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/
$alunni = [
  [
    'nome' => 'Tamara',
    'cognome' => 'Cotogno',
    'voti' => [
      7,
      6.5,
      8
    ]
  ],
  [
    'nome' => 'Fabiana',
    'cognome' => 'Pagoni',
    'voti' => [
      6,
      8, 
      7
    ]
  ],
  [
    'nome' => 'Francesca Romana',
    'cognome' => 'Guglielmo',
    'voti' => [
      10,
      8,
      8
    ]
  ],
  [
    'nome' => 'Carlo',
    'cognome' => 'Duminuco Del Monte',
    'voti' => [
      9,
      5,
      7
    ]
  ],
  [
    'nome' => 'Alessandro',
    'cognome' => 'Costa',
    'voti' => [
      6,
      7,
      5
    ]
  ],
];
var_dump($alunni);

for($i = 0; $i < count($alunni); $i++){

    $sum = 0;
    $media = 0;

    for ($index = 0; $index < count($alunni[$i]['voti']); $index++) { 
      $sum += $alunni[$i]['voti'][$index];
    }
  
    $media += ($sum / count($alunni[$i]['voti']));
    echo 'MEDIA';
    var_dump($media);
};






?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 7</title>
</head>
<body>
   <?php for($i = 0; $i < count($alunni); $i++): ?>
      <h1><?php echo $alunni[$i]['nome'] .' '. $alunni[$i]['cognome'] ?></h1>
      <ul>
        <li>
          <i><?php echo 'Voto matematica: ' . $alunni[$i]['voti']['0']?></i>
        </li>
        <li>
          <i><?php echo 'Voto italiano: ' . $alunni[$i]['voti']['1']?></i>
        </li>
        <li>
          <i><?php echo 'Voto inglese: ' . $alunni[$i]['voti']['2']?></i>
        </li>
      </ul>
  <?php endfor; ?>

</body>
</html>