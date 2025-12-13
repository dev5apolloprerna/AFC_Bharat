@extends('layouts.app')

@section('title', 'Manage Countries')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            @include('common.alert')

            <div class="row">
                {{-- Add Country Form --}}
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Add Country</div>
                        <div class="card-body">
                            <form action="{{ route('admin.country.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Country Name <span style="color:red;">*</span></label>
                                    <input type="text" name="country_name" class="form-control" value="{{ old('country_name') }}">
                                    @if($errors->has('country_name'))
                                        <span class="text-danger">
                                            {{ $errors->first('country_name') }}
                                        </span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- Country List --}}
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <form method="GET" action="{{ route('admin.country.index') }}" class="d-flex">
                                <input type="text" name="search" class="form-control me-2" placeholder="Country Name" value="{{ request('search') }}">
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
                                            <th>Country Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($countries as $country)
                                            <tr>
                                                <td><input type="checkbox" class="record-checkbox" value="{{ $country->country_id }}"></td>
                                                <td>{{ $country->country_name }}</td>
                                                <td>
                                                    <a href="{{ route('admin.country.status', $country->country_id) }}">
                                                        <button class="btn btn-sm toggle-status {{ $country->iStatus ? 'btn-success' : 'btn-warning' }}">
                                                        {!! $country->iStatus == 1 ? 'Active' : 'Inactive' !!}
                                                        </button>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="edit-btn btn btn-sm btn-primary" data-id="{{ $country->country_id }}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('admin.country.delete', $country->country_id) }}" onclick="return confirm('Are you sure you want to delete this record?')" class="btn btn-sm btn-danger">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center">
                                    {{ $countries->links() }}
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
                    <h5 class="modal-title">Edit Country</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="edit_id" id="edit_id">
                    <div class="mb-3">
                        <label class="form-label">Country Name <span style="color:red;">*</span></label>
                        <input type="text" name="country_name" id="edit_country_name" class="form-control">
                        <span class="text-danger error-text country_name_error"></span>
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
        $.get("../admin/country/edit/" + id, function (data) {
            $('#edit_id').val(data.country_id);
            $('#edit_country_name').val(data.country_name);
            $('#editForm').attr('action', '../admin/country/update/' + data.country_id);
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
            $.post("{{ route('admin.country.destroy') }}", {
                _token: '{{ csrf_token() }}',
                ids: ids
            }, function (response) {
                location.reload();
            });
        }
    });
</script>
@endsection
