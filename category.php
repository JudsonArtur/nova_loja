<?php
    include('header.php');
?>
<section class="category">
    <div class="container">
        <div class="side_category">
            <div class="resume_categories">
                <h3>Impressoras e scanners</h3>
                <ul>
                    <li>
                        <a href="#">
                            Consumíveis e Papel
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Consumíveis e Papel
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Consumíveis e Papel
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Consumíveis e Papel
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Consumíveis e Papel
                        </a>
                    </li>
                </ul>
            </div>
            <div class="fliters">
                <h3>Marcas</h3>
                <ul class="list_marcas">
                    <li style="background-image:url('img/hp.jpg')">
                    </li>
                    <li style="background-image:url('img/epson-2.svg')">
                    </li>
                    <li style="background-image:url('img/kyocera-logo.png')">
                    </li>
                    <li style="background-image:url('img/hp.jpg')">
                    </li>
                    <li style="background-image:url('img/epson-2.svg')">
                    </li>
                    <li style="background-image:url('img/kyocera-logo.png')">
                    </li>
                </ul>
                <h3>Faixa de Preços</h3>
                <ul class="fx_price">
                    <li>
                        <label class="td-ac">
                            <input class="table-check" type="checkbox" id="check-item[]">
                            <span class="check-marc"></span>
                        </label>
                        <span>2.500,00 - 5.000,00</span>
                    </li>
                    <li>
                        <label class="td-ac" >
                            <input class="table-check" type="checkbox" id="check-item[]">
                            <span class="check-marc"></span>
                        </label>
                        <span>5.000,00 - 10.000,00</span>
                    </li>
                    <li>
                        <label class="td-ac">
                            <input class="table-check" type="checkbox" id="check-item[]">
                            <span class="check-marc"></span>
                        </label>
                        <span>10.000,00 - Mais</span>
                    </li>
                </ul>
                <h3>Ordenar por</h3>
                <ul class="fx_price">
                    <li>
                        <label class="td-ac">
                            <input class="table-check" type="checkbox" id="check-item[]">
                            <span class="check-marc"></span>
                        </label>
                        <span>Mais Vendidos</span>
                    </li>
                    <li>
                        <label class="td-ac" >
                            <input class="table-check" type="checkbox" id="check-item[]">
                            <span class="check-marc"></span>
                        </label>
                        <span>Mais Recente</span>
                    </li>
                    <li>
                        <label class="td-ac">
                            <input class="table-check" type="checkbox" id="check-item[]">
                            <span class="check-marc"></span>
                        </label>
                        <span>Nome</span>
                    </li>
                    <li>
                        <label class="td-ac">
                            <input class="table-check" type="checkbox" id="check-item[]">
                            <span class="check-marc"></span>
                        </label>
                        <span>Preço</span>
                    </li>
                </ul>
            </div>
            <h3 style="margin-bottom:10px">Publicidades</h3>
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
        <div class="side_products">
            <ul class="breadcrum" style="padding-left:22px;">
                <li><a>Produtos<span class="ion-ios-arrow-forward"></span></a></li>
                <li><a>Produtos<span class="ion-ios-arrow-forward"></span></a></li>
                <li><a>Produtos<span class="ion-ios-arrow-forward"></span></a></li>
                <li><a>Produtos</a></li>
            </ul>
             <div class="other_filter">
             </div>
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
                <div class="pages_divisor">
                  <div>Paginas : <strong>1</strong>/<span>10</span></div>
                <ul class="paginator">
                   <li><a><span class="ion-ios-arrow-back"></span></a></li>
                   <li><a class="active">1</a></li>
                   <li><a>2</a></li>
                   <li><a>3</a></li>
                   <li><a>4</a></li>
                   <li><a><span class="ion-ios-arrow-forward"></span></a></li>
               </ul>
                </div>
             
            </div>
        </div>
        </div>
    </div>
</section>
<?php
    include('footer.php');
?>