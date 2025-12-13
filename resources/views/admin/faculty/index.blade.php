@extends('layouts.app')

@section('title', 'Manage Faculty')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            @include('common.alert')

            <div class="row">
                {{-- Add Faculty Form --}}
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Add Faculty</div>
                        <div class="card-body">
                            <form action="{{ route('admin.faculty.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Faculty Name <span style="color:red;">*</span></label>
                                    <input type="text" name="faculty_name" class="form-control" value="{{ old('faculty_name') }}">
                                    @if($errors->has('faculty_name'))
                                        <span class="text-danger">{{ $errors->first('faculty_name') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Country <span style="color:red;">*</span></label>
                                    <select name="country_id" class="form-control">
                                        <option value="">Select Country</option>
                                        @foreach($countries as $c)
                                            <option value="{{ $c->country_id }}" {{ old('country_id') == $c->country_id ? 'selected' : '' }}>{{ $c->country_name }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('country_id'))
                                        <span class="text-danger">{{ $errors->first('country_id') }}</span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- Faculty List --}}
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <form method="GET" action="{{ route('admin.faculty.index') }}" class="d-flex">
                                <input type="text" name="search" class="form-control me-2" placeholder="Faculty / Country" value="{{ request('search') }}">
                                <button type="submit" class="btn btn-secondary btn-sm">Search</button>
                            </form>
                            <button class="btn btn-danger btn-sm" id="bulk-delete">Delete Selected</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" id="select-all"></th>
                                            <th>Faculty Name</th>
                                            <th>Country</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($faculties as $faculty)
                                            <tr>
                                                <td><input type="checkbox" class="record-checkbox" value="{{ $faculty->faculty_id }}"></td>
                                                <td>{{ $faculty->faculty_name }}</td>
                                                <td>{{ $faculty->country->country_name ?? '' }}</td>
                                                <td>
                                                    <a href="{{ route('admin.faculty.status', $faculty->faculty_id) }}">
                                                        <button class="btn btn-sm toggle-status {{ $faculty->iStatus ? 'btn-success' : 'btn-warning' }}">
                                                        {!! $faculty->iStatus == 1 ? 'Active' : 'Inactive' !!}
                                                        </button>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="edit-btn btn btn-sm btn-primary" data-id="{{ $faculty->faculty_id }}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('admin.faculty.delete', $faculty->faculty_id) }}" onclick="return confirm('Are you sure you want to delete this record?')" class="btn btn-sm btn-danger">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center">
                                    {{ $faculties->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Edit Modal --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" id="editForm">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Edit Faculty</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="edit_id" id="edit_id">
                    <div class="mb-3">
                        <label class="form-label">Faculty Name <span style="color:red;">*</span></label>
                        <input type="text" name="faculty_name" id="edit_faculty_name" class="form-control">
                        <span class="text-danger error-text faculty_name_error"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Country <span style="color:red;">*</span></label>
                        <select name="country_id" id="edit_country_id" class="form-control">
                            <option value="">Select Country</option>
                            @foreach($countries as $c)
                                <option value="{{ $c->country_id }}">{{ $c->country_name }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger error-text country_id_error"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).on('click', '.edit-btn', function () {
        let id = $(this).data('id');
        $.get("../admin/faculty/edit/" + id, function (data) {
            $('#edit_id').val(data.faculty_id);
            $('#edit_faculty_name').val(data.faculty_name);
            $('#edit_country_id').val(data.country_id);
            $('#editForm').attr('action', '../admin/faculty/update/' + data.faculty_id);
            $('#editModal').modal('show');
        });
    });

    $('#select-all').click(function () {
        $('.record-checkbox').prop('checked', this.checked);
    });

    $('#bulk-delete').click(function () {
        let ids = [];
        $('.record-checkbox:checked').each(function () {
            ids.push($(this).val());
        });

        if (ids.length === 0) {
            alert('Please select at least one record to delete.');
            return;
        }

        if (confirm('Are you sure to delete selected records?')) {
            $.post("{{ route('admin.faculty.destroy') }}", {
                _token: '{{ csrf_token() }}',
                ids: ids
            }, function (response) {
                location.reload();
            });
        }
    });
</script>
@endsection