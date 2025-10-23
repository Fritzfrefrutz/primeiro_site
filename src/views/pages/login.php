<?php $this->layout('layouts::default'); ?>

<?php $this->start('main_c') ?>
<form>
    <input name="email">
    <input name="senha">
    <button type="submit">Enviar</button>
</form>
<?php $this->stop() ?>