<?php 

require __DIR__."/../Models/EnqueteModel.php";
require __DIR__."/../Views/ViewManager.php";

class EnqueteController {
    public function index(){
        $enquetes = EnqueteModel::selectAll();
        $viewmanager = new ViewManager('home.php');
        $viewmanager->assign('enquetes', $enquetes);
        echo $viewmanager->render($enquetes);
    }

    public function store(){
        $titulo = $_POST['titulo'];
        $dataInicio = $_POST['dataInicio'];
        $dataTermino = $_POST['dataTermino'];
        $opcoes = $_POST['opcoes'];

        if (EnqueteModel::save($titulo, $dataInicio, $dataTermino, $opcoes)){
            header('Location: /');
            exit;
        }
    }
 
 
    public function update(){
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $dataInicio = $_POST['dataInicio'];
        $dataTermino = $_POST['dataTermino'];
        $opcoes = $_POST['opcoes'];

        if (EnqueteModel::update($titulo, $dataInicio, $dataTermino, $opcoes, $id)){
            header('Location: /');
            exit;
        }
    }
 
    public function remove($id){
        if (EnqueteModel::remove($id)){
            header('Location: /');
            exit;
        }
    }
}