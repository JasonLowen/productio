<section id="products">
    <div class="productTitle">
        Products
    </div>
    <div class="productContainer">
        @foreach ($products as $product)
            <div class="productItem">
                <div class="productName">
                    {{ $product->productName }}
                </div>
                <div class="productImage">
                    <img src="{{ $product->productImage }}" alt="" width="100%" height="300">
                </div>
                <div class="productDesc">
                    <label for="desc">{{ $product->productDesc }}</label> <br>
                    Price = Rp. <label for="price">{{ $product->productPrice }}</label>
                </div>
            </div>
        @endforeach
    </div>
</section>
