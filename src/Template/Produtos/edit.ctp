<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><?= $this->Html->link(__('Lista {0}', 'Produtos'), ['action' => 'index']) ?></li>
        <li><?= $this->Form->postLink(
                __('Apagar'),
                ['action' => 'delete', $produto->id],
                ['confirm' => __('Você deseja apagar o produto: # {0}?', $produto->id)]
            )
        ?></li>    
    </ul>
</nav>
<div class="produtos form col-md-10 columns content">
    <?= $this->Form->create($produto) ?>
    <fieldset>
        <legend><?= 'Edit Produto' ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('preco');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
