@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Tambah Data Hairstyle</h3>
        <form action="{{ url('/hairstyle') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>NAMA STYLE</label>
                <input type="text" class="form-control" name="style_name">
            </div>
            <div class="mb-3">
                <label>JENIS STYLE</label>
                <input type="text" class="form-control" name="style_jenis">
            </div>
            <div class="mb-3">
                <label>HARGA</label>
                <input type="text" class="form-control" name="style_harga">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection