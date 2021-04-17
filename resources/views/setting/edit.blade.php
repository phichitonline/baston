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
                <div class="card-header">{{ __('ตั้งค่าระบบ') }}</div>

                <div class="card-body">
                    <form action="{{ route('setting.update',1) }}" method="POST" novalidate="novalidate">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="s_no" class="col-md-4 col-form-label text-md-right">{{ __('เลขที่หนังสือ') }}</label>
                            <div class="col-md-6">
                                <input id="s_no" type="text" class="form-control" name="s_no" value="{{ $setting->s_no }}">
                                <input id="id" type="hidden" class="form-control" name="id" value="{{ $setting->id }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="s_name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อหน่วยงาน') }}</label>
                            <div class="col-md-6">
                                <input id="s_name" type="text" class="form-control" name="s_name" value="{{ $setting->s_name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="s_headname" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อผู้อนุมัติ') }}</label>
                            <div class="col-md-6">
                                <input id="s_headname" type="text" class="form-control" name="s_headname" value="{{ $setting->s_headname }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="s_address" class="col-md-4 col-form-label text-md-right">{{ __('ที่อยู่') }}</label>
                            <div class="col-md-6">
                                <input id="s_address" type="text" class="form-control" name="s_address" value="{{ $setting->s_address }}">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary"><i class="ti-check mr-2"></i>
                                    {{ __('บันทึก') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
