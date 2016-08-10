<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Equipo'), ['action' => 'edit', $equipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Equipo'), ['action' => 'delete', $equipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Equipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lista Ligas'), ['controller' => 'ListaLigas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lista Liga'), ['controller' => 'ListaLigas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="equipos view large-9 medium-8 columns content">
    <h3><?= h($equipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($equipo->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Img') ?></th>
            <td><?= h($equipo->img) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($equipo->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Lista Ligas') ?></h4>
        <?php if (!empty($equipo->lista_ligas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Liga Id') ?></th>
                <th><?= __('Equipo Id') ?></th>
                <th><?= __('Temporada') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($equipo->lista_ligas as $listaLigas): ?>
            <tr>
                <td><?= h($listaLigas->id) ?></td>
                <td><?= h($listaLigas->liga_id) ?></td>
                <td><?= h($listaLigas->equipo_id) ?></td>
                <td><?= h($listaLigas->temporada) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ListaLigas', 'action' => 'view', $listaLigas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ListaLigas', 'action' => 'edit', $listaLigas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ListaLigas', 'action' => 'delete', $listaLigas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listaLigas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
