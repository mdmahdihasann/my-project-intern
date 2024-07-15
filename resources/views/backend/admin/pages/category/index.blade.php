@extends('admin-dashboard.dashboard')
@section('title',$title)
@push('styles')

@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-header form-header">
            <h4 class="card-title text-center">Category</h4>
        </div>
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div class="card-title">{{ $title }}</div>
                <div>
                    <a href="{{ route('admin.category.create') }}" class="btn btn-lg btn-primary">Add New</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-light" id="category_database" style="width: 100% !important;">
                    <thead>
                        <th>Category Name</th>
                        <th>Status</th>
                        <th class="text-end">Actions</th>
                    </thead>
                    <tbody >
                         {{-- @forelse ($Categorys as $key=>$value)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $value->category_name }}</td>
                                <td>
                                    {!! $value->status== 1 ? '<span class="badge bg-primary">Publish</span>' : '<span class="badge bg-danger">Pending</span>' !!}
                                </td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.category.edit',$value->id) }}" class="btn btn-sm btn-primary mr-1"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="{{ route('admin.category.delete',$value->id) }}" id="delete-form-{{ $value->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <button type="button" class="btn btn-sm btn-danger" onclick="alert_message({{ $value->id }})"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-danger text-center" colspan="6">data not found</td>
                            </tr>
                        @endforelse  --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
      function alert_message(delete_id) {
        Swal.fire({
        title: "Are you sure?",
        text: "Delete!!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "confirm"
        }).then((result) => {
        if (result.isConfirmed) {
                    document.getElementById('delete-form-'+delete_id).submit();
                }
            });
        }

</script>
<script>

    $(function () {
    var table = $('#category_database').DataTable({
        processing: true,
        serverSide: true,
        lengthMenu: [
                [5, 10, 15, 25, 50, 100, -1],
                [5, 10, 15, 25, 50, 100, "All"]
            ],
        ajax: "{{ route('admin.category.table') }}",
        columns: [
            
            {data: 'category_name'},
            {data: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
  });
</script>
<script>
    var _token="{{ csrf_token() }}";
    $(document).on('click', '.delete_data', function (e) {
    e.preventDefault();
    let delete_data = $(this).data('id');
    
    Swal.fire({
        title: "Are you sure?",
        text: "Delete!!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "confirm"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: '{{ route('admin.category.delete') }}',
                method: 'post', 
                data: { '_token':_token, 'delete_data': delete_data },
                success: function(response) {
                    if(response.status==200){
                        // $('.table-col').load(location.href+' .table-col');
                        window.location.reload();
                    }
                    
                }
            });
        }
    });
});

</script>
@endpush
