<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Lista Ligas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ligas'), ['controller' => 'Ligas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Liga'), ['controller' => 'Ligas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="listaLigas form large-9 medium-8 columns content">
    <?= $this->Form->create($listaLiga) ?>
    <fieldset>
        <legend><?= __('Add Lista Liga') ?></legend>
        <?php
            echo $this->Form->input('liga_id', ['options' => $ligas]);
            echo $this->Form->input('equipo_id', ['options' => $equipos]);
            echo $this->Form->input('temporada');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
