{!! Form::open(['url'=>'showColour']) !!}

<div class="form-group">
  <select name="model">
  <option value="0">--Select Model--</option>
  <option value="1">Sedan</option>
  <option value="2">SUV</option>
  <option value="3">Coupe</option>
  </select>
</div>

<div class="form-group">
  <select name="exterior_colour">
  <option value="0">--Select exterior colour--</option>
  <option value="1">Black</option>
  <option value="2">White</option>
  <option value="3">Red</option>
  <option value="4">Silver</option>
  <option value="5">Blue</option>
  </select>
</div>

<div class="form-group">
  <select name="interior_colour">
  <option value="0">--Select interior colour--</option>
  <option value="1">Black</option>
  <option value="2">White</option>
  <option value="3">Brown</option>
  </select>
</div>

<div class="form-group">
  {!! Form::submit('View Car', ['class' => "btn btn-primary form-control"]) !!}
</div>
{!! Form::close() !!}


@if( $model!=0 && $exterior_colour!=0 && $interior_colour!=0)
   <img src="/img/Sedan_Exterior_Silver.jpg" />
@endif
