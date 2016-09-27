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
        $newProducts = Product::getNewProducts(6);

        // Подключаем вид
        require_once(ROOT . '/views/site/index.php');
        return true;
    }
  
    
       /**
     * чиню баг actionIndexcsite
     */
    public function actionIndexcsite()
    {
        echo "а тут он орал про actionIndexcsite";
        return true;
    }
    
        /**
     * чиню баг actionIndexrsite
     */
    public function actionIndexrsite()
    {
         echo "а тут он орал про actionIndexrsite";
        return true;
    }    
    
}

  