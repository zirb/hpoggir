<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Quiniela'), ['action' => 'edit', $quiniela->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Quiniela'), ['action' => 'delete', $quiniela->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quiniela->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Quinielas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quiniela'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Partidos'), ['controller' => 'Partidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Partido'), ['controller' => 'Partidos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="quinielas view large-9 medium-8 columns content">
    <h3><?= h($quiniela->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Usuario') ?></th>
            <td><?= $quiniela->has('usuario') ? $this->Html->link($quiniela->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $quiniela->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Partido') ?></th>
            <td><?= $quiniela->has('partido') ? $this->Html->link($quiniela->partido->id, ['controller' => 'Partidos', 'action' => 'view', $quiniela->partido->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($quiniela->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Mod') ?></th>
            <td><?= h($quiniela->fecha_mod) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Resultado') ?></h4>
        <?= $this->Text->autoParagraph(h($quiniela->resultado)); ?>
    </div>
</div>
