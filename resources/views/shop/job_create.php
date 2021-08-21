@extends('layouts.shop.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('求人登録') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('shop.register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('仕事名') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="job_location" class="col-md-4 col-form-label text-md-right">{{ __('勤務地') }}</label>

                            <div class="col-md-6">
                                <input id="job_location" type="text" class="form-control @error('job_location') is-invalid @enderror" name="job_location" value="{{ old('job_location') }}" required autocomplete="job_location" autofocus>

                                @error('job_location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('職務内容') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="textarea" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="min_salary" class="col-md-4 col-form-label text-md-right">{{ __('想定最低年収') }}</label>

                            <div class="col-md-6">
                                <input id="min_salary" type="text" class="form-control @error('min_salary') is-invalid @enderror" name="min_salary" value="{{ old('min_salary') }}" required autocomplete="min_salary" autofocus>

                                @error('min_salary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="max_salary" class="col-md-4 col-form-label text-md-right">{{ __('想定最高年収') }}</label>

                            <div class="col-md-6">
                                <input id="max_salary" type="text" class="form-control @error('max_salary') is-invalid @enderror" name="max_salary" value="{{ old('max_salary') }}" required autocomplete="max_salary" autofocus>

                                @error('max_salary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="working_time" class="col-md-4 col-form-label text-md-right">{{ __('勤務時間') }}</label>

                            <div class="col-md-6">
                                <input id="working_time" type="text" class="form-control @error('working_time') is-invalid @enderror" name="working_time" value="{{ old('working_time') }}" required autocomplete="working_time" autofocus>

                                @error('working_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="holiday" class="col-md-4 col-form-label text-md-right">{{ __('休日') }}</label>

                            <div class="col-md-6">
                                <input id="holiday" type="text" class="form-control @error('holiday') is-invalid @enderror" name="holiday" value="{{ old('holiday') }}" required autocomplete="holiday" autofocus>

                                @error('holiday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="welfare" class="col-md-4 col-form-label text-md-right">{{ __('福利厚生') }}</label>

                            <div class="col-md-6">
                                <input id="welfare" type="welfare" class="form-control @error('welfare') is-invalid @enderror" name="welfare" value="{{ old('welfare') }}" required autocomplete="welfare">

                                @error('welfare')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emp_status" class="col-md-4 col-form-label text-md-right">{{ __('雇用形態') }}</label>

                            <div class="col-md-6">
                                <input id="emp_status" type="emp_status" class="form-control @error('emp_status') is-invalid @enderror" name="emp_status" required autocomplete="new-emp_status">

                                @error('emp_status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="summary" class="col-md-4 col-form-label text-md-right">{{ __('企業概要') }}</label>

                            <div class="col-md-6">
                                <input id="summary" type="summary" class="form-control @error('summary') is-invalid @enderror" name="summary" value="{{ old('summary') }}" required autocomplete="summary">

                                @error('summary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="introduction" class="col-md-4 col-form-label text-md-right">{{ __('企業説明') }}</label>

                            <div class="col-md-6">
                                <input id="introduction" type="introduction" class="form-control @error('introduction') is-invalid @enderror" name="introduction" value="{{ old('introduction') }}" required autocomplete="introduction">

                                @error('introduction')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emp_condition" class="col-md-4 col-form-label text-md-right">{{ __('応募条件') }}</label>

                            <div class="col-md-6">
                                <input id="emp_condition" type="emp_condition" class="form-control @error('emp_condition') is-invalid @enderror" name="emp_condition" value="{{ old('emp_condition') }}" required autocomplete="emp_condition">

                                @error('emp_condition')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('登録') }}
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