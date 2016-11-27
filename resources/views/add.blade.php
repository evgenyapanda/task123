@extends('layouts.layout')
@section('content')
    <div class="container">
        <h1>Добавить товар</h1>
        <hr>

        <form method="post" action="{{ route('itemStore') }}">
            <label for="title">Имя</label>
            <input type="text" name="name" ><br>
            <label for="title">Фото</label>
            <input type="file" name="img"/><br><br>
            <label for="title">Описание</label>
            <input type="text" name="text" ><br>
            <label for="title">Цена</label>
            <input type="text" name="price"><br>
            <label for="title">Распродажа</label>
            <input type="text" name="discont"><br>
            <button type="submit">Отправить</button>
          {{ csrf_field() }}
       </form>
    </div>
@endsection