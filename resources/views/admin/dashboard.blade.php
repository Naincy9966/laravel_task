@extends('layouts.admin')
@section('content')
<section role="main" class="content-body">
					<header class="page-header">
						<h2>{{ucfirst(auth()->user()->role)}} Dashboard</h2>
					</header>
		<div class="row">		
				<div class="col-md-6 col-lg-12 col-xl-6">
							<div class="row">
								<div class="col-md-12 col-lg-4 col-xl-4">
									<section class="panel panel-featured-left panel-featured-primary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-primary">
														<i class="fa fa-life-ring"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total User</h4>
														<div class="info">
															<strong class="amount">
																{{$data}}
															</strong>
															<!-- <span class="text-primary">(14 unread)</span> -->
														</div>
													</div>
												
												</div>
											</div>
										</div>
									</section>
								</div>
								
					</div>
				</div>
		</div>
	<!-- end: page -->
</section>		
        @endsection
@section('scripts')
@parent

@endsection
