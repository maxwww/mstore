<?php

namespace Mystore\Controllers;

use Msoroka\Framework\Controller\Controller;
use Msoroka\Framework\Request\Request;
use Msoroka\Framework\Response\JsonResponse;
use Msoroka\Framework\Response\RedirectResponse;
use Msoroka\Framework\Router\Router;
use Msoroka\Framework\Validation\Validator;

/**
 * Class IndexController
 * @package Mystore
 */
class IndexController extends Controller
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
       return $this->render('product', [
           'id' => $id,
       ]);
    }

}