<?php

namespace Mystore;

use Msoroka\Framework\Request\Request;
use Msoroka\Framework\Response\JsonResponse;
use Msoroka\Framework\Response\RedirectResponse;
use Msoroka\Framework\Router\Router;

/**
 * Class IndexController
 * @package Mystore
 */
class IndexController
{
    /**
     * @return RedirectResponse
     */
    public function index()
    {
        $response = new RedirectResponse('/product/1');
        return $response;
    }

    /**
     * @param $id
     */
    public function getProduct($id)
    {
        echo sprintf("Hi! You requested %s with color", $id);
    }

}