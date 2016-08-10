<!-- File: src/Template/Usuarios/login.ctp -->

<div class="usuarios form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Introduce tu email y contraseña') ?></legend>
        <?= $this->Form->input('mail') ?>
        <?= $this->Form->input('password') ?>
    </fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div>
