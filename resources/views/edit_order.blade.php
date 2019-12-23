@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-5">
                <form>
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
                                <option value="{{ $partner->id }}">{{ $partner->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="partner">
                            Статус заказа
                        </label>
                        <select class="form-control" name="status" id="partner">
                            <option value="0">Новый</option>
                            <option value="10">Подверждён</option>
                            <option value="20">Завершён</option>
                        </select>
                    </div>

                    <div class="form-group">
                        Общая стоимость заказа: <b>{{ $price }} ₽</b>
                    </div>

                    <button type="button" class="btn btn-success">
                        Сохранить
                    </button>

                </form>             
            </div>
        </div>
    </div>
@endsection