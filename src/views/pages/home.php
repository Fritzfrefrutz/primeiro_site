<?php $this->layout('layouts::default'); ?>

<?php $this->start('main_c') ?>
<h1>Olá <?= $this -> e($nome_usuario) ?></h1>
<p>Quando bate a crise existencial da até vontade de enterrar a cabeça no chão e desistir de tudo na vida e só aceitar a derrota!</p>
<a href="/about">Sobre nós</a>
<?php $this->stop() ?>

<?php $this->start('footer_c') ?>
<p>Breno.com</p>
<?php $this->stop() ?>