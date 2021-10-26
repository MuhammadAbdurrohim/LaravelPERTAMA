@extends('layouts.app')

@section('title','cobaaaaa')

@section('content')
<div class="card"></div>
    <div class="card-body"></div>
        <h3>Nama Teman : {{ $friends['nama'] }}</h3>
        <h3>No Tlp Teman : {{ $friends['no tlp'] }}</h3>
        <h3>Alamat Teman : {{ $friends['alamat'] }}</h3>
        </div>
    </div>
@endsection
   
