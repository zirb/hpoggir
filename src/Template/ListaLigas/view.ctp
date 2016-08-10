<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lista Liga'), ['action' => 'edit', $listaLiga->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lista Liga'), ['action' => 'delete', $listaLiga->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listaLiga->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lista Ligas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lista Liga'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ligas'), ['controller' => 'Ligas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Liga'), ['controller' => 'Ligas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="listaLigas view large-9 medium-8 columns content">
    <h3><?= h($listaLiga->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Liga') ?></th>
            <td><?= $listaLiga->has('liga') ? $this->Html->link($listaLiga->liga->id, ['controller' => 'Ligas', 'action' => 'view', $listaLiga->liga->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Equipo') ?></th>
            <td><?= $listaLiga->has('equipo') ? $this->Html->link($listaLiga->equipo->id, ['controller' => 'Equipos', 'action' => 'view', $listaLiga->equipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($listaLiga->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Temporada') ?></th>
            <td><?= $this->Number->format($listaLiga->temporada) ?></td>
        </tr>
    </table>
</div>
