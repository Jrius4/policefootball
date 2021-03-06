@extends('layouts.backend.main')

@section('title', 'Police F.C | Edit Player Category')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Categories
          <small>Edit category</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.player-categories.index') }}">Player Categories</a></li>
          <li class="active">Edit Player Category</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($playerCategory, [
                  'method' => 'PUT',
                  'route'  => ['backend.player-categories.update', $playerCategory],
                  'files'  => TRUE,
                  'id' => 'post-form'
              ]) !!}

              @include('backend.player-category.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.player-category.script')
