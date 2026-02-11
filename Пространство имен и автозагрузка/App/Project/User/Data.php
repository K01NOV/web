<?php
namespace App\Project\User;

class Data
{
    public $name;
    public function __construct(string $name)
    {
        $this->name = $name;
        echo 'Класс ' . __CLASS__ . ' успешно создан! Имя: ' . $this->name . '<br>';
    }
}