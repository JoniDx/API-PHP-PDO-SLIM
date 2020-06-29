<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app = new \Slim\App;
//rutas todos los contactos
$app->get('/api/contactos', function(Request $req, Response $res){
  $query ="SELECT * FROM tblp_agenda";
  try {

    $db = new db();
    $db = $db->conect();
    $sql = $db->query($query);

    if ($sql->rowCount() ) {
      $contactos = $sql->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($contactos);
    }else {
      echo json_encode("nop");
    }
    $sql = null;
    $db = null;
  } catch (PDOException $e) {
    echo "string";
    echo '{"error":{"text":'.$e->getMessage().'}}';
  }
});

$app->post('/api/contactos/nuevo', function(Request $req, Response $res){
  $nombre =  $req->getParam('nombre');
  $numero =  $req->getParam('numero');
  $descripcion =  $req->getParam('descripcion');

  $query = "INSERT INTO tblp_agenda (nombre,numero,descripcion) VALUES (:nombre, :numero, :descripcion)";

  try {

    $db = new db();
    $db = $db->conect();
    $sql = $db->prepare($query);
    $sql->bindParam(':nombre',$nombre);
    $sql->bindParam(':numero',$numero);
    $sql->bindParam(':descripcion',$descripcion);

    $sql->execute();

    echo json_encode("EXITO");



    $sql = null;
    $db = null;
  } catch (PDOException $e) {
    echo "string";
    echo '{"error":{"text":'.$e->getMessage().'}}';
  }
});

$app->put('/api/contactos/update/{id}', function(Request $req, Response $res){
  $id = $req->getAttribute('id');

  $nombre =  $req->getParam('nombre');
  $numero =  $req->getParam('numero');
  $descripcion =  $req->getParam('descripcion');


  $query = "UPDATE tblp_agenda SET
  nombre = :nombre,
  numero = :numero,
  descripcion = :descripcion
  WHERE id = $id ";


  try {

    $db = new db();
    $db = $db->conect();
    $sql = $db->prepare($query);
    $sql->bindParam(':nombre',$nombre);
    $sql->bindParam(':numero',$numero);
    $sql->bindParam(':descripcion',$descripcion);

    $sql->execute();

    echo json_encode("ACTUALIZADO");

    $sql = null;
    $db = null;
  } catch (PDOException $e) {
    echo "string";
    echo '{"error":{"text":'.$e->getMessage().'}}';
  }
});

$app->delete('/api/contactos/borrar/{id}', function(Request $req, Response $res){
  $id = $req->getAttribute('id');

  $query = "DELETE FROM tblp_agenda WHERE id = $id";

  try {

    $db = new db();
    $db = $db->conect();
    $sql = $db->prepare($query);
    $sql->bindParam(':nombre',$nombre);
    $sql->bindParam(':numero',$numero);
    $sql->bindParam(':descripcion',$descripcion);

    $sql->execute();

    echo json_encode("BORRRADO");

    $sql = null;
    $db = null;
  } catch (PDOException $e) {
    echo "string";
    echo '{"error":{"text":'.$e->getMessage().'}}';
  }
});
