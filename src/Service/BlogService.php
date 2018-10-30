<?php
namespace App\Service;

use App\Entity\Blog as BlogEntity;
use App\Repository\Blog;
use App\Validator\Validator;

class PostService
{
private $validator;
private $repository;

public function __construct(Validator $validator, Blog $blogRepository)
{
$this->validator = $validator;
$this->repository = $blogRepository;
}

public function find(string $value): BlogEntity
{
$this->validator->validate($value);
// if ($this->cache->has($value)) {
//     return $this->cache->get($value);
// }
$post = $this->repository->find($value);
// $this->cache->set($value, $user);

return $post;
}
}