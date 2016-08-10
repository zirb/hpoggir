<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Direcciones'), ['controller' => 'Direcciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Direccione'), ['controller' => 'Direcciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Alumnos'), ['controller' => 'Alumnos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Alumno'), ['controller' => 'Alumnos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quinielas'), ['controller' => 'Quinielas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quiniela'), ['controller' => 'Quinielas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuarios index large-9 medium-8 columns content">
    <h3><?= __('Usuarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('ape_pat') ?></th>
                <th><?= $this->Paginator->sort('ape_mat') ?></th>
                <th><?= $this->Paginator->sort('dir_id') ?></th>
                <th><?= $this->Paginator->sort('mail') ?></th>
                <th><?= $this->Paginator->sort('password') ?></th>
                <th><?= $this->Paginator->sort('fecha_nac') ?></th>
                <th><?= $this->Paginator->sort('nacionalidad') ?></th>
                <th><?= $this->Paginator->sort('alumno_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $this->Number->format($usuario->id) ?></td>
                <td><?= h($usuario->nombre) ?></td>
                <td><?= h($usuario->ape_pat) ?></td>
                <td><?= h($usuario->ape_mat) ?></td>
                <td><?= $usuario->has('direccione') ? $this->Html->link($usuario->direccione->id, ['controller' => 'Direcciones', 'action' => 'view', $usuario->direccione->id]) : '' ?></td>
                <td><?= h($usuario->mail) ?></td>
                <td><?= h($usuario->password) ?></td>
                <td><?= h($usuario->fecha_nac) ?></td>
                <td><?= h($usuario->nacionalidad) ?></td>
                <td><?= $usuario->has('alumno') ? $this->Html->link($usuario->alumno->id, ['controller' => 'Alumnos', 'action' => 'view', $usuario->alumno->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usuario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuario->id]) ?>
                    <?= $this->Form->postLink(__('Delete1'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?>
<?= $this->Form->postLink(__('Delete2'), ['action' => 'delete', $usuario->id]) ?>
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
