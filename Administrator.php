<?php
// Classe Administrator
class Admin extends User {

  public $edit_article;
  public $delete_article;

  public function editRight() {
    return $this->edit_article;
  }

  public function deleteRight() {
    return $this->delete_article;
  }
}

?>
