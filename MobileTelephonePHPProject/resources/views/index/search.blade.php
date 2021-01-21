@extends('layouts.app')
@section('content')
    <div style="margin-left: 10%">
    <h1>Telephones from the search results:</h1>
    <br>
    @foreach($telephones as $telephone)
        <strong><h3>Telephone brand name: {{$telephone->brand->name}}</h3>
            <br>
            <h3>Telephone model specs: Telephone model:</h3> {{$telephone->telephoneModel->name}} <br>
            Telephone specifications: <br> <h3>CPU:</h3> {{$telephone->telephoneModel->cpu}} <br> <h3>GPU:</h3>
            {{$telephone->telephoneModel->gpu}} <br> <h3>Memory:</h3> {{$telephone->telephoneModel->memory}} <br>
            <h3>Camera:</h3> {{$telephone->telephoneModel->camera}} <br> <h3>Battery:</h3>
            {{$telephone->telephoneModel->battery}} <br> <h3>Display:</h3> {{$telephone->telephoneModel->display}}
            <h2>Telephone year of release: {{$telephone->yearofrelease}}</h2> <br>
            <h4>Telephone image: <img src="{{$telephone->image}}" width="300" height="350" alt="no image"> <br> <br></h4>
        </strong>
    @endforeach
    </div>
@endsection
