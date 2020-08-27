<?php
// Classe Administrator
class Admins extends User {

  public $edit_article;
  public $delete_article;

  public function getEditRight() {
    return $this->edit_article;
  }

  public function getDeleteRight() {
    return $this->delete_article;
  }
}

?>
