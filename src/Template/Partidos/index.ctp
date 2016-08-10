<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Partido'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lista Ligas'), ['controller' => 'ListaLigas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lista Liga'), ['controller' => 'ListaLigas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quinielas'), ['controller' => 'Quinielas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quiniela'), ['controller' => 'Quinielas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="partidos index large-9 medium-8 columns content">
    <h3><?= __('Partidos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('lista_id') ?></th>
                <th><?= $this->Paginator->sort('jornada') ?></th>
                <th><?= $this->Paginator->sort('equip_local_id') ?></th>
                <th><?= $this->Paginator->sort('equip_vis_id') ?></th>
                <th><?= $this->Paginator->sort('fecha') ?></th>
                <th><?= $this->Paginator->sort('edo') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($partidos as $partido): ?>
            <tr>
                <td><?= $this->Number->format($partido->id) ?></td>
                <td><?= $partido->has('lista_liga') ? $this->Html->link($partido->lista_liga->id, ['controller' => 'ListaLigas', 'action' => 'view', $partido->lista_liga->id]) : '' ?></td>
                <td><?= h($partido->jornada) ?></td>
                <td><?= $this->Number->format($partido->equip_local_id) ?></td>
                <td><?= $partido->has('equipo') ? $this->Html->link($partido->equipo->id, ['controller' => 'Equipos', 'action' => 'view', $partido->equipo->id]) : '' ?></td>
                <td><?= h($partido->fecha) ?></td>
                <td><?= h($partido->edo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $partido->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $partido->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $partido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partido->id)]) ?>
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
