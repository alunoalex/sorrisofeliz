<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="slider-area">
            <!-- Slider -->
            <div class="block-slider block-slider4">
                <ul class="" id="bxslider-home4">
                    <li>
                        <img src="/res/site/img/dhdhdddjdjdjdjdjddjdjdjdjdjjdjdjdjdjdjd.png" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                                Sorriso <span class="primary"><strong>Feliz</strong></span>
                            </h2>
                            <h4 class="caption subtitle">Tratamentos</h4>
                            <a class="caption button-radius" href="#"><span class="icon"></span>Comprar</a>
                        </div>
                    </li>
                    <li><img src="/res/site/img/ddhdhdhdh.jpg" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                                Planos<span class="primary">50% <strong>off</strong></span>
                            </h2>
                            <h4 class="caption subtitle">Tratamentos</h4>
                            <a class="caption button-radius" href="#"><span class="icon"></span>Comprar</a>
                        </div>
                    </li>
                    <li><img src="/res/site/img/ddhdhdhdh.jpg" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                              Tratamento<span class="primary">Procedimento<strong></strong></span>
                            </h2>
                            <h4 class="caption subtitle">Select Item</h4>
                            <a class="caption button-radius" href="#"><span class="icon"></span>Comprar</a>
                        </div>
                    </li>
                    <li><img src="/res/site/img/vnvnfhdhdhd.jpg" alt="Slide">
                        <div class="caption-group">
                          <h2 class="caption title">
                                Apple <span class="primary">Store <strong>Ipod</strong></span>
                            </h2>
                            <h4 class="caption subtitle">& Phone</h4>
                            <a class="caption button-radius" href="#"><span class="icon"></span>Comprar</a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>Tratamentos</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Aparelhos</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Proteses</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>Implantes</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Produtos</h2>
                        <div class="product-carousel">
                            <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>

                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
                                    <div class="product-hover">
                                        <a href="/cart/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/add" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Comprar</a>
                                        <a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="view-details-link"><i class="fa fa-link"></i> Ver Detalhes</a>
                                    </div>
                                </div>
                                
                                <h2><a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>R$<?php echo formatPrice($value1["vlprice"]); ?></ins>
                                </div> 
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">

                            <img src="/res/site/img/oralnsgdgdgdgdgd.png" alt="">
                            <img src="/res/site/img/signghhhhhh.png" alt="">
                            <img src="/res/site/img/Sorrihjjgffff.png" alt="">
                            <img src="/res/site/img/colgatedssssssddddd.png" alt="">                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->