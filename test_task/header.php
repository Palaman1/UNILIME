<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spindungeon</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One&family=Noto+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/assets/css/styles.css" />
</head>

<body>
    <header class="header">
        <div class="container">
            <nav class="header__top-inner">
                <a class="link__logo" href="#">
                    <img class="link__logo-img" src="<?php bloginfo('template_url'); ?>/assets/logo.svg" alt="logo">
                </a>
                <div class="menu">
                    <ul class="menu__list">
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="page-main.php">
                                HOME
                            </a>
                        </li>
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="page-about.php">
                                ABOUT US
                            </a>
                        </li>
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="page-privacy.php">
                                PRIVACY POLICY
                            </a>
                        </li>
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="page-terms.php">
                                TERMS & CONDITION
                            </a>
                        </li>
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="page-contacts.php">
                                CONTACT US
                            </a>
                        </li>
                    </ul>
                    <a class="menu__register" href="page-register.php">
                        REGISTER
                    </a>
                    <button class="menu__btn">
                        <img class="menu__btn-image" src="<?php bloginfo('template_url'); ?>/assets/burger.svg" alt="menu button">
                    </button>
                </div>
            </nav>
        </div>
    </header>