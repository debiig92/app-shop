@extends('layouts.app')
@section('body-class', 'landing-page')
@section('content')
        <div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
        </div>

<div class="main main-raised">
<div class="container">
          <div class="section">
            <h2 class="title text-center">Editar producto seleccionado</h2>

                      <form method="post" action="{{ url('/admin/products/'.$products->id.'/edit') }}">
                        {{ csrf_field() }}
                        <div class="row">


                                    <div class="col-sm-6">
                                      <div class="form-group label-floating">
                                        <label class="control-label">Nombre del producto</label>
                                        <input type="text" name="name" class="form-control" value="{{$products->name}}">
                                   </div>
                                   </div>


                                    <div class="col-sm-6">
                                      <div class="form-group label-floating">
                                        <label class="control-label">Precio</label>
                                        <input type="number" name="price" class="form-control" value="{{$products->price}}">
                                      </div>
                                  </div>


                               <div class="col-sm-12">
                                  <div class="form-group label-floating">
                                        <label class="control-label">Descripción Corta</label>
                                        <input type="text" name="description" class="form-control" value="{{$products->description}}">
                                   </div>
                                   </div>
                                  
                                 <div class="col-sm-12">
                                  <textarea class="form-control" name="long_description" placeholder="Descripción Extensa del producto" rows="5">
                                  {{$products->long_description}}
                                  </textarea>
                                   </div>
                                  <button class="btn btn-primary">Guardar cambios</button>
                                  <a href="{{url('/admin/products')}}" class="btn btn-default">Cancelar</a>
                        </div>
                      </form>
              </div>
    </div>
</div>


@endsection
