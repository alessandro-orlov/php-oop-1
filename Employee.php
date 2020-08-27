<?php
class Employee extends User {

  public $position;
  public $experience = 0;

  public function getPosition() {
    return $this->position;
  }

  public function setExperience($anni) {
    if ($anni > 10) {
      $this->experience = 'Team lead';
    } elseif ($anni > 5) {
      $this->experience = 'senior';
    } elseif ($anni > 3) {
      $this->experience = 'middle';
    } elseif ($anni <= 2) {
      $this->experience = 'junior';
    }
  }

  public function getExperience() {
    return $this->experience;
  }
}
?>
