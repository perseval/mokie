<!DOCTYPE html>
<html>
    <head>
        <title><?= $title != "" ? $title . " &bullet; " . AppName() : AppName() ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= AssetsUrl() . $this->asset('css/style.css') ?>" />
    </head>
    <body>

        <?= $this->section('content') ?>

    </body>
</html>