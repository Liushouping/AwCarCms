<!-- Swiper -->
<section class="swiper-container" id="swiper2">
    <div class="swiper-wrapper">
    @foreach($products as $product)
    <!-- <a href=""> -->
        <div class="swiper-slide p-0 d-flex justify-content-center">
            <img src="{{$product->image_url}}" class="img-fluid rounded" style="padding:0px;background:#fff;box-shadow: 0 0.25rem 0.5rem rgb(42 42 42 / 5%);">
        </div>
    <!-- </a> -->
    @endforeach
    </div>
<!-- Add Pagination -->
<!-- <div class="swiper-pagination swiper-pagination-white s2"></div> -->
<!-- Add Arrows -->
<!-- <div class="swiper-button-next swiper-button-white sn2 text-dark"></div>
<div class="swiper-button-prev swiper-button-white sp2 text-dark"></div> -->
</section>


