@extends('layouts.app')

@section('content')
    <h2>Input Data Pelanggan</h2>

    <form action="{{ url('/pelanggan') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Nama Style Pelanggan</label>
            <select class="form-select" id="inputGroupSelect01" name="pel_id_style" id="pel_id_style">
                <option selected>Pilih Hairstyle...</option>
                @foreach ($rowHairstyle as $HairstyleItem)
                    <option value="{{ $HairstyleItem->style_id }}">{{ $HairstyleItem->style_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="">Nama Pelanggan</label>
            <input type="text" name="pel_nama" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Alamat Pelanggan</label>
            <input type="text" name="pel_alamat" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">No Hp Pelanggan</label>
            <input type="text" name="pel_hp" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Ktp Pelanggan</label>
            <input type="text" name="pel_ktp" class="form-control">
        </div>
        <div class="input-group my-3">
            <label class="input-group-text" for="inputGroupSelect01">ID User Pelanggan</label>
            <select class="form-select" id="inputGroupSelect01" name="pel_id_user" id="pel_id_user">
                <option selected>Pilih User...</option>
                @foreach ($rowsUser as $userItem)
                    <option value="{{ $userItem->id }}">{{ $userItem->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
    </form>
@endsection
