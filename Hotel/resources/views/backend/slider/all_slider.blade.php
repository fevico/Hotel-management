@extends('admin.admin_dashbord')
@section('admin')
<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Image</th>
										<th>Title</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                            @foreach($slider as $key=> $item)
									<tr>
										<td><img src="{{ asset($item->slider_image) }}" style="width:50px; height:50px;" alt=""></td>
										<td>{{ $item->title}}</td>
										<td>
                                            <a href="{{ route('edit-slider', $item->id) }}" class="btn btn-primary rounded-pill waves-effect waves-light">Edit</a>
                                            <a href="{{ route('delete-slider', $item->id) }}" class="btn btn-danger rounded-pill waves-effect waves-light" id="delete">Delete</a>
                                        </td>
									</tr>
                            @endforeach 
							</table>
						</div>
					</div>
			</div>
@endsection 