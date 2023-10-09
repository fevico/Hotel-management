@extends('admin.admin_dashbord')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="content">

<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item active">Add Rooms</li>
                    </ol>
                </div>
                <h4 class="page-title">Add Rooms </h4>
            </div>
        </div>
    </div>     
    <!-- end page title -->

        </div> <!-- end col-->
        
        <div class="col-lg-8 col-xl-8">
            <div class="card">
                <div class="card-body">
        <form method="post" action="{{ route('room.store') }}" enctype="multipart/form-data">
            @csrf 

                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Name</label>
                    <input type="text" id="simpleinput" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Select Category</label>
                    <select class="form-select" name="category_id">
                        <option selected="">Select Category</option>
                        @foreach($catgory as $item)
                        <option value="{{$item->id}}">{{ $item->category_name }}</option>
                        @endforeach
                    </select>                
                    </div>
                    
                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Short Title</label>
                    <input type="text" id="simpleinput" name="short_title" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Price</label>
                    <input type="text" id="simpleinput" name="price" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Quantity</label>
                    <input type="text" id="simpleinput" name="qty" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Image</label>
                    <input type="file" id="image" name="image" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="simpleinput" class="form-label"></label>
                    <img id="showImage" src="{{ url('upload/no_image.jpg')}}" class="rounded-circle avatar-lg img-thumbnail"
                    alt="profile-image">      
                </div>
                     <!-- end tab-content -->
                </div>
                
            </div> 
            
            <button type="submit" class="btn btn-primary rounded-pill waves-effect waves-light">Update</button>
    <!-- end card-->
        </div>

        </form>
    
         <!-- end col -->
    </div>
    <!-- end row-->

</div> <!-- container -->

</div> 

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection 