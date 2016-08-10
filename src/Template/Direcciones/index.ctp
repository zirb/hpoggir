<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Direccione'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="direcciones index large-9 medium-8 columns content">
    <h3><?= __('Direcciones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('noint') ?></th>
                <th><?= $this->Paginator->sort('calle') ?></th>
                <th><?= $this->Paginator->sort('CP') ?></th>
                <th><?= $this->Paginator->sort('colonia') ?></th>
                <th><?= $this->Paginator->sort('delegacion') ?></th>
                <th><?= $this->Paginator->sort('cel') ?></th>
                <th><?= $this->Paginator->sort('Noext') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($direcciones as $direccione): ?>
            <tr>
                <td><?= $this->Number->format($direccione->id) ?></td>
                <td><?= $this->Number->format($direccione->noint) ?></td>
                <td><?= h($direccione->calle) ?></td>
                <td><?= h($direccione->CP) ?></td>
                <td><?= h($direccione->colonia) ?></td>
                <td><?= h($direccione->delegacion) ?></td>
                <td><?= h($direccione->cel) ?></td>
                <td><?= $this->Number->format($direccione->Noext) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $direccione->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $direccione->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $direccione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $direccione->id)]) ?>
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
