<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job03</title>
</head>

<body>

    <?php
    $int = 34;
    $bool = true;
    $str = "Hi it's me Mario";
    $float = 3.14;
    ?>
    <table>
        <thead>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </thead>
        <tbody>
            <tr>
            <td><?php echo gettype($int); ?></td>
            <td> $int </td>
            <td><?php echo $int; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($str); ?></td>
            <td> $str </td>
            <td><?php echo $str; ?></td>

        </tr>
        <tr>
            <td><?php echo gettype($bool); ?></td>
            <td> $bool </td>
            <td><?php echo $bool; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($float); ?></td>
            <td> $float </td>
            <td><?php echo $float; ?></td>
        </tr>
</tbody>
    </table>

</body>

</html>

<style>
    .tr,th,td {
        border: 1px solid black;
        padding: 20px;
        text-align: center;
    }
</style>