<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($clientdata as $data)
    <img src="data:image/jpg;base64,{{ base64_encode($data->soilreport) }}" alt="Soil Report">
     @endforeach
</body>
</html>