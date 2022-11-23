@extends('layouts.app')
@section('title' , 'Home')
@section('content')

<div class="wrapper fadeInDown">
    <div id="formContent">
        <form  action="{{ route ( 'prendas.store' ) }} " method="POST">
        @csrf
            <h1>Registrar Una Prenda</h1>
                    <div class="mb-3">
                        <label class="label" for="descripcion">Descripcion</label>
                        <input name="descripcion" class="form-control"
                        type="text" placeholder="Descripcion" id="descripcion" value="{{ old('descripcion') }}">
                    </div>
                    <div class="mb-3">
                        <label class="label" for="tipo_tela">Tipo de Tela</label>
                        <input id="tipo_tela" name="tipo_tela" class="form-control"
                        type="text" placeholder="Tipo" value="{{old('tipo_tela')}}">      
                    </div>
                    <div class="mb-3">
                        <label class="label" for="color">Color</label>
                        <br>
                        <input id="color" name="color" class="form-control"
                        type="text" placeholder="Color"  value="{{old('color')}}">   
                    </div>
                    <button class="btn btn-success">Guardar</button>

        </form>            
    </div>
</div>




@endsection