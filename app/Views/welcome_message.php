<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

</head>

<body>
    <h1>Test login</h1>
    <p>
        <?= session()->get('nama'); ?> <br>
        <?= session()->get('email'); ?> <br>
        <?= session()->get('role'); ?>
    </p>

    <a href="<?= site_url('/logout'); ?>">Logout</a>
</body>

</html>