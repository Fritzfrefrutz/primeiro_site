<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $this -> e($titulo ?? "Existência da costa firme") ?></title>
    </head>
    <body>
        <header></header>
        <main>
            <?= $this->section('main_c') ?>
        </main>
        <footer></footer>
    </body>
</html>