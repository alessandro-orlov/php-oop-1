<?php

class Employee extends User
{

    public $position;
    public $experience;
    public $anni;

    public function getExperience()
    {
        return $this->experience;
    }

    public function setExperience()
    {
        if ($this->anni > 10) {
            $this->experience = 'Team lead';
        } elseif ($this->anni > 5) {
            $this->experience = 'senior';
        } elseif ($this->anni > 3) {
            $this->experience = 'middle';
        } elseif ($this->anni <= 2) {
            $this->experience = 'junior';
        }
    }

    public function getPosition()
    {
        return $this->position;
    }
}
