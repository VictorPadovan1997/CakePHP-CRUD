<?php


App::uses('appController', 'Controller');


class  ProdutosController extends AppController
{
    public function index()
    {
        $fields = array('Produto.id', 'Produto.nome', 'Produto.quantidade', 'Produto.valor', 'Produto.modelo' );
        $order = array('Produto.nome' => 'asc');
        $group = array();
        $conditions = array();
        $produtos = $this->Produto->find('all', compact('fields', 'order', 'conditions'));

        $this->set('produtos', $produtos);
        //Pega informações e encaminha para View
    }

    public function add(){
        //Verifica se o campo não está vazio
        if (!empty($this->request->data)){
            $this->Produto->create();
            if ($this->Produto->save($this->request->data)){
                $this->Flash->set('Produto Gravado');
                $this->redirect('/produtos');
            }
        }
    }

    public function edit($id = null) {

        if (!empty($this->request->data)){
            if ($this->Produto->save($this->request->data)){
                $this->Flash->set('Produto Alterado');
                $this->redirect('/produtos');
            }
        }else {
            $fields = array('Produto.id','Produto.nome', 'Produto.quantidade', 'Produto.valor', 'Produto.valor');
            $conditions = array('Produto.id' => $id);
            $this->request->data = $this->Produto->find('first', compact('fields', 'conditions'));
        }
    }
    public function view($id = null) {

        $fields = array('Produto.id','Produto.nome', 'Produto.quantidade', 'Produto.valor', 'Produto.valor');
            $conditions = array('Produto.id' => $id);
            $this->request->data = $this->Produto->find('first', compact('fields', 'conditions'));
        
    }

    public function delete($id)
    {
        $this->Produto->delete($id);
        $this->Flash->set('Excluido');
        $this->redirect('/produtos');
    }
}


 