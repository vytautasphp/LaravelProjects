<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>About</h1>
   
    <tr>
        <th>number</th>
        <th>speed</th>
    </th>
    @foreach($radars as $radar)
    <tr>
        <td>{{$radar['number']}}</td>
        <td>{{$radar['speed']}}</td>
    </tr>

    @endforeach
</body>
</html>