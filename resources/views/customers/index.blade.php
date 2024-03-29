@extends('layouts.admin')
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Clientes</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->

            <!-- Filtro -->
            <div class="input-group input-group-lg">
                <form  method="POST" action="{{ route('customers.search') }}" style="display: inherit; width: inherit;">
                    @csrf
                    <input type="search" class="form-control form-control-lg"  name="search" id="search" placeholder="Pesquise pelo nome do cliente, e-mail ou telefone."/>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-lg btn-default">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <!-- Add customers button-->
                    <a href="{{ route('customers.create') }}" type="button" class="btn btn-primary">Adicionar <i style="margin-left: 5px;font-size: 13px;" class="fas fa-user-plus"></i>

                    </a>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="width: 15%">
                                Nome
                            </th>
                            <th style="width: 20%">
                                E-mail
                            </th>
                            <th style="width: 30%">
                                Endereço
                            </th>
                            <th>
                              Telefone
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>

                        </thead>
                        <tbody>


                        @foreach($customers as $customer)
                            @if($customer->client_id == Auth::id() )
                                <tr>
                                    <td>
                                        {{ $customer->name }}
                                    </td>
                                    <td>
                                        {{ $customer->email }}
                                    </td>
                                    <td>
                                        {{ $customer->address }}
                                    </td>
                                    <td>
                                        {{ $customer->phone }}
                                    </td>

                                    <form action="{{ route('customers.destroy', $customer->id )}}" method="POST" >
                                        @csrf
                                        <td class="project-actions text-right">
                                            <a target="_blank" href="{{ route('customers.show', $customer->id)}}" class="btn btn-primary btn-sm" >
                                                <i class="fas fa-folder"></i>
                                                Ver
                                            </a>
                                            <a class="btn btn-info btn-sm" href="{{route('customers.edit', $customer->id)}}">

                                                <i class="fas fa-pencil-alt"></i>
                                                Editar
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                                Deletar
                                            </button>
                                        </td>
                                    </form>
                                </tr>
                            @endif
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

    </section>
@endsection
