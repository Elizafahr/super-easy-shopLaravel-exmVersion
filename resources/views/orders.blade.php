@include('components.header')

    <h1>Каталог заказов</h1>

    @foreach ($orders as $order)
        <h2>Заказ {{ $order->orderId }}</h2>
        <h2>date</h2>
        <h2>{{$order->quantity}}</h2>
        <h2>{{$order->item->ItemName}}</h2>
        <h2>{{$order->quantity}}</h2>
        <p><strong>Цена:</strong> {{ $order->item->ItemPrice }}</p>

    @endforeach
</body>

</html>
