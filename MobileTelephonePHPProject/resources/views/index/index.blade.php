@extends('layouts.app')

@section('content')
    <div class="inner">
        <div class="content">
            <header>
                <center><h1>{{$title}}</h1></center>
            </header>
            @foreach($telephones as $telephone)
                @if(isset($telephone))
                <h3>Telephone brand: {{$telephone->brand->name}}</h3> <br>
                <strong>Telephone model: {{$telephone->telephoneModel->name}} <br>
                    Telephone specifications: <br> <h3>CPU:</h3> {{$telephone->telephoneModel->cpu}} <br> <h3>GPU:</h3>
                    {{$telephone->telephoneModel->gpu}} <br> <h3>Memory:</h3> {{$telephone->telephoneModel->memory}} <br>
                    <h3>Camera:</h3> {{$telephone->telephoneModel->camera}} <br> <h3>Battery:</h3>
                    {{$telephone->telephoneModel->battery}} <br> <h3>Display:</h3> {{$telephone->telephoneModel->display}}
                </strong>
                <h2><strong>Telephone year of release: {{$telephone->yearofrelease}}</strong></h2> <br>
                    <h4>Telephone image: <img src="{{$telephone->image}}" width="300" height="350" alt="no image"> <br> <br></h4>
                @endif
            @endforeach
        </div>
    </div>
@endsection