@extends('layout.masterlayout')

@section('title','Create Product Category')

@section('main')

{{ Form::open(array('url'=>'/productcategory')) }}
    <table>
        <tr>
            <td>Name:</td>
            <td>{{Form::text('name')}}</td>
        </tr>

        <tr>
            <td>Name:</td>
            <td>{{Form::text('dislay_name')}}</td>
        </tr>

        <tr>
            <p>{{Form::submit('create')}}</p>
        </tr>
    </table>
{{ Form::close}}

@endsection