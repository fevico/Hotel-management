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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
                <h4 class="page-title">Profile</h4>
            </div>
        </div>
    </div>     
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-4 col-xl-4">
            <div class="card text-center">
                <div class="card-body">
                    <img src="{{ (!empty($adminData->image)) ? url('upload/admin_image/'.$adminData->image) : 
                        url('upload/no_image.jpg')}}" class="rounded-circle avatar-lg img-thumbnail"
                    alt="profile-image">

                    <h4 class="mb-0">{{ $adminData->name }}</h4>

                    <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
                    <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>

                    <div class="text-start mt-3">                    
                        <p class="text-muted mb-2 font-13"><strong>Name :</strong> <span class="ms-2">{{ $adminData->name }}</span></p>
                    
                        <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ms-2">{{ $adminData->phone }}</span></p>
                    
                        <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2">{{ $adminData->email }}</span></p>
                    
                        <p class="text-muted mb-1 font-13"><strong>Address :</strong> <span class="ms-2">{{ $adminData->address }}</span></p>
                    </div>                                      
                </div>                                 
            </div> <!-- end card -->


        </div> <!-- end col-->
        
        <div class="col-lg-8 col-xl-8">
            <div class="card">
                <div class="card-body">
        <form method="post" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data">
            @csrf 

                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Name</label>
                    <input type="text" id="simpleinput" name="name" value="{{ $adminData->name }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Email</label>
                    <input type="text" id="simpleinput" name="email" value="{{ $adminData->email }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Phone</label>
                    <input type="text" id="simpleinput" name="phone" value="{{ $adminData->phone }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Address</label>
                    <input type="text" id="simpleinput" name="address" value="{{ $adminData->address }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Image</label>
                    <input type="file" id="image" name="image" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="simpleinput" class="form-label"></label>
                    <img id="showImage" src="{{ (!empty($adminData->image)) ? url('upload/admin_image/'.$adminData->image) : 
                        url('upload/no_image.jpg')}}" class="rounded-circle avatar-lg img-thumbnail"
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