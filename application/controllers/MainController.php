<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

    public function indexAction()
    {
        $this->view->render('Страница практического задания');
    }

    public function SetProductAction()
    {
        if (!empty($_POST)) {
            $this->model->SetProduct($_POST);
        }
    }

    public function GetProductAction()
    {
        $data = $this->model->GetProduct();
        $vars = [
            'data' => $data,
        ];
        $this->view->renderFile('Все товары', $vars);
    }

    public function GetFakeDeletedProductAction()
    {
        $data = $this->model->GetFakeDeletedProduct();
        $vars = [
            'data' => $data,
            'deleted' => true,
        ];
        $this->view->renderFile('Удалённые товары', $vars);
    }

    public function GetNotFakeDeletedProductAction()
    {
        $data = $this->model->GetNotFakeDeletedProduct();
        $vars = [
            'data' => $data,
        ];
        $this->view->renderFile('Удалённые товары', $vars);
    }

    public function UpdateProductAction()
    {
        if (!empty($_POST)) {
            $this->model->UpdateProduct($_POST);
            $this->GetProductAction();
        }
    }

    public function DeleteProductAction()
    {
        if (!empty($_POST)) {
            $this->model->DeleteProduct($_POST);
            $this->GetProductAction();
        }
    }

    public function FakeDeleteProductAction()
    {
        if (!empty($_POST)) {
            $this->model->FakeDeleteProduct($_POST);
            $this->GetProductAction();
        }
    }

    public function SearchProductAction()
    {
        if (!empty($_POST)) {
            $found_products = $this->model->SearchProduct($_POST);
            $vars = [
                'data' => $found_products,
            ];
            $this->view->renderFile('Найденные товары', $vars);
        }
    }

    public function SortProductAction()
    {
        if (!empty($_POST)) {
            $sorted_products = $this->model->SortProduct($_POST);

            $vars = [
                'data' => $sorted_products,
            ];
            $this->view->renderFile('Сортированные товары', $vars);
        }
    }
}