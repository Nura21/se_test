@extends('layouts.app')

@section('title','Tambah Data Warga')

@section('action')
<a href="{{ route('warga.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">Back</a>
@endsection

@section('content')
<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-12">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            {{-- <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
            </div> --}}
            <div class="card-body">
                <form class="" method="POST" action="{{ route('warga.store') }}">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="name" class="">Nama Warga</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                @endif

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="name" class="">Identification Number</label>
                                <input type="text" class="form-control" name="identification_number" value="{{ old('identification_number') }}">
                                @if ($errors->has('identification_number'))
                                    <span class="text-danger text-left">{{ $errors->first('identification_number') }}</span>
                                @endif

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="name" class="">Type</label>
                                <select name="type" class="form-control" id="">
                                    <option value="Pemilik">Pemilik</option>
                                    <option value="Penyewa">Penyewa</option>
                                </select>
                                @if ($errors->has('type'))
                                    <span class="text-danger text-left">{{ $errors->first('type') }}</span>
                                @endif

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="name" class="">Block Number</label>
                                <select name="block_id" class="form-control" id="">
                                    @foreach ($block as $key =>$item)
                                        <option value="{{ $key }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('block_id'))
                                    <span class="text-danger text-left">{{ $errors->first('block_id') }}</span>
                                @endif

                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="status" value="ACTIVE">
                    <button type="submit" class="mt-2 btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>


    </div>

</div>
@endsection
