<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Loja Kiquim 2</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/ionicons.min.css"> 
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body style="background:#f0f0f0">

    <?php  $url = explode('/',$_SERVER['PHP_SELF']);  ?>
    <header class="main_header">
        <div class="container">
            <div class="logo_type">
                <a href="#">
                    <img src="img/_logo-kiquim-immanent-bg-transparent.png">
                </a>
            </div>
            <div class="search">
                <form>
                    <input type="search" name="s"><button> <span class="ion-md-search"></span></button>
                </form>
            </div>
            <div class="last">
                <span class="icon_cart ion-ios-person"></span>
                <span class="icon_cart ion-ios-heart"></span>
                <span class="icon_cart ion-ios-cart"></span>
                <span class="cart_number flex_center">0</span>
            </div>
            <ul class="main_menu">
                <li><a href="#"><span class="icon ion-ios-menu"></span>Produtos<span
                            class="icon ion-ios-arrow-down"></span></a>
                    <ul class="submenu" style="<?= $url[3] !== 'index.php'? 'display:none':'' ?>">
                        <li>
                            <a>
                                <svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512"
                                    xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m39.822 59.733v295.82h432.36v-295.82h-432.36zm392.53 238.93h-352.71v-199.11h352.71v199.11z" />
                                    <path
                                        d="M312.889,384v28.444H199.111V384H0v11.378c0,31.289,25.6,56.889,56.889,56.889h398.222    c31.289,0,56.889-25.6,56.889-56.889V384H312.889z" />
                                </svg>
                                Informática
                            </a>
                            <ul class="submenu__menu">
                                <li>
                                    <a>

                                        Impressoras e scanners
                                    </a>
                                    <ul class="submenu__menu">
                                        <li>
                                            <a>

                                                Energia
                                            </a>
                                        </li>
                                        <li>
                                            <a>

                                                Consumíveis e Papel
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                Material de Escritório
                                            </a>
                                        </li>
                                        <li>
                                            <a>

                                                Energia
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>

                                        Material de Escritório
                                    </a>
                                </li>
                                <li>
                                    <a>

                                        Energia
                                    </a>
                                </li>
                                <li>
                                    <a>

                                        Consumíveis e Papel
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Material de Escritório
                                    </a>
                                </li>
                                <li>
                                    <a>

                                        Energia
                                    </a>
                                </li>

                                <li>
                                    <a>

                                        Consumíveis e Papel
                                    </a>
                                </li>
                                <li>
                                    <a>

                                        Consumíveis e Papel
                                    </a>
                                </li>
                                <li>
                                    <a>

                                        Consumíveis e Papel
                                    </a>
                                </li>
                                <li>
                                    <a>

                                        Consumíveis e Papel
                                    </a>
                                </li>
                                <li>
                                    <a>

                                        Consumíveis e Papel
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a>
                                <svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512"
                                    xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m39.822 59.733v295.82h432.36v-295.82h-432.36zm392.53 238.93h-352.71v-199.11h352.71v199.11z" />
                                    <path
                                        d="M312.889,384v28.444H199.111V384H0v11.378c0,31.289,25.6,56.889,56.889,56.889h398.222    c31.289,0,56.889-25.6,56.889-56.889V384H312.889z" />
                                </svg>
                                Impressoras e scanners
                            </a>
                        </li>
                        <li>
                            <a>
                                <svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512"
                                    xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m39.822 59.733v295.82h432.36v-295.82h-432.36zm392.53 238.93h-352.71v-199.11h352.71v199.11z" />
                                    <path
                                        d="M312.889,384v28.444H199.111V384H0v11.378c0,31.289,25.6,56.889,56.889,56.889h398.222    c31.289,0,56.889-25.6,56.889-56.889V384H312.889z" />
                                </svg>
                                Material de Escritório
                            </a>
                        </li>
                        <li>
                            <a>
                                <svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512"
                                    xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m39.822 59.733v295.82h432.36v-295.82h-432.36zm392.53 238.93h-352.71v-199.11h352.71v199.11z" />
                                    <path
                                        d="M312.889,384v28.444H199.111V384H0v11.378c0,31.289,25.6,56.889,56.889,56.889h398.222    c31.289,0,56.889-25.6,56.889-56.889V384H312.889z" />
                                </svg>
                                Energia
                            </a>
                        </li>
                        <li>
                            <a>
                                <svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512"
                                    xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m39.822 59.733v295.82h432.36v-295.82h-432.36zm392.53 238.93h-352.71v-199.11h352.71v199.11z" />
                                    <path
                                        d="M312.889,384v28.444H199.111V384H0v11.378c0,31.289,25.6,56.889,56.889,56.889h398.222    c31.289,0,56.889-25.6,56.889-56.889V384H312.889z" />
                                </svg>
                                Consumíveis e Papel
                            </a>
                        </li>
                        <li>
                            <a>
                                <svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512"
                                    xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m39.822 59.733v295.82h432.36v-295.82h-432.36zm392.53 238.93h-352.71v-199.11h352.71v199.11z" />
                                    <path
                                        d="M312.889,384v28.444H199.111V384H0v11.378c0,31.289,25.6,56.889,56.889,56.889h398.222    c31.289,0,56.889-25.6,56.889-56.889V384H312.889z" />
                                </svg>Material de Escritório
                            </a>
                        </li>
                        <li>
                            <a>
                                <svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512"
                                    xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m39.822 59.733v295.82h432.36v-295.82h-432.36zm392.53 238.93h-352.71v-199.11h352.71v199.11z" />
                                    <path
                                        d="M312.889,384v28.444H199.111V384H0v11.378c0,31.289,25.6,56.889,56.889,56.889h398.222    c31.289,0,56.889-25.6,56.889-56.889V384H312.889z" />
                                </svg>
                                Energia
                            </a>
                        </li>
                        <li>
                            <a>
                                <svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512"
                                    xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m39.822 59.733v295.82h432.36v-295.82h-432.36zm392.53 238.93h-352.71v-199.11h352.71v199.11z" />
                                    <path
                                        d="M312.889,384v28.444H199.111V384H0v11.378c0,31.289,25.6,56.889,56.889,56.889h398.222    c31.289,0,56.889-25.6,56.889-56.889V384H312.889z" />
                                </svg>
                                Consumíveis e Papel
                            </a>
                        </li>
                        <li>
                            <a>
                                <svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512"
                                    xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m39.822 59.733v295.82h432.36v-295.82h-432.36zm392.53 238.93h-352.71v-199.11h352.71v199.11z" />
                                    <path
                                        d="M312.889,384v28.444H199.111V384H0v11.378c0,31.289,25.6,56.889,56.889,56.889h398.222    c31.289,0,56.889-25.6,56.889-56.889V384H312.889z" />
                                </svg>
                                Consumíveis e Papel
                            </a>
                        </li>
                        <li>
                            <a>
                                <svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512"
                                    xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m39.822 59.733v295.82h432.36v-295.82h-432.36zm392.53 238.93h-352.71v-199.11h352.71v199.11z" />
                                    <path
                                        d="M312.889,384v28.444H199.111V384H0v11.378c0,31.289,25.6,56.889,56.889,56.889h398.222    c31.289,0,56.889-25.6,56.889-56.889V384H312.889z" />
                                </svg>
                                Consumíveis e Papel
                            </a>
                        </li>
                        <li>
                            <a>
                                <svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512"
                                    xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m39.822 59.733v295.82h432.36v-295.82h-432.36zm392.53 238.93h-352.71v-199.11h352.71v199.11z" />
                                    <path
                                        d="M312.889,384v28.444H199.111V384H0v11.378c0,31.289,25.6,56.889,56.889,56.889h398.222    c31.289,0,56.889-25.6,56.889-56.889V384H312.889z" />
                                </svg>
                                Consumíveis e Papel
                            </a>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><span class="icon ion-ios-star"></span>Novos Produtos</a></li>
                <li><a href="#"><span class="icon ion-ios-alarm"></span>Oportunidades</a></li>
                <li><a href="#"><span class="icon ion-ios-pricetag"></span>Destaques</a></li>
            </ul>
        </div>
    </header>