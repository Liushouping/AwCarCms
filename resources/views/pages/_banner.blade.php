<!-- Swiper -->
<section class="swiper-container" id="swiper1">
    <div class="swiper-wrapper">
    @foreach($banners as $banner)
    <!-- <a href=""> -->
        <div class="swiper-slide" style="background-image:url('{{$banner->image_url}}');">
            <a href="{{ $banner->link }}"></a>
        </div>
    <!-- </a> -->
    @endforeach
    </div>
<!-- Add Pagination -->
<div class="swiper-pagination swiper-pagination-white s1"></div>
<!-- Add Arrows -->
<div class="swiper-button-next swiper-button-white sn1"></div>
<div class="swiper-button-prev swiper-button-white sp1"></div>
</section>
