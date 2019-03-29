<?php
$form = $this->Form->create('Produto');
$form .= $this->Form->hidden('Produto.id');
$form .= $this->Form->input('Produto.nome');
$form .= $this->Form->input('Produto.quantidade');
$form .= $this->Form->input('Produto.valor');
$form .= $this->Form->input('Produto.modelo');
$form .= $this->Form->submit('Gravar');
$form .= $this->Form->end();


echo $this->Html->tag('h1', 'Alterar Produto');
echo $form;

?>