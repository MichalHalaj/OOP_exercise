<?php
interface Author {
    public function setAuthorPrivileges($array);

    public function getAuthorPrivileges();
}

interface Editor {
    public function setAuthorPrivileges($array);

    public function getAuthorPrivileges();
}

class User{
    protected $username;

    public function setName($username){
        $this->username = $username;
    }

    public function getName(){
        return $this->username;
    }
}

class AuthorEdit extends User implements Author,Editor {
    private $authorPrivilegesArray = array();
    private $editorPrivileges = array();
    public function setAuthorPrivileges($authorPrivilegesArray){
        $this->authorPrivilegesArray = $authorPrivilegesArray;
    }

    public function getAuthorPrivileges(){
        return $this->authorPrivilegesArray;
    }

    public function setEditorPrivileges($editorPrivileges){
        $this->editorPrivileges = $editorPrivileges;
    }

    public function getEditorPrivileges(){
        return $this->editorPrivileges;
    }
}

$user1 = new AuthorEdit();
$user1->setName("Michal");
$user1->setAuthorPrivileges(array("písať text", "mazať", "pridávať komentáre"));
$user1->setEditorPrivileges(array("zmazať článok", "pridať ďalšieho redaktora", "propagovať príspevok"));

$userName = $user1->getName();
$userPrivileges = array_merge($user1->getAuthorPrivileges(), $user1->getEditorPrivileges());
echo "<strong>Používateľ </strong> " . $userName . " <strong>Má možnosti: </strong> " . implode(", ", $userPrivileges);

