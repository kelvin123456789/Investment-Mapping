@extends('layouts.client)

@section('content')
   <div>
       {!! Form::open(['url' => url('')]) !!}
       {{--// {{ Form::label('category', 'Category') }}--}}

       {{--<select name="categories_id" >--}}
           {{--@foreach($categories as $category)--}}
               {{--<option value="{{$category->id}}">{{$category->name}}</option>--}}
           {{--@endforeach--}}
       {{--</select>--}}
       {{ Form::label('product_name', 'Product Name') }}
       {{Form::text('product_name', null, array('class'=>'form')) }}
       {{ Form::label('prices', 'Product Price') }}
       {{Form::text('prices', null, array('class'=>'form')) }}
       {{ Form::label('description', 'Product Description') }}
       {{Form::textarea('description', null, array('class'=>'form')) }}

       {{ Form::submit('Save',array('class'=>'button'))}}
       {!! Form::close() !!}
   </div>


    @endsection