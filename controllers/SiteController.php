<?php

/**
 * Контроллер CartController
 */
class SiteController
{

    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {

        // Список новых товаров
        $allProducts = Product::getAllProducts(6);

        // Подключаем вид
        require_once(ROOT . '/views/site/index.php');
        return true;
    }
  
    
}

  