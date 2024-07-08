$(document).ready(function(){
    $('.telefone').text(function(index, text) {
        return text.length === 11 ?
            text.replace(/(\d{2})(\d{5})(\d{4})/, "($1) $2-$3") :
            text.replace(/(\d{2})(\d{4})(\d{4})/, "($1) $2-$3");
    });
});