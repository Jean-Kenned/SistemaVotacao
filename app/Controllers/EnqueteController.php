<?php 

require __DIR__."/../Models/EnqueteModel.php";
require __DIR__."/../Views/ViewManager.php";
require __DIR__."/../Helpers.php";
include __DIR__."/../Opcao.php";

class EnqueteController {
    public function index(){
        $enquetes = EnqueteModel::selectAll();
        $viewmanager = new ViewManager('home.php');
        $viewmanager->assign('enquetes', $enquetes);
        echo $viewmanager->render();
    }

    public function create(){
        $viewmanager = new ViewManager('create.php');
        echo $viewmanager->render();
    }
 

    public function store(){
        $titulo = $_POST['titulo'];
        $numberOptions = $_POST['numberOptions'];

        $horaInicio = $_POST['horaInicio'];
        $dataInicio = $_POST['dataInicio'];

        $horaTermino = $_POST['horaTermino'];
        $dataTermino = $_POST['dataTermino'];
        
        $dataInicio = Helpers::formatData($dataInicio,$horaInicio);
        $dataTermino =  Helpers::formatData($dataTermino,$horaTermino);

        $opcoes = array();

        for($i=0; $i < $numberOptions; $i++){
            $nameOption = "opcao".($i+1);
            $valueOption = $_POST[$nameOption];
            $opcao = new Opcao($valueOption,0);
            array_push($opcoes,$opcao);
        }

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