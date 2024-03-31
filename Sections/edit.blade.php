@extends('layouts.master')
@section('title')
@lang('تعديل القسم')
@endsection
@section('page-header')
				 <!-- breadcrumb -->
                 <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الاقسام</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/
               تعديل القسم</span>
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
                        <h4 class="mt-0 mb-0 header-title align-self-center text-capitalize"> تعديل القسم </h4>
                        <div class="buttons">
                            <a href="{{ route('sections.index') }}" class="mr-2">
                                <button class="btn btn-new"><i class="fa fa-list"></i>
                               قائمه الاقسام   </button>
                            </a>
                            <button class="btn btn-primary" onclick="window.history.back()">
                                <i class="fa fa-angle-left"></i>
                               عوده
                            </button>
                        </div>
                    </div>
                    <hr>
                    <form enctype="multipart/form-data" action="{{ route('sections.update' , ['id' => $Section->id]) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                            <label class="text-capitalize"> اسم القسم <i title="Required" class="mdi mdi-18px mdi-alert-octagon text-danger"></i></label>
                            <input value="{{$Section->name}}" class="form-control" type="text" name="name">
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