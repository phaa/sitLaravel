@extends('template.app')

@section('page_content')
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title ">Dados Pessoais
                    <div class="instiga">
                        <span class="switch">
                          <input onchange="enableAtributesEdit()" type="checkbox" class="switch" id="switch-id">
                          <label for="switch-id">Habilitar edição</label>
                        </span>
                    </div>
                  </h4>
            </div>

            <div class="content">
                <form id="user-info-form" action="../php/edit/edit_profile.php" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nome Completo:</label>
                                <input type="text" class="form-control border-input" name="name" placeholder="Nome completo" value='' disabled required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Apelido:</label>
                                <input type="text" class="form-control border-input" name="username" placeholder="Apelido" value='' disabled required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control border-input" name="email" placeholder="Email" value='' disabled required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>CPF:</label>
                                <input type="text" class="form-control border-input cpf-input" name="cpf" placeholder="CPF (000.000.000-00)" value='' disabled required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Telefone:</label>
                                <input type="text" class="form-control border-input phone-number-input" name="telephone" placeholder="Telefone (99 99999-9999)" value='' disabled required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Data de nascimento:</label>
                                <input type="text" class="form-control border-input birth-input" name="birth" placeholder="Data de nascimento" value='' disabled required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Município:</label>
                                <input type="text" class="form-control border-input" name="city" placeholder="Município" value='' disabled required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Estado:</label>
                                <select name="state" class="form-control border-input" required disabled>
                                    <option selected="true" disabled="disabled" value="" >Selecione seu estado</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Instituição:</label>
                                <input type="text" class="form-control border-input" name="institute" placeholder="Instituição" value='' disabled required>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button id="commit-changes" type="submit" class="btn btn-info btn-fill btn-wd" disabled>Salvar&nbsp;&nbsp;<i class="fas fa-save"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
    <!-- Scripts adicionais dessa página -->
    <script src="js/edit_info.js"></script>
    <script src="js/cleave/cleave.min.js"></script>
    <script src="js/cleave/cleave-phone.br.js"></script>
    <script src="js/cleave/cleave-format.js"></script>
@endsection
