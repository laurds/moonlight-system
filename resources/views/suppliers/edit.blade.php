@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Editar cliente {{ Auth::user()->name }}</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">

                <div class="card-body row">

                    <div class="col-7">
                        <form class="form-horizontal" method="POST"  action="{{ route('customers.update', $customer->id) }}" >
                        @method('PATCH')
                        @csrf
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $customer->name }}" required/>
                            </div>

                            <div class="form-group">
                                <label for="address">Endereço</label>
                                <input type="text" name="address" id="address" class="form-control" value="{{ $customer->address }}" required />
                            </div>
                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input type="email"  name="email" id="email" class="form-control" value="{{ $customer->email }}" required/>
                            </div>
                            <div class="form-group">
                                <label for="phone">Telefone</label>
                                <input type="text" id="phone" name="phone" class="form-control" value="{{ $customer->phone }} required"/>
                            </div>
                            <div class="form-group">
                                <label for="observation">Observações</label>
                                <textarea id="observation" name="observation" class="form-control" rows="5" >{{ $customer->observation }}</textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Salvar">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
@endsection
