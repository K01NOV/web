<?php
namespace App\Project;

use App\Project\User\Data;
use App\Resource\Controller\Page as PageController;
use App\Resource\Model\Page as PageModel;
class Test
{
    public function __construct()
    {
        $data1 = new Data('user1');
        $data2 = new Data('user2');
        $data3 = new Data('user3');
        $pageController = new PageController();
        $pageModel = new PageModel();
        echo 'Класс ' . __CLASS__ . ' успешно создан!<br>';
    }
}