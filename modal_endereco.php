<div class="modal fade" id="cadastro" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title d-none d-xl-block ml-auto mr-auto">Complete seus dados de entrega</h3>
                <h5 class="modal-title d-xl-none ml-auto mr-auto">Complete seus dados de entrega</h5>
                <!--
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
                -->
            </div>
            <div class="modal-body">
                <form action="verifica_endereco.php" method="POST">
                    <center>
                        <div class="form-row">
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control form-control-lg" id="endereco" placeholder="Endereço" value="<?php echo $_SESSION['rua']?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-5">
                                <input type="text" class="form-control form-control-lg" id="bairro" placeholder="Bairro" value="<?php echo $_SESSION['bairro']?>">
                            </div>
                            <div class="form-group col-lg-5">
                                <input type="text" class="form-control form-control-lg" id="cidade" placeholder="Cidade" value="<?php echo $_SESSION['cidade']?>">
                            </div>
                            <div class="form-group col-lg-2">
                                <input type="text" class="form-control form-control-lg" id="UF" placeholder="UF" value="<?php echo $_SESSION['estado']?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-3">
                                <input type="text" class="form-control form-control-lg" id="numero" placeholder="Número" name="num">
                            </div>
                            <div class="form-group col-lg-9">
                                <input type="text" class="form-control form-control-lg" id="complemento" placeholder="Complemento">
                            </div>
                        </div>
                        <div class="form-row">
                            <!--
                            <div class="form-group col-lg-3">
                                <button class="btn btn-primary form-control btn-lg" type="button">Voltar</button>
                            </div>
                            -->
                            <div class="form-group col-lg-9 mr-auto ml-auto">
                                <button class="btn btn-primary form-control btn-lg" type="submit">BUSCAR</button>
                            </div>
                        </div>
                    </center>
                </form>
            </div>
        </div>
    </div>
</div>
