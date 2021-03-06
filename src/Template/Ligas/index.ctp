<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Liga'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lista Ligas'), ['controller' => 'ListaLigas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lista Liga'), ['controller' => 'ListaLigas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ligas index large-9 medium-8 columns content">
    <h3><?= __('Ligas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('img') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ligas as $liga): ?>
            <tr>
                <td><?= $this->Number->format($liga->id) ?></td>
                <td><?= h($liga->nombre) ?></td>
                <td><?= h($liga->img) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $liga->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $liga->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $liga->id], ['confirm' => __('Are you sure you want to delete # {0}?', $liga->id)]) ?>
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
