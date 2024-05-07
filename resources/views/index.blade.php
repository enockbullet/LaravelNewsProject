<?php
$project_name = 'Simple projects';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homepage</title>
</head>


<body>
    <h2>HOME PAGE</h2>
    <p>Welcome to <b>{{ $project_name }}</b></p>
    <hr>
    <p><b>NAME: </b>{{ $name }}</p>
    <p><b>SEX: </b>{{ $sex }}</p>
    {{-- <?php print_r($colors); ?> --}}

    @foreach ($colors as $color)
        <p>{{ $color }}</p>
    @endforeach
</body>

</html>
