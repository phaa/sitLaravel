@extends('template.app')

@section('page_content')
    <div class="col-md-12" id="minicursos">
        <div class="card">
            <div class="header">
                <h3 class="title">Usuários Cadastrados
                    <form class="example" action="">
                      <input type="text" placeholder="Pesquisar" name="search" value="<?php echo (isset($search) ? $search : null); ?>">
                      <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </h3>

                <p class="category"></p>
            </div>
            <div class="content table-responsive table-full-width">
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Nome</th>
                            <th class="text-center">CPF</th>
                            <th class="text-center">Instituição</th>
                            <th class="text-center">Credenciar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">ID</td>
                            <td class="text-center">Nome</td>
                            <td class="text-center">CPF</td>
                            <td class="text-center">Instituição</td>
                            <td style="width: 15%;">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <td style="width: 15%;">
            <div class="instiga">
                <span class="switch">
                  <input onchange="enableAtributesEdit()" type="checkbox" class="switch" id="id">
                  <label for="id">Credenciar</label>
                </span>
            </div>
        </td>
    </div>
    <script type="text/javascript">
        function enableAtributesEdit()
        {
                
        }
    </script>
@endsection
