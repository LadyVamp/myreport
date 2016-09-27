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

        // Список всех товаров
        $allProducts = Product::getAllProducts(6);

        // Подключаем вид
        require_once(ROOT . '/views/site/index.php');
        return true;
    }
  
    
}

  