



<label for="nombre">{{'nombre'}}</label>
<input  type="text" name="nombre" id="nombre" 

value="{{isset($producto->nombre)?$producto->nombre:''}}">
<br/>
<label for="cantidad">{{'cantidad'}}</label>
<input  type="number" name="cantidad" id="cantidad" value="{{isset($producto->cantidad)?$producto->cantidad:''}}">
<br/>
<label for="precio">{{'precio'}}</label>
<input  type="number" name="precio" id="precio" value="{{isset($producto->precio)?$producto->precio:''}}">
<br/>


<input type="submit" value="{{$Modo=='crear'?'Agregar':'Modificar'}}">
<a href="{{url('productos')}}">Regresar</a>