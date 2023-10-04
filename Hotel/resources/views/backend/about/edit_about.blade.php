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
                        <li class="breadcrumb-item active">Add Slider</li>
                    </ol>
                </div>
                <h4 class="page-title">Add Slider </h4>
            </div>
        </div>
    </div>     
    <!-- end page title -->

        </div> <!-- end col-->
        
        <div class="col-lg-8 col-xl-8">
            <div class="card">
                <div class="card-body">
        <form method="post" action="{{ route('about.store') }}" enctype="multipart/form-data">
            @csrf 
                <input type="hidden" value="{{ $id->id }}" name="id"> 
                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Title</label>
                    <input type="text" id="simpleinput" name="title" value="{{ $id->title }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="example-textarea" rows="5">
                    {{ $id->description }}
                    </textarea>                
                </div>
                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Image</label>
                    <input type="file" id="image" name="image" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="simpleinput" class="form-label"></label>
                    <img id="showImage" src="{{ asset($id->image) }}" class="rounded-circle avatar-lg img-thumbnail"
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