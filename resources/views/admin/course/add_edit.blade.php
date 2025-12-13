@extends('layouts.app')

@section('title', isset($course) ? 'Edit Course' : 'Add Course')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            @include('common.alert')

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">{{ isset($course) ? 'Edit Course' : 'Add Course' }}</h4>
                        <div class="page-title-right">
                            <a href="{{ route('admin.course.index') }}" class="btn btn-sm btn-primary shadow-sm">
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
                            <form action="{{ isset($course) ? route('admin.course.update', $course->course_id) : route('admin.course.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label">Course Name <span style="color:red;">*</span></label>
                                        <input type="text" name="course_name" class="form-control" value="{{ old('course_name', $course->course_name ?? '') }}">
                                        @if($errors->has('course_name'))
                                            <span class="text-danger">{{ $errors->first('course_name') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label class="form-label">Course Price <span style="color:red;">*</span></label>
                                        <input type="text" name="course_price" class="form-control" value="{{ old('course_price', $course->course_price ?? '') }}">
                                        @if($errors->has('course_price'))
                                            <span class="text-danger">{{ $errors->first('course_price') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label class="form-label">Country <span style="color:red;">*</span></label>
                                        <select name="country_id" class="form-control">
                                            <option value="">Select Country</option>
                                            @foreach($countries as $c)
                                                <option value="{{ $c->country_id }}" {{ old('country_id', $course->country_id ?? '') == $c->country_id ? 'selected' : '' }}>{{ $c->country_name }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('country_id'))
                                            <span class="text-danger">{{ $errors->first('country_id') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label class="form-label">University <span style="color:red;">*</span></label>
                                        <select name="university_id" class="form-control">
                                            <option value="">Select University</option>
                                            @foreach($universities as $u)
                                                <option value="{{ $u->university_id }}" {{ old('university_id', $course->university_id ?? '') == $u->university_id ? 'selected' : '' }}>{{ $u->university_name }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('university_id'))
                                            <span class="text-danger">{{ $errors->first('university_id') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label class="form-label">Faculty <span style="color:red;">*</span></label>
                                        <select name="faculty_id" class="form-control">
                                            <option value="">Select Faculty</option>
                                            @foreach($faculties as $f)
                                                <option value="{{ $f->faculty_id }}" {{ old('faculty_id', $course->faculty_id ?? '') == $f->faculty_id ? 'selected' : '' }}>{{ $f->faculty_name }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('faculty_id'))
                                            <span class="text-danger">{{ $errors->first('faculty_id') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" class="form-control editor">{{ old('description', $course->description ?? '') }}</textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">{{ isset($course) ? 'Update' : 'Submit' }}</button>
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

@section('scripts')
<script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
@endsection
