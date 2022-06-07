@extends('layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Додавання транспортного засобу</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Головна</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('vehicles.index') }}">Транспортні засоби</a></li>
                            <li class="breadcrumb-item active"> Додавання транспортного засобу </li>
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
                    <div class="col-12">
                        <form method="post" action="{{ route('vehicles.store') }}" class="w-50">
                            @csrf
                            <div class="form-group w-50">
                                <label>Оберіть номерний знак</label>
                                <select name="license_plate" class="custom-select">
                                    @foreach($licensePlates as $licensePlate)
                                        <option value="{{ $licensePlate->id }}"
                                            {{ $licensePlate->id == old('license_plate') ? ' selected' : '' }}
                                        >
                                            {{ $licensePlate->license_plate }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('license_plate')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <input type="text" class="form-control" name="brand" placeholder="Введіть марку"
                                       value="{{ old('brand') }}">
                                @error('brand')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <input type="text" class="form-control" name="model" placeholder="Введіть модель"
                                       value="{{ old('model') }}">
                                @error('model')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Додати</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
