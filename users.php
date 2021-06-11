<?php
$users = [
    [
        'name' => 'Ekko',
        'color' => 'Bleu',
        'age' => 20
    ],
    [
        'name' => 'Kayn',
        'color' => 'Blanc',
        'age' => 22  
    ],

];

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="users.css" />
</head>
<body>
<div>
<a class="Leprobleme" href="http://192.168.33.10/lien.php">probleme </a>
</div>
   <table>
     <tr>
         <th>Nom</th>
         <th>Couleur</th>
         <th>Age</th>
      </tr>
      <?php   foreach ($users as $user): ?>
      <tr>
          <td><?= $user['name']?></td>
          <td><?= $user['color']?></td>
          <td><?= $user['age']?></td>
      </tr>
    <?php endforeach ?>
 </table> 
</body>
</html> 