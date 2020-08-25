<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>about/index</h1>
    <table>
        <thead>
            <tr>x</tr>
            <tr>title</tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data as $dat) : ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $dat['title']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="<?= BASE_URL; ?>/js/script.js"></script>
</body>

</html>