$("#setor").on("change",function() {
    
    var setor = $(this).val(); // PEGA O VALOR DO ID DO CAMPO #setor
    
    $('#cargo').children('option:not(:first)').remove(); //LIMPA A LISTA PARA OS NOVOS VALORES

    $.ajax({
        method: 'POST',
        data: {setor: setor},
        url: '../funcao/cargoDoSetor.php', // LOCAL DA BUSCA DA LISTA NO BANCO
        success: function(retorno){
            var cargo = JSON.parse(retorno); // RETORNA A LISTA(CASO NÃO FUNCIONE, TENTE REMOVER O "JSON.parse")
            for(i = 0; i < cargo.length; i++) {
                $('#cargo').append('<option value="'+cargo[i].id+'" >'+cargo[i].nomeCargo+'</option>')  
            }      
        }
    });
});