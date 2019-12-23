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
                                Стоимость
                            </td>

                            <td>
                                Наименование состава заказа
                            </td>

                            <td>
                                Статус заказа
                            </td>

                            <td>
                                <a href="#" target="_blank">
                                    Редактировать
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection