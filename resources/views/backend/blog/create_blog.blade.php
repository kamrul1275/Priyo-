@extends('backend.layout.master')



@section('admin_content')


<div class="page-content"> 
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Blog Profile</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Blog Profilep</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							
							
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">
							
							<div class="col-lg-8">
								<div class="card">

								<!-- Display success message -->
								@if (session('success'))
										<div style="color: green;">
											{{ session('success') }}
										</div>
									@endif

									<div class="card-body">
                                    <form action="{{route('blog.store')}}" method="POST">
										@csrf
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Title</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" name="title" class="form-control"/>
											</div>
										</div>
									
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Description</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<textarea name="description" id=""></textarea>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-3"></div>
											<div class="col-sm-9 text-secondary">
												<input type="submit" class="btn btn-primary px-4" value="Save Category" />
											</div>
										</div>

                                        </form>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>

@endsection