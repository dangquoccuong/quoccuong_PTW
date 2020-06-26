<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type5">
    <div class="container">
        <div class="row spm">

            <!-- COLUMN 1 -->
            <div class="col-md-4 col-12">

                <!-- TITLE -->
                <div class="product-title">
                    <span class="title1">Sale Arrivals</span>
                    <span class="title2">Featured Items</span>
                </div>
                <!-- PRODUCT 1 -->
                <div class="product row">
                    <div class="col-md-5 col-12">
                        <img class="img" src="./images/img-ghe.jpg" alt="">
                    </div>
                    <div class="col-md-7 col-12 text-ct">
                        <div class="text-box">
                            <span class="text">Donec odio, puisuqe.</span>
                            <span class="price">$20.40</span>
                            <del class="price-sale">$25.50</del>
                        </div>
                    </div>
                </div>
                <!-- PRODUCT 2 -->
                <div class="product row">
                    <div class="col-md-5 col-12">
                        <img class="img" src="./images/img-ghe.jpg" alt="">
                    </div>
                    <div class="col-md-7 col-12 text-ct">
                        <div class="text-box">
                            <span class="text">Donec odio, puisuqe.</span>
                            <span class="price">$20.40</span>
                            <del class="price-sale">$25.50</del>
                        </div>
                    </div>
                </div>

            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-4 col-12">

                <!-- TITLE -->
                <div class="product-title">
                    <span class="title1">Sale Arrivals</span>
                    <span class="title2">Featured Items</span>
                </div>
                <!-- PRODUCT 1 -->
                <div class="product row">
                    <div class="col-md-5 col-12">
                        <img class="img" src="./images/img-ghe.jpg" alt="">
                    </div>
                    <div class="col-md-7 col-12 text-ct">
                        <div class="text-box">
                            <span class="text">Donec odio, puisuqe.</span>
                            <span class="price">$20.40</span>
                        </div>
                    </div>
                </div>
                <!-- PRODUCT 2 -->
                <div class="product row">
                    <div class="col-md-5 col-12">
                        <img class="img" src="./images/img-ghe.jpg" alt="">
                    </div>
                    <div class="col-md-7 col-12 text-ct">
                        <div class="text-box">
                            <span class="text">Donec odio, puisuqe.</span>
                            <span class="price">$20.40</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-4 col-12">

                <!-- TITLE -->
                <div class="product-title">
                    <span class="title1">Sale Arrivals</span>
                    <span class="title2">Featured Items</span>
                </div>
                <!-- PRODUCT 1 -->
                <div class="product row">
                    <div class="col-md-5 col-12">
                        <img class="img" src="./images/img-ghe.jpg" alt="">
                    </div>
                    <div class="col-md-7 col-12 text-ct">
                        <div class="text-box">
                            <span class="text">Donec odio, puisuqe.</span>
                            <span class="price">$20.40</span>
                            <del class="price-sale">$25.50</del>
                        </div>
                    </div>
                </div>
                <!-- PRODUCT 2 -->
                <div class="product row">
                    <div class="col-md-5 col-12">
                        <img class="img" src="./images/img-ghe.jpg" alt="">
                    </div>
                    <div class="col-md-7 col-12 text-ct">
                        <div class="text-box">
                            <span class="text">Donec odio, puisuqe.</span>
                            <span class="price">$20.40</span>
                            <del class="price-sale">$25.50</del>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>