<?php

class HomeController
{
    public function index()
    {
        // Logic for the home page
        // You can fetch data from models and pass it to the view

        // Example: Fetch products from the database
        $productModel = new ProductModel();
        $products = $productModel->getAllProducts();

        // Example: Render the view and pass the data
        require 'views/home.php';
    }
}
