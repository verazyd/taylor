<?php
/**
 * Created by PhpStorm.
 * User: scorexing
 * Date: 7/8/14
 * Time: 1:45 PM
 */

namespace Acme\Repo;


interface TestimonialRepoInterface {
    public function getAll();
    public function getById($id);
} 