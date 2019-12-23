@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-striped">
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Партнёр
                        </th>
                        <th>
                            Стоимость заказа
                        </th>
                        <th>
                            Наименование состава заказа
                        </th>
                        <th>
                            Статус заказа
                        </th>
                        <th>

                        </th>
                    </tr>
                    @foreach ($orders as $order)
                        <tr>
                            <td>
                                {{ $order->id }}
                            </td>

                            <td>
                                {{ $order->partner->name }}
                            </td>

                            <td>
                                {{ $order->price }} ₽
                            </td>

                            <td>
                                @foreach ($order->products as $product)
                                    {{ $product->name }}<br>
                                @endforeach
                            </td>

                            <td>
                                {{ $order->status_text }}
                            </td>

                            <td>
                                <a href="{{ route('orders.edit', $order->id) }}" target="_blank">
                                    Редактировать
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{ $orders->links() }}
            </div>
        </div>
    </div>
@endsection