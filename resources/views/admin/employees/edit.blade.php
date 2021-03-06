@extends('adminlte::page')

@section('title', 'Employee | Edit')

@section('content')

    <div class="container">
        <div class="row create-wrap">
            <div class="col-md-8 col-md-offset-2">
                <div class="text-center">
                    <br><br>
                    <h2>@lang('admin/employees/crud.edit_header')</h2>
                    <p>@lang('admin/employees/crud.create_description')</p>

                    @include('partials._validation_messages')

                </div>
                <form action="{{ route('employees.update', $employee->id) }}" method="post" role="form" class="employeeForm">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="first_name">@lang('admin/employees/crud.first_name')</label>
                        <input type="text" name="first_name" class="form-control" placeholder="Enter employee name" value="{{ $employee->first_name }}" required/>
                    </div>

                    <div class="form-group">
                        <label for="last_name">@lang('admin/employees/crud.last_name')</label>
                        <input type="text" name="last_name" class="form-control" placeholder="Enter employee last name" value="{{ $employee->last_name }}" required/>
                    </div>

                    <div class="form-group">
                        <label for="company_id" class="control-label">@lang('admin/employees/crud.company')</label>
                        <select id="company_id" name="company_id" class="form-control" required autofocus>
                            <option selected="selected" value="{{ $employee->company['id'] }}"> {{ $employee->company['name'] }} </option>

                            @foreach($companies as $company)
                                <option value="{{ $company->id }}"> {{ $company->name }} </option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="email">@lang('admin/employees/crud.email')</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter employee email" value="{{ $employee->email }}"/>
                    </div>

                    <div class="form-group">
                        <label for="phone">@lang('admin/employees/crud.phone')</label>
                        <input type="text" name="phone" class="form-control" placeholder="Enter employee phone number" value="{{ $employee->phone }}" required/>
                    </div>

                    <br><br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-warning btn-lg">@lang('admin/employees/crud.edit_button')</button>
                        <a href="{{ URL::previous() }}" class="btn btn-danger btn-lg" role="button">@lang('admin/employees/crud.cancel_button')</a>
                    </div>
                </form>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->

@endsection

