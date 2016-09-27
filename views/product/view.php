<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-12 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="row">
                        <div class="col-sm-10">
                         <h2><?php echo $product['name']; ?></h2>
                            <div class="view-product">
                            <br/>
                            <h4>Заголовок</h4>
                            <?php echo $product['description']; ?>
                            </div>
                            <br/>
                            <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $product['id']; ?>"><i class="fa fa-star"></i>Добавить в Мой отчет</a>
                        </div>
                        <div class="col-sm-2">
                        </div>
                    </div>
                </div><!--/product-details-->

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>