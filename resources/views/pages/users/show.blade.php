@extends('layouts.admin')
@section('content')
<section role="main" class="content-body">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <h6 class="card-title">{{trans('global.users')}}</h6>
                    </div>
                   
                </div>
                <div class="card-body">
                <table class="table table-bordered table-striped">
                <tbody>
             
                     <tr>
                        <th>
                            {{ trans('global.name') }}
                        </th>
                        <td>
                            {{ucfirst($user->name)}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('global.email') }}
                        </th>
                        <td>
                            {{ucfirst($user->email)}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('global.phone') }}
                        </th>
                        <td>
                            {{ucfirst($user->phone)}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('global.address') }}
                        </th>
                        <td>
                            {{ucfirst($user->user_detail?$user->user_detail->address:"")}}
                        </td>
                    </tr>
                        <tr>
                        <th>
                            {{ trans('global.gender') }}
                        </th>
                        <td>
                            {{ucfirst($user->user_detail?$user->user_detail->gender:"")}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('global.date_of_birth') }}
                        </th>
                        <td>
                            {{ucfirst($user->user_detail?$user->user_detail->date_of_birth:"")}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('global.description') }}
                        </th>
                        <td>
                            {{ucfirst($user->user_detail?$user->user_detail->description:"")}}
                        </td>
                    </tr>
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
        @endsection
