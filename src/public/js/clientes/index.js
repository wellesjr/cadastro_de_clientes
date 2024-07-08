$(document).ready(function () {
    $('.telefone').text(function (index, text) {
        return text.length === 11 ?
            text.replace(/(\d{2})(\d{5})(\d{4})/, "($1) $2-$3") :
            text.replace(/(\d{2})(\d{4})(\d{4})/, "($1) $2-$3");
    });

    // Abrir modal de edição
    $('.btn-edit').on('click', function () {
        let cliente = $(this).data('cliente');

        $('#editClienteId').val(cliente.id);
        $('#editNome').val(cliente.nome);
        $('#editEmail').val(cliente.email);
        $('#editTelefone').val(formatPhoneNumber(cliente.telefone));

        $('#editModal').modal('show');
    });

    $('.salva-cliente').click(function (e) { 
        $('#salvaCliente').submit(function (e) { 
            e.preventDefault();
            let id = $('#editClienteId').val();
            let url = 'editar/' + id;
            let method = 'PUT'
    
            if (id === '') {
                url = '/criar';
                method = 'POST';
            }
            $.ajax({
                url: url,
                method: method,
                data: $(this).serialize(),
                success: function (response) {
                    location.reload();
                },
            });
        });
    });

    // Abrir modal de exclusão
    $('.btn-delete').on('click', function () {
        let id = $(this).data('id');
        $('#deleteClienteId').val(id);
        $('#deleteModal').modal('show');
    });

    // Submeter formulário de exclusão
    $('#deleteForm').on('submit', function (event) {
        event.preventDefault();

        var id = $('#deleteClienteId').val();
        var url = '/excluir/' + id;

        $.ajax({
            url: url,
            method: 'DELETE',
            data: $(this).serialize(),
            success: function (response) {
                location.reload();
            },
        });
    });

    $('.telefone_in').on('change', function (e) { 
        e.preventDefault();
        let formataTelefone = $('#editTelefone').val();
        $('#editTelefone').val(formatPhoneNumber(formataTelefone));
    });

    $('#novoCliente').on('click', function (e) { 
        $('#editClienteId').val('');
        $('#editNome').val('');
        $('#editEmail').val('');
        $('#editTelefone').val('');
        $('#editModalLabel').text('Novo Cliente');
        $('.salva-cliente').text('Salvar');
        $('#editModal').modal('show');
    });
});

function formatPhoneNumber(phoneNumber) {
    return phoneNumber.length === 11 ?
        phoneNumber.replace(/(\d{2})(\d{5})(\d{4})/, "($1) $2-$3") :
        phoneNumber.replace(/(\d{2})(\d{4})(\d{4})/, "($1) $2-$3");
}