<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $quiniela->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $quiniela->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Quinielas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Partidos'), ['controller' => 'Partidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Partido'), ['controller' => 'Partidos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="quinielas form large-9 medium-8 columns content">
    <?= $this->Form->create($quiniela) ?>
    <fieldset>
        <legend><?= __('Edit Quiniela') ?></legend>
        <?php
            echo $this->Form->input('usuario_id', ['options' => $usuarios]);
            echo $this->Form->input('partido_id', ['options' => $partidos]);
            echo $this->Form->input('resultado');
            echo $this->Form->input('fecha_mod');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
