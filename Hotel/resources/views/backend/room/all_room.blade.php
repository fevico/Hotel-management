@extends('admin.admin_dashbord')
@section('admin')
<br>
<a href="{{ route('add-room') }}" class="btn btn-primary text-align-right">Add Room</a>
<br><br>
<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Image</th>
										<th>Name</th>
										<th>Category</th>
										<th>Price</th>
										<th>Qty</th>
										<th>Staus</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                            @foreach($room as $key=> $item)
									<tr>
										<td><img src="{{ asset($item->image) }}" style="width:50px; height:50px;" alt=""></td>
										<td>{{ $item->name}}</td>
										<td>{{ $item['category']['category_name'] }}</td>
										<td>{{ $item->price}}</td>
										<td>{{ $item->qty}}</td>
										<td>{{ $item->status}}</td>
										<td>
                                            <a href="{{ route('edit-room', $item->id) }}" class="btn btn-primary rounded-pill waves-effect waves-light">Edit</a>
                                            <a href="{{ route('delete-room', $item->id) }}" class="btn btn-danger rounded-pill waves-effect waves-light" id="delete">Delete</a>
                                        </td>
									</tr>
                            @endforeach 
							</table>
						</div>
					</div>
			</div>
@endsection 