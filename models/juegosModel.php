<?php


class JuegosModel{

    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juegos;charset=utf8', 'root', '');
    }

    function getJuegos(){
        $query = $this->db->prepare( 'SELECT * FROM juegos');
        $query->execute();
        $juegos = $query->fetchAll(PDO::FETCH_OBJ);
        return $juegos;
    }
    function getCategories(){
        $query = $this->db->prepare('SELECT a.*, b.* FROM juegos a LEFT JOIN categorias b ON a.id_categorie = b.id_categorie');
        $query->execute();
        $categoriesT = $query->fetchAll(PDO::FETCH_OBJ);
        return $categoriesT;
    }

    function getJuego($id){
        $sentencia = $this->db->prepare( 'SELECT * FROM juegos WHERE id=?');
        $sentencia->execute(array($id));
        $tarea = $sentencia->fetch(PDO::FETCH_OBJ);
        return $tarea;
    }

    function insertGame($name, $position, $description, $date, $img = null, $categorie, $id_categorie){
        $pathImg = null;
        if($img){
            $pathImg = $this->uploadImg($img);
        }
        if($pathImg == null){
            $sentencia = $this->db->prepare("INSERT INTO juegos(id, name, release_date, categories, description, id_categorie) VALUES(?, ?, ?, ?, ?, ?)");
            $sentencia->execute(array($position, $name, $date, $categorie, $description, $id_categorie));
        }else{
            $sentencia = $this->db->prepare("INSERT INTO juegos(id, name, release_date, categories, description, url_img, id_categorie) VALUES(?, ?, ?, ?, ?, ?, ?)");
            $sentencia->execute(array($position, $name, $date, $categorie, $description, $pathImg, $id_categorie));
        }

    }

    private function uploadImg($image){
        $target = 'img/games/' . uniqid() . '.jpg';
        move_uploaded_file($image, $target);
        return $target;
    }

    function deleteGameFromDB($id){
        $sentencia = $this->db->prepare("DELETE FROM juegos WHERE id=?");
        $sentencia->execute(array($id));
    }

    function editGame($name, $id, $date, $categorie, $description, $id_categorie){
        $sentencia = $this->db->prepare("UPDATE juegos SET name = ?, release_date = ?, categories = ?, description = ?, id_categorie = ? WHERE id=?");
        $sentencia->execute(array($name, $date, $categorie, $description, $id_categorie, $id));
    }
}