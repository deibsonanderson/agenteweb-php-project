<?php

class ViewModulo {

    //construtor
    public function __construct() {
        
    }

    //destruidor
    public function __destruct() {
        
    }

    public function telaCadastrarModulo($post) {
        ?>
        <script type="text/javascript">
        <?php
          echo ($post) ? "$.growlUI2('" . $post . "', '&nbsp;');" : "";
        ?>                  
        </script>

      <div class="app-title">
        <div>
          <h1><i class="fa fa-sitemap"></i> Módulos </h1>
          <!--p>A free and modular admin template</p-->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Cadastros</li>
          <li class="breadcrumb-item"><a href="#">Módulos </a></li>
          <li class="breadcrumb-item active"><a href="#">Cadastrar </a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Formulário</h3>
            <div class="tile-body">
              <form action="#" method="post" id="formCadastro" class="">
                <input type="hidden" name="r3" id="r3" value="div_central"/>
                <input type="hidden" name="c2" id="c2" value="ControladorModulo"/>
                <input type="hidden" name="f1" id="f1" value="incluirModulo"/>
                <input type="hidden" name="m4" id="m4" value="1"/>                
                <div class="form-group">
                  <label class="control-label">Nome *</label>
                  <input class="form-control mgs_alerta" id="nome" name="nome" type="text" onkeyup="this.value=this.value.toUpperCase();" >
                </div>
              </form>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary " onClick="fncFormCadastro(this)" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Salvar</button>
              &nbsp;&nbsp;&nbsp;<a class="btn btn-secondary " onClick="fncButtonCadastro(this)" href="#" f1="telaListarModulo" c2="ControladorModulo" r3="div_central" ><i class="fa fa-fw fa-lg fa-times-circle"></i>Voltar</a>
            </div>
          </div>
        </div>
      </div>      
    <?php
    }    

    public function telaListarModulo($objModulo) {
        ?>
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Módulos &nbsp;&nbsp;&nbsp;
            <a href="#" class="btn btn-primary " onClick="fncButtonCadastro(this)" f1="telaCadastrarModulo" c2="ControladorModulo" r3="div_central"><i class="fa fa-fw fa-lg fa-plus"></i>Novo</a>
          </h1>
          <!--p>Table to display analytical data effectively</p-->
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Cadastros</li>
          <li class="breadcrumb-item active"><a href="#">Módulos </a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Código</th> 
                    <th>Descri&ccedil;&atilde;o</th> 
                    <th class="sorting_disabled" >Ações</th> 
                  </tr>
                </thead>
                <tbody>
                   <?php 
                    if ($objModulo) {
                        foreach ($objModulo as $modulo) {
                    ?>    
                        <tr> 
                            <td onClick="getId(this)" style="cursor:pointer"  id="<?php echo $modulo->getId(); ?>" f1="telaVisualizarModulo" c2="ControladorModulo" r3="div_central"><?php echo str_pad($modulo->getId(), 5, "0", STR_PAD_LEFT); ?></td> 
                            <td onClick="getId(this)"  style="cursor:pointer"  id="<?php echo $modulo->getId(); ?>" f1="telaVisualizarModulo" c2="ControladorModulo" r3="div_central"><?php echo $modulo->getNome(); ?></td> 
                            <td style="text-align:center;width:100px;">                              
                                <button onClick="getId(this)" class="btn btn-secondary btn-list" type="button" title="Alterar" id="<?php echo $modulo->getId(); ?>" f1="telaAlterarModulo" c2="ControladorModulo" r3="div_central"><i class="fa fa-lg fa-edit"></i></button>
                                <button class="btn btn-secondary btn-list" onClick="fncDeleteId(this)" type="button" title="Excluir" id="<?php echo $modulo->getId(); ?>" f1="excluirModulo" c2="ControladorModulo" r3="div_central" m4="4"><i class="fa fa-lg fa-trash"></i></button>
                            </td> 
                        </tr> 
                    <?php
                        }
                    }
                    ?>  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>    
    <?php
    }

    public function telaAlterarModulo($objModulo) {
        ?>
      <div class="app-title">
        <div>
          <h1><i class="fa fa-sitemap"></i> Módulos </h1>
          <!--p>A free and modular admin template</p-->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Cadastros</li>
          <li class="breadcrumb-item"><a href="#">Módulos </a></li>
          <li class="breadcrumb-item active"><a href="#">Atualizar </a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Formulário</h3>
            <div class="tile-body">
              <form action="#" method="post" id="formCadastro" class="">
              <input type="hidden" name="r3" id="r3" value="div_central"/>
              <input type="hidden" name="c2" id="c2" value="ControladorModulo"/>
              <input type="hidden" name="f1" id="f1" value="alterarModulo"/>
              <input type="hidden" name="m4" id="m4" value="2"/> 
              <input type="hidden" name="id" id="id" value="<?php echo $objModulo[0]->getId(); ?>"/>              
                <div class="form-group">
                  <label class="control-label">Nome *</label>
                  <input class="form-control mgs_alerta" id="nome" name="nome" type="text" value="<?php echo $objModulo[0]->getNome(); ?>" onkeyup="this.value=this.value.toUpperCase();" >
                </div>
              </form>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary " onClick="fncFormCadastro(this)" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Salvar</button>
              &nbsp;&nbsp;&nbsp;<a class="btn btn-secondary " onClick="fncButtonCadastro(this)" href="#" f1="telaListarModulo" c2="ControladorModulo" r3="div_central" ><i class="fa fa-fw fa-lg fa-times-circle"></i>Voltar</a>
            </div>
          </div>
        </div>
      </div>      
      <?php
    }

    public function telaVisualizarModulo($objModulo) {
        ?>
      <div class="app-title">
        <div>
          <h1><i class="fa fa-sitemap"></i> Módulos </h1>
          <!--p>A free and modular admin template</p-->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Cadastros</li>
          <li class="breadcrumb-item"><a href="#">Módulos </a></li>
          <li class="breadcrumb-item active"><a href="#">Visualizar </a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Formulário</h3>
            <div class="tile-body">
              <form action="#" method="post" id="formCadastro" class="">
                <div class="form-group">
                  <label class="control-label">Nome *</label>
                  <input class="form-control mgs_alerta" id="nome" disabled="true" name="nome" type="text" value="<?php echo $objModulo[0]->getNome(); ?>" onkeyup="this.value=this.value.toUpperCase();" >
                </div>
              </form>
            </div>
            <div class="tile-footer">
              <a class="btn btn-secondary " onClick="fncButtonCadastro(this)" href="#" f1="telaListarModulo" c2="ControladorModulo" r3="div_central" ><i class="fa fa-fw fa-lg fa-times-circle"></i>Voltar</a>
            </div>
          </div>
        </div>
      </div>
      <?php
    }

}
?>