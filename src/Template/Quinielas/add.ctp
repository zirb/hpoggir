<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Quinielas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Partidos'), ['controller' => 'Partidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Partido'), ['controller' => 'Partidos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="quinielas form large-9 medium-8 columns content">
    <?= $this->Form->create($quiniela) ?>
    <fieldset>
        <legend><?= __('Add Quiniela') ?></legend>
        <?php
            echo $this->Form->input('usuario_id');
            echo $this->Form->input('partido_id', ['options' => $partidos]);
            echo $this->Form->input('resultado');
            echo $this->Form->input('fecha_mod');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
