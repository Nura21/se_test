@extends('layouts.app')

@section('title','Tambah Data Student')

@section('action')
<a href="{{ route('students.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">Back</a>
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
                <form class="" method="POST" action="{{ route('students.store') }}">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="name" class="">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                @endif

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="grade" class="">Grade</label>
                                <select name="grade_id" class="form-control" id="grade_id">
                                    <option value="">Pilih :</option>
                                    @forelse ($grades ?? [] as $key =>$item)
                                        <option value="{{ $item['id'] }}">{{ $item['code'].$item['name'] }}</option>
                                    @empty
                                    <option>No Data!</option>
                                    @endforelse
                                </select>
                                @if ($errors->has('grade_id'))
                                    <span class="text-danger text-left">{{ $errors->first('grade_id') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="address" class="">Address</label>
                                <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                                @if ($errors->has('address'))
                                    <span class="text-danger text-left">{{ $errors->first('address') }}</span>
                                @endif

                            </div>
                        </div>
                    </div>
                    <button type="submit" class="mt-2 btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>


    </div>

</div>
@endsection
