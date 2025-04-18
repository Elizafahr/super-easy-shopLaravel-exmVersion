@include('components.header')

<h1>товар</h1>

<h2>{{ $item->ItemName }}</h2>
<h2>{{ $item->ItemDesc }}</h2>
<form action="{{ route('add') }}" method="POST">
    @csrf
    <p>количество</p>
    <input type="number" name="quantity" min="1" value="1">
    <input type="hidden" name="itemId" value="{{ $item->ItemId }}">
    <button type="submit">Заказать</button>
</form>

</body>
</html>