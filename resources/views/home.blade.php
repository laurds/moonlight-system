@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card" style="margin-top: 10px;">
                        <div class="card-header">
                            <h1 style="font-size: 5vh;" class="card-title">Welcome</h1>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            @php
                                date_default_timezone_set('America/Sao_Paulo');
                                setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
                                $mytime = Carbon\Carbon::now();
                                echo $mytime->formatLocalized('%A %d %B %Y');
                            @endphp
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>

    <div>
        <img src="../../../dist/img/people.jpg" width="100%">
    </div>
@endsection
