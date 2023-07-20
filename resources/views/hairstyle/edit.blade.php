@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Hairstyle</h3>
        <form action="{{ url('/hairstyle/' . $row->style_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>NAMA STYLE</label>
                <input type="text" class="form-control" name="style_name" value="{{ $row->style_name }}"></>
            </div>
            <div class="mb-3">
                <label>JENIS STYLE</label>
                <input type="text" class="form-control" name="style_jenis" value="{{ $row->style_jenis }}"></>
            </div>
            <div class="mb-3">
                <label>HARGA</label>
                <input type="text" class="form-control" name="style_harga" value="{{ $row->style_harga }}"></>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary btn-sm float-end" type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection