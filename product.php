<?php include_once('header.php'); ?>
<section class="product">
    <div class="container">
        <ul class="breadcrum">
            <li><a>Produtos<span class="ion-ios-arrow-forward"></span></a></li>
            <li><a>Produtos<span class="ion-ios-arrow-forward"></span></a></li>
            <li><a>Produtos<span class="ion-ios-arrow-forward"></span></a></li>
            <li><a>Produtos</a></li>
        </ul>
        <div class="pdt_img__sige">
            <div class="images">
                <img src="img/hp-officejet-e-aio-pro-6960-dnw.png">
            </div>
            <div class="other_images">
                <a><img src="img/hp-officejet-e-aio-pro-6960-dnw.png"></a>
                <a><img src="img/hp-officejet-e-aio-pro-6960-dnw.png"></a>
                <a><img src="img/hp-officejet-e-aio-pro-6960-dnw.png"></a>
                <a><img src="img/hp-officejet-e-aio-pro-6960-dnw.png"></a>
                <a><img src="img/hp-officejet-e-aio-pro-6960-dnw.png"></a>
                <a><img src="img/hp-officejet-e-aio-pro-6960-dnw.png"></a>
                <a><img src="img/hp-officejet-e-aio-pro-6960-dnw.png"></a>
            </div>
        </div>
        <div class="product_content">
            <span style="font-size:.9rem;">Categoria</span>
            <h2>Maquina Maquiavelica De Acordo.</h2>
            <div class="description">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem possimus voluptates quam, quae quia
                    nulla repellat nemo aut. Ab nihil odit necessitatibus ex molestias expedita neque consequatur.
                    Officiis, culpa voluptas.
                </p>
            </div>
            <a class="hidden_desc">Mais detalhes</a>
            <div class="ref">
                <strong>Referência : </strong><span>3456U234</span>
            </div>
            <div style="display:flex; align-items:center;margin-bottom:40px">
                Quantidade :
                <div style="display:flex; padding-left:8px">
                    <button class="btn add_btn"><span class="ion-ios-remove"></span></button>
                    <input type="number" value="1">
                    <button class="btn add_btn"><span class="ion-ios-add"></span></button>
                </div>
            </div>
            <div class="buttonsx">
                <span class="btn btn_default">Adicionar ao Carrinho</span>
                <a class="btn btn_buy">Comprar Agora</a>
            </div>
            <div class="social share">
                <span>Compartilhe : </span>
                <a class="flex_center" href="#"><span class="ion-logo-facebook"></span></a>
                <a class="flex_center" href="#"><span class="ion-logo-whatsapp"></span></a>
                <a class="flex_center" href="#"><span class="ion-logo-instagram"></span></a>
                <a class="flex_center" href="#"><span class="ion-logo-twitter"></span></a>
            </div>
        </div>
    </div>
    <div class="container" style="margin-bottom:50px">
        <div class="tab_header">
            <ul class="tab_menu">
                <li class="active" data-tab="tab_description">Descrição</li>
                <li data-tab="tab_avaluetions">Avaliações</li>
                <li data-tab="tab_other">Informações Adicionais </li>
            </ul>
        </div>
        <div class="tab_content active" id="tab_description">
            <div class="table">
                <p><span>LAN</span><span> 10/100 Base-TX</span></p>
                <p><span>LARGURA</span><span>23 cm</span></p>
                <p><span>ALTURA</span><span>14 cm</span></p>
                <p><span>TECNOLOGIA DE IMPRESSÃO</span><span>LASER</span></p>
                <p><span>VELOCIDADE DE PROCESSADOR</span><span>800 MHz</span></p>
                <p><span>CONSUMO MENSAL</span><span>ATÉ 40.000 PÁGINAS POR MÊS</span></p>
                <p><span>Formato</span><span>A4, A5, A6, B5 (JIS), B6 (JIS), Postal (JIS), Postal duplo (JIS), Envelope
                        Monarca, Envelope B5, Envelope C5, Envelope DL, A5-R</span></p>
                <p><span>CABO INCLUÍDO</span><span>SIM, 1 CABO USB</span></p>
            </div>

        </div>
        <div class="tab_content " id="tab_avaluetions">
            <div class="av_body">
                <form class="av_coment">
                    <strong>Adicionar um comentario</strong>
                    <div class="avs">
                        <strong>Sua Avaliação</strong>:
                        <ul>
                            <li>
                                <input type="hidden" id="st1">
                                <label for="st1"><span class="icon ion-ios-star-outline"></span></label>
                            </li>
                            <li>
                                <input type="hidden" id="st2">
                                <label for="st2"><span class="icon ion-ios-star-outline"></span></label>
                            </li>
                            <li>
                                <input type="hidden" id="st3">
                                <label for="st3"><span class="icon ion-ios-star-outline"></span></label>
                            </li>
                            <li>
                                <input type="hidden" id="st4">
                                <label for="st4"><span class="icon ion-ios-star-outline"></span></label>
                            </li>
                            <li>
                                <input type="hidden" id="st5">
                                <label for="st5"><span class="icon ion-ios-star-outline"></span></label>
                            </li>
                        </ul>
                    </div>
                    <div class="forms">
                        <input type="text" name="nome" placeholder="Nome*">
                        <input type="email" name="email" placeholder="O email*">
                        <textarea name="msg" placeholder="" rows="6"></textarea>
                        <button class="btn btn_default">Enviar Comentário</button>
                    </div>

                </form>
                <div class="av_coments">
                    <strong>Comentários</strong>

                    <div class="comments">
                        <div class="comment">
                            <strong>judsoncapepa@gmail.com</strong> 5 <span style="color:#103267"
                                class="ion-ios-star"></span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus suscipit</p>
                        </div>
                        <div class="comment">
                            <strong>judsoncapepa@gmail.com</strong> 2 <span style="color:#103267"
                                class="ion-ios-star"></span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus suscipit</p>
                        </div>
                        <div class="comment">
                            <strong>judsoncapepa@gmail.com</strong> 3 <span style="color:#103267"
                                class="ion-ios-star"></span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus suscipit</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="tab_content" id="tab_other">

            <h2>Formas e Processamento de entrega</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae vitae accusamus sed obcaecati,
                dolore debitis quaerat, officiis molestiae, excepturi sunt unde rerum magni nulla esse consectetur
                soluta provident consequuntur. Nihil.</p>

            <h2>Pré-pagamento</h2>
            <p>O pagamento antecipado de todas as mercadorias é realizado no valor de 50% do valor do pedido. Depois de
                fazer o pedido sobre a questão do pré-pagamento, o gerente informará você.</p>
            <h2>Outras Informaçoes</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae vitae accusamus sed obcaecati,
                dolore debitis quaerat, officiis molestiae, excepturi sunt unde rerum magni nulla esse consectetur
                soluta provident consequuntur. Nihil.</p>
        </div>
    </div>
</section>
<section  class="others_products">
    <div class="container" style="flex-direction:column;">
         <header>
             <h2>Productos Relacionados</h2>
         </header>
        <div class="products" >
        <?php for($i = 0; $i < 3; $i++){?>
            <div class="product_item">
                <div class="product_item__header">
                    <span class="flex_center cart_icon icon ion-ios-cart"></span>
                    <span class="flex_center start_icon icon ion-ios-star"></span>
                    <span class="flex_center new_icon icon ion-ios-pricetag"></span>
                </div>
                <div class="product_item__img">
                    <img src="img/products.png">
                </div>
                <div class="price">
                    <div class="new_price"><span class="currency">Akz</span><strong>2.000.000,00</strong></div>
                    <div class="risk_price"><span class="currency">Akz</span><strong>200.000,00</strong></div>
                </div>
                <div class="description">
                    <p>Maquina Maquiavelica</p>
                </div>
                <div class="buttons">
                    <a href="#">Comprar</a>
                    <a href="#">Visualizar</a>
                </div>
        </div>
        <?php } ?>
        </div>
    </div>
</section>
<?php include_once('footer.php'); ?>