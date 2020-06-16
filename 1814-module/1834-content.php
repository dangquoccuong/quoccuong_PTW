<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1834">
    <div class="container">
        <div class="title">
            <h3>Flatsome Main Features</h3>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                <div class="col-inner">
                    <img src="images/img1.jpg" alt="" class="image">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                <div class="col-inner img-inner">
                    <img src="images/img2.jpg" alt="" class="image">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                <div class="col-inner img-inner">
                    <img src="images/img3.jpg" alt="" class="image">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                <div class="col-inner img-inner">
                    <img src="images/img4.jpg" alt="" class="image">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                <div class="col-inner">
                    <img src="images/img4.jpg" alt="" class="image">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                <div class="col-inner img-inner">
                    <img src="images/img3.jpg" alt="" class="image">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                <div class="col-inner img-inner">
                    <img src="images/img2.jpg" alt="" class="image">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                <div class="col-inner img-inner">
                    <img src="images/img1.jpg" alt="" class="image">
                </div>
            </div>
        </div>
    </div>
</div>