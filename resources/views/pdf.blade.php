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


<table id="res">
    <thead>
    <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Город</th>
        <th>Специальность</th>
        <th>Пол</th>
        <th>День рождения</th>
        <th>Гражданство</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$resume->name}}</td>
            <td>{{$resume->surname}}</td>
            <td>{{$resume->city}}</td>
            <td>{{$resume->speciality}}</td>
            <td>{{$resume->gender}}</td>
            <td>{{$resume->birth_day}}</td>
            <td>{{$resume->citizen}}</td>
        </tr>
    </tbody>
</table>


<style>
    #res {
        font-family: DejaVu Sans;
        border-collapse: collapse;
        width: 100%;
    }

    #res td, #res th {
        border: 1px solid #ddd;
    }

    #res tr:nth-child(even) {
        background-color: #0bfdfd;
    }

    #res th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: #fff;
    }
</style>
</body>
</html>
