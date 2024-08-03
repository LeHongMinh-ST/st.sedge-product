<div class="product-detail-slider product-details-tb product-details">
    <!-- Product slider start -->
    <div class="product-detail-img product-detail-img-bottom">
        <!-- top slick-slider start -->
        <div class="product-img-top">
            <button class="full-view"><i class="bi bi-arrows-fullscreen"></i></button>
            <div class="slider-big slick-slider">
                <div class="slick-slide">
                    <a href="{{ asset($product->thumbnail) }}" class="product-single">
                        <figure class="zoom" onmousemove="zoom(event)" style="background-image: url('{{ asset($product->thumbnail) }}');">
                            <img src="{{ asset($product->thumbnail) }}" class="img-fluid" alt="{{ $product->name }}">
                        </figure>
                    </a>
                </div>
                @foreach ($product->galeries as $gallery)
                    <div class="slick-slide">
                        <a href="{{ asset($gallery->thumbnail) }}" class="product-single">
                            <figure class="zoom" onmousemove="zoom(event)" style="background-image: url('{{ asset($gallery->thumbnail) }}');">
                                <img src="{{ asset($gallery->thumbnail) }}" class="img-fluid" alt="{{ $product->name }}">
                            </figure>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
        <!-- top slick-slider end -->
        <!-- small slick-slider start -->
        <div class="pro-slider">
            <div class="slider-small pro-detail-slider small-slider">
                @if (!empty($product->galeries))
                    @foreach ($product->galeries as $gallery)
                        <div class="slick-slide">
                            <a href="javascript:void(0)" class="product-single--thumbnail">
                                <img src="{{ asset($gallery->thumbnail) }}" class="img-fluid" alt="{{ $product->name }}">
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <!-- small slick-slider end -->
    </div>
    <!-- Product slider end -->
</div>
