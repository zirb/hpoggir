<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Direcciones'), ['controller' => 'Direcciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Direccione'), ['controller' => 'Direcciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Alumnos'), ['controller' => 'Alumnos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Alumno'), ['controller' => 'Alumnos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Ape Pat') ?></th>
            <td><?= h($user->ape_pat) ?></td>
        </tr>
        <tr>
            <th><?= __('Ape Mat') ?></th>
            <td><?= h($user->ape_mat) ?></td>
        </tr>
        <tr>
            <th><?= __('Direccione') ?></th>
            <td><?= $user->has('direccione') ? $this->Html->link($user->direccione->id, ['controller' => 'Direcciones', 'action' => 'view', $user->direccione->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Mail') ?></th>
            <td><?= h($user->mail) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Nacionalidad') ?></th>
            <td><?= h($user->nacionalidad) ?></td>
        </tr>
        <tr>
            <th><?= __('Alumno') ?></th>
            <td><?= $user->has('alumno') ? $this->Html->link($user->alumno->id, ['controller' => 'Alumnos', 'action' => 'view', $user->alumno->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Nac') ?></th>
            <td><?= h($user->fecha_nac) ?></td>
        </tr>
    </table>
</div>
