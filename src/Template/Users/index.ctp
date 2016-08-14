<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Direcciones'), ['controller' => 'Direcciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Direccione'), ['controller' => 'Direcciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Alumnos'), ['controller' => 'Alumnos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Alumno'), ['controller' => 'Alumnos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('username') ?></th>
                <th><?= $this->Paginator->sort('ape_pat') ?></th>
                <th><?= $this->Paginator->sort('ape_mat') ?></th>
                <th><?= $this->Paginator->sort('dir_id') ?></th>
                <th><?= $this->Paginator->sort('mail') ?></th>
                <th><?= $this->Paginator->sort('password') ?></th>
                <th><?= $this->Paginator->sort('fecha_nac') ?></th>
                <th><?= $this->Paginator->sort('nacionalidad') ?></th>
                <th><?= $this->Paginator->sort('alumno_id') ?></th>
                <th><?= $this->Paginator->sort('role') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->ape_pat) ?></td>
                <td><?= h($user->ape_mat) ?></td>
                <td><?= $user->has('direccione') ? $this->Html->link($user->direccione->id, ['controller' => 'Direcciones', 'action' => 'view', $user->direccione->id]) : '' ?></td>
                <td><?= h($user->mail) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->fecha_nac) ?></td>
                <td><?= h($user->nacionalidad) ?></td>
                <td><?= $user->has('alumno') ? $this->Html->link($user->alumno->id, ['controller' => 'Alumnos', 'action' => 'view', $user->alumno->id]) : '' ?></td>
                <td><?= h($user->role) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
