<?php

namespace ProyectoDbPhp\Repositories;

use ProyectoDbPhp\Core\BaseRepository;

class HomeRepository extends BaseRepository
{
    public function getHomeData()
    {
        return [
            'titulo' => 'Home',
            'content' => 'Welcome to the home page!',
            'testDataBase' => $this->getTestDataBase()
        ];
    }

    public function getTestDataBase()
    {
        $sql = "SELECT VERSION()";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }
}