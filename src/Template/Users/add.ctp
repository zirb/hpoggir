<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Direcciones'), ['controller' => 'Direcciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Direccione'), ['controller' => 'Direcciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Alumnos'), ['controller' => 'Alumnos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Alumno'), ['controller' => 'Alumnos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('ape_pat');
            echo $this->Form->input('ape_mat');
            echo $this->Form->input('dir_id', ['options' => $direcciones, 'empty' => true]);
            echo $this->Form->input('mail');
            echo $this->Form->input('password');
            echo $this->Form->input('fecha_nac', ['empty' => true]);
            echo $this->Form->input('nacionalidad');
            echo $this->Form->input('alumno_id', ['options' => $alumnos, 'empty' => true]);
            echo $this->Form->input('role', [
            'options' => ['admin' => 'Admin', 'user' => 'Usuario']
        ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
