<?php
include_once "DBConnect.php";
include_once "Author.php";


class Authorcontrol
{
    private $dbConnect;
    private $table;

    public function __construct()
    {
        $this->table = "authors";
        $this->dbConnect = new DBConnect();

    }


    public function create($author)
    {
        $sql = "INSERT INTO $this->table(`first_name`,`last_name`, `email`,`birthdate`) values (:fn,:ln,:email,:dob)";
        $stmt = $this->dbConnect->connect()->prepare($sql);
        $stmt->bindParam(":fn", $author->getFirstName());
        $stmt->bindParam(":ln", $author->getLastName());
        $stmt->bindParam(":email", $author->getEmail());
        $stmt->bindParam(":dob", $author->getBirthdate());
        $stmt->execute();

    }


    public function delete($id)
    {
        $sql = "delete from authors where id=" . $id;
        $stmt = $this->dbConnect->connect()->query($sql);
        $stmt->execute();
    }

    public function calldelete($id)
    {
        $id = $_REQUEST['id'];
        $author = $this->delete($id);
        header('location: index.php');

    }

    public function getByID($id)
    {
        $authors = $this->getAll();
        foreach ($authors as $author) {
            if ($author->getId() == $id) {
                return $author;
            }
        }
    }

    public function updateAuthor($id, $author)
    {
        $sql = "UPDATE $this->table SET `first_name`=:fn, `last_name`=:ln, `email`=:email, `birthdate`=:dob 
        where `id`=". $id;
        $stmt = $this->dbConnect->connect()->prepare($sql);
        $stmt->bindParam(":fn", $author->getFirstName());
        $stmt->bindParam(":ln", $author->getLastName());
        $stmt->bindParam(":email", $author->getEmail());
        $stmt->bindParam(":dob", $author->getBirthdate());
        $stmt->execute();


    }
//    public function callUpdateAuthor($author){
//        $au= $this->updateAuthor($author);
//
//    }


    public function getAll()
    {
        $sql = "select * from $this->table";
        $stmt = $this->dbConnect->connect()->query($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $this->convertToObject($data);

    }

    public function convertToObject($data)
    {
        $authors = [];
        foreach ($data as $item) {
            $author = new Author($item->first_name, $item->last_name, $item->email, $item->birthdate);
            $author->setId($item->id);
            array_push($authors, $author);
        }
        return $authors;
    }

    public function showAllAuthor()
    {
        $authors = $this->getAll();
        include_once 'views/list.php';

    }


}