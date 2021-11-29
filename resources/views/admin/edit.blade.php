<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@extends('layouts.app')

@section('content')
    @if($errors->any())

        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif
    <div class="container bg-light">
        <form action="{{route('resume.update', ['resume' => $resume->id])}}" method="post">

            @csrf
            <div class="contact_section">
                <h3 class="ml-2  mb-4">Контактные данные</h3>
                <div>
                    <div class="div1"><span>Имя</span>
                        <input type="text" class="input1" name="name" value="{{$resume->name}}"
                               style="margin-left: 150px;"></div>
                    <div class="div1"><span>Фамилия</span>
                        <input type="text" name="surname" class="input1" value="{{$resume->surname}}"
                               style="margin-left: 117px;"></div>
                    <div><span>Город проживания</span>
                        <select name="city" class="input2" style="margin-left: 41px;width: 180px">
                            <option value="{{$resume->city}}">{{$resume->city}}</option>
                            @foreach($cities as $city)
                                <option value="{{$city->name}}" rel="icon-temperature">{{$city->name}}</option>
                            @endforeach

                        </select></div>
                </div>
            </div>

            <div class="main_section">
                <h3 class="ml-2 mb-4">Основная информация</h3>
                <div>
                    <div class="div1"><span>Дата рождения</span>
                        <input type="text" name="birth_day" class="datepicker input2" id="datepicker"
                               style="margin-left: 70px;">


                    </div>

                    <div class="div1 d-flex">
                        <div><span>Пол</span></div>
                        <div style="margin-left: 160px;">
                            <label>Мужской</label>
                            <input type="radio" class="custom-radio" name="gender" value="Женщина" required>
                            <br>
                            <label>Женский</label>
                            <input type="radio" class="custom-radio" name="gender" value="Мужчина" required>
                        </div>
                    </div>
                    <div><span>Гражданство</span>
                        <select id="country" name="citizen" class="input2" style="margin-left: 85px;width: 180px">
                            <option value="{{$resume->citizen}}">{{$resume->citizen}}</option>
                            @foreach($countries as $contry)
                                <option value="{{$contry->name}}" rel="icon-temperature">{{$contry->name}}</option>
                            @endforeach

                        </select></div>
                    <div class="div1" style="margin-top: 35px"><span>Специальность</span>
                        <input type="text" value="{{$resume->speciality}}" name="speciality"
                               style="margin-left: 68px;width: 225px">
                    </div>
                </div>
            </div>

            <input class="mt-5 btn bg-warning" type="submit" id="submit">
        </form>
    </div>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html>
<style>
    .div1 {
        padding-bottom: 20px;

    }

    .input1 {
        width: 240px;
        height: 35px;

    }

    .contact_section {
        margin-bottom: 25px;
    }

    .input2 {
        width: 110px;
        height: 30px;
    }

    .select2 {

        height: 30px;
    }

    .custom-radio {
        transform: scale(1.2);
        margin-left: 8px;
    }
</style>


<script>
    $(function () {
        $("#datepicker").datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true
        });
    });


</script>
@endsection
