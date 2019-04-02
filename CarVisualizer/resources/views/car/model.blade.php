<head>

    <title>
        Model Selection
    </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .selection_form{
            margin: 5% auto;
            width: 50%;
        }

        .form-group{
            margin: 20px auto;
        }
    </style>

</head>

<body>



<div class="selection_form">
    <h3>Please select the car model</h3>

{!! Form::open(['method' => 'GET', 'url'=>'car_display']) !!}

<div class="form-group">
    <select name="model" id="model">
        <option value="1">Sedan</option>
        <option value="2">SUV</option>
        <option value="3">Coupe</option>
    </select>
</div>

<div class="form-group">
    {!! Form::submit('Select', ['class' => "btn btn-primary form-control"]) !!}
</div>
{!! Form::close() !!}

</div>


{{--@if( $model!=0 && $exterior_colour!=0 && $interior_colour!=0)--}}
{{--<img src="/img/Sedan_Exterior_Silver.jpg" />--}}
{{--@endif--}}
</body>
