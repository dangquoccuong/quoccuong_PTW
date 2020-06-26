<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1738">
    <div class="container">
        <div class="row">
            <div class="col-md-9 swiper-container">
                <div class="swiper-wrapper">
                    <!-- Hình 1 swiper -->
                    <div class="swiper-slide">
                        <div class="bg-slider-1 ">
                            <div class="text-center">
                                <h5 class="sub-title">A cool Top header</h5>
                                    <h2 class="main-title">Five Key Elements for your Living room</h2>
                                   <div class="underline"></div>
                                    <button>
                                        <span>Browse Now</span>
                                    </button>
                            </div>
                        </div>
                    </div>
                    <!-- Hình 2 swiper -->
                    <div class="swiper-slide">
                        <div class="bg-slider-2">
                        <div class="text">
                                <h5 class="sub-title">A cool Top header</h5>
                                    <h2 class="main-title">Latest Fashion News for AutumN</h2>
                                    <div class="underline"></div>
                                    <button>
                                        <span>Browse Now</span>
                                    </button>
                            </div>
                        </div>
                    </div>
                    <!-- Hình 3 swiper -->
                    <div class="swiper-slide">
                        <div class="bg-slider-3">
                            <div class="text-center">
                                <h5 class="sub-title">A cool Top header</h5>
                                    <h2 class="main-title">Five Key Elements for your Living room</h2>
                                    <div class="underline"></div>
                                    <button>
                                        <span>Browse Now</span>
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- </a> -->
            </div>
            <div class="col-md-3">
                <div class="banner-1">
                    <img src="images/img4.jpeg" alt="">
                </div>
                <div class="banner-2">
                    <img src="images/img-swiper-1.jpg" alt="">
                    <div class="text-center">
                        <h3 class="uppercase">Summer Sale</h3>
                        <button>
                            <span>Browse Now</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
