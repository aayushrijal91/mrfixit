<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<header>
    <div class="header-top-bar py-4">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-auto">
                    <a href="./">
                        <?= renderImg("logo.png", "logo") ?>
                    </a>
                </div>

                <div class="col-12 col-md-auto pt-4 pt-lg-0">
                    <div class="row gx-2">
                        <div class="col-6 col-md-auto">
                            <a href="tel:<?= $phone_number ?>" class="btn btn-white d-block text-secondary fw-700 py-md-3 px-md-5 rounded-2 fs-13 font-helvetica">
                                Call <?= $phone_number ?>
                            </a>
                        </div>
                        <div class="col-6 col-md-auto">
                            <a href="#form" class="btn btn-primary d-block text-white fw-700 py-md-3 px-md-5 rounded-2 fs-13 font-helvetica">
                                Get Free Quote
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner text-center text-white text-capitalize">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-auto">
                    <div class="headings">
                        <div class="subHeading text-center fs-6 fw-500">
                            If we can't fix it,<span class="fw-900"> then it's free!</span>
                        </div>
                        <div class="heroHeading fs-1 letter-spacing-n03">
                            Don't Flick it,<span class="fw-900"> Fix It!</span>
                        </div>
                        <div class="fs-5 letter-spacing-n03">
                            <span class="fw-900">Queensland's Leading</span> water tank Repairers
                        </div>
                    </div>
                </div>
            </div>
            <?= renderImg("banner-tanks.png", "lib", "banner-tanks") ?>
            <div class="tank-text fs-8 d-none d-md-block">
                <span class="fw-700">Free On-site</span> Upfron fixed quote<br> with no gymics
            </div>
        </div>
    </div>
    <?= renderImg('splash-wave.png', "lib", "splash-wave") ?>
</header>

<section class="awards bg-light">
    <div class="container">
        <div class="row justify-content-between align-items-center gy-5 gy-xl-0">
            <div class="col-12 col-xl-auto pt-5 pt-xl-0">
                <div class="letter-spacing-n03 text-tertiary fs-8 text-center"><span class="fw-700">Leaking tank?</span> Don't Replace Call Now &<span class="fw-700"> Save $$$</span></div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="row justify-content-between justify-content-lg-around justify-content-xl-between align-items-center">
                    <div class="col col-md-auto"><?= renderImg("watermark.png", "logo") ?></div>
                    <div class="col col-md-auto"><?= renderImg("energy-efficient.png", "logo") ?></div>
                    <div class="col col-md-auto"><?= renderImg("local-bussiness-award.png", "logo") ?></div>
                    <div class="col col-md-auto"><?= renderImg("australian-achiever.png", "logo") ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta">
    <div class="container">
        <div class="row gy-4 gy-lg-0">
            <div class="col-lg-6 h-inherit">
                <div class="cta-card">
                    <div class="letter-spacing-n03 fs-2 line-height-1"><span class="fw-700">Don't Replace It</span>, Fix It</div>
                    <div class="description letter-spacing-n03">
                        We always provide an upfront hassle free on-site honest obligation free quote prior to proceeding with any on-site work on the day to ensure your happy with the quoted end job price with no extra added cost or surprises along the way on completion of your plastic tank repair.
                    </div>
                    <a href="tel:<?= $phone_number ?>" class="btn btn-quartinary px-5 py-3 line-height-1 rounded-pill fs-11">Call Today</a>
                    <div class="pt-5"><?= renderImg("cta-1.png", "lib") ?></div>
                    <div class="offer">
                        <div class="fs-10 line-height-1 pb-2">Rain water tank repairs<br> &amp; servicing</div>
                        <div class="pill rounded-pill bg-quartinary px-5 py-2">
                            <div class="fs-7 fw-700 line-height-1">Fr $299 <span class="fs-10 letter-spacing-n02"><s>Was $399</s></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 h-inherit">
                <div class="cta-card">
                    <div class="letter-spacing-n03 fs-2 line-height-1"><span class="fw-700 ">We Repair</span> All Styles<br class="d-none d-xl-block"> And Types</div>
                    <div class="description letter-spacing-n03">
                        Our technicians will always give you the best upfront honest advice prior to repairing your plastic tank letting you know any pro’s and con’s to allow our customers to make the best choice for them.
                    </div>
                    <a href="tel:<?= $phone_number ?>" class="btn btn-quartinary px-5 py-3 line-height-1 rounded-pill fs-11">Call Today</a>
                    <div class="pt-5"><?= renderImg("cta-2.png", "lib") ?></div>
                    <div class="offer">
                        <div class="pill rounded-pill bg-quartinary px-5 py-2">
                            <div class="fs-7 fw-700 line-height-1">Get $100 Off</div>
                            <div class="fs-14">Your 1st Service</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="brands-top-bar"></div>
<section class="brands">
    <div class="container">
        <div class="brands-slider" id="brands-slider">
            <div><?= renderImg("rotadyne.png", "logo") ?></div>
            <div><?= renderImg("nylex.png", "logo") ?></div>
            <div><?= renderImg("tanksdirect.png", "logo") ?></div>
            <div><?= renderImg("precisionpoly.png", "logo") ?></div>
            <div><?= renderImg("duraplus.png", "logo") ?></div>
            <div><?= renderImg("teampoly.png", "logo") ?></div>
            <div><?= renderImg("rapidspray.png", "logo") ?></div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <div class="fs-10 subHeading">Our Services</div>
                <div class="text-tertiary fw-900 fs-3 text-capitalize pb-3 pb-md-0">
                    <span class="text-black">We have</span> 25 years experience.
                </div>
                <div class="text-primary-dark fs-12">
                    Plastic tank repairs are proud to say we are independent repairers of the full range of plastic tanks on todays market repairing
                    all shapes and sizes of plastic or poly tanks and are not locked or linked to any one poly tank manufacturing company meaning we are free from biased opinions.
                </div>
            </div>
        </div>
        <div class="row g-3 py-5">
            <div class="col-lg-6">
                <div class="service-card">
                    <?= renderImg("service-1.png", "lib", "w-100") ?>
                    <div class="overlay">
                        <div class="row gy-3 gy-md-0 gx-4 gx-lg-6 align-items-end justify-content-between">
                            <div class="col">
                                <div class="title fs-8">Rainwater Tank repairs</div>
                                <div class="description">
                                    All rainwater tanks are repaired by using our specialist state of the art plastic welding equipment and in most cases all while the water tank is still in place without any need to remove your poly tank making the whole experience for the customer a lot more pleasurable.
                                </div>
                            </div>
                            <div class="col-12 col-md-auto">
                                <a href="#form" class="btn btn-tertiary text-white fw-700 py-lg-2 px-md-4 rounded-2 fs-13 font-helvetica">
                                    <span class="pe-3">Enquire</span> <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.598633 10.829L5.17863 6.23901L0.598633 1.64901L2.00863 0.239014L8.00863 6.23901L2.00863 12.239L0.598633 10.829Z" fill="white" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-card">
                    <?= renderImg("service-2.png", "lib", "w-100") ?>
                    <div class="overlay">
                        <div class="row gy-3 gy-md-0 gx-4 gx-lg-6 align-items-end justify-content-between">
                            <div class="col">
                                <div class="title fs-8">Rainwater Tank Service</div>
                                <div class="description">
                                    All rainwater tanks are repaired by using our specialist state of the art plastic welding equipment and in most cases all while the water tank is still in place without any need to remove your poly tank making the whole experience for the customer a lot more pleasurable.
                                </div>
                            </div>
                            <div class="col-12 col-md-auto">
                                <a href="#form" class="btn btn-tertiary text-white fw-700 py-lg-2 px-md-4 rounded-2 fs-13 font-helvetica">
                                    <span class="pe-3">Enquire</span> <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.598633 10.829L5.17863 6.23901L0.598633 1.64901L2.00863 0.239014L8.00863 6.23901L2.00863 12.239L0.598633 10.829Z" fill="white" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-card">
                    <?= renderImg("service-3.png", "lib", "w-100") ?>
                    <div class="overlay">
                        <div class="row gy-3 gy-md-0 gx-4 gx-lg-6 align-items-end justify-content-between">
                            <div class="col">
                                <div class="title fs-8">Rainwater Collapsed Roof Repair</div>
                                <div class="description">
                                    All rainwater tanks are repaired by using our specialist state of the art plastic welding equipment and in most cases all while the water tank is still in place without any need to remove your poly tank making the whole experience for the customer a lot more pleasurable.
                                </div>
                            </div>
                            <div class="col-12 col-md-auto">
                                <a href="#form" class="btn btn-tertiary text-white fw-700 py-lg-2 px-md-4 rounded-2 fs-13 font-helvetica">
                                    <span class="pe-3">Enquire</span> <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.598633 10.829L5.17863 6.23901L0.598633 1.64901L2.00863 0.239014L8.00863 6.23901L2.00863 12.239L0.598633 10.829Z" fill="white" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-card">
                    <?= renderImg("service-4.png", "lib", "w-100") ?>
                    <div class="overlay">
                        <div class="row gy-3 gy-md-0 gx-4 gx-lg-6 align-items-end justify-content-between">
                            <div class="col">
                                <div class="title fs-8">Plastic Tank Welding</div>
                                <div class="description">
                                    All rainwater tanks are repaired by using our specialist state of the art plastic welding equipment and in most cases all while the water tank is still in place without any need to remove your poly tank making the whole experience for the customer a lot more pleasurable.
                                </div>
                            </div>
                            <div class="col-12 col-md-auto">
                                <a href="#form" class="btn btn-tertiary text-white fw-700 py-lg-2 px-md-4 rounded-2 fs-13 font-helvetica">
                                    <span class="pe-3">Enquire</span> <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.598633 10.829L5.17863 6.23901L0.598633 1.64901L2.00863 0.239014L8.00863 6.23901L2.00863 12.239L0.598633 10.829Z" fill="white" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-card">
                    <?= renderImg("service-5.png", "lib", "w-100") ?>
                    <div class="overlay">
                        <div class="row gy-3 gy-md-0 gx-4 gx-lg-6 align-items-end justify-content-between">
                            <div class="col">
                                <div class="title fs-8">Agriculture Tank Welding</div>
                                <div class="description">
                                    All rainwater tanks are repaired by using our specialist state of the art plastic welding equipment and in most cases all while the water tank is still in place without any need to remove your poly tank making the whole experience for the customer a lot more pleasurable.
                                </div>
                            </div>
                            <div class="col-12 col-md-auto">
                                <a href="#form" class="btn btn-tertiary text-white fw-700 py-lg-2 px-md-4 rounded-2 fs-13 font-helvetica">
                                    <span class="pe-3">Enquire</span> <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.598633 10.829L5.17863 6.23901L0.598633 1.64901L2.00863 0.239014L8.00863 6.23901L2.00863 12.239L0.598633 10.829Z" fill="white" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-card">
                    <?= renderImg("service-6.png", "lib", "w-100") ?>
                    <div class="overlay">
                        <div class="row gy-3 gy-md-0 gx-4 gx-lg-6 align-items-end justify-content-between">
                            <div class="col">
                                <div class="title fs-8">Fuel Tank repairs</div>
                                <div class="description">
                                    All rainwater tanks are repaired by using our specialist state of the art plastic welding equipment and in most cases all while the water tank is still in place without any need to remove your poly tank making the whole experience for the customer a lot more pleasurable.
                                </div>
                            </div>
                            <div class="col-12 col-md-auto">
                                <a href="#form" class="btn btn-tertiary text-white fw-700 py-lg-2 px-md-4 rounded-2 fs-13 font-helvetica">
                                    <span class="pe-3">Enquire</span> <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.598633 10.829L5.17863 6.23901L0.598633 1.64901L2.00863 0.239014L8.00863 6.23901L2.00863 12.239L0.598633 10.829Z" fill="white" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-card">
                    <?= renderImg("service-7.png", "lib", "w-100") ?>
                    <div class="overlay">
                        <div class="row gy-3 gy-md-0 gx-4 gx-lg-6 align-items-end justify-content-between">
                            <div class="col">
                                <div class="title fs-8">Round Water Tank Repairs</div>
                                <div class="description">
                                    All rainwater tanks are repaired by using our specialist state of the art plastic welding equipment and in most cases all while the water tank is still in place without any need to remove your poly tank making the whole experience for the customer a lot more pleasurable.
                                </div>
                            </div>
                            <div class="col-12 col-md-auto">
                                <a href="#form" class="btn btn-tertiary text-white fw-700 py-lg-2 px-md-4 rounded-2 fs-13 font-helvetica">
                                    <span class="pe-3">Enquire</span> <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.598633 10.829L5.17863 6.23901L0.598633 1.64901L2.00863 0.239014L8.00863 6.23901L2.00863 12.239L0.598633 10.829Z" fill="white" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-card">
                    <?= renderImg("service-8.png", "lib", "w-100") ?>
                    <div class="overlay">
                        <div class="row gy-3 gy-md-0 gx-4 gx-lg-6 align-items-end justify-content-between">
                            <div class="col">
                                <div class="title fs-8">Leaking Slimline Repairs</div>
                                <div class="description">
                                    All rainwater tanks are repaired by using our specialist state of the art plastic welding equipment and in most cases all while the water tank is still in place without any need to remove your poly tank making the whole experience for the customer a lot more pleasurable.
                                </div>
                            </div>
                            <div class="col-12 col-md-auto">
                                <a href="#form" class="btn btn-tertiary text-white fw-700 py-lg-2 px-md-4 rounded-2 fs-13 font-helvetica">
                                    <span class="pe-3">Enquire</span> <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.598633 10.829L5.17863 6.23901L0.598633 1.64901L2.00863 0.239014L8.00863 6.23901L2.00863 12.239L0.598633 10.829Z" fill="white" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq">
    <div class="container">
        <div class="row gy-4 gy-xl-0 justify-content-between align-items-center">
            <div class="col-xl col-xxl-8">
                <div class="fs-3 fw-700">Our Frequently Asked Questions</div>
                <div class="fs-12 text-primary-dark">We always provide an upfront hassle free on-site honest obligation free quote prior to proceeding with any on-site work on the day to ensure your happy with the quoted end job price with no extra added cost or surprises along the way on completion of your plastic tank repair.</div>
            </div>
            <div class="col-auto">
                <div class="row gx-2 gx-md-3">
                    <div class="col-auto">
                        <a href="#form" class="btn border-tertiary text-tertiary fw-700 py-md-3 px-3 px-md-4 px-xl-6 rounded-2 fs-12 font-helvetica">
                            Call Us
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="#form" class="btn btn-tertiary text-white fw-700 py-md-3 px-md-4 px-xl-6 rounded-2 fs-12 font-helvetica">
                            View All Services
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 pt-5">
            <div class="col-lg-6 col-xl-4 h-inherit">
                <div class="faq-card row g-0">
                    <div class="col-auto">
                        <div class="number">1</div>
                    </div>
                    <div class="col d-flex align-items-center">
                        <div class="text">
                            <div class="fs-10 fw-700 line-height-1 pb-2 text-capitalize">Is The repaired Item strong?</div>
                            <div class="text-grey fs-13 font-helvetica">Our Polysmart plastic welding technique system nearly always ensures a higher plastic weld strength then the original product we are repairing.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 h-inherit">
                <div class="faq-card row g-0">
                    <div class="col-auto">
                        <div class="number">2</div>
                    </div>
                    <div class="col d-flex align-items-center">
                        <div class="text">
                            <div class="fs-10 fw-700 line-height-1 pb-2 text-capitalize">Am I Able to Use the Repaired Product Immediately?</div>
                            <div class="text-grey fs-13 font-helvetica">Once the plastic welding repair is completed your repaired plastic / poly items / tanks are instantly ready for use.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 h-inherit">
                <div class="faq-card row g-0">
                    <div class="col-auto">
                        <div class="number">3</div>
                    </div>
                    <div class="col d-flex align-items-center">
                        <div class="text">
                            <div class="fs-10 fw-700 line-height-1 pb-2 text-capitalize">How long will my tank last?</div>
                            <div class="text-grey fs-13 font-helvetica">This depends on allot of factors and unknowns, age, quality, wear and tear and environmental aspects all playing a part.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 h-inherit">
                <div class="faq-card row g-0">
                    <div class="col-auto">
                        <div class="number">4</div>
                    </div>
                    <div class="col d-flex align-items-center">
                        <div class="text">
                            <div class="fs-10 fw-700 line-height-1 pb-2 text-capitalize">Does hot weather and humidity cause my tank to fail?</div>
                            <div class="text-grey fs-13 font-helvetica">Hot Weather can have some effects on your tank over time leading to prematurely have issues in some situation.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 h-inherit">
                <div class="faq-card row g-0">
                    <div class="col-auto">
                        <div class="number">5</div>
                    </div>
                    <div class="col d-flex align-items-center">
                        <div class="text">
                            <div class="fs-10 fw-700 line-height-1 pb-2 text-capitalize">Is my house hold poly water tank water drinkable?</div>
                            <div class="text-grey fs-13 font-helvetica">In most cases yes but best to check with your local government laws and regulations to ensure this is allowable and if you are planning to use your tank water for drinking water always a good idea to have your tank cleaned to ensure Pristine clean water.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 h-inherit">
                <div class="faq-card row g-0">
                    <div class="col-auto">
                        <div class="number">6</div>
                    </div>
                    <div class="col d-flex align-items-center">
                        <div class="text">
                            <div class="fs-10 fw-700 line-height-1 pb-2 text-capitalize">How to connect the pump to my tank?</div>
                            <div class="text-grey fs-13 font-helvetica">There’s a variety of recommendations out there on how to connect your pump to your tank and depending on every different tank situation and pump position is a different solution and outcome.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 h-inherit">
                <div class="faq-card row g-0">
                    <div class="col-auto">
                        <div class="number">7</div>
                    </div>
                    <div class="col d-flex align-items-center">
                        <div class="text">
                            <div class="fs-10 fw-700 line-height-1 pb-2 text-capitalize">Is poly or concrete tanks better?</div>
                            <div class="text-grey fs-13 font-helvetica">Our Polysmart plastic welding technique system nearly always ensures a higher plastic weld strength then the original product we are repairing.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-areas bg-primary text-white">
    <div class="container">
        <div class="text-center subtitle">
            Our Areas
        </div>
        <div class="text-center fs-4 fw-900 ">
            Our Service Areas Throughout Australia
        </div>
        <div class="row justify-content-md-around justify-content-xl-between gy-md-4 fs-10 pt-4">
            <div class="col-md-auto">
                <?= renderImg('tick.png', "icons", "pe-2") ?>South East Queensland
            </div>
            <div class="col-md-auto">
                <?= renderImg('tick.png', "icons", "pe-2") ?>Brisbane
            </div>
            <div class="col-md-auto">
                <?= renderImg('tick.png', "icons", "pe-2") ?>Gold Coast
            </div>
            <div class="col-md-auto">
                <?= renderImg('tick.png', "icons", "pe-2") ?>Sun Shine Coast
            </div>
            <div class="col-md-auto">
                <?= renderImg('tick.png', "icons", "pe-2") ?>Sunshine
            </div>
            <div class="col-md-auto">
                <?= renderImg('tick.png', "icons", "pe-2") ?>Hinterland
            </div>
            <div class="col-md-auto">
                <?= renderImg('tick.png', "icons", "pe-2") ?>Scenic Rim
            </div>
            <div class="col-md-auto">
                <?= renderImg('tick.png', "icons", "pe-2") ?>Somerset Region
            </div>
            <div class="col-md-auto">
                <?= renderImg('tick.png', "icons", "pe-2") ?>NSW
            </div>
            <div class="col-md-auto">
                <?= renderImg('tick.png', "icons", "pe-2") ?>Northern Rivers
            </div>
        </div>
    </div>
</section>

<section class="form" id="form">
    <div class="container">
        <div class="row gy-4 gy-xl-0 justify-content-between align-items-center">
            <div class="col-xl col-xxl-8">
                <div class="fs-4 fw-700 letter-spacing-n02">Contact the Water Tank Specialists</div>
                <div class="fs-10 text-primary-dark">Simply complete our form below & we’ll get back to you as soon as possible</div>
            </div>
            <div class="col-auto">
                <div class="row gx-2 gx-md-3">
                    <div class="col-auto">
                        <a href="#form" class="btn border-tertiary text-tertiary fw-700 py-md-3 px-4 px-xl-6 rounded-2 fs-12 font-helvetica">
                            Call Us
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="#form" class="btn btn-tertiary text-white fw-700 py-md-3 px-md-4 px-xl-6 rounded-2 fs-12 font-helvetica">
                            View All Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-5 gy-lg-0 gx-xl-5 pt-6">
            <div class="col-lg-5 col-xl-4 h-inherit">
                <div class="testimonials">
                    <?= renderImg("quote.png", "icons", "quote") ?>
                    <div class="testimonial-slider" id="testimonial-slider">
                        <div class="testimonial-slider-content">
                            <?= renderImg("userimg.png", "lib", "pb-4") ?>
                            <div class="fs-11 fw-700">Lorrain C.</div>
                            <?= renderImg("stars.png", "icons", "py-2") ?>
                            <div class="">3 Days Ago</div>
                            <hr>
                            <p>Noel came out to look at what I thought was a leak in my water tank. He quickly discovered that the leak was actually from a crack in a fitting, on the part of the fitting that screws into the tank. At my request he removed the fitting and capped off the tank at that outlet, so my tank is now leak-free.</p>
                            <p>He was only at my place for 10 minutes so didn't even charge me a call-out fee! Very happy to recommend Noel.</p>
                        </div>
                        <div class="testimonial-slider-content">
                            <?= renderImg("userimg.png", "lib", "pb-4") ?>
                            <div class="fs-11 fw-700">Lorrain C.</div>
                            <?= renderImg("stars.png", "icons", "py-2") ?>
                            <div class="">3 Days Ago</div>
                            <hr>
                            <p>Noel came out to look at what I thought was a leak in my water tank. He quickly discovered that the leak was actually from a crack in a fitting, on the part of the fitting that screws into the tank. At my request he removed the fitting and capped off the tank at that outlet, so my tank is now leak-free.</p>
                            <p>He was only at my place for 10 minutes so didn't even charge me a call-out fee! Very happy to recommend Noel.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-xl-8 h-inherit">
                <div class="form-main">
                    <form action="./src/form" method="POST">
                        <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                        <div class="row gy-4 gy-md-5">
                            <div class="col-12 col-md-6">
                                <label>Your Full Name</label>
                                <input class="form-control border-1 rounded-0 bg-white" type="text" placeholder="Eg: John Citizen" name="name" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label>Contact Number</label>
                                <input id="phone" class="form-control rounded-0 bg-white" type="tel" placeholder="Eg: 0400 000 000" name="phone" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label>Your Email</label>
                                <input id="email" class="form-control rounded-0 bg-white" type="email" placeholder="Eg: example@email.com.au" name="email" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label>Service Required</label>
                                <select name="service" class="form-control rounded-0 bg-white" required>
                                    <option value="" disabled selected>Select from below</option>
                                    <option>Curtains</option>
                                    <option>Outdoor Roller Blinds</option>
                                    <option>Vertical Blinds</option>
                                    <option>Roller Blinds</option>
                                    <option>Panel Glides</option>
                                    <option>Roman Blinds</option>
                                    <option>Venetian Blinds</option>
                                    <option>Veri Shades</option>
                                    <option>Plantation Shutters</option>
                                    <option>Zebra Blinds</option>
                                    <option>Motorised Blinds</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label>Your Message</label>
                                <textarea class="form-control rounded-0 bg-white" name="message" placeholder="Your message" rows="5"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-tertiary text-white form-control rounded-2 text-uppercase fw-700">
                                    Submit Form
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>