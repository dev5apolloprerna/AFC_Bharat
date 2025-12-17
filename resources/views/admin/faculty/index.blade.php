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
                                    <select name="country_id" id="country_id" class="form-control">
                                        <option value="">Select Country</option>
                                        @foreach($countries as $c)
                                            <option value="{{ $c->country_id }}" {{ old('country_id') == $c->country_id ? 'selected' : '' }}>
                                                {{ $c->country_name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('country_id'))
                                        <span class="text-danger">{{ $errors->first('country_id') }}</span>
                                    @endif
                                </div>
                                 <div class="mb-3">
                                    <label class="form-label">University <span style="color:red;">*</span></label>
                                        <select name="university_id" id="university_id" class="form-control">
                                            <option value="">Select University</option>
                                        </select>
                                    @if($errors->has('university_id'))
                                        <span class="text-danger">{{ $errors->first('university_id') }}</span>
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
                                <input type="text" name="search" class="form-control me-2" placeholder="Faculty / Country / university" value="{{ request('search') }}">
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
                                            <th>University</th>
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
                                                <td>{{ $faculty->university->university_name ?? '' }}</td>
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
                    <div class="mb-3">
                        <label class="form-label">University <span style="color:red;">*</span></label>
                        <select name="university_id" id="edit_university_id" class="form-control"></select>
                        <span class="text-danger error-text university_id_error"></span>
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
    function loadUniversities(countryId, $universitySelect, selectedUniversityId = null) {
        $universitySelect.html('<option value="">Loading...</option>');

        if (!countryId) {
            $universitySelect.html('<option value="">Select University</option>');
            return;
        }

        $.get("{{ url('admin/universities/by-country') }}/" + countryId, function (res) {

            if (!res.success || !Array.isArray(res.data)) {
                console.error('Invalid response:', res);
                $universitySelect.html('<option value="">Select University</option>');
                return;
            }

            let options = '<option value="">Select University</option>';

            res.data.forEach(function (u) {
                let selected =
                    selectedUniversityId && Number(selectedUniversityId) === Number(u.university_id)
                        ? 'selected'
                        : '';

                options += `<option value="${u.university_id}" ${selected}>
                                ${u.university_name}
                            </option>`;
            });

            $universitySelect.html(options);
        }).fail(function () {
            alert('Failed to load universities');
            $universitySelect.html('<option value="">Select University</option>');
        });
    }

    // ============================
    // ✅ ADD FORM
    // ============================
    $('#country_id').on('change', function () {
        loadUniversities($(this).val(), $('#university_id'));
    });

    // ============================
    // ✅ EDIT MODAL OPEN
    // ============================
    $(document).on('click', '.edit-btn', function () {
        let id = $(this).data('id');

        $.get("../admin/faculty/edit/" + id, function (data) {

            $('#edit_id').val(data.faculty_id);
            $('#edit_faculty_name').val(data.faculty_name);
            $('#edit_country_id').val(data.country_id);

            // ⭐ IMPORTANT: load universities AFTER setting country
            loadUniversities(
                data.country_id,
                $('#edit_university_id'),
                data.university_id
            );

            $('#editForm').attr('action', '../admin/faculty/update/' + data.faculty_id);
            $('#editModal').modal('show');
        });
    });

    // ============================
    // ✅ EDIT MODAL – country change
    // ============================
    $('#edit_country_id').on('change', function () {
        loadUniversities($(this).val(), $('#edit_university_id'));
    });

    // ============================
    // ✅ AUTO LOAD on validation error (Add form)
    // ============================
    $(document).ready(function () {
        let oldCountry = "{{ old('country_id') }}";
        let oldUniversity = "{{ old('university_id') }}";

        if (oldCountry) {
            loadUniversities(oldCountry, $('#university_id'), oldUniversity);
        }
    });


    // ✅ Add form: change country => load universities
    $(document).on('change', '#country_id', function () {
        loadUniversities($(this).val(), $('#university_id'));
    });

    // ✅ Edit button click
    $(document).on('click', '.edit-btn', function () {
        let id = $(this).data('id');

        $.get("../admin/faculty/edit/" + id, function (data) {
            $('#edit_id').val(data.faculty_id);
            $('#edit_faculty_name').val(data.faculty_name);
            $('#edit_country_id').val(data.country_id);

            // ✅ load universities by country and select the saved one
            loadUniversities(data.country_id, $('#edit_university_id'), data.university_id);

            $('#editForm').attr('action', '../admin/faculty/update/' + data.faculty_id);
            $('#editModal').modal('show');
        });
    });

    // ✅ Edit modal: if user changes country => reload universities
    $(document).on('change', '#edit_country_id', function () {
        loadUniversities($(this).val(), $('#edit_university_id'));
    });

    // ✅ Select all
    $('#select-all').click(function () {
        $('.record-checkbox').prop('checked', this.checked);
    });

    // ✅ Bulk delete
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
            }, function () {
                location.reload();
            });
        }
    });

    // ✅ If old country selected (validation error), auto-load universities on page load
    $(document).ready(function () {
        const oldCountry = "{{ old('country_id') }}";
        const oldUniversity = "{{ old('university_id') }}";
        if (oldCountry) {
            loadUniversities(oldCountry, $('#university_id'), oldUniversity);
        }
    });
</script>
@endsection
