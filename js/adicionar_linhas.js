<script>
        (function($) { 
        AddTableRow = function() { 
            var newRow = $("<tr>");
            var cols = ""; 
            cols += "<td class='align-middle'><?php echo $_SESSION['pos' . 0]['imagem']?></td>";
            cols += "<td class='align-middle'><?php echo $_SESSION['pos' . 0]['produto']?></td>";
            cols += "<td class='align-middle'><?php echo $_SESSION['pos' . 0]['preco']?></td>";
            cols += "<td class='align-middle'><?php echo $_SESSION['pos' . 0]['quantidade']?></td>";
            cols += "<td class='align-middle'><?php echo $_SESSION['pos' . 0]['imagem']?></td>";
            cols += "<td class='align-middle'><?php echo $_SESSION['pos' . 0]['entrega']?></td>";
            cols += "<td class='align-middle'><?php echo $_SESSION['pos' . 0]['total']?></td>";
            cols += '<td>'; 
            cols += '<a href="#" onclick="remove(this)"><img src="imagens/remover.png"></a>';
            cols += '</td>'; 
            newRow.append(cols); 
            $("#itens_carrinho").append(newRow); 
            return false; };
        })(jQuery);
    </script>