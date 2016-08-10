<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lista Liga'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ligas'), ['controller' => 'Ligas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Liga'), ['controller' => 'Ligas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="listaLigas index large-9 medium-8 columns content">
    <h3><?= __('Lista Ligas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('liga_id') ?></th>
                <th><?= $this->Paginator->sort('equipo_id') ?></th>
                <th><?= $this->Paginator->sort('temporada') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listaLigas as $listaLiga): ?>
            <tr>
                <td><?= $this->Number->format($listaLiga->id) ?></td>
                <td><?= $listaLiga->has('liga') ? $this->Html->link($listaLiga->liga->id, ['controller' => 'Ligas', 'action' => 'view', $listaLiga->liga->id]) : '' ?></td>
                <td><?= $listaLiga->has('equipo') ? $this->Html->link($listaLiga->equipo->id, ['controller' => 'Equipos', 'action' => 'view', $listaLiga->equipo->id]) : '' ?></td>
                <td><?= $this->Number->format($listaLiga->temporada) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $listaLiga->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $listaLiga->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $listaLiga->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listaLiga->id)]) ?>
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
