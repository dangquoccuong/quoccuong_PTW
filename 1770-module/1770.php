<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-4">
  <!-- begin -->
  <div class="container">
    <h3 class="title-4">
      <span>Our BestSellers</span>
      <a href="#" class="d-flex float-right align-items-center">Browse All <i class="fas fa-chevron-right ml-2"></i></a>
    </h3>
    
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="product-module-4">
            <div class="image-1">
              <img class="img-fluid" src="images/product-1-2.jpg" alt="product">
            </div>
            <div class="image-2">
              <img class="img-fluid" src="images/product-1-1.jpg" alt="product">
              <div class="wishlist">
                <div class="icon-wishlist">
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                </div>
              </div>
              
              <div class="quick-view">
                <a href="#">Quick View</a>
              </div>
            </div>
            <div class="text-box-product">
              <p class="category-module-4">Clothing</p>
              <a href="#" class="name-product">Happy Ninja</a>
              <p class="price-product">$18,00</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-module-4">
            <div class="image-1">
              <img class="img-fluid" src="images/product-2-2.jpg" alt="product">
            </div>
            <div class="image-2">
              <img class="img-fluid" src="images/product-2-1.jpg" alt="product">
              <div class="wishlist">
                <div class="icon-wishlist">
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                </div>
              </div>
              
              <div class="quick-view">
                <a href="#">Quick View</a>
              </div>
            </div>
            <div class="sale-module-4">
                <span>Sale!</span>
            </div>
            <div class="out-stock">
                <span>Out Of Stock</span>
            </div>
            <div class="text-box-product">
              <p class="category-module-4">Clothing</p>
              <a href="#" class="name-product">Ship Your Idea</a>
              <p class="price-product">$30,00 - $35,00</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-module-4">
            <div class="image-1">
              <img class="img-fluid" src="images/product-3-2.jpg" alt="product">
            </div>
            <div class="image-2">
              <img class="img-fluid" src="images/product-3-1.jpg" alt="product">
              <div class="wishlist">
                <div class="icon-wishlist">
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                </div>
              </div>
              
              <div class="quick-view">
                <a href="#">Quick View</a>
              </div>
            </div>
            <div class="text-box-product">
              <p class="category-module-4">Clothing</p>
              <a href="#" class="name-product">Happy Ninja</a>
              <p class="price-product">$35,00</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-module-4">
            <div class="image-1">
              <img class="img-fluid" src="images/product-4-2.jpg" alt="product">
            </div>
            <div class="image-2">
              <img class="img-fluid" src="images/product-4-1.jpg" alt="product">
              <div class="wishlist">
                <div class="icon-wishlist">
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                </div>
              </div>
              
              <div class="quick-view">
                <a href="#">Quick View</a>
              </div>
            </div>
            <div class="text-box-product">
              <p class="category-module-4">Clothing</p>
              <a href="#" class="name-product">Ninja Silhouette</a>
              <p class="price-product">$35,00</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-module-4">
            <div class="image-1">
              <img class="img-fluid" src="images/product-5-2.jpg" alt="product">
            </div>
            <div class="image-2">
              <img class="img-fluid" src="images/product-5-1.jpg" alt="product">
              <div class="wishlist">
                <div class="icon-wishlist">
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                </div>
              </div>
              
              <div class="quick-view">
                <a href="#">Quick View</a>
              </div>
            </div>
            <div class="out-stock">
                <span>Out Of Stock</span>
            </div>
            <div class="text-box-product">
              <p class="category-module-4">Clothing</p>
              <a href="#" class="name-product">Ship Your Idea</a>
              <p class="price-product">$20,00</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-module-4">
            <div class="image-1">
              <img class="img-fluid" src="images/product-6-2.jpg" alt="product">
            </div>
            <div class="image-2">
              <img class="img-fluid" src="images/product-6-1.jpg" alt="product">
              <div class="wishlist">
                <div class="icon-wishlist">
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                </div>
              </div>
              
              <div class="quick-view">
                <a href="#">Quick View</a>
              </div>
            </div>
            <div class="text-box-product">
              <p class="category-module-4">Clothing</p>
              <a href="#" class="name-product">Ninja Silhouette</a>
              <div class="rating-product">
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
              </div>
              <p class="price-product">$20,00</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Add Arrows -->
      <div class="swiper-button-next-module-4">
        <i class="fas fa-chevron-right"></i>
      </div>
      <div class="swiper-button-prev-module-4">
        <i class="fas fa-chevron-left"></i>
      </div>
    </div>
  </div>
  <!-- end -->
</div>
<script>
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next-module-4',
        prevEl: '.swiper-button-prev-module-4',
      },
      loop: true,
      slidesPerView: 2,
      spaceBetween: 20,
      breakpoints: {
        640: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 4,
        },
        1024: {
          slidesPerView: 5,
        },
      }
    });
</script>