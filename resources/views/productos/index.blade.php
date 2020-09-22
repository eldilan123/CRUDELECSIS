<x-guest-layout>

  

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')

}}
@endif

<form method="POST" action="{{ route('login') }}">
<a href="{{url('productos/create')}}" class="ml-4 text-sm text-gray-700 underline">Agregar producto</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th style="padding: 10px;" >Referencia</th>
            <th style="padding: 10px;">Producto</th>
            <th style="padding: 10px;">Precio unitario</th>
            <th style="padding: 10px;">Cantidad</th>            
            <th style="padding: 10px;">Precio Total</th>
            <th style="padding: 10px;">Acciones</th>
    
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
        <tr>
            
            <td>{{$loop->iteration}}</td>
            <td>{{$producto->nombre}}</td>
            <td style="text-align: center">{{$producto->precio}}</td>
            <td style="text-align: center">{{$producto->cantidad}}</td>
            <td style="text-align: center">{{$producto->cantidad * $producto->precio}}</td>
            <td style="width: 200px; display:flex;">
             
                <a href="{{url('/productos/'.$producto->id.'/edit')}}" class="ml-4 text-sm text-gray-700 underline" style="padding-top: 5px;">EDITAR</a> 
                    
                <form action="{{url('/productos/'.$producto->id)}}" method="post">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}

              
                    <x-jet-button class="ml-4" onclick="return confirm('Borrar?')" style="float: right">
                        {{ __('Borrar') }}
                    </x-jet-button>
                    



                </form>



            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</form>

</x-guest-layout>
