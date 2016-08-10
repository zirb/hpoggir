<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $liga->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $liga->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ligas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Lista Ligas'), ['controller' => 'ListaLigas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lista Liga'), ['controller' => 'ListaLigas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ligas form large-9 medium-8 columns content">
    <?= $this->Form->create($liga) ?>
    <fieldset>
        <legend><?= __('Edit Liga') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('img');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
