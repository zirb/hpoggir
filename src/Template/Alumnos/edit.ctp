<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $alumno->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $alumno->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Alumnos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="alumnos form large-9 medium-8 columns content">
    <?= $this->Form->create($alumno) ?>
    <fieldset>
        <legend><?= __('Edit Alumno') ?></legend>
        <?php
            echo $this->Form->input('carrera');
            echo $this->Form->input('semestre');
            echo $this->Form->input('matricula');
            echo $this->Form->input('salon');
            echo $this->Form->input('turno');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
