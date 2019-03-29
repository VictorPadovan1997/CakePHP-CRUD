<?php
$detalhe = array();

foreach ($produtos as $produto){
    $editLink = $this->Html->link('Alterar', '/produtos/edit/' . $produto['Produto']['id']);
    $deleteLink = $this->Html->link('Excluir', '/produtos/delete/' . $produto['Produto']['id']);
    $viewLink = $this->Html->link($produto['Produto']['nome'],  '/produtos/view/' . $produto['Produto']['id']);
    $detalhe[] = array(
    
        $viewLink,
        $produto['Produto']['quantidade'],
        $produto['Produto']['valor'],
        $produto['Produto']['modelo'],
        $editLink . ' ' . $deleteLink
    
    );
}

echo $this->Html->tag('h1', 'Produtos');

$titulos = array('Nome', 'Quantidade', 'Valor', 'Modelo');
$header  = $this->Html->tableHeaders($titulos);
$body    = $this->Html->tableCells($detalhe);

$novoButton = $this->Html->link('Novo', '/produtos/add');


echo $novoButton;
echo $this->Html->tag('table', $header . $body);


?>