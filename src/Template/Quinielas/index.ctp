<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Quiniela'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Partidos'), ['controller' => 'Partidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Partido'), ['controller' => 'Partidos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="quinielas index large-9 medium-8 columns content">
    <h3><?= __('Quinielas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('usuario_id') ?></th>
                <th><?= $this->Paginator->sort('partido_id') ?></th>
                <th><?= $this->Paginator->sort('fecha_mod') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($quinielas as $quiniela): ?>
            <tr>
                <td><?= $this->Number->format($quiniela->id) ?></td>
                <td><?= $quiniela->has('usuario') ? $this->Html->link($quiniela->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $quiniela->usuario->id]) : '' ?></td>
                <td><?= $quiniela->has('partido') ? $this->Html->link($quiniela->partido->id, ['controller' => 'Partidos', 'action' => 'view', $quiniela->partido->id]) : '' ?></td>
                <td><?= h($quiniela->fecha_mod) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $quiniela->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quiniela->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quiniela->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quiniela->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
