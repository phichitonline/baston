@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            @if ($message = Session::get('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <i class="ti-check mr-2"></i> {{ $message }}
            </div>
            @endif

            <div class="card">
                <div class="card-header">{{ __('ข้อมูลผู้ใช้') }}</div>

                <div class="card-body">
                    <form action="{{ route('profile.update',Auth::user()->id) }}" method="POST" novalidate="novalidate">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อ-นามสกุล') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" disabled>
                                <input id="id" type="hidden" class="form-control" name="id" value="{{ Auth::user()->id }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" disabled>
                            </div>
                        </div>

                        {{-- <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary"><i class="ti-check mr-2"></i>
                                    {{ __('บันทึก') }}
                                </button>
                            </div>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
