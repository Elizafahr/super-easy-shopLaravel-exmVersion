@include('components.header')

    <h1>Каталог товаров</h1>

    @foreach ($items as $item)
        <h2>{{ $item->ItemName }}</h2>
        <h2>{{ $item->ItemDesc }}</h2>

        {{-- <form action="route('')">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->product_id }}">
            @auth <button type="submit"
                    class=" d-flex btn w-100 text-align-center justify-content-center btn-primary">Добавить в
                корзину</button> @endauth
            <a href="product/:{{ $product->product_id }}"
                class="btn  btn-outline-primary d-flex btn w-100 mt-1 text-align-center justify-content-center">Посмотреть
                больше</a>

        </form> --}}
        <a href="/product/{{$item->ItemId }}">Больше</a>


    @endforeach
</body>

</html>
