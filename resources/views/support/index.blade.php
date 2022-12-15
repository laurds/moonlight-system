@extends('layouts.admin')
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Suporte</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">

            <!-- Default box -->
            <div class="card">

                <div class="card-body row">

                    <div class="col-7">
                        <form class="form-horizontal" method="POST" action="{{ route('support.send')}}">
                        @csrf

                        <!-- User id relationship with customer -->
                            <input hidden type="text" id="client_id" name="client_id" value="{{ Auth::id() }}"/>

                            <div class="form-group">
                                <label for="title">Titulo da solicitação</label>
                                <input type="text"  name="title" id="title" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label for="description">Descrição</label>
                                <textarea id="description" name="description" class="form-control" rows="5"></textarea>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </section>
@endsection
