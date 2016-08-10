<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Direcciones'), ['controller' => 'Direcciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Direccione'), ['controller' => 'Direcciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Alumnos'), ['controller' => 'Alumnos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Alumno'), ['controller' => 'Alumnos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quinielas'), ['controller' => 'Quinielas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quiniela'), ['controller' => 'Quinielas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarios view large-9 medium-8 columns content">
    <h3><?= h($usuario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($usuario->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Ape Pat') ?></th>
            <td><?= h($usuario->ape_pat) ?></td>
        </tr>
        <tr>
            <th><?= __('Ape Mat') ?></th>
            <td><?= h($usuario->ape_mat) ?></td>
        </tr>
        <tr>
            <th><?= __('Direccione') ?></th>
            <td><?= $usuario->has('direccione') ? $this->Html->link($usuario->direccione->id, ['controller' => 'Direcciones', 'action' => 'view', $usuario->direccione->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Mail') ?></th>
            <td><?= h($usuario->mail) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($usuario->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Nacionalidad') ?></th>
            <td><?= h($usuario->nacionalidad) ?></td>
        </tr>
        <tr>
            <th><?= __('Alumno') ?></th>
            <td><?= $usuario->has('alumno') ? $this->Html->link($usuario->alumno->id, ['controller' => 'Alumnos', 'action' => 'view', $usuario->alumno->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuario->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Nac') ?></th>
            <td><?= h($usuario->fecha_nac) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Quinielas') ?></h4>
        <?php if (!empty($usuario->quinielas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Usuario Id') ?></th>
                <th><?= __('Partido Id') ?></th>
                <th><?= __('Resultado') ?></th>
                <th><?= __('Fecha Mod') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuario->quinielas as $quinielas): ?>
            <tr>
                <td><?= h($quinielas->id) ?></td>
                <td><?= h($quinielas->usuario_id) ?></td>
                <td><?= h($quinielas->partido_id) ?></td>
                <td><?= h($quinielas->resultado) ?></td>
                <td><?= h($quinielas->fecha_mod) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Quinielas', 'action' => 'view', $quinielas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Quinielas', 'action' => 'edit', $quinielas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Quinielas', 'action' => 'delete', $quinielas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quinielas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
