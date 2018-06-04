$(function(){
    $('#cadastro').submit(function(){
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data){
                if(data == "ErroNome"){
                    var titulo = document.getElementById("teste");
                    titulo.innerText = "Campo nome vazio!";
                    $('#vazioajax').modal('show');
                }
                if(data == "ErroEmail"){
                    var titulo = document.getElementById("teste");
                    titulo.innerText = "Campo email vazio!";
                    $('#vazioajax').modal('show');
                }
                if(data == "ErroSenha"){
                    var titulo = document.getElementById("teste");
                    titulo.innerText = "Campo senha vazio!";
                    $('#vazioajax').modal('show');
                }
                if(data == "ErroConf"){
                    var titulo = document.getElementById("teste");
                    titulo.innerText = "Confirme sua senha!";
                    $('#vazioajax').modal('show');
                }
                if(data == "ErroDDD"){
                    var titulo = document.getElementById("teste");
                    titulo.innerText = "Campo DDD vazio!";
                    $('#vazioajax').modal('show');
                }
                if(data == "ErroTel"){
                    var titulo = document.getElementById("teste");
                    titulo.innerText = "Campo telefone vazio!";
                    $('#vazioajax').modal('show');
                }
                if(data == "ErroTermo"){
                    var titulo = document.getElementById("teste");
                    titulo.innerText = "Leia e aceite os termos de uso!";
                    $('#vazioajax').modal('show');
                }
                if(data == "ErroConfere"){
                    var titulo = document.getElementById("teste");
                    titulo.innerText = "As senhas devem ser iguais!";
                    $('#vazioajax').modal('show');
                }
                if(data == "Sucesso"){
                    var titulo = document.getElementById("teste");
                    titulo.innerText = "Cadastro efetuado com sucesso!";
                    $('#vazioajax').modal('show');
                    setTimeout(function(){ location.reload(); }, 2500);
                }
            },
        });
        return false;
    });
});