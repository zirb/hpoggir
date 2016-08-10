<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Partidos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Lista Ligas'), ['controller' => 'ListaLigas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lista Liga'), ['controller' => 'ListaLigas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quinielas'), ['controller' => 'Quinielas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quiniela'), ['controller' => 'Quinielas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="partidos form large-9 medium-8 columns content">
    <?= $this->Form->create($partido) ?>
    <fieldset>
        <legend><?= __('Add Partido') ?></legend>
        <?php
            echo $this->Form->input('lista_id', ['options' => $listaLigas]);
            echo $this->Form->input('jornada');
            echo $this->Form->input('equip_local_id');
            echo $this->Form->input('equip_vis_id', ['options' => $equipos]);
            echo $this->Form->input('fecha');
            echo $this->Form->input('resultado');
            echo $this->Form->input('edo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
