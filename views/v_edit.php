<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="updateTarif">
        <label for="prix">Nouveau Prix</label>
        <input type="number" step="0.1" name="prix" id="prix" value="<?php echo $data['prix']; ?>"><br>
        <input type="hidden" step="0.1" name="id" id="id" value="<?php echo $_GET['id']; ?>"><br>
        <input type="submit">
    </form>
</body>

</html>