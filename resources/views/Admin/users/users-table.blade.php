@extends('layouts.admin')
@include('Admin.parts.left-bar')
@section('content')
    <div class="main">
        @include('Admin.parts.top-bar')
        <main class="content">
            <div class="container-fluid">
                @include('Admin.parts.header')
                <div class="header">
                    <h1 class="header-title">
                        DataTables Column Search
                    </h1>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Users</h5>
                            </div>
                            <div class="card-body">
                                <table id="datatables-column-search-select-inputs" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Mail</th>
                                            <th>Start date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($users as $row)
                                        <tr>
                                            <td class="d-none d-xl-table-cell" tabindex="0">
                                                @if(isset($row->photo))
                                                    <img src="img/avatars/avatar.jpg" class="rounded-circle my-n1" alt="Avatar" width="32" height="32">
                                                @else
                                                    <img src="{{ asset('storage/img/no_image.jpg') }}" class="rounded-circle my-n1" alt="Avatar" width="32" height="32">
                                                @endif
                                            </td>
                                            <td class="d-none d-xl-table-cell">{{ $row->name }}</td>
                                            <td class="d-none d-xl-table-cell">{{ $row->email }}</td>
                                            <td class="d-none d-md-table-cell">{{ $row->created_at }}</td>
                                            @if($row->is_blocked==0)
                                                <td><span class="badge bg-success">Active</span></td>
                                            @else
                                                <td><span class="badge bg-danger">Blocked</span></td>
                                            @endif
                                            <td class="table-action">
												<a href="{{ route('admin.users.show',$row->id) }}"><i class="align-middle fas fa-fw fa-eye" title='whach user'></i></a>
												<a href="{{ route('admin.users.edit',$row->id) }}"><i class="align-middle fas fa-fw fa-pen" title='edit user account'></i></a>
												<a href="{{ route('admin.users.destroy',$row->id) }}"><i class="align-middle fas fa-fw fa-close" title='block user'></i></a>
												<a href="{{ route('admin.users.destroy',$row->id) }}"><i class="align-middle fas fa-fw fa-trash" title='delete user'></i></a>
											</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Mail</th>
                                            <th>Start date</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>

        @include('Admin.parts.footer')
		</div>
	</div>

	<svg width="0" height="0" style="position:absolute">
		<defs>
			<symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
				<path
					d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
				</path>
			</symbol>
		</defs>
	</svg>
    @vite(['resources/js/Admin/app.js' ])

	<script>
		// DataTables with Column Search by Text Inputs
		document.addEventListener("DOMContentLoaded", function() {
			// Setup - add a text input to each footer cell
			$('#datatables-column-search-text-inputs tfoot th').each(function() {
				var title = $(this).text();
				$(this).html('<input type="text" class="form-control" placeholder="Search ' + title + '" />');
			});
			// DataTables
			var table = $('#datatables-column-search-text-inputs').DataTable();
			// Apply the search
			table.columns().every(function() {
				var that = this;
				$('input', this.footer()).on('keyup change clear', function() {
					if (that.search() !== this.value) {
						that
							.search(this.value)
							.draw();
					}
				});
			});
		});
		// DataTables with Column Search by Select Inputs
		document.addEventListener("DOMContentLoaded", function() {
			$('#datatables-column-search-select-inputs').DataTable({
				initComplete: function() {
					this.api().columns().every(function() {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
							.appendTo($(column.footer()).empty())
							.on('change', function() {
								var val = $.fn.dataTable.util.escapeRegex(
									$(this).val()
								);
								column
									.search(val ? '^' + val + '$' : '', true, false)
									.draw();
							});
						column.data().unique().sort().each(function(d, j) {
							select.append('<option value="' + d + '">' + d + '</option>')
						});
					});
				}
			});
		});
	</script>
</body>

</html>
@endsection
