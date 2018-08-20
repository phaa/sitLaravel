@extends('template.app')

@section('page_content')
    <div class="col-lg-4 col-sm-6">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-success text-center">
                            <i class="ti-clipboard"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>Inscrição em</p>
                            Minicurso
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        <span style="color:red"><i class="ti-close"></i> A partir de 08/08/18</span>
                        <!--i class="ti-hand-point-up"></i><b> Clique aqui para se inscrever</b-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
