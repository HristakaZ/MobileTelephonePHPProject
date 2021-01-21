@extends('layouts.app')

@section('content')
    <style>
        #searchOption{
            background-color:white;
            width:50%;
            text-align: center;
            float: right;
        }
        #searchTextInput{
            width: 50%;
            text-align: center;
            float: right;
        }
    </style>
    <div class="inner">
        <div class="content">
            <header>
                <h1 style="text-align: center">{{$title}}</h1>
            </header>
            <form action="/search" method="get">
                <div>
                    <input type="text" id="searchTextInput" placeholder="Search Telephone by criteria"
                           name="searchTextInput" />
                    <br>
                    <br>
                    <br>
                    <select name="searchOption" id="searchOption">
                        <option value="yearofrelease">Year of release</option>
                        <option value="telephonemodel">Telephone Model</option>
                        <option value="telephonebrand">Telephone Brand</option>
                    </select>
                    <br>
                    <br>
                    <br>
                    <input type="submit" id="submitSearch" style="float: right" />
                </div>
            </form>
            <br>
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
