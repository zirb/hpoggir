<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Direcciones'), ['controller' => 'Direcciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Direccione'), ['controller' => 'Direcciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Alumnos'), ['controller' => 'Alumnos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Alumno'), ['controller' => 'Alumnos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quinielas'), ['controller' => 'Quinielas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quiniela'), ['controller' => 'Quinielas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Add Usuario') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('ape_pat');
            echo $this->Form->input('ape_mat');
            echo $this->Form->input('dir_id', ['options' => $direcciones, 'empty' => true]);
            echo $this->Form->input('mail');
            echo $this->Form->input('password');
            echo $this->Form->input('fecha_nac', ['empty' => true]);
            echo $this->Form->input('nacionalidad');
            echo $this->Form->input('alumno_id', ['options' => $alumnos, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
