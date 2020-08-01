@extends('admin_layout')

 @section('admin_content')

 <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">All Categories</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Categories</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					@if(session()->has('message'))
						<div class="alert alert-success">
							{{ session()->get('message') }}
						</div>

					@endif
					<div class="box-content">						
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID</th>
								  <th>Category Name</th>
								  <th> Slug</th>
								  <th>Description</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead> 
						 
						  <tbody>
						  	 @foreach($all_category_info as $category)  
						  	
							<tr>
								<td>{{ $category->id }}</td>
								<td class="center">{{ $category->name }}</td>
								<td class="center">{{ $category->slug }}</td>
								<td class="center">{{ $category->description }}</td>
								<td class="center">
									@if($category->publication_status==1)
										<span class="label label-success">Active</span>
									@else
										<span class="label label-danger">Inactive</span>
									@endif
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									@if($category->publication_status==1)
									<a class="btn btn-danger" href="{{URL::to('/inactive_category/'.$category->id)}}">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
									@else
									<a class="btn btn-info" href="{{URL::to('/active_category/'.$category->id)}}">
										<i class="halflings-icon white thumbs-up"></i>  
									</a>
									@endif
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							
							 
							@endforeach
							
						  </tbody>

					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->




  @endsection