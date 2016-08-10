<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $equipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $equipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Equipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Lista Ligas'), ['controller' => 'ListaLigas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lista Liga'), ['controller' => 'ListaLigas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="equipos form large-9 medium-8 columns content">
    <?= $this->Form->create($equipo) ?>
    <fieldset>
        <legend><?= __('Edit Equipo') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('img');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
