<?php

session_start();
require "./repository/FilmesRepositoryPDO.php";
require "./model/Filme.php";

class FilmesController{
        public function index(){

                $filmesRepository = new FilmesReporsitoryPDO();
                return $filmesRepository ->ListarTodos();

        }

        public function save($request){

$filmesReporsitory = new FilmesReporsitoryPDO();
$filme = (object) $request;

$upload = $this->savePoster($_FILES);

if(gettype($upload)=="string"){
        $filme->poster = $upload;
}


if ($filmesReporsitory->salvar($filme))
        $_SESSION["msg"] = "Filme cadastrado com sucesso";
else
$_SESSION["msg"] = "Falha ao cadastrar filme";


header("Location:/");

        }

        private function savePoster($file){
                $posterDir = "imagem/posters/";
                $posterPath = $posterDir . basename($file["poster_file"]["name"]);
                $posterTmp = $file["poster_file"]["tmp_name"];
                if(move_uploaded_file($posterTmp, $posterPath)){
                     return $posterPath;
     
                }else{
                        return false;
                };
                
             
                
   }

   public function favorite(int $id){
           $filmesReporsitory = new FilmesReporsitoryPDO();
           $result = ['success' => $filmesReporsitory->favoritar($id)];
           header('content-type: application/json');
           echo json_encode($result);
        }
}

