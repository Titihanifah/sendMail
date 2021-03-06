
@extends('layouts.admin')
@section('title', 'Admin | Edit Employee')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
       
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-10">
          <!-- Horizontal Form -->
          <div class="box box-info">
            {!! Form::model($employee, array('route' => array('employee.update', $employee->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data')) !!}
            
            <div class="box-header with-border">
              
              <h3 class="box-title">Edit Employee</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
              <div class="box-body">
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-8">
                   <!--  <input type="text" class="form-control" id="name" name="name" placeholder="Name">  -->
                    {{ Form::text('name', null, array('class' => 'form-control')) }}
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-8">
                    {{ Form::text('email', null, array('class' => 'form-control')) }}
                  </div>
                </div>
                <div class="form-group">
                  <label for="address" class="col-sm-2 control-label">Address</label>

                  <div class="col-sm-8">
                    <!-- <textarea placeholder="Address" class="form-control" id="address" name="address" type="text"></textarea> -->
                    {{ Form::textarea('address', null, array('class' => 'form-control')) }}
                  </div>
                </div>
                <div class="form-group">
                  <label for="telepon" class="col-sm-2 control-label">Telepon</label>

                  <div class="col-sm-8">
                    <!-- <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Telepoon"> -->
                    {{ Form::text('telepon', null, array('class' => 'form-control')) }}
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Add Data</button>
              </div>
              <!-- /.box-footer -->
            
            {!! Form::close() !!}
          </div>
         
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection