<div class="upload-container">
    <h4>Upload de Apresentação</h4>
    
    <form id="upload-form" action="{{ route('ideasun.equipe.apresentacao.enviar') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="equipe_id" value="{{ $equipe->id }}">
        
        <div id="drop-area" class="upload-section">
            <i class="fa fa-cloud-upload"></i>
            <h4>Arraste seu arquivo aqui</h4>
            <p>ou</p>
            <label class="file-label">
                Selecionar Arquivo
                <input type="file" name="apresentacao" id="apresentacao-file" class="file-input" accept=".pdf,.ppt,.pptx">
            </label>
            <div id="file-info" class="file-info" style="display: none;">
                <p><strong>Nome:</strong> <span id="file-name"></span></p>
                <p><strong>Tamanho:</strong> <span id="file-size"></span></p>
                <div class="text-danger text-size-warning" style="display: none;">
                    O arquivo é muito grande (limite: 10MB). Por favor, selecione um arquivo menor.
                </div>
            </div>
        </div>
        
        <div class="upload-info mt-3">
            <div class="alert alert-info">
                <i class="fa fa-info-circle"></i>
                Importante: O tamanho máximo de arquivo permitido é <strong>10MB</strong>. 
                Formatos aceitos: PDF, PPT, PPTX.
            </div>
            
            <button type="submit" class="btn btn-primary btn-lg mt-3" id="submit-button">
                <i class="fa fa-upload"></i> Enviar Apresentação
            </button>
        </div>
    </form>
</div>