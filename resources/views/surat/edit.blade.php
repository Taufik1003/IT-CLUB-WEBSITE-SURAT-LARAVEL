@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Surat</div>
                <div class="card-body">
                    <form action="/update-surat/{{ $item->id }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="basicInput">Perihal</label>
                                    <input type="text" name="perihal" class="form-control" id="basicInput" value="{{$item->perihal}}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Nomor Surat</label>
                                    <input type="text" name="nomor_surat" class="form-control" id="basicInput" value="{{$item->nomor_surat}}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Tanggal</label>
                                    <input type="text" name="tanggal" class="form-control" id="basicInput" value="{{$item->tanggal}}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Tujuan</label>
                                    <input type="text" name="tujuan" class="form-control" id="basicInput" value="{{$item->tujuan}}">
                                </div>
                                <div>
                                    <button class="btn btn-primary">SIMPAN</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
