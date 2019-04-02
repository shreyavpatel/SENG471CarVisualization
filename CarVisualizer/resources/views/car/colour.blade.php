<head>

  <title>
    Colour Visualization
  </title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

  <style>
    .selection_form{
      margin: 5% auto;
      width: 50%;
    }

    .form-group{
      margin: 20px auto;
    }

    .visualization{
      width: 80%;
      margin: 0 auto;
    }

    .colour_image{
      width: 49%;
      margin: 0 0;
      display: inline-block;
    }

    .button_client {
      margin-left: 80%;
    }
  </style>

</head>



<body>

<div class="selection_form">

  <h3>Please choose exterior and interior colours</h3>

  <p hidden id="model">{{$model}}</p>

<div class="form-group">
  Exterior Colour:
  <select name="exterior_colour" id="exterior_colour">
    @foreach($ext_colours as $ext_colour)
      <option value="{{$ext_colour}}">{{$ext_colour}}</option>

    @endforeach

  </select>
</div>

<div class="form-group">
  Interior Colour:
  <select name="interior_colour" id="interior_colour">
    @foreach($int_colours as $int_colour)
      <option value="{{$int_colour}}">{{$int_colour}}</option>

    @endforeach
  </select>
</div>


<div class="form-group">

  <button class="btn btn-primary form-control" onclick="visualize()">View Car</button>

</div>

@if(Auth::check())
  @if(Auth()->user()->isClient())
    <div class="button_client">
      <a href="" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-heart"></span> </a>
    </div>
  @endif
@endif

</div>

<div class="visualization">

  <img class="colour_image" src="" id="exterior_img">

  <img class="colour_image" src="" id="interior_img">

</div>

<script>

    visualize();

  function visualize(){
      var ext_colour = document.getElementById('exterior_colour').value;
      var int_colour = document.getElementById('interior_colour').value;

      var model = document.getElementById('model').innerText;

      showExterior(ext_colour, model);
      showInterior(int_colour, model);
  }

  function showExterior(ext_colour, model){

      var img_address = "img/" + model + "_Exterior_" + ext_colour + ".png";

      document.getElementById("exterior_img").src = img_address;

      console.log(img_address);

  }

  function showInterior(int_colour, model){

      var img_address = "img/" + model + "_Interior_" + int_colour + ".png";

      document.getElementById("interior_img").src = img_address;


      console.log(img_address);
  }


</script>

</body>