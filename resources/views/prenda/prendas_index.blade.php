<table>
<thead>
    <tr>
    <th>Prenda</th>
    <th>Descripcion</th>
    <th>Tipo de tela</th>
    <th>Color</th>
    

    </tr>
</thead>
<tbody>
        @foreach($prendas as $p)
        <tr>
            <td>{{ $p->id}} </td>
            <td>{{ $p->descripcion}} </td>
            <td>{{ $p->tipo_tela}} </td>
            <td>{{ $p->color}} </td>
           
            <td>
                <a href="{{ route ( 'prendas.edit', $p->id ) }} ">
                    <button class="btn btn-outline-warning" onclick="return confirm('¿Quieres Editar?')">Editar</button>
                </a> 
            </td>
            <br>
            <td>
                <form action="{{url('prendas/'.$p->id)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <button class="btn btn-outline-danger" type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="Eliminar"> Eliminar </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>