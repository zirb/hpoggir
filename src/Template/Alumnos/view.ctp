<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Alumno'), ['action' => 'edit', $alumno->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Alumno'), ['action' => 'delete', $alumno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alumno->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Alumnos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Alumno'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="alumnos view large-9 medium-8 columns content">
    <h3><?= h($alumno->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Carrera') ?></th>
            <td><?= h($alumno->carrera) ?></td>
        </tr>
        <tr>
            <th><?= __('Matricula') ?></th>
            <td><?= h($alumno->matricula) ?></td>
        </tr>
        <tr>
            <th><?= __('Salon') ?></th>
            <td><?= h($alumno->salon) ?></td>
        </tr>
        <tr>
            <th><?= __('Turno') ?></th>
            <td><?= h($alumno->turno) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($alumno->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Semestre') ?></th>
            <td><?= $this->Number->format($alumno->semestre) ?></td>
        </tr>
    </table>
</div>
