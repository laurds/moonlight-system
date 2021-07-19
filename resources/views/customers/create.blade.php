@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Novo(a) Cliente</h1>
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
                        <form class="form-horizontal" method="POST" action="{{ route('customers.store') }}">
                        @csrf

                            <!-- User id relationship with customer -->
                            <input hidden type="text" id="client_id" name="client_id" value="{{ Auth::id() }}"/>

                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text"  placeholder="Laura Rocha de Matos"  name="name" id="name" class="form-control" required/>
                            </div>

                            <div class="form-group">
                                <label for="address">Endereço</label>
                                <input type="text" name="address" id="address" class="form-control" placeholder="Rua, 365 - Cidade, Estado."  required/>
                            </div>
                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input type="email"  name="email" id="email" class="form-control" placeholder="example@company.com" required/>
                            </div>
                            <div class="form-group">
                                <label for="phone">Telefone</label>
                                <input type="text" id="phone" name="phone" class="form-control"  placeholder="Digite apenas os números." required/>
                            </div>
                            <div class="form-group">
                                <label for="observation">Observações</label>
                                <textarea id="observation" name="observation" class="form-control" rows="5"></textarea>
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
