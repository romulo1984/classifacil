(function(){
    $('#switch-cpf-cnpj').change(function(){
        var selected = $(this).val();
        if(selected == 'cpf'){
            $('.form-cpf').show();
            $('.form-cnpj').hide();
        }
        if(selected == 'cnpj'){
            $('.form-cnpj').show();
            $('.form-cpf').hide();
        }
    });
})();