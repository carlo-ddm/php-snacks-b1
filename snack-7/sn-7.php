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
      'italiano' => 7,
      'matematica' => 6.5,
      'inglese' => 8,
    ]
  ],
  [
    'nome' => 'Fabiana',
    'cognome' => 'Pagoni',
    'voti' => [
      'italiano' => 8,
      'matematica' => 6,
      'inglese' => 8,
    ]
  ],
  [
    'nome' => 'Francesca Romana',
    'cognome' => 'Guglielmo',
    'voti' => [
      'italiano' => 6,
      'matematica' => 6.5,
      'inglese' => 5,
    ]
  ],
  [
    'nome' => 'Carlo',
    'cognome' => 'Duminuco Del Monte',
    'voti' => [
      'italiano' => 8,
      'matematica' => 6.5,
      'inglese' => 10,
    ]
  ],
  [
    'nome' => 'Alessandro',
    'cognome' => 'Costa',
    'voti' => [
      'italiano' => 5,
      'matematica' => 5,
      'inglese' => 5,
    ]
  ],
];

function mediaVoto($voti){
  $somma = 0;

  foreach ($voti as $voto) {
    $somma += $voto;
  };

  $media = $somma / count($voti);

  return $media;
}

// for($i = 0; $i < count($alunni); $i++){

//     $sum = 0;
//     $media = 0;

//     for ($index = 0; $index < count($alunni[$i]['voti']); $index++) { 
//       $sum += $alunni[$i]['voti'][$index];
//     }
  
//     $media += ($sum / count($alunni[$i]['voti']));
//     echo 'MEDIA';
//     var_dump($media);
// };
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php foreach($alunni as $alunno):?>
    <h1>
      <?php echo $alunno['nome'] . ' ' . $alunno['cognome']?>
    <h1>
    <i>media: <?php echo mediaVoto($alunno['voti']) ?></i>
  <?php endforeach; ?>
</body>
</html>