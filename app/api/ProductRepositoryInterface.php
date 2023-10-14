<?php

namespace App\api;

interface ProductRepositoryInterface
{
    public function save($product);

    public function update($product);

    public function delete($product);
}