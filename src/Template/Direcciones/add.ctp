<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Direcciones'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="direcciones form large-9 medium-8 columns content">
    <?= $this->Form->create($direccione) ?>
    <fieldset>
        <legend><?= __('Add Direccione') ?></legend>
        <?php
            echo $this->Form->input('noint');
            echo $this->Form->input('calle');
            echo $this->Form->input('CP');
            echo $this->Form->input('colonia');
            echo $this->Form->input('delegacion');
            echo $this->Form->input('cel');
            echo $this->Form->input('Noext');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
