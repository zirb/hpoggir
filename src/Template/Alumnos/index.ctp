<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Alumno'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="alumnos index large-9 medium-8 columns content">
    <h3><?= __('Alumnos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('carrera') ?></th>
                <th><?= $this->Paginator->sort('semestre') ?></th>
                <th><?= $this->Paginator->sort('matricula') ?></th>
                <th><?= $this->Paginator->sort('salon') ?></th>
                <th><?= $this->Paginator->sort('turno') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alumnos as $alumno): ?>
            <tr>
                <td><?= $this->Number->format($alumno->id) ?></td>
                <td><?= h($alumno->carrera) ?></td>
                <td><?= $this->Number->format($alumno->semestre) ?></td>
                <td><?= h($alumno->matricula) ?></td>
                <td><?= h($alumno->salon) ?></td>
                <td><?= h($alumno->turno) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $alumno->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $alumno->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $alumno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alumno->id)]) ?>
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
