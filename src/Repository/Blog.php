<?php

declare(strict_types=1);

namespace App\Repository;



use App\Entity\BlogEntity;

interface Blog{

public function find(string $id): BlogEntity;
public function create(string $titre): BlogEntity;


}