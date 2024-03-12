<?php
namespace B\Kt\controller;
use B\Kt\model\Pet;
use eftec\bladeone\BladeOne;
// require_once "app/model/pet.php";
class PetController extends Pet{
    public $view;
    function __construct()
    {
        $view="app/view";
        $cache="app/cache";
        $this->view=new BladeOne($view,$cache,BladeOne::MODE_AUTO);
    }
function getPet(){
    $pet=$this->getAllPet();
    // include "app/view/pet/list.php";
    return $this->view->run("pet.show",['pet'=>$pet]);
}
function add(){
    return $this->view->run('pet.add');
    // include "app/view/pet/add.php";
}
function addPets(){
    $this->addPet($_POST['ten'],$_POST['loai'],$_POST['mota'],$_POST['gia']);
    header("location:index.php");
}
function addPet($ten,$loai,$mota,$gia){
    
    $this->insertPet($ten,$loai,$mota,$gia);
}
function updateView(){
    $id=isset($_GET['id'])?$_GET['id']:null;
    $pet=$this->getOnePet($id);
    include "app/view/pet/update.php";

}
function postUpdatePet(){
    $id=$_POST['id'];
    $ten=$_POST['ten'];
    $loai=$_POST['loai'];
    $mota=$_POST['mota'];
    $soluong=$_POST['gia'];
    $this-> updatePet($id,$ten,$loai,$mota,$soluong);
    header("location:index.php");
}
function postDeletePet(){
    $id=isset($_GET['id'])?$_GET['id']:null;
    $this->deletePet($id);
    header("location:index.php");
}
}
?>