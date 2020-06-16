<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1814">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="col_inner">
                    <div class="choices-content">
                        <ul class="choices">
                            <li class="list-choice">
                                <a class="name" href="">New York</a>
                            </li>
                            <li class="list-choice">
                                <a class="name" href="">LonDon</a>
                            </li>
                            <li class="list-choice">
                                <a class="name" href="">Oslo</a>
                            </li>
                            <li class="list-choice">
                                <a class="name" href="">Stolkholm</a>
                            </li>
                            <li class="list-choice">
                                <a class="name" href="">Add as many as you want</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <a href="" class="col-md-9 swiper-container">
                <div class="swiper-wrapper">
                    <!-- Hình 1 -->
                    <div class="swiper-slide">
                        <img src="images/hinh1.jpg" alt="">
                    </div>
                    <!-- Hình 2 -->
                    <div class="swiper-slide">
                        <img src="images/hinh2.jpg" alt="">
                    </div>
                    <!-- Hình 3 -->
                    <div class="swiper-slide">
                        <img src="images/hinh3.jpg" alt="">
                    </div>
                    <!-- Hình 4 -->
                    <div class="swiper-slide">
                        <img src="images/hinh4.jpg" alt="">
                    </div>
                    <!-- Hình 5 -->
                    <div class="swiper-slide">
                        <img src="images/hinh5.jpg" alt="">
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </a>
        </div>
    </div>
</div>