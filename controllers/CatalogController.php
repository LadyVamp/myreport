<?php

/**
 * Контроллер CatalogController
 * Каталог товаров
 */
class CatalogController
{

    /**
     * Action для страницы "Каталог товаров"
     */
    public function actionIndex()
    {

        // Список всех товаров
        $allProducts = Product::getAllProducts(100);

        // Подключаем вид
        require_once(ROOT . '/views/catalog/index.php');
        return true;
    }

}
