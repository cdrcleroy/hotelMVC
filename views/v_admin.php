<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Liste des tarifs</h1>
    <table>
        <tr>
            <th>id</th>
            <th>Item</th>
            <th>Prix</th>
        </tr>
        <?php foreach($data as $prix):
            echo '<tr>';
            echo '<td>'.$prix['id'].'</td>';
            echo '<td>'.$prix['item'].'</td>';
            echo '<td>'.$prix['prix'].'</td>';
            echo '<td><a href="edit?id='.$prix['id'].'">Modifier tarif</td>';
            echo '</tr>';
            endforeach; 
            ?>


    </table>
</body>

</html>