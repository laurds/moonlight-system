@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ $supplier->name }}</h1>
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
                            <div class="form-group">
                                <label for="name">Empresa</label>
                                <input readonly type="text" name="company" id="company" class="form-control" value="{{ $supplier->company }}" />
                            </div>
                            <div class="form-group">
                                <label for="name">Contato</label>
                                <input readonly type="text" name="contact" id="contact" class="form-control" value="{{ $supplier->contact }}" />
                            </div>
                            <div class="form-group">
                                <label for="address">Endereço</label>
                                <input readonly type="text" name="address" id="address" class="form-control" value="{{ $supplier->address }}" required />
                            </div>
                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input readonly type="email"  name="email" id="email" class="form-control" value="{{ $supplier->email }}" required/>
                            </div>
                            <div class="form-group">
                                <label for="phone">Telefone</label>
                                <input readonly type="text" id="phone" name="phone" class="form-control" value="{{ $supplier->phone }} required"/>
                            </div>
                            <div class="form-group">
                                <label for="phone">Site</label>
                                <input readonly type="text" id="site" name="site" class="form-control" value="{{ $supplier->site }}"/>
                            </div>
                            <div class="form-group">
                                <label for="observation">Observações</label>
                                <textarea readonly id="observation" name="observation" class="form-control" rows="5" >{{ $supplier->observation }}</textarea>
                            </div>
                    </div>
                </div>

            </div>
        </section>
@endsection
