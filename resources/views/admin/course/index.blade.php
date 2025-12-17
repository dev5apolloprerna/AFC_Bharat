@extends('layouts.app')

@section('title', 'Course List')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            @include('common.alert')
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <form method="GET" action="{{ route('admin.course.index') }}" class="d-flex">
                        <input type="text" name="search" class="form-control me-2" placeholder="Search Course / University / Faculty" value="{{ request('search') }}">
                        <button type="submit" class="btn btn-secondary btn-sm">Search</button>
                    </form>
                    <a href="{{ route('admin.course.create') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-plus"></i> Add New
                    </a>
                </div>
                <div class="card-body">
                    <button class="btn btn-danger btn-sm mb-2" id="bulk-delete">Delete Selected</button>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="select-all"></th>
                                    <th>Course</th>
                                    <th>Price</th>
                                    <th>Duration</th>
                                    <th>Criteria</th>
                                    
                                    <th>University</th>
                                    <th>Faculty</th>
                                    <th>Country</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($courses as $course)
                                    <tr>
                                        <td><input type="checkbox" class="record-checkbox" value="{{ $course->course_id }}"></td>
                                        <td>{{ $course->course_name }}</td>
                                        <td>{{ $course->course_price }}</td>
                                        <td>
                                            {{ DB::table('duration_master')->where('id', $course->duration_id)->value('duration') }}
                                        </td>

                                        <td>{{ $course->course_criteria }}</td>
                                        <td>{{ $course->university->university_name ?? '' }}</td>
                                        <td>{{ $course->faculty->faculty_name ?? '' }}</td>
                                        <td>{{ $course->country->country_name ?? '' }}</td>
                                        <td>
                                            @if(!empty($course->course_image))
                                                <img src="{{ afc_base_url('course_image/'.$course->course_image) }}"
                                                    alt="{{ $course->course_name }}"
                                                    style="height:50px;width:auto;border:1px solid #ddd;padding:3px;">
                                            @else
                                                <span class="text-muted">No Image</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.course.status', $course->course_id) }}">
                                                <button class="btn btn-sm toggle-status {{ $course->iStatus ? 'btn-success' : 'btn-warning' }}">
                                                        {!! $course->iStatus == 1 ? 'Active' : 'Inactive' !!}
                                                        </button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.course.edit', $course->course_id) }}" class="btn-sm btn btn-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{ route('admin.course.delete', $course->course_id) }}" onclick="return confirm('Are you sure to delete this course?')" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $courses->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $('#select-all').click(function () {
        $('.record-checkbox').prop('checked', this.checked);
    });

    $('#bulk-delete').click(function () {
        let ids = [];
        $('.record-checkbox:checked').each(function () {
            ids.push($(this).val());
        });

        if (ids.length === 0) {
            alert('Please select at least one course to delete.');
            return;
        }

        if (confirm('Are you sure to delete selected courses?')) {
            $.post("{{ route('admin.course.destroy') }}", {
                _token: '{{ csrf_token() }}',
                ids: ids
            }, function (response) {
                location.reload();
            });
        }
    });
</script>
@endsection
