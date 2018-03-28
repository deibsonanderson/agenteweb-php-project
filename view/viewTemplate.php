<?php

class ViewTemplate {

    //construtor
    public function __construct() {
        
    }

    //destruidor
    public function __destruct() {
        
    }

    public function telaCadastrarTemplate($post) {
        ?>

        <script type="text/javascript" >
        <?php
        echo ($post) ? "$.growlUI2('" . $post . "', '&nbsp;');" : "";
        ?>
            $(".maskMoney").maskMoney();
            setDatePicker('data_nascimento');

            $(document).ready(function() {
                fncInserirArquivo("form_arquivo", "progress_arquivo", "porcentagem_arquivo", "arquivo", "arquivoAtual", "./arquivos/template/", "arquivo");
                fncInserirArquivo("form_imagem", "progress", "porcentagem", "imagem", "imagemAtual", "./imagens/template/", "imagem");
            });
        </script>
          <div class="app-title">
            <div>
              <h1><i class="fa fa-dashboard"></i> Template </h1>              
            </div>
            <ul class="app-breadcrumb breadcrumb">
              <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
              <li class="breadcrumb-item">Cadastros</li>
              <li class="breadcrumb-item"><a href="#">Template </a></li>
              <li class="breadcrumb-item active"><a href="#">Cadastrar </a></li>
            </ul>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <h3 class="tile-title">Formulário</h3>
                <div class="tile-body">
 

                <div class="form-group">
                    <table border="0" style="width: 100%">
                        <tr>
                            <td colspan="3">
                                <label>Imagem Largura Máxima: 640px</label>&nbsp;&nbsp; 
                            </td>
                        </tr>
                        <tr style="height: 110px;">
                            <td style="width: 20%;text-align: right;">
                                <span id="span-teste" class="upload-wrapper" >  
                                    <form action="./post-imagem.php" method="post" id="form_imagem">
                                        <input name="pastaArquivo" type="hidden" value="./imagens/template/">
                                        <input name="largura" type="hidden" value="640">
                                        <input name="opcao" type="hidden" value="1">
                                        <input name="tipoArq" type="hidden" value="imagem">
                                        <input type="file" name="file" class="upload-file" onchange="javascript: fncSubmitArquivo('enviar', this);" >
                                        <input type="submit" id="enviar" style="display:none;">   
                                        <img src="./img/img_upload.png" class="upload-button" />
                                    </form> 
                                </span>
                            </td>
                            <td style="width: 20%">
                                <img onclick="fncRemoverArquivo('imagem', './imagens/template', 'imagem', 'imagemAtual', './img/imagemPadrao.jpg');" src="./img/remove.png" border="0" title="Clique para remover" style="cursor:pointer;margin-bottom:7px;" class="upload-button" />
                            </td>
                            <td style="width: 60%">
                                <img id="imagemAtual" name="imagemAtual" src="./img/imagemPadrao.jpg" border="0" style="" />
                            </td>
                        </tr>
                        <tr>
                            <td  colspan="3">
                                <progress id="progress" value="0" max="100" style="display:none;"></progress>
                                <span id="porcentagem" style="display:none;float: right;">0%</span>
                            </td>
                        </tr>
                    </table>
                </div>

                 <div class="form-group">
                    <table border="0" style="width: 100%">
                        <tr>
                            <td colspan="3">
                                <label>Tamanho Máxima: 2 Megas.</label>&nbsp;&nbsp; 
                            </td>
                        </tr>
                        <tr style="height: 110px;">
                            <td style="width: 20%;text-align: right;">
                                <span id="span-teste" class="upload-wrapper" >                                                        
                                    <form action="./post-imagem.php" method="post" id="form_arquivo">
                                        <input name="pastaArquivo" type="hidden" value="./arquivos/template/">
                                        <input name="largura" type="hidden" value="640">
                                        <input name="opcao" type="hidden" value="1">
                                        <input name="tipoArq" type="hidden" value="arquivo">
                                        <input type="file" name="file" class="upload-file" onchange="javascript: fncSubmitArquivo('enviar_arquivo', this);" >
                                        <input type="submit" id="enviar_arquivo" style="display:none;">
                                        <img src="./img/img_upload.png" class="upload-button" />
                                    </form>
                                </span>
                            </td>
                            <td style="width: 20%">
                                <img onclick="fncRemoverArquivo('arquivo', './arquivos/template/', 'arquivo', 'arquivoAtual', '');" src="./img/remove.png" border="0" title="Clique para remover" style="cursor:pointer;margin-bottom:7px;" class="upload-button" />
                            </td>
                            <td style="width: 60%;">
                                <span name="arquivoAtual" id="arquivoAtual" onClick="fnAbreArquivo('arquivo', './arquivos/template/')"   ><br />Adicione um arquivo clicando no <img src="./img/img_upload.png" border="0" style="float:none;margin:0;width: 20px;" /></span>
                            </td>
                        </tr>
                        <tr>
                            <td  colspan="3">
                                <progress id="progress_arquivo" value="0" max="100" style="display:none;"></progress>
                                <span id="porcentagem_arquivo" style="display:none;">0%</span>                                                  
                            </td>
                        </tr>
                    </table>
                </div>


                <form action="#" method="post" id="formCadastro" class="">
                    <input type="hidden" name="retorno" id="retorno" value="div_central"/>
                    <input type="hidden" name="controlador" id="controlador" value="ControladorTemplate"/>
                    <input type="hidden" name="funcao" id="funcao" value="incluirTemplate"/>
                    <input type="hidden" name="mensagem" id="mensagem" value="1"/>
                    <input type="hidden" name="arquivo" id="arquivo" value="" />    
                    <input type="hidden" name="imagem" id="imagem" value="" />              
                    <div class="form-group">
                      <label class="control-label">Nome *</label>
                      <input class="form-control mgs_alerta" id="nome" name="nome" type="text" onkeyup="this.value=this.value.toUpperCase();" >
                    </div>

                <div class="form-group">
                    <label class="control-label">Nome - Texto *</label>
                    <input type="text"  onkeyup="this.value = this.value.toUpperCase();" id="nome" name="nome" value="" class="form-control mgs_alerta" >
                </div>

                <!--div class="form-group">
                    <label class="control-label">Radio *</label>
                    <input type="radio" name="sexo" checked="checked" value="M" class="form-control"/>
                    Masculino
                    <input type="radio" name="sexo" value="F" class="form-control" />
                    Feminino                        
                </div-->
                <div class="animated-radio-button">
                  <label class="control-label">Radio *</label><br/>
                  <label>
                    <input type="radio" name="sexo" checked="checked" value="M"><span class="label-text">Masculino</span>
                  </label><br/>
                  <label>
                    <input type="radio" name="sexo" value="F"><span class="label-text">Feminino</span>
                  </label>
                </div>
                <div class="form-group">
                    <label class="control-label">Profissão TextArea</label>
                    <textarea  id="profissao" name="profissao" rows="4" value="" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Faixa Salarial - Monetaorio R$ </label>
                    <input type="text" id="faixa_salarial" name="faixa_salarial" value="" class="maskMoney form-control"  > 
                </div>
               

                <div class="form-group">
                    <label class="control-label">Data de Nascimento - Data</label>
                    <input type="text" id="data_nascimento" name="data_nascimento" value="" class="data form-control" onkeypress="return mascara(event, this, '##/##/####');" maxlength="10" >
                </div>
                <div class="form-group">
                    <label class="control-label">CPF - Mascara</label>
                    <input type="text"  id="cpf" name="cpf" value="" class="form-control" onkeypress="return mascara(event, this, '###.###.###-##');" maxlength="14" >
                </div>
               

                <div class="form-group">
                    <label class="control-label">Telefone Residencial</label>
                    <input type="text" id="telefone_residencial" name="telefone_residencial" value="" class="form-control" onkeypress="return mascara(event, this, '(##)#####-####');" maxlength="14">
                </div>
                <div class="form-group">
                    <label class="control-label">Logradouro - Maiuscula</label>
                    <input type="text" onkeyup="this.value = this.value.toUpperCase();" id="logradouro" name="logradouro" value="" class="form-control" >
                </div>

                <div class="form-group">
                    <label class="control-label">Número</label>
                    <input type="text"  id="numero" name="numero" value="" class="form-control" onkeypress="return mascara(event, this, '#');" maxlength="6">
                </div>
                <div class="form-group">
                    <label class="control-label">CEP - Mascara</label>
                    <input type="text"  id="cep" name="cep" value="" class="form-control" onkeypress="return mascara(event, this, '#####-###');" maxlength="9">
                </div>
                <div class="form-group">
                    <label class="control-label">Estado</label>
                    <select id="estado" name="estado" value="" class="form-control">
                        <option value="">Selecione...</option>
                        <?php echo montaSelectEstados(null); ?>
                    </select>
                </div>

                <div class="form-group">
                    <label class="control-label">E-mail - Minusculo</label>
                    <input type="text"  id="email" name="email" value="" class="form-control" onkeyup="this.value = this.value.toLowerCase();" >
                </div>
                   <div class="form-group">
                        <label class="control-label">Pais</label>
                        <select id="pais" name="pais" class="mgs_alerta form-control" >
                            <?php
                            try {
                                $controladorPais = new ControladorPais();
                                $objPais = $controladorPais->listarPais();
                            } catch (Exception $e) {
                                
                            }
                            ?>
                            <option value="">Selecione...</option>
                            <?php
                            foreach ($objPais as $pais) {
                                if ($pais->getId() == 17) {
                                    ?><option value="<?php echo $pais->getId() ?>" selected="selected"><?php echo $pais->getNome(); ?></option><?php
                                } else {
                                    ?><option value="<?php echo $pais->getId() ?>"><?php echo $pais->getNome(); ?></option><?php
                                }
                            }
                            ?>                                 
                        </select>
                    </div>  

                  </form>
                </div>
                <div class="tile-footer">
                  <button class="btn btn-primary formCadastro" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Salvar</button>
                  &nbsp;&nbsp;&nbsp;<a class="btn btn-secondary buttonCadastro" href="#" funcao="telaListarTemplate" controlador="ControladorTemplate" retorno="div_central" ><i class="fa fa-fw fa-lg fa-times-circle"></i>Voltar</a>
                </div>
              </div>
            </div>
          </div>
          <script src="js/lib.js"></script>
        <?php
    }

    public function telaListarTemplate($objTemplate) {
        $controladorAcao = new ControladorAcao();
        $perfil = $controladorAcao->retornaPerfilClasseAcao($_SESSION["login"],'telaListarTemplate');
        ?>
          <div class="app-title">
            <div>
              <h1><i class="fa fa-th-list"></i> Template &nbsp;&nbsp;&nbsp;
                <?php
                    if( $perfil === 'A' ){
                ?>
                    <a href="#" class="btn btn-primary buttonCadastro" funcao="telaCadastrarTemplate" controlador="ControladorTemplate" retorno="div_central">Novo</a>
                <?php } ?>
              </h1>              
            </div>
            <ul class="app-breadcrumb breadcrumb side">
              <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
              <li class="breadcrumb-item">Cadastros</li>
              <li class="breadcrumb-item active"><a href="#">Template </a></li>
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
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>Logradouro</th>
                        <th>Estado</th> 
                        <th class="sorting_disabled" >Ações</th> 
                      </tr>
                    </thead>
                    <tbody>
                       <?php 
                        if ($objTemplate) {
                            foreach ($objTemplate as $template) {
                        ?>    
                                <tr> 
                                    <td class="center"><?php echo str_pad($template->getId(), 5, "0", STR_PAD_LEFT); ?></td>
                                    <td class="getId center"  style="cursor:pointer"  id="<?php echo $template->getId(); ?>" funcao="telaVisualizarTemplate" controlador="ControladorTemplate" retorno="div_central">
                                        <?php echo limitarTexto($template->getNome(), 27); ?>
                                    </td>
                                    <td class="getId center"  style="cursor:pointer"  id="<?php echo $template->getId(); ?>" funcao="telaVisualizarTemplate" controlador="ControladorTemplate" retorno="div_central">
                                        <?php
                                        if ($template->getTelefoneResidencial()) {
                                            echo limitarTexto($template->getTelefoneResidencial(), 20);
                                        } else {
                                            echo "-";
                                        }
                                        ?>
                                    </td>
                                    <td class="getId center"  style="cursor:pointer"  id="<?php echo $template->getId(); ?>" funcao="telaVisualizarTemplate" controlador="ControladorTemplate" retorno="div_central">
                                        <?php
                                        if ($template->getEmail() != "") {
                                            echo limitarTexto($template->getEmail(), 27);
                                        } else {
                                            echo "-";
                                        }
                                        ?>
                                    </td>
                                    <td class="getId center"  style="cursor:pointer"  id="<?php echo $template->getId(); ?>" funcao="telaVisualizarTemplate" controlador="ControladorTemplate" retorno="div_central">
                                        <?php
                                        if ($template->getLogradouro() != "") {
                                            echo limitarTexto($template->getLogradouro(), 20);
                                        } else {
                                            echo "-";
                                        }
                                        ?>
                                    </td>
                                    <td class="getId center"  style="cursor:pointer"  id="<?php echo $template->getId(); ?>" funcao="telaVisualizarTemplate" controlador="ControladorTemplate" retorno="div_central">
                                        <?php
                                        if ($template->getEstado() != "") {
                                            echo $template->getEstado();
                                        } else {
                                            echo "-";
                                        }
                                        ?>
                                    </td>                       
                                    <td >
                                        <?php
                                        echo ($perfil !== 'C')? '<input type="image" src="images/icn_edit.png" title="Alterar" id="'.$template->getId().'" class="getId" funcao="telaAlterarTemplate" controlador="ControladorTemplate" retorno="div_central">':'<input type="image" src="images/icn_edit_disable.png" title="Excluir" mensagem="4" style="cursor: default;">'; 
                                        echo ($perfil === 'A')? '<input type="image" src="images/icn_trash.png" title="Excluir" id="'.$template->getId().'" class="deleteId" funcao="excluirTemplate" controlador="ControladorTemplate" retorno="div_central" mensagem="4">':'<input type="image" src="images/icn_trash_disable.png" title="Excluir" mensagem="4" style="cursor: default;">'; 
                                        ?>                                        
                                    </td > 
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
        <script src="js/lib.js"></script>
        <?php
    }

    public function telaAlterarTemplate($objTemplate) {
        ?>
        <script type="text/javascript">
            $(".maskMoney").maskMoney();
            setDatePicker('data_nascimento');

            $(document).ready(function() {
                fncInserirArquivo("form_arquivo", "progress_arquivo", "porcentagem_arquivo", "arquivo", "arquivoAtual", "./arquivos/template/", "arquivo");
                fncInserirArquivo("form_imagem", "progress", "porcentagem", "imagem", "imagemAtual", "./imagens/template/", "imagem");
            });
        </script>


          <div class="app-title">
            <div>
              <h1><i class="fa fa-dashboard"></i> Template </h1>              
            </div>
            <ul class="app-breadcrumb breadcrumb">
              <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
              <li class="breadcrumb-item">Cadastros</li>
              <li class="breadcrumb-item"><a href="#">Template </a></li>
              <li class="breadcrumb-item active"><a href="#">Cadastrar </a></li>
            </ul>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <h3 class="tile-title">Formulário</h3>
                <div class="tile-body">

                <div class="form-group">
                    <?php
                    if ($objTemplate[0]->getImagem()) {
                        $imagem = "./imagens/template/thumbnail" . $objTemplate[0]->getImagem();
                    } else {
                        $imagem = "./img/imagemPadrao.jpg";
                    }
                    ?>   
                    <table border="0" style="width: 100%">
                        <tr>
                            <td colspan="3">
                                <label class="control-label">Imagem Largura Máxima: 640px</label>&nbsp;&nbsp; 
                            </td>
                        </tr>
                        <tr style="height: 110px;">
                            <td style="width: 20%;text-align: right;">
                                <span id="span-teste" class="upload-wrapper" >  
                                    <form action="./post-imagem.php" method="post" id="form_imagem">
                                        <input name="pastaArquivo" type="hidden" value="./imagens/template/">
                                        <input name="largura" type="hidden" value="640">
                                        <input name="opcao" type="hidden" value="1">
                                        <input name="tipoArq" type="hidden" value="imagem">
                                        <input type="file" name="file" class="upload-file" onchange="javascript: fncSubmitArquivo('enviar', this);" >
                                        <input type="submit" id="enviar" style="display:none;">   
                                        <img src="./img/img_upload.png" class="upload-button" />
                                    </form> 
                                </span>
                            </td>
                            <td style="width: 20%">
                                <img onclick="fncRemoverArquivo('imagem', './imagens/template', 'imagem', 'imagemAtual', './img/imagemPadrao.jpg');" src="./img/remove.png" border="0" title="Clique para remover" style="cursor:pointer;margin-bottom:7px;" class="upload-button" />
                            </td>
                            <td style="width: 60%">
                                <img id="imagemAtual" name="imagemAtual" src="<?php echo $imagem; ?>" border="0" style="" />
                            </td>
                        </tr>
                        <tr>
                            <td  colspan="3">
                                <progress id="progress" value="0" max="100" style="display:none;"></progress>
                                <span id="porcentagem" style="display:none;float: right;">0%</span>
                            </td>
                        </tr>
                    </table>
                </div> 
                <div class="form-group">
                    <table border="0" style="width: 100%">
                        <tr>
                            <td colspan="3">
                                <label class="control-label">Tamanho Máxima: 2 Megas.</label>&nbsp;&nbsp; 
                            </td>
                        </tr>
                        <tr style="height: 110px;">
                            <td style="width: 20%;text-align: right;">
                                <span id="span-teste" class="upload-wrapper" >                                                        
                                    <form action="./post-imagem.php" method="post" id="form_arquivo">
                                        <input name="pastaArquivo" type="hidden" value="./arquivos/template/">
                                        <input name="largura" type="hidden" value="640">
                                        <input name="opcao" type="hidden" value="1">
                                        <input name="tipoArq" type="hidden" value="arquivo">
                                        <input type="file" name="file" class="upload-file" onchange="javascript: fncSubmitArquivo('enviar_arquivo', this);" >
                                        <input type="submit" id="enviar_arquivo" style="display:none;">
                                        <img src="./img/img_upload.png" class="upload-button" />
                                    </form>
                                </span>
                            </td>
                            <td style="width: 20%">
                                <img onclick="fncRemoverArquivo('arquivo', './arquivos/template/', 'arquivo', 'arquivoAtual', '');" src="./img/remove.png" border="0" title="Clique para remover" style="cursor: pointer;margin-bottom:7px;" class="upload-button" />
                            </td>
                            <td style="width: 60%">
                                <span name="arquivoAtual" id="arquivoAtual" onClick="fnAbreArquivo('arquivo', './arquivos/template/')" style="<?php echo ($objTemplate[0]->getArquivo()) ? 'cursor: pointer; text-decoration: underline;' : '' ?>"  >
                                    <?php
                                    if ($objTemplate[0]->getArquivo()) {
                                        echo $objTemplate[0]->getArquivo();
                                    } else {
                                        ?><br />Adicione um arquivo clicando no <img src="./img/img_upload.png" border="0" style="float:none;margin:0;width: 20px;" /><?php
                                    }
                                    ?> 
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td  colspan="3">
                                <progress id="progress_arquivo" value="0" max="100" style="display:none;"></progress>
                                <span id="porcentagem_arquivo" style="display:none;float: right;">0%</span>                                                 
                            </td>
                        </tr>
                    </table>  
                </div>   

                <form action="#" method="post" id="formCadastro" class="">
                    <input type="hidden" name="retorno" id="retorno" value="div_central"/>
                    <input type="hidden" name="controlador" id="controlador" value="ControladorTemplate"/>
                    <input type="hidden" name="funcao" id="funcao" value="alterarTemplate"/>
                    <input type="hidden" name="mensagem" id="mensagem" value="2"/>
                    <input type="hidden" name="id" id="id" value="<?php echo $objTemplate[0]->getId(); ?>"/>
                    <input type="hidden" name="imagem" id="imagem" value="<?php echo $objTemplate[0]->getImagem(); ?>" />
                    <input type="hidden" name="arquivo" id="arquivo" value="<?php echo $objTemplate[0]->getArquivo(); ?>">   
                    <div class="form-group">
                        <label class="control-label">Nome *</label>
                        <input type="text" onkeyup="this.value = this.value.toUpperCase();" id="nome" name="nome" value="<?php echo $objTemplate[0]->getNome(); ?>" class="form-control mgs_alerta" >
                    </div>
                    <div class="form-group">
                        <label class="control-label">Sexo *</label>
                        <?php
                        if ($objTemplate[0]->getSexo() == "M") {
                            $macho = 'checked="checked"';
                            $femia = '';
                        } elseif ($objTemplate[0]->getSexo() == "F") {
                            $macho = '';
                            $femia = 'checked="checked"';
                        }
                        ?>
                        <input type="radio" name="sexo" <?php echo $macho; ?> value="M"/>
                        Masculino
                        <input type="radio" name="sexo" <?php echo $femia; ?> value="F" />
                        Feminino                            
                    </div>
                    <div class="form-group">
                        <label class="control-label">Profissão</label>                    
                        <textarea id="profissao" name="profissao" value="<?php echo $objTemplate[0]->getProfissao(); ?>" class="form-control" ></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Faixa Salarial R$ </label>
                        <input type="text" id="faixa_salarial" name="faixa_salarial" value="<?php echo valorMonetario($objTemplate[0]->getFaixaSalarial(), "2"); ?>" class="maskMoney form-control"  > 
                    </div>
                    <div class="form-group">
                        <label class="control-label">Data de Nascimento</label>
                        <input type="text" id="data_nascimento" name="data_nascimento" value="<?php echo ($objTemplate[0]->getDataNascimento() != "0000-00-00") ? recuperaData($objTemplate[0]->getDataNascimento()) : ""; ?>" class="data form-control" onkeypress="return mascara(event, this, '##/##/####');" maxlength="10" >
                    </div>
                    <div class="form-group">
                        <label class="control-label">CPF</label>
                        <input type="text" id="cpf" name="cpf" value="<?php echo $objTemplate[0]->getCpf(); ?>" class="form-control" onkeypress="return mascara(event, this, '###.###.###-##');" maxlength="14" >
                    </div>
                    <div class="form-group">
                        <label class="control-label">Logradouro</label>
                        <input type="text" onkeyup="this.value = this.value.toUpperCase();" id="logradouro" name="logradouro" value="<?php echo $objTemplate[0]->getLogradouro(); ?>" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label class="control-label">Número</label>
                        <input type="text" id="numero" name="numero" value="<?php echo $objTemplate[0]->getNumero(); ?>" class="form-control" onkeypress="return mascara(event, this, '#');" maxlength="6">
                    </div>
                    <div class="form-group">
                        <label class="control-label">CEP</label>
                        <input type="text" id="cep" name="cep" value="<?php echo $objTemplate[0]->getCep(); ?>" class="form-control" onkeypress="return mascara(event, this, '#####-###');" maxlength="9">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Estado</label>
                        <select id="estado" name="estado" value="" class="form-control">
                            <option value="">Selecione...</option>
                            <?php echo montaSelectEstados($objTemplate[0]->getEstado()); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Telefone Residencial</label>
                        <input type="text" id="telefone_residencial" name="telefone_residencial" value="<?php echo $objTemplate[0]->getTelefoneResidencial(); ?>" class="form-control" onkeypress="return mascara(event, this, '(##)#####-####');" maxlength="14">
                    </div>
                    <div class="form-group">
                        <label class="control-label">E-mail</label>
                        <input type="text" id="email" name="email" value="<?php echo $objTemplate[0]->getEmail(); ?>" class="form-control" onkeyup="this.value = this.value.toLowerCase();" >
                    </div>
                    <div class="form-group">     
                        <label class="control-label">Pais</label>     
                        <select id="pais" name="pais" class="mgs_alerta form-control" >
                            <?php
                            try {
                                $controladorPais = new ControladorPais();
                                $objPais = $controladorPais->listarPais();
                            } catch (Exception $e) {
                                
                            }
                            ?>                                      
                            <option value="">Selecione...</option>
                            <?php
                            foreach ($objPais as $pais) {
                                if ($pais->getId() == $objTemplate[0]->getPais()->getId()) {
                                    ?><option value="<?php echo $pais->getId() ?>" selected="selected"><?php echo $pais->getNome(); ?></option><?php
                                } else {
                                    ?><option value="<?php echo $pais->getId() ?>"><?php echo $pais->getNome(); ?></option><?php
                                }
                            }
                            ?>                                 
                        </select>
                    </div> 

                  </form>
                </div>
                <div class="tile-footer">
                  <button class="btn btn-primary formCadastro" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Salvar</button>
                  &nbsp;&nbsp;&nbsp;<a class="btn btn-secondary buttonCadastro" href="#" funcao="telaListarTemplate" controlador="ControladorTemplate" retorno="div_central" ><i class="fa fa-fw fa-lg fa-times-circle"></i>Voltar</a>
                </div>
              </div>
            </div>
          </div>
          <script src="js/lib.js"></script>
        <?php
    }

    public function telaVisualizarTemplate($objTemplate) {
        ?>
          <div class="app-title">
            <div>
              <h1><i class="fa fa-dashboard"></i> Template </h1>              
            </div>
            <ul class="app-breadcrumb breadcrumb">
              <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
              <li class="breadcrumb-item">Cadastros</li>
              <li class="breadcrumb-item"><a href="#">Template </a></li>
              <li class="breadcrumb-item active"><a href="#">Visualizar </a></li>
            </ul>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <h3 class="tile-title">Formulário</h3>
                <div class="tile-body">

                <input type="hidden" name="arquivo" id="arquivo" value="<?php echo $objTemplate[0]->getArquivo(); ?>" />    
                <div class="form-group">
                    <label class="control-label">Imagem Largura Máxima: 640px</label>&nbsp;&nbsp;
                    <?php //echo $objTemplate[0]->getImagem();
                    if ($objTemplate[0]->getImagem()) {
                        $imagem = "./imagens/template/thumbnail" . $objTemplate[0]->getImagem();
                    } else {
                        $imagem = "./img/imagemPadrao.jpg";
                    }
                    ?>   
                    <span name="imagemLink" id="<?php echo $imagem; ?>" title="Imagem" >
                        <img name="imagemAtual" src="<?php echo $imagem; ?>" border="0" />
                    </span>
                </div>             
                <div class="form-group">
                    <label class="control-label">Arquivo Tamanho Máximo: 2MB</label>
                    <span name="arquivoAtual" onClick="fnAbreArquivo('arquivo', './arquivos/template/')" style="<?php echo ($objTemplate[0]->getArquivo()) ? 'cursor: pointer; text-decoration: underline;' : '' ?>">
                        <?php
                        if ($objTemplate[0]->getArquivo()) {
                            echo $objTemplate[0]->getArquivo();
                        } else {
                            ?>Adicione um arquivo clicando no <img src="./img/img_upload.png" border="0" style="float:none;margin:0;width: 20px;" /><?php
                        }
                        ?>                                                    
                    </span>
                </div>  
                <form action="#" method="post" id="formCadastro" class="">
                    <div class="form-group">
                        <label class="control-label">Nome *</label>
                        <input type="text" disabled="true" onkeyup="this.value = this.value.toUpperCase();" id="nome" name="nome" value="<?php echo $objTemplate[0]->getNome(); ?>" class="form-control mgs_alerta" >
                    </div>
                    <div class="form-group">
                        <label class="control-label">Sexo *</label>
                        <?php
                        if ($objTemplate[0]->getSexo() == "M") {
                            $macho = 'checked="checked"';
                            $femia = '';
                        } elseif ($objTemplate[0]->getSexo() == "F") {
                            $macho = '';
                            $femia = 'checked="checked"';
                        }
                        ?>
                        <input type="radio" disabled="true" name="sexo" <?php echo $macho; ?> value="M"/>
                        Masculino
                        <input type="radio" disabled="true" name="sexo" <?php echo $femia; ?> value="F" />
                        Feminino                            
                    </div>
                    <div class="form-group">
                        <label class="control-label">Profissão</label>                    
                        <textarea id="profissao" name="profissao" disabled="true"  value="<?php echo $objTemplate[0]->getProfissao(); ?>" class="form-control" ></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Faixa Salarial R$ </label>
                        <input type="text" id="faixa_salarial" disabled="true" name="faixa_salarial" value="<?php echo valorMonetario($objTemplate[0]->getFaixaSalarial(), "2"); ?>" class="maskMoney form-control"  > 
                    </div>
                    <div class="form-group">
                        <label class="control-label">Data de Nascimento</label>
                        <input type="text" id="data_nascimento" disabled="true" name="data_nascimento" value="<?php echo ($objTemplate[0]->getDataNascimento() != "0000-00-00") ? recuperaData($objTemplate[0]->getDataNascimento()) : ""; ?>" class="data form-control" onkeypress="return mascara(event, this, '##/##/####');" maxlength="10" >
                    </div>
                    <div class="form-group">
                        <label class="control-label">CPF</label>
                        <input type="text" id="cpf" disabled="true" name="cpf" value="<?php echo $objTemplate[0]->getCpf(); ?>" class="form-control" onkeypress="return mascara(event, this, '###.###.###-##');" maxlength="14" >
                    </div>
                    <div class="form-group">
                        <label class="control-label">Logradouro</label>
                        <input type="text" disabled="true" onkeyup="this.value = this.value.toUpperCase();" id="logradouro" name="logradouro" value="<?php echo $objTemplate[0]->getLogradouro(); ?>" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label class="control-label">Número</label>
                        <input type="text" id="numero" name="numero" disabled="true" value="<?php echo $objTemplate[0]->getNumero(); ?>" class="form-control" onkeypress="return mascara(event, this, '#');" maxlength="6">
                    </div>
                    <div class="form-group">
                        <label class="control-label">CEP</label>
                        <input type="text" id="cep" name="cep" disabled="true" value="<?php echo $objTemplate[0]->getCep(); ?>" class="form-control" onkeypress="return mascara(event, this, '#####-###');" maxlength="9">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Estado</label>
                        <select id="estado" name="estado" value="" class="form-control" disabled="true">
                            <option value="">Selecione...</option>
                            <?php echo montaSelectEstados($objTemplate[0]->getEstado()); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Telefone Residencial</label>
                        <input type="text" id="telefone_residencial" name="telefone_residencial" disabled="true" value="<?php echo $objTemplate[0]->getTelefoneResidencial(); ?>" class="form-control" onkeypress="return mascara(event, this, '(##)#####-####');" maxlength="14">
                    </div>
                    <div class="form-group">
                        <label class="control-label">E-mail</label>
                        <input type="text" id="email" name="email" value="<?php echo $objTemplate[0]->getEmail(); ?>" disabled="true" class="form-control" onkeyup="this.value = this.value.toLowerCase();" >
                    </div>
                    <div class="form-group">     
                        <label class="control-label">Pais</label>     
                        <select id="pais" name="pais" class="mgs_alerta form-control" disabled="true" >
                            <?php
                            try {
                                $controladorPais = new ControladorPais();
                                $objPais = $controladorPais->listarPais();
                            } catch (Exception $e) {
                                
                            }
                            ?>                                      
                            <option value="">Selecione...</option>
                            <?php
                            foreach ($objPais as $pais) {
                                if ($pais->getId() == $objTemplate[0]->getPais()->getId()) {
                                    ?><option value="<?php echo $pais->getId() ?>" selected="selected"><?php echo $pais->getNome(); ?></option><?php
                                } else {
                                    ?><option value="<?php echo $pais->getId() ?>"><?php echo $pais->getNome(); ?></option><?php
                                }
                            }
                            ?>                                 
                        </select>
                    </div> 

                  </form>
                </div>
                <div class="tile-footer">
                  <a class="btn btn-secondary buttonCadastro" href="#" funcao="telaListarTemplate" controlador="ControladorTemplate" retorno="div_central" ><i class="fa fa-fw fa-lg fa-times-circle"></i>Voltar</a>
                </div>
              </div>
            </div>
          </div>
          <script src="js/lib.js"></script>

        <!--script src="js/popup-upload.js" type="text/javascript"></script>
        <script src="js/mascara.js" type="text/javascript"></script>
        <script src="js/jquery-ui/jquery.ui.datepicker.min.js" type="text/javascript"></script>
        <script type="text/javascript">
                        //$(document).ready(function () {
                        $(".maskMoney").maskMoney();
                        setDatePicker('data_nascimento');
                        //});
        </script>
        <header><h3 class="tabs_involved">Visualizar Template</h3>
            <ul class="tabs">
                <li><a href="#" funcao="telaListarTemplate" controlador="ControladorTemplate" retorno="div_central" class="buttonCadastro" >Voltar</a></li>            
            </ul>
        </header>
        <div class="module_content">
            <form action="#" method="post" id="formCadastro" class="">
                <input type="hidden" name="arquivo" id="arquivo" value="<?php echo $objTemplate[0]->getArquivo(); ?>" />    
                <fieldset>
                    <label>Imagem Largura Máxima: 640px</label>&nbsp;&nbsp;
                    <?php
                    if ($objTemplate[0]->getImagem()) {
                        $imagem = "./imagens/template/thumbnail" . $objTemplate[0]->getImagem();
                    } else {
                        $imagem = "./img/imagemPadrao.jpg";
                    }
                    ?>	 
                    <span name="imagemLink" id="<?php echo $imagem; ?>" title="Imagem" >
                        <img name="imagemAtual" src="<?php echo $imagem; ?>" border="0" />
                    </span>
                </fieldset>  			
                <fieldset>
                    <label>Arquivo Tamanho Máximo: 2MB</label>
                    <span name="arquivoAtual" onClick="fnAbreArquivo('arquivo', './arquivos/template/')" style="<?php echo ($objTemplate[0]->getArquivo()) ? 'cursor: pointer; text-decoration: underline;' : '' ?>">
                        <?php
                        if ($objTemplate[0]->getArquivo()) {
                            echo $objTemplate[0]->getArquivo();
                        } else {
                            ?>Adicione um arquivo clicando no <img src="./img/img_upload.png" border="0" style="float:none;margin:0;width: 20px;" /><?php
                        }
                        ?>                                                    
                    </span>
                </fieldset>            
                <fieldset>
                    <label>Nome *</label>
                    <?php echo $objTemplate[0]->getNome(); ?>
                </fieldset>
                <fieldset>
                    <label>Sexo *</label>
                    <?php echo retornarSexo($objTemplate[0]->getSexo()); ?>	
                </fieldset>
                <fieldset>
                    <label>Estado Civil</label>
                    <?php echo recuperarEstadoCivil($objTemplate[0]->getEstadoCivil()); ?>         									
                </fieldset>
                <fieldset>
                    <label>Profissão</label>
                    <?php echo $objTemplate[0]->getProfissao(); ?>
                </fieldset>
                <fieldset>
                    <label>Faixa Salarial</label>
                    <?php echo valorMonetario($objTemplate[0]->getFaixaSalarial(), "2"); ?>
                </fieldset>
                <fieldset>
                    <label>Data de Nascimento</label>
                    <?php echo ($objTemplate[0]->getDataNascimento() != "0000-00-00") ? recuperaData($objTemplate[0]->getDataNascimento()) : ""; ?>
                </fieldset>
                <fieldset>
                    <label>CPF</label>
                    <?php echo $objTemplate[0]->getCpf(); ?>
                </fieldset>
                <fieldset>
                    <label>Identidade</label>
                    <?php echo $objTemplate[0]->getIdentidade(); ?>
                </fieldset>
                <fieldset>
                    <label>Logradouro</label>
                    <?php echo $objTemplate[0]->getLogradouro(); ?>
                </fieldset>
                <fieldset>
                    <label>Número</label>
                    <?php echo $objTemplate[0]->getNumero(); ?>
                </fieldset>
                <fieldset>
                    <label>Complemento</label>
                    <?php echo $objTemplate[0]->getComplemento(); ?>
                </fieldset>
                <fieldset>
                    <label>Bairro</label>
                    <?php echo $objTemplate[0]->getBairro(); ?>
                </fieldset>
                <fieldset>
                    <label>Cidade</label>
                    <?php echo $objTemplate[0]->getCidade(); ?>
                </fieldset>
                <fieldset>
                    <label>CEP</label>
                    <?php echo $objTemplate[0]->getCep(); ?>
                </fieldset>
                <fieldset>
                    <label>Estado</label>
                    <?php echo $objTemplate[0]->getEstado(); ?>
                </fieldset>
                <fieldset>
                    <label>Telefone Residencial</label>
                    <?php echo $objTemplate[0]->getTelefoneResidencial(); ?>
                </fieldset>
                <fieldset>
                    <label>Telefone Celular</label>
                    <?php echo $objTemplate[0]->getTelefoneCelular(); ?>
                </fieldset>
                <fieldset>
                    <label>Telefone Comercial</label>
                    <?php echo $objTemplate[0]->getTelefoneComercial(); ?>
                </fieldset>
                <fieldset>
                    <label>E-mail</label>
                    <?php echo $objTemplate[0]->getEmail(); ?>
                </fieldset>
                <fieldset>
                    <label>Pais</label>
                    <?php echo $objTemplate[0]->getPais()->getNome(); ?>                                 
                </fieldset>			
                <div class="clear"></div>            
            </form>
        </div-->	        
        <?php
    }

}
?>