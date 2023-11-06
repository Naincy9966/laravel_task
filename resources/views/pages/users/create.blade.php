<!doctype html>
<html class="fixed">

<head>
    <!-- Basic -->
    <meta charset="UTF-8">
    <title>Dairy DNA</title>
    <meta name="keywords" content="DairyDNA" />
    <meta name="description" content="Dairy DNA">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet"
        type="text/css">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.css') }}" />
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/theme.css') }}" />
    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/skins/default.css') }}" />
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/theme-custom.css') }}">
    <!-- Head Libs -->
    <script src="{{ asset('assets/vendor/modernizr/modernizr.js') }}"></script>
</head>

<body>
    <div class="col-12">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">{{ trans('global.create_user') }}</h2>
            </header>
            <div class="panel-body">
                <form action="{{ route('store.users') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4  ">
                            <div class="form-group">
                                <label class="control-label">{{ trans('global.name') }}</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                @if ($errors->has('name'))
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
                                <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                                @if ($errors->has('email'))
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
                                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                                @if ($errors->has('phone'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('phone') }}
                                    </em>
                                @endif
                                <p class="helper-block">

                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group ">
                                <label class="control-label">{{ trans('global.password') }}</label>
                                <input type="password" name="password" class="form-control"
                                    value="{{ old('password') }}">
                                @if ($errors->has('password'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </em>
                                @endif
                                <p class="helper-block">

                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group  ">
                                <label class="control-label">{{ trans('global.address') }}</label>
                                <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                                @if ($errors->has('address'))
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
                                <input type="file" name="image" class="form-control" value="{{ old('image') }}">
                                @if ($errors->has('image'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('image') }}
                                    </em>
                                @endif
                                <p class="helper-block">

                                </p>
                            </div>
                        </div>
                        <!-- Add other common fields -->
                        <!-- ... -->
                        {{-- <div class="col-md-4 company-fields">
                            <div class="form-group  ">
                                <label class="control-label">{{ trans('global.year_of_establish') }}</label>
                                <input type="date" class="form-control" name="year_of_establish"
                                    value="{{ old('date') }}">
                                @if ($errors->has('year_of_establish'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('year_of_establish') }}
                                    </em>
                                @endif
                                <p class="helper-block">

                                </p>
                            </div>
                        </div> --}}


                        <!-- Employee-specific fields -->
                        <div class="col-md-4 employee-fields">
                            <div class="form-group ">
                                <label class="control-label">{{ trans('global.date_of_birth') }}</label>
                                <input type="date" name="date_of_birth" class="form-control"
                                    value="{{ old('date_of_birth') }}">
                                @if ($errors->has('date_of_birth'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('date_of_birth') }}
                                    </em>
                                @endif
                                <p class="helper-block">

                                </p>
                            </div>
                        </div>
                          <div class="col-md-4 employee-fields">
                            <div class="form-group ">
                                <label class="control-label">{{ trans('global.gender') }}</label>
                                <select data-plugin-selectTwo class="form-control" name="gender"
                                    style="width: 100%">
                                    <option selected disabled>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                @if ($errors->has('gender'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('gender') }}
                                    </em>
                                @endif
                                <p class="helper-block">

                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label class="control-label">{{ trans('global.description') }}</label>
                                <textarea rows="5" class="form-control" placeholder="Type your comment..." name="description"></textarea>
                                @if ($errors->has('description'))
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
                        <input type="button" name="cancel" class="btn btn-default" value="Cancel">
                    </div>
            </div>
            </form>
    </div>
    </section>
    </div>
    <script></script>
</body>

</html>
