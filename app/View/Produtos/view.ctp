<?php


$view = $this->Html->tag('h2', 'Nome');
$view .= $this->Html->para('',$this->request->data['Produto']['nome']);
$view .= $this->Html->tag('h2', 'quantidade');
$view .= $this->Html->para('',$this->request->data['Produto']['quantidade']);
$view .= $this->Html->tag('h2', 'Valor');
$view .= $this->Html->para('',$this->request->data['Produto']['valor']);

$voltarLink = $this->Html->link('voltar', '/produtos');


echo $voltarLink;
echo $this->Html->tag('h1', 'Visualizar');
echo $view;

?>