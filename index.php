<?php require_once('header.php');?>
<section class="slide_section">
    <div class="container">
        <div class="slide_body">
            <div class="slide_item" style="background-image: url('img/bolsa-targus.png')">
                <div class="text_button">
                    <h2>Produto Maquiavelico 2021</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae harum at reiciendis accusantitaque
                        ipsam?</p>
                    <div class="price">
                        <span>AKZ</span><strong>200.000,00</strong>
                    </div>
                    <a class="btn btn_default">Compra Agora</a>
                </div>
                <div class="image">
                    <img src="img/hp-officejet-e-aio-pro-6960-dnw.png">
                </div>
            </div>
            <div class="slide_bullets">
                <span class="slide_item_prev ion-ios-arrow-back" style=""></span>
                <div class="slide_bullets__item active" data-key="0">
                    <svg class="pageCircle">
                        <circle class="pageCircle_bg pageCircle_normal" cx="10" cy="10" r="8"></circle>
                        <circle class="pageCircle_fg pageCircle_normal" cx="10" cy="10" r="8"></circle>
                        <circle class="pageCircle_bg pageCircle_active" cx="10" cy="10" r="8"></circle>
                        <circle class="pageCircle_fg pageCircle_active" cx="10" cy="10" r="8"></circle>
                    </svg>
                </div>
                <div class="slide_bullets__item" data-key="2">
                    <svg class="pageCircle">
                    <circle class="pageCircle_bg pageCircle_normal" cx="10" cy="10" r="8"></circle>
                        <circle class="pageCircle_fg pageCircle_normal" cx="10" cy="10" r="8"></circle>
                        <circle class="pageCircle_bg pageCircle_active" cx="10" cy="10" r="8"></circle>
                        <circle class="pageCircle_fg pageCircle_active" cx="10" cy="10" r="8"></circle>
                    </svg>
                </div>
                <div class="slide_bullets__item" data-key="0">
                    <svg class="pageCircle">
                    <circle class="pageCircle_bg pageCircle_normal" cx="10" cy="10" r="8"></circle>
                        <circle class="pageCircle_fg pageCircle_normal" cx="10" cy="10" r="8"></circle>
                        <circle class="pageCircle_bg pageCircle_active" cx="10" cy="10" r="8"></circle>
                        <circle class="pageCircle_fg pageCircle_active" cx="10" cy="10" r="8"></circle>
                    </svg>
                </div>
                <div class="slide_bullets__item" data-key="2">
                    <svg class="pageCircle">
                    <circle class="pageCircle_bg pageCircle_normal" cx="10" cy="10" r="8"></circle>
                        <circle class="pageCircle_fg pageCircle_normal" cx="10" cy="10" r="8"></circle>
                        <circle class="pageCircle_bg pageCircle_active" cx="10" cy="10" r="8"></circle>
                        <circle class="pageCircle_fg pageCircle_active" cx="10" cy="10" r="8"></circle>
                    </svg>
                </div>
                <span class="slide_item_next ion-ios-arrow-forward"></span>
            </div>
        </div>
    </div>
</section>
<section class="advertising">
    <h2 class="html5_outline">Publicidade</h2>
    <div class="container">
        <a href="#">
            <img src="img/1190x200.jpg" title="sdsd">
        </a>
    </div>
</section>
<section class="product_and_publicity">
    <div class="container">
        <div class="only_product">
            <div class="products">
                <?php for($i = 0; $i < 9; $i++ ){?>
                <article class="product_item">
                    <div class="product_item__header">
                        <span class="flex_center cart_icon icon ion-ios-cart"></span>
                        <span class="flex_center start_icon icon ion-ios-star"></span>
                        <span class="flex_center new_icon icon ion-ios-pricetag"></span>
                    </div>
                    <span class="flex_center descount">
                        <strong>90%</strong><small>OFF</small>
                    </span>
                    <div class="product_item__img">
                        <img src="img/products.png">
                    </div>
                    <div class="price">
                        <div class="new_price"><span class="currency">Akz</span><strong>20.000.000,00</strong></div>
                        <div class="risk_price"><span class="currency">Akz</span><strong>200.000,00</strong></div>
                    </div>
                    <div class="description">
                        <p><a href="#">Maquina Maquiavelica deacordo com o tamanho transparente</a></p>
                    </div>
                    <div class="buttons">
                        <a href="#">Encomendar</a>
                        <a href="#">Visualizar</a>
                    </div>
                </article>
                <?php } ?>
               
            </div>
        </div>
        <div class="publicity">
            <article>
                <h2 class="html5_outline">title</h2>
                <img src="img/d.jpg">
            </article>
            <article>
                <h2 class="html5_outline">title</h2>
                <img src="img/1c86b0c3c02add273b56675fe6407d2dc5daa61f_2-toners-hp.jpg">
            </article>
            <article>
                <h2 class="html5_outline">title</h2>
                <img src="img/1c86b0c3c02add273b56675fe6407d2dc5daa61f_2-toners-hp.jpg">
            </article>
        </div>
    </div>
</section>
<section class="kiquim_trust">
    <div class="container">

        <div class="trust_order">
            <img src="./img/delivery.svg">
            <h4>Encomende</h4>
            <p>Enviamos produtos para toda parte de Angola</p>
        </div>
        <div class="trust_order">
            <span class="icon ion-ios-card"></span>
            <h4>Pagamento Seguro</h4>
            <p>Pague no acto de entrega</p>
        </div>
        <div class="trust_order">
            <span class="icon ion-ios-cube"></span>
            <h4>Mais de 300 Escolha</h4>
            <p>+ de 2 500 Produtos</p>
        </div>
        <div class="trust_order">
            <span class="icon ion-ios-lock"></span>
            <h4>100% de Garantia</h4>
            <p>Substituição a qualquer momento</p>
        </div>
    </div>
</section>
<?php 
    require_once('footer.php');
 ?>