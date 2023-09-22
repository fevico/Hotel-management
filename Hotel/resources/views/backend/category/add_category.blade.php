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
                        <li class="breadcrumb-item active">Add Category</li>
                    </ol>
                </div>
                <h4 class="page-title">Add Category </h4>
            </div>
        </div>
    </div>     
    <!-- end page title -->

        </div> <!-- end col-->
        
        <div class="col-lg-8 col-xl-8">
            <div class="card">
                <div class="card-body">
        <form method="post" action="{{ route('category-store') }}">
            @csrf 

                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Category name </label>
                    <input type="text" id="simpleinput" name="category_name" class="form-control @error('category_name') is-invalid @enderror">
    @error('category_name') 
    <span class="text-danger"> {{ $message }} </span>
    @enderror
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
@endsection 