@extends('layouts.master')
@section('title')
قائمه الاقسام
@endsection

@section('css')
<!--Internal   Notify -->
<link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>

@endsection
@section('page-header')
				 <!-- breadcrumb -->
                 <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الاقسام</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/
				قائمه الاقسام </span>
            </div>
        </div>
    </div>


@endsection
@section('content')
@include('layouts.messages_alert')


				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<a href=" {{route('sections.create')}}">
							<button type="button" class="btn btn-primary" >
	
							اضف قسم
							   </button>
                                </a>  
								</div>
							</div>

							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
											   <th class="border-bottom-0">#</th>
                                               <th class="border-bottom-0">اسم القسم</th>
                                               <th class="border-bottom-0">العمليات</th>
												
											</tr>
										</thead>
										<tbody>
											
											
										@foreach($Section as $Section)

											<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$Section-> name }}</td>

												
		
												<td>
												<div class="row row-xs wd-xl-80p">

								                 	<a href=" {{route('sections.edit',$Section->id)}}">
								                       <button type="button" class="btn btn-info"  >

								                             تعديل
							                            </button>
							                     </a>

							                   <form method="POST"  action="{{route('sections.delete',$Section->id)}}" class="mr-2">

                                                @csrf
                                               <button type="submit" class="btn btn-danger">
										         حذف</button>
                                               </form>
                                  
											   </div>

											   

												</td>
											</tr> 
                             

											@endforeach

											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					

					

				
				
					
				</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection

@section('js')
<!--Internal  Notify js -->
<script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/notify/js/notifit-custom.js')}}"></script>

@endsection