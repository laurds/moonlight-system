@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ Auth::user()->name }}</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">

{{--                <div class="card-body row">--}}

{{--                    <div class="col-7">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="name">Nome</label>--}}
{{--                            <input type="text" name="name" id="name" class="form-control" value="{{ $customer->name }}" readonly/>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label for="address">Endereço</label>--}}
{{--                            <input type="text" name="address" id="address" class="form-control" value="{{ $customer->address }}" readonly />--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="email">E-Mail</label>--}}
{{--                            <input type="email"  name="email" id="email" class="form-control" value="{{ $customer->email }}" readonly/>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="phone">Telefone</label>--}}
{{--                            <input type="text" id="phone" name="phone" class="form-control" value="{{ $customer->phone }}" readonly/>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="observation">Observações</label>--}}
{{--                            <textarea id="observation" name="observation" class="form-control" rows="5" readonly >{{ $customer->observation }}</textarea>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>
        </section>
@endsection
