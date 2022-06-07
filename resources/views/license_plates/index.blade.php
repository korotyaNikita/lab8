@extends('layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Номерні знаки</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Головна</a></li>
                            <li class="breadcrumb-item active">Номерні знаки</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-1 mb-3">
                        <a href="{{ route('license_plates.create') }}" class="btn btn-block bg-gradient-primary">Додати</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 mb-3">
                        {!! Form::open([ 'url' => url()->current(), 'method' => 'get' ]) !!}

                        {!! Form::select('perPage', [ '2' => '2', '4' => '4', '6' => '6', '8' => '8', '10' => '10'], $perPage, array('onchange' => "submit()") ) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Номерний знак</th>
                                        <th colspan="3">Дії</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($licensePlates as $licensePlate)
                                        <tr>
                                            <td>{{ $licensePlate->id }}</td>
                                            <td>{{ $licensePlate->license_plate }}</td>
                                            <td><a href="{{ route('license_plates.show', $licensePlate->id) }}"><i
                                                        class="far fa-eye"></i></a></td>
                                            <td><a href="{{ route('license_plates.edit', $licensePlate->id) }}"
                                                   class="text-success"><i
                                                        class="fas fa-pen"></i></a></td>
                                            <td>
                                                <form action="{{ route('license_plates.destroy', $licensePlate->id) }}"
                                                      method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="border-0 bg-transparent">
                                                        <i class="fas fa-trash text-danger"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-6">
                        {{ $licensePlates->appends(compact('perPage'))->links() }}
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
