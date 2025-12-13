@extends('layouts.app')

@section('title', 'University List')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            @include('common.alert')
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <form method="GET" action="{{ route('admin.university.index') }}" class="d-flex">
                        <input type="text" name="search" class="form-control me-2" placeholder="University Name / Country / City" value="{{ request('search') }}">
                        <button type="submit" class="btn btn-secondary btn-sm">Search</button>
                    </form>
                    <a href="{{ route('admin.university.create') }}" class="btn btn-primary btn-sm">
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
                                    <th>Logo</th>
                                    <th>University Name</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($universities as $uni)
                                    <tr>
                                        <td><input type="checkbox" class="record-checkbox" value="{{ $uni->university_id }}"></td>
                                        <td>
                                            @if($uni->university_logo)
                                                <img src="{{ afc_base_url('university_logo/' . $uni->university_logo) }}" width="60">
                                            @endif
                                        </td>
                                        <td>{{ $uni->university_name }}</td>
                                        <td>{{ $uni->country->country_name ?? '' }}</td>
                                        <td>{{ $uni->university_city }}</td>
                                        <td>{{ $uni->university_state }}</td>
                                        <td>
                                            <a href="{{ route('admin.university.status', $uni->university_id) }}">
                                                <button class="btn btn-sm toggle-status {{ $uni->iStatus ? 'btn-success' : 'btn-warning' }}">
                                                        {!! $uni->iStatus == 1 ? 'Active' : 'Inactive' !!}
                                                </button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.university.edit', $uni->university_id) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{ route('admin.university.delete', $uni->university_id) }}" onclick="return confirm('Are you sure you want to delete this record?')" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $universities->links() }}
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
            alert('Please select at least one record to delete.');
            return;
        }

        if (confirm('Are you sure to delete selected records?')) {
            $.post("{{ route('admin.university.destroy') }}", {
                _token: '{{ csrf_token() }}',
                ids: ids
            }, function (response) {
                location.reload();
            });
        }
    });
</script>
@endsection