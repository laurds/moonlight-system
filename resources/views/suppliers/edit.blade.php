@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Editar fornecedor {{ $supplier->company ?? '' }}</h1>
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
                        <form class="form-horizontal" method="POST"  action="{{ route('suppliers.update', $supplier->id) }}" >
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label for="name">Empresa</label>
                                <input type="text" name="company" id="company" class="form-control" value="{{ $supplier->company }}" />
                            </div>
                            <div class="form-group">
                                <label for="name">Contato</label>
                                <input  type="text" name="contact" id="contact" class="form-control" value="{{ $supplier->contact }}" />
                            </div>
                            <div class="form-group">
                                <label for="address">Endereço</label>
                                <input type="text" name="address" id="address" class="form-control" value="{{ $supplier->address }}" required />
                            </div>
                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input type="email"  name="email" id="email" class="form-control" value="{{ $supplier->email }}" required/>
                            </div>
                            <div class="form-group">
                                <label for="phone">Telefone</label>
                                <input type="text" id="phone" name="phone" class="form-control" value="{{ $supplier->phone }}" required/>
                            </div>
                            <div class="form-group">
                                <label for="phone">Site</label>
                                <input type="text" id="site" name="site" class="form-control" value="{{ $supplier->site }}"/>
                            </div>
                            <div class="form-group">
                                <label for="observation">Observações</label>
                                <textarea id="observation" name="observation" class="form-control" rows="5" >{{ $supplier->observation }}</textarea>
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
