<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Produto']), ['action' => 'edit', $produto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Produto']), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Produtos']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Produto']), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="produtos view col-lg-10 col-md-9">
    <h3><?= h($produto->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Nome</th>
            <td><?= h($produto->nome) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($produto->id) ?></td>
        </tr>
        <tr>
            <th>'Preco</th>
            <td><?= $this->Number->format($produto->preco) ?></td>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($produto->created) ?></tr>
        </tr>
        <tr>
            <th>Modifield</th>
            <td><?= h($produto->modifield) ?></tr>
        </tr>
    </table>
</div>
