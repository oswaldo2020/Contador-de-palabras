@extends('layout')

@section('title', 'Prueba5')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <form class="bg-white shadow rounded py-3 px-4">
                    <h1 class="display-6 text-center">Cuenta el número de palabras</h1>
                        <hr>
                        <div class="form-group">
                            <label for="frase"> Escribe una frase</label>
                            <input class="form-control bg-light shadow-sm"
                            type="text"
                            id="frase"
                            name="frase">
                        </div>

                            <button class="btn btn-primary btn-lg btn-block"
                            type="submit"
                            name="procesar"
                            value="procesar"
                            id="enviar" >Procesar
                            </button>
                            <hr>
                        @isset($totalWord)
                            <ul >

                                    <h3 class="font-weight-bold">
                                        {{$totalWord}}
                                    </h3>

                            </ul>
                        @endisset
                </form>
        </div>
    </div>
</div>
@endsection