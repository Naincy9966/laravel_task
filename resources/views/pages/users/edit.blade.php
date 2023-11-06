@extends('layouts.admin')
@section('content')
<section role="main" class="content-body">
					<header class="page-header">
						<h2>{{trans('global.user')}}</h2>
					
						<div class="right-wrapper pull-right">
						
						</div>
					</header>

					<!-- start: page -->
						<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
								
										<h2 class="panel-title">{{trans('global.create_user')}}</h2>
									</header>
									<div class="panel-body">
                                        <form action="{{ route('users.update', [$user->id]) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                               
                                                
                                                <div class="col-md-4  ">
                                                    <div class="form-group">
                                                        <label class="control-label">{{ trans('global.name') }}</label>
                                                        <input type="text" name="name" class="form-control" value="{{ old('name', isset($user) ? $user->name : '') }}">
                                                        @if($errors->has('name'))
                                                        <em class="invalid-feedback">
                                                        {{ $errors->first('name') }}
                                                        </em>
                                                        @endif
                                                        <p class="helper-block">
                            
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group  ">
                                                        <label class="control-label">{{ trans('global.email') }}</label>
                                                        <input type="text" name="email" class="form-control" value="{{ old('email', isset($user) ? $user->email : '') }}">
                                                        @if($errors->has('email'))
                                                        <em class="invalid-feedback">
                                                        {{ $errors->first('email') }}
                                                        </em>
                                                        @endif
                                                        <p class="helper-block">
                            
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group  ">
                                                        <label class="control-label">{{ trans('global.phone') }}</label>
                                                        <input type="text" name="phone" class="form-control" value="{{ old('phone', isset($user) ? $user->phone : '') }}">
                                                        @if($errors->has('phone'))
                                                        <em class="invalid-feedback">
                                                        {{ $errors->first('phone') }}
                                                        </em>
                                                        @endif
                                                        <p class="helper-block">
                            
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 employee-fields">
                                                    <div class="form-group ">
                                                        <label class="control-label">{{ trans('global.date_of_birth') }}</label>
                                                        <input type="date" name="date_of_birth" class="form-control" value="{{ old('date_of_birth', isset($user) ? $user->date_of_birth : '') }}">
                                                       
                                                        <p class="helper-block">
                            
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group  ">
                                                    <label class="control-label">{{trans('global.address')}}</label>
                                                    <input type="text" name="address" class="form-control" value="{{ $user->user_detail ? $user->user_detail->address : '' }}">
                                                    @if($errors->has('address'))
                                                    <em class="invalid-feedback">
                                                    {{ $errors->first('address') }}
                                                    </em>
                                                    @endif
                                                    <p class="helper-block">
                        
                                                    </p>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group  ">
                                                        <label class="control-label">{{ trans('global.profile_picture') }}</label>
                                                        <input type="file" name="image" class="form-control" value="{{ $user->user_detail ? $user->user_detail->image : '' }}">
                                                        @if($errors->has('image'))
                                                        <em class="invalid-feedback">
                                                        {{ $errors->first('image') }}
                                                        </em>
                                                        @endif
                                                        <p class="helper-block">
                            
                                                        </p>
                                                    </div>
                                                </div>
                                             
                                                

                                                <div class="col-md-4 employee-fields">
                                                    <div class="form-group ">
                                                        <label class="control-label">{{ trans('global.gender') }}</label>
                                                        <select data-plugin-selectTwo class="form-control" name="gender" style="width: 100%">
                                                            <option disabled>Select Gender</option>
                                                            <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Male</option>
                                                            <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group ">
                                                        <label class="control-label">{{ trans('global.description') }}</label>
                                                        <textarea rows="5" class="form-control" placeholder="Type your comment..." name="description">value="{{ $user->user_detail ? $user->user_detail->description : '' }}</textarea>
                                                        @if($errors->has('description'))
                                                        <em class="invalid-feedback">
                                                        {{ $errors->first('description') }}
                                                        </em>
                                                        @endif
                                                        <p class="helper-block">
                            
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="col-md-12 text-right" style="padding-top: 10px;">
                                                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                                </div>
                                            </div>
                                        </form>
									</div>
								</section>
							</div>
						</div>
						
					
					<!-- end: page -->
				</section>
        @endsection
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@section('scripts')

                                                
   <!-- JavaScript -->

@parent

@endsection
