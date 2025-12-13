@extends('layouts.app')

@section('title', isset($university) ? 'Edit University' : 'Add University')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            @include('common.alert')

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">{{ isset($university) ? 'Edit University' : 'Add University' }}</h4>
                        <div class="page-title-right">
                            <a href="{{ route('admin.university.index') }}" class="btn btn-sm btn-primary shadow-sm">
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
                            <form action="{{ isset($university) ? route('admin.university.update', $university->university_id) : route('admin.university.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label">Country <span style="color:red;">*</span></label>
                                        <select name="country_id" class="form-control">
                                            <option value="">Select Country</option>
                                            @foreach($countries as $c)
                                                <option value="{{ $c->country_id }}" {{ old('country_id', $university->country_id ?? '') == $c->country_id ? 'selected' : '' }}>{{ $c->country_name }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('country_id'))
                                            <span class="text-danger">{{ $errors->first('country_id') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label class="form-label">University Name <span style="color:red;">*</span></label>
                                        <input type="text" name="university_name" class="form-control" value="{{ old('university_name', $university->university_name ?? '') }}">
                                        @if($errors->has('university_name'))
                                            <span class="text-danger">{{ $errors->first('university_name') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label class="form-label">Logo</label>
                                        <input type="file" name="university_logo" class="form-control">
                                        @if(!empty($university->university_logo))
                                            <img src="{{ afc_base_url('university_logo/' . $university->university_logo) }}" width="60" class="mt-2">
                                        @endif
                                        @if($errors->has('university_logo'))
                                            <span class="text-danger">{{ $errors->first('university_logo') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label class="form-label">Address</label>
                                        <textarea name="university_address" class="form-control">{{ old('university_address', $university->university_address ?? '') }}</textarea>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label class="form-label">City</label>
                                        <input type="text" name="university_city" class="form-control" value="{{ old('university_city', $university->university_city ?? '') }}">
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label class="form-label">State</label>
                                        <input type="text" name="university_state" class="form-control" value="{{ old('university_state', $university->university_state ?? '') }}">
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">{{ isset($university) ? 'Update' : 'Submit' }}</button>
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
