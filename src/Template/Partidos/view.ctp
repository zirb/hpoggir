<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Partido'), ['action' => 'edit', $partido->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Partido'), ['action' => 'delete', $partido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partido->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Partidos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Partido'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lista Ligas'), ['controller' => 'ListaLigas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lista Liga'), ['controller' => 'ListaLigas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quinielas'), ['controller' => 'Quinielas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quiniela'), ['controller' => 'Quinielas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="partidos view large-9 medium-8 columns content">
    <h3><?= h($partido->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Lista Liga') ?></th>
            <td><?= $partido->has('lista_liga') ? $this->Html->link($partido->lista_liga->id, ['controller' => 'ListaLigas', 'action' => 'view', $partido->lista_liga->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Jornada') ?></th>
            <td><?= h($partido->jornada) ?></td>
        </tr>
        <tr>
            <th><?= __('Equipo') ?></th>
            <td><?= $partido->has('equipo') ? $this->Html->link($partido->equipo->id, ['controller' => 'Equipos', 'action' => 'view', $partido->equipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Edo') ?></th>
            <td><?= h($partido->edo) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($partido->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Equip Local Id') ?></th>
            <td><?= $this->Number->format($partido->equip_local_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha') ?></th>
            <td><?= h($partido->fecha) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Resultado') ?></h4>
        <?= $this->Text->autoParagraph(h($partido->resultado)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Quinielas') ?></h4>
        <?php if (!empty($partido->quinielas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Usuario Id') ?></th>
                <th><?= __('Partido Id') ?></th>
                <th><?= __('Resultado') ?></th>
                <th><?= __('Fecha Mod') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($partido->quinielas as $quinielas): ?>
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
