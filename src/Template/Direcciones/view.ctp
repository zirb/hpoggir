<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Direccione'), ['action' => 'edit', $direccione->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Direccione'), ['action' => 'delete', $direccione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $direccione->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Direcciones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Direccione'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="direcciones view large-9 medium-8 columns content">
    <h3><?= h($direccione->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Calle') ?></th>
            <td><?= h($direccione->calle) ?></td>
        </tr>
        <tr>
            <th><?= __('CP') ?></th>
            <td><?= h($direccione->CP) ?></td>
        </tr>
        <tr>
            <th><?= __('Colonia') ?></th>
            <td><?= h($direccione->colonia) ?></td>
        </tr>
        <tr>
            <th><?= __('Delegacion') ?></th>
            <td><?= h($direccione->delegacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Cel') ?></th>
            <td><?= h($direccione->cel) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($direccione->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Noint') ?></th>
            <td><?= $this->Number->format($direccione->noint) ?></td>
        </tr>
        <tr>
            <th><?= __('Noext') ?></th>
            <td><?= $this->Number->format($direccione->Noext) ?></td>
        </tr>
    </table>
</div>
