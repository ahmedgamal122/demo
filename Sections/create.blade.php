@extends('layouts.master')
@section('title')
اضافه قسم
@endsection

@section('page-header')
				 <!-- breadcrumb -->
                 <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الاقسام</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                اضافه قسم </span>
            </div>
        </div>
    </div>


@endsection
@section('content')
<div class="page-content-wrapper">
    <div class="container-fluid">

       
                
        <div class="col-12 mx-auto">
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="title d-flex justify-content-between">
                        <h4 class="mt-0 mb-0 header-title align-self-center text-capitalize">اضافه قسم</h4>
                        <div class="buttons">
                            <a href="{{ route('sections.index') }}" class="mr-2">
                                <button class="btn btn-new"><i class="fa fa-list"></i>
                                قائمه الاقسام</button>
                            </a>
                          
                        </div>
                    </div>
                    <hr>
                    <form enctype="multipart/form-data" action="{{ route('sections.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                            <label class="text-capitalize">اسم القسم<i title="Required" class="mdi mdi-18px mdi-alert-octagon text-danger"></i></label>
                            <input class="form-control" type="text" name="name">
                            @error('name')
                            <span class="text-danger mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                       

                           
                        

                        
                        <hr>
                        <div class="form-group mb-0">
                            <div>
                                <button type="submit" class="btn btn-dark waves-effect waves-light mr-2">
                               تاكيد
                                </button>
                                <button type="reset" class="btn btn-primary waves-effect m-l-5"
                                    onclick="window.history.back()">
                                   الغاء
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('/js/dropify.min.js') }}"></script>
<script>
    $('.dropify').dropify();
</script>

@endsection