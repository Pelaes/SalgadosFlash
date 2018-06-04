$(function(){
    $('#login').submit(function(){
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
                if(data == "FalhaLogin"){
                    var titulo = document.getElementById("teste");
                    titulo.innerText = "Usuário ou senha incorretos!";
                    $('#vazioajax').modal('show');
                }
                if(data == "Sucesso"){
                    window.location.replace("cardapio.php");
                }
            },
        });
        return false;
    });
});

function fn_Erro(){
    var nome = document.getElementById("txtNome").value;
    if (nome == "") {
        var titulo = document.getElementById("teste");
        titulo.innerText = "Campo senha vazio";
        $('#vazioajax').modal('show');
    }
    return false;
};