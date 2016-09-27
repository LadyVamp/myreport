<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Главная</title>
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">
        <link href="/template/css/font-awesome.min.css" rel="stylesheet">
        <link href="/template/css/prettyPhoto.css" rel="stylesheet">
        <link href="/template/css/animate.css" rel="stylesheet">
        
        <!--for Materialize-->
            <!--Import Google Icon Font-->
            <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="/template/css/materialize.css"  media="screen,projection"/>
            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--/for Materialize-->
                
        <link href="/template/css/main.css" rel="stylesheet">
        <link href="/template/css/responsive.css" rel="stylesheet">
        <link href="/template/images/home/favicon.ico" rel="icon" type="image/x-icon" />
        
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="/template/images/ico/favicon.ico">      
    </head><!--/head-->

    <body>       
        <div class="page-wrapper">
             <header id="header"><!--header-->
                <div class="header-middle"><!--header-middle-->
                    <div class="container">
                        <div class="row">
                            <!--<div class="col-sm-4"></div>-->
                            <div class="col-sm-12">
                                <div class="shop-menu pull-left">
       
                                </div>
                                <div class="shop-menu pull-right">
                                    <ul class="nav navbar-nav navbar-fixed">
                                        <li><a href="/cart">
                                                <i class="fa fa-star"></i> Мой отчет
                                                (<span id="cart-count"><?php echo Cart::countItems(); ?></span>)
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/header-middle-->


                <div class="header-bottom"><!--header-bottom-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                              
                                <nav>
                                  <div class="nav-wrapper">
                                    <div class="logo pull-left">
                                        <a href="/">Главная</a>
                                    </div>

                                  </div>
                                </nav>
                            </div>
                            
                        </div>
                    </div>            
                </div><!--/header-bottom-->




            </header><!--/header-->