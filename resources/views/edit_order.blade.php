@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-5">
                <form action="{{ route('orders.update', $item->id) }}" method="POST">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            Email клиента
                        </label>
                        <input name="client_email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email клиента" value="{{ $item->client_email }}">
                    </div>

                    <div class="form-group">
                        <label for="partner">
                            Партнёр
                        </label>
                        <select class="form-control" name="partner_id" id="partner">
                            @foreach ($partners as $partner)
                                <option value="{{ $partner->id }}" @if ($partner->id == $item->partner_id) selected @endif>{{ $partner->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <b>
                            Продукты
                        </b>                        
                        <table class="table">
                            <tr>
                                <th>
                                    Наименование
                                </th>

                                <th>
                                    Количество
                                </th>
                            </tr>

                            @foreach ($products as $product)
                            <tr>
                                <th>
                                    {{ $product->name }}
                                </th>

                                <th>
                                    {{ $product->quantity }}
                                </th>
                            </tr>
                            @endforeach
                        </table>
                    </div>


                    <div class="form-group">
                        <label for="status">
                            Статус заказа
                        </label>
                        <select class="form-control" name="status" id="status">
                            <option value="0" @if ($item->status == 0) selected @endif>Новый</option>
                            <option value="10" @if ($item->status == 10) selected @endif>Подверждён</option>
                            <option value="20" @if ($item->status == 20) selected @endif>Завершён</option>
                        </select>
                    </div>

                    <div class="form-group">
                        Общая стоимость заказа: <b>{{ $price }} ₽</b>
                    </div>

                    <button type="submit" class="btn btn-success">
                        Сохранить
                    </button>

                </form>             
            </div>
        </div>
    </div>
@endsection