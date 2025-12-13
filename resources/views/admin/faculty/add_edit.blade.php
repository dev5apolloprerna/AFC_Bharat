@extends('layouts.app')

@section('title', isset($faculty) ? 'Edit Faculty' : 'Add Faculty')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            @include('common.alert')

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">{{ isset($faculty) ? 'Edit Faculty' : 'Add Faculty' }}</h4>
                        <div class="page-title-right">
                            <a href="{{ route('admin.faculty.index') }}" class="btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ isset($faculty) ? route('admin.faculty.update', $faculty->faculty_id) : route('admin.faculty.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label">Faculty Name <span style="color:red;">*</span></label>
                                        <input type="text" name="faculty_name" class="form-control" value="{{ old('faculty_name', $faculty->faculty_name ?? '') }}">
                                        @if($errors->has('faculty_name'))
                                            <span class="text-danger">{{ $errors->first('faculty_name') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label class="form-label">Country <span style="color:red;">*</span></label>
                                        <select name="country_id" class="form-control">
                                            <option value="">Select Country</option>
                                            @foreach($countries as $c)
                                                <option value="{{ $c->country_id }}" {{ old('country_id', $faculty->country_id ?? '') == $c->country_id ? 'selected' : '' }}>{{ $c->country_name }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('country_id'))
                                            <span class="text-danger">{{ $errors->first('country_id') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">{{ isset($faculty) ? 'Update' : 'Submit' }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
