<!--pos.:    views/site/index    -->
<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-12 padding-right">
                <div class="features_items"><!--new_items-->
                    <h2 class="title text-center">Страницы</h2>
                    <br/>

                    <?php foreach ($newProducts as $product): ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <p>
                                            <a href="/product/<?php echo $product['id']; ?>">
                                                <?php echo $product['name']; ?>
                                            </a>
                                        </p>
                                        <br/>
                                        <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $product['id']; ?>"><i class="fa fa-star"></i>в Мой отчет</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div><!--new_items-->

                
            </div>

        </div>
    </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>