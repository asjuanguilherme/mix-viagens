<?php
    $URL = 'http://localhost:80/mix-viagens'; // Diretorio do projeto no servidor
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Juan Guilherme">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" >
    <link rel="stylesheet" href="<?php echo $URL?>/css/fontawesome/css/brands.min.css">
    <link rel="stylesheet" href="<?php echo $URL?>/css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo $URL?>/css/fontawesome/css/light.min.css">
    <link rel="stylesheet" href="<?php echo $URL?>/css/fontawesome/css/regular.min.css">
    <link rel="stylesheet" href="<?php echo $URL?>/css/fontawesome/css/solid.min.css">
    <title>Mix | Viagens</title>
</head>
<body>
    <header>
        <div class="container container-header ">
            <div class="logo">
                <img src="<?php echo $URL?>/assets/logo-2.svg">
            </div>
            <nav class="menu">
                <div class="menu__ui-icon">
                    <i class="fal fa-bars ui-icon__open"></i>
                    <i class="fal fa-times ui-icon__close"></i>
                </div>
                <ul>
                    <li>
                        <a class="--selected" href="#home">Home</a>
                    </li>
                    <li>
                        <a href="#promocoes">Promoções</a>
                    </li>
                    <li>
                        <a href="#quem-somos">Quem Somos</a>
                    </li>
                    <li>
                        <a href="#contact">Contato</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="home-section" id="home" style="background-image: url(<?php echo $URL?>/assets/bg.svg)" >
            <div class="container container-box-form">
                <div class="home-section__title">
                    <h2>
                        Preencha o formulário<br/><span>para reservar a sua viagem</span>
                    </h2>
                </div>
                <form class="box-form" method="POST" action="<?php echo $URL?>/api/index.php" >
                    <div class="box-form__header">
                        <span>Reservar</span>
                    </div>
                    <div class="box-form__body">
                        <div class="input-wraper">
                            <div class="w50 custom-input">
                                <input class="w100" type="text" placeholder="ENTRADA" name="chekin" required>
                                <i class="fal fa-calendar-check"></i>
                            </div>
                            <div class="w50 custom-input">
                                <input class="w100" type="text" placeholder="SAÍDA" name="chekout" required>
                                <i class="fal fa-calendar-check"></i>
                            </div>
                        </div>
                        <div class="input-wraper">
                            <div class="custom-input w50">
                                <select name="adults" class="w100">
                                    <option disabled selected value="0">ADULTOS</option>
                                    <option value="1" >1</option>
                                    <option value="2" >2</option>
                                    <option value="3" >3</option>
                                    <option value="4" >4</option>
                                    <option value="5" >5</option>
                                    <option value="6" >6</option>
                                    <option value="7" >7</option>
                                    <option value="8" >8</option>
                                    <option value="9" >9</option>
                                    <option value="10" >10</option>
                                    <option value="10+" >10+</option>
                                </select>
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="custom-input w50">
                                <select name="kids" class="w100">
                                    <option disabled selected value="0">CRIANÇAS</option>
                                    <option value="1" >1</option>
                                    <option value="2" >2</option>
                                    <option value="3" >3</option>
                                    <option value="4" >4</option>
                                    <option value="5" >5</option>
                                    <option value="6" >6</option>
                                    <option value="7" >7</option>
                                    <option value="8" >8</option>
                                    <option value="9" >9</option>
                                    <option value="10" >10</option>
                                    <option value="10+" >10+</option>
                                </select>
                                <i class="fal fa-user"></i>
                            </div>
                        </div>
                        <div class="input-wraper">
                            <input class="btn w100" type="submit" name="action" value="Reservar">
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section class="promocoes" id="promocoes" >
            <div class="container">
                <div class="section__title">
                    <h2>Conheça nossas promoções</h2>
                    <span class="line"></span>
                </div>

                <div class="container-cards">
                    <div class="product-card --dark">
                        <div class="product-card__inf">
                            <div class="product-card__header">
                                <span class="product-title">
                                    <strong>Lorem Ipsum</strong>
                                </span>
                            </div>
                            <div class="product-card__body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. At dolor quis quos enim in explicabo nisi distinctio, dolores laborum iste exercitationem sit officiis praesentium aliquid repellendus eius, facilis autem nemo!
                            </div>
                        </div>

                        <div class="product-card__footer">
                            <a class="btn" href="#home">Reservar</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-card__img">
                            <img src="<?php echo $URL?>/assets/mockup-img1.svg" alt="">
                        </div>

                        <div class="product-card__inf">
                            <div class="product-card__header --line-bottom">
                                <span class="product-title">
                                    <strong>Lorem Ipsum</strong>
                                </span>
                                <span class="product-subtitle">
                                    Periodo: 01/04/2021
                                </span>
                            </div>
                            <div class="product-card__body">
                                <div class="product-price-container">
                                    <strong class="text-yellow">A partir de:</strong>
                                    12x de
                                    <strong class="product-price">
                                        R$ 65,00
                                    </strong>
                                    Total por pessoa: R$ 729,00
                                </div>
                            </div>
                        </div>

                        <div class="product-card__footer">
                            <a class="btn" href="#home">Reservar</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-card__img">
                            <img src="<?php echo $URL?>/assets/mockup-img2.svg" alt="">
                        </div>

                        <div class="product-card__inf">
                            <div class="product-card__header --line-bottom">
                                <span class="product-title">
                                    <strong>Lorem Ipsum</strong>
                                </span>
                                <span class="product-subtitle">
                                    Periodo: 01/04/2021
                                </span>
                            </div>
                            <div class="product-card__body">
                                <div class="product-price-container">
                                    <strong class="text-yellow">A partir de:</strong>
                                    12x de
                                    <strong class="product-price">
                                        R$ 65,00
                                    </strong>
                                    Total por pessoa: R$ 729,00
                                </div>
                            </div>
                        </div>

                        <div class="product-card__footer">
                            <a class="btn" href="#home">Reservar</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-card__img">
                            <img src="<?php echo $URL?>/assets/mockup-img3.svg" alt="">
                        </div>

                        <div class="product-card__inf">
                            <div class="product-card__header --line-bottom">
                                <span class="product-title">
                                    <strong>Lorem Ipsum</strong>
                                </span>
                                <span class="product-subtitle">
                                    Periodo: 01/04/2021
                                </span>
                            </div>
                            <div class="product-card__body">
                                <div class="product-price-container">
                                    <strong class="text-yellow">A partir de:</strong>
                                    12x de
                                    <strong class="product-price">
                                        R$ 65,00
                                    </strong>
                                    Total por pessoa: R$ 729,00
                                </div>
                            </div>
                        </div>

                        <div class="product-card__footer">
                            <a class="btn" href="#home">Reservar</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-card__img">
                            <img src="<?php echo $URL?>/assets/mockup-img1.svg" alt="">
                        </div>

                        <div class="product-card__inf">
                            <div class="product-card__header --line-bottom">
                                <span class="product-title">
                                    <strong>Lorem Ipsum</strong>
                                </span>
                                <span class="product-subtitle">
                                    Periodo: 01/04/2021
                                </span>
                            </div>
                            <div class="product-card__body">
                                <div class="product-price-container">
                                    <strong class="text-yellow">A partir de:</strong>
                                    12x de
                                    <strong class="product-price">
                                        R$ 65,00
                                    </strong>
                                    Total por pessoa: R$ 729,00
                                </div>
                            </div>
                        </div>

                        <div class="product-card__footer">
                            <a class="btn" href="#home">Reservar</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-card__img">
                            <img src="<?php echo $URL?>/assets/mockup-img2.svg" alt="">
                        </div>

                        <div class="product-card__inf">
                            <div class="product-card__header --line-bottom">
                                <span class="product-title">
                                    <strong>Lorem Ipsum</strong>
                                </span>
                                <span class="product-subtitle">
                                    Periodo: 01/04/2021
                                </span>
                            </div>
                            <div class="product-card__body">
                                <div class="product-price-container">
                                    <strong class="text-yellow">A partir de:</strong>
                                    12x de
                                    <strong class="product-price">
                                        R$ 65,00
                                    </strong>
                                    Total por pessoa: R$ 729,00
                                </div>
                            </div>
                        </div>

                        <div class="product-card__footer">
                            <a class="btn" href="#home">Reservar</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-card__img">
                            <img src="<?php echo $URL?>/assets/mockup-img3.svg" alt="">
                        </div>

                        <div class="product-card__inf">
                            <div class="product-card__header --line-bottom">
                                <span class="product-title">
                                    <strong>Lorem Ipsum</strong>
                                </span>
                                <span class="product-subtitle">
                                    Periodo: 01/04/2021
                                </span>
                            </div>
                            <div class="product-card__body">
                                <div class="product-price-container">
                                    <strong class="text-yellow">A partir de:</strong>
                                    12x de
                                    <strong class="product-price">
                                        R$ 65,00
                                    </strong>
                                    Total por pessoa: R$ 729,00
                                </div>
                            </div>
                        </div>

                        <div class="product-card__footer">
                            <a class="btn" href="#home">Reservar</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-card__img">
                            <img src="<?php echo $URL?>/assets/mockup-img1.svg" alt="">
                        </div>

                        <div class="product-card__inf">
                            <div class="product-card__header --line-bottom">
                                <span class="product-title">
                                    <strong>Lorem Ipsum</strong>
                                </span>
                                <span class="product-subtitle">
                                    Periodo: 01/04/2021
                                </span>
                            </div>
                            <div class="product-card__body">
                                <div class="product-price-container">
                                    <strong class="text-yellow">A partir de:</strong>
                                    12x de
                                    <strong class="product-price">
                                        R$ 65,00
                                    </strong>
                                    Total por pessoa: R$ 729,00
                                </div>
                            </div>
                        </div>

                        <div class="product-card__footer">
                            <a class="btn" href="#home">Reservar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <img src="<?php echo $URL?>/assets/logo-1.svg">
    </footer>

        <script src="<?php echo $URL?>/js/jquery.js"></script>
    <script src="<?php echo $URL?>/js/jquery.mask.min.js"></script>
    <script src="<?php echo $URL?>/js/script.js"></script>

</body>
</html>