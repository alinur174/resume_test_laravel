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
    <div class="container mt-5">
        <div class="d-flex">
            <h2>Мои резюме</h2>
            <div style="margin-left: 768px">
                <a href="{{route('resume.create')}}" class="btn btn-info">Создать резюме</a>
            </div>
        </div>
        @foreach($resumes as $resume)
            <div class="resume_block">
                <div class="border-bottom border-top py-4">
                    <h5>{{$resume->speciality}}</h5>
                    <div class="pb-5">
                        <div class="pb-1"><span>Создано: {{$resume->created_at}}</span></div>
                        <div><span>Обновлено: {{$resume->updated_at}}</span></div>
                        <div><span>Проведенное время для создания: {{$resume->spent_creation_time}}</span></div>
                    </div>
                    <div class="d-flex">
                        <a href="{{route('download', $resume->id)}}" style="margin-right: 15px" type="button" class="btn btn-info">Скачать</a>

                        <form action="{{ route('resume.delete', $resume->id) }}" method="POST"
                              style="margin-right: 15px">
                            @csrf
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                        <a href="{{route('resume.edit', ['resume' => $resume->id])}}"
                           class="btn btn-success">Редактировать</a>
                    </div>
                </div>

            </div>
        @endforeach
    </div>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>

</body>



<script>
    window.onload = function () {
        time = 0;
    }
    window.onbeforeunload = function () {
        timeSite = new Date() - time;
        window.localStorage['timeSite'] = timeSite;
        console.log(timeSite)
    }
    let date = new Date();
    let start = date.getTime();
    let hours = date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds();
    console.log(hours)


    $('#click').on('click', () => {
        let end = new Date().getTime();
        let hours2 = date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds();
        let eap = end - start

        console.log(timeConversion(eap))
    });

    function timeConversion(millisec) {

        var seconds = (millisec / 1000).toFixed(0);

        var minutes = (millisec / (1000 * 60)).toFixed(1);

        var hours = (millisec / (1000 * 60 * 60)).toFixed(1);

        var days = (millisec / (1000 * 60 * 60 * 24)).toFixed(1);

        if (seconds < 60) {
            return seconds + " Sec";
        } else if (minutes < 60) {
            return minutes + " Min";
        } else if (hours < 24) {
            return hours + " Hrs";
        } else {
            return days + " Days"
        }
    }
</script>


</html>
@endsection
