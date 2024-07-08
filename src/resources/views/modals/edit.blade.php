<div class="modal fade" id="cliente" tabindex="-1" role="dialog" aria-labelledby="cliente" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="salvaCliente">
                    @csrf
                    <input type="hidden" id="editClienteId" name="cliente_id">
                    <div class="form-group">
                        <label for="editNome">Nome</label>
                        <input type="text" class="form-control" id="editNome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="editEmail">Email</label>
                        <input type="email" class="form-control" id="editEmail" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="editTelefone">Telefone</label>
                        <input type="text" class="form-control telefone_in" id="editTelefone" name="telefone" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary salva-cliente">Salvar mudanças</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
