<?php include_once('header.php');?>
<div class="container" style="flex-direction:column;">
    <div class="bread_process">
        <ul>
            <li class="active_bread">
                <p>Carrinho</p>
            </li>
            <li>
                <p>Dados do Cliente</p>
            </li>
            <li>
                <p>Finalizar o Pedido</p>
            </li>
            <li>
            </li>
        </ul>
    </div>
</div>
<section class="product_list">
    <div class="container">
        <div class="table" role="table">
            <div class="table_header" role="row">
                <span class="col col_1" role="cell">Item Selecionado</span>
                <span class="col col_2" role="cell">Preço</span>
                <span class="col col_3" role="cell">Quantidade</span>
                <span class="col col_4" role="cell">Subtotal</span>
                <span class="col col_5" role="cell">Opção</span>
            </div>
            <div class="table_tbody">
                <?php for($i = 0; $i < 4; $i++): ?>
                <div class="table_row" role="row">
                    <span class="col col_1" role="cell">
                        <label class="td-ac">
                            <input class="table-check" type="checkbox" id="check-item[]">
                            <span class="check-marc"></span>
                        </label>
                        <img src="img/hp-officejet-e-aio-pro-6960-dnw.png">
                        <a href="#">Produto Makiavélico e Diabólico 1234</a>
                    </span>
                    <span class="col col_2" role="cell"> akz 9.700,00 </span>
                    <span class="col col_3" role="cell">
                        <div class="description-qtd-chart item-qtty">
                            <button class="btn-diminuir"><span class="ion-ios-remove"></span></button>
                            <input type="number" name="sell-input" value="1">
                            <button class="btn-aumentar"><span class="ion-ios-add"></span></button>
                        </div>
                    </span>
                    <span class="col col_4" role="cell">akz 9.700,00</span>
                    <span class="col col_5" role="cell"><span class="ion-ios-trash"></span></span>
                </div>
                <?php endfor?>
            </div>
            <div class="total_buy">
                <div class="payment">
                    <span>Aceitamos &nbsp;</span>
                    <ul>
                        <li><img src="img/express.svg"></li>
                        <li><img style="border-radius: 7px; width: 29px;margin: auto;" src="img/multi.svg"></li>
                        <li><img src="img/paypal.svg"></li>
                        <li><img src="img/money.svg"></li>
                    </ul>
                </div>

                <div class="total">
                    <div>
                        <span class="total_text">Total : </span>
                        <span class="total_currency">AKZ</span> <strong>300.000,00</strong>
                    </div>

                    <div>
                        <a href="#" class="back_to_shop">Ver mais produtos</a>
                        <a class="proced_checkout open_modal" data-id="client_info">Proceder Agora</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="others_products">
    <div class="container" style="flex-direction:column;">
        <header>
            <h2>Productos Complementares e Outros<span class="separator"></span></h2>
        </header>
        <div class="products responsive">
            <?php for($i = 0; $i < 8; $i++){?>
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
                    <a  class="open_modal" data-id="product_modal">Encomendar</a>
                    <a href="#">Visualizar</a>
                </div>
            </article>
            <?php } ?>
        </div>
    </div>
</section>
<div class="modal" id="client_info">
    <div class="modal_body login_body">
        <span class="close ion-ios-close"></span>
        <div class="auth_left_side">
            <h1>Informações do Cliente</h1>
            <form class="auth_form" action="" method="post" enctype="multipart/form-data">
                <div class="form_group form_x">
                    <div class="wid_trx">
                        <i class="ion-logo-whatsapp"></i><i class="ion-ios-arrow-down"></i>
                    </div>
                    <div class="drop_select">
                        <div class="select_options">
                            <div class="select_option"><i class="ion-logo-whatsapp"></i></div>
                            <div class="select_option"><i class="ion-ios-call"></i></div>
                        </div>
                    </div>
                    <input style="padding-left:45px;" type="text" name="numero" value="" class="input_control"
                        placeholder="Digite o seu número">
                </div>
                <div class="form_group form_x">
                    <span class="_icon"><i class="icon ion-ios-person"></i></span>
                    <input type="password" name="password" class="input_control" placeholder="Digite o seu Nome">
                </div>
                <div class="form_group form_x">
                    <span class="_icon"><i class="icon ion-ios-mail"></i></span>
                    <input type="password" name="password" class="input_control"
                        placeholder="Digite o seu email (opcional)">
                </div>
                <div class="form_group">
                    <button type="submit" class="input_control form_btn open_modal" data-id="buy_done">Finalizar
                        Ecomenda</button>
                </div>
            </form>
        </div>
        <div class="auth_right_side">
            <div class="rwd_design">
            </div>
        </div>
    </div>
</div>
<div class="modal" id="buy_done">
    <div class="modal_body buy_done_body">
        <span class="close ion-ios-close"></span>
        <h2>
            Encomenda feita com sucesso.
        </h2>
        <span class="icon ion-ios-checkmark-circle-outline"></span>
        <p class="encomenda_name">Total da Encomenda</p>
        <p class="encomenda_price"><strong>30.000.000,00 akz</strong> + <a class="open_frete"
                data-id="table_fretes">Frete</a></p>
        <p class="encomenda_buttons"><a href="#" class="close">Fechar</a> <a href="#">Abrir PDF da Encomenda</a></p>
    </div>
</div>

<div class="modal" id="table_fretes">
    <div class="modal_body table_fretes_body">
        <span class="close_frete ion-ios-close"></span>
        <h2 style="color:#666;">
            Tabela de Preços
        </h2>
        <div class="table" role="table" style="margin-top:15px">
            <div class="table_header" role="row">
                <span class="col col_1" role="cell">Item Selecionado</span>
                <span class="col col_2" role="cell">Preço</span>
            </div>
            <div class="table_tbody">
                <?php for($i = 0; $i < 10; $i++): ?>
                <div class="table_row" role="row">
                    <span class="col col_1" role="cell">
                        <a href="#">Morro Bento</a>
                    </span>
                    <span class="col col_2" role="cell"> akz 9.700,00 </span>
                </div>
                <?php endfor?>
            </div>

        </div>
    </div>
</div>
<?php include_once('footer.php');?>