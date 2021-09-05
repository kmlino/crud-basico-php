<div class="container">
    <h2 style="text-align: center;">Cadastro de Produtos</h2><br>
    <form action="?i=adicionar" method="post">
        <div class="row">
            <div class="col-12">
                <label for="desc" class="form-label">Descrição:</label>
                <input type="text" class="form-control bg-light" id="desc" name="desc" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <label for="val" class="form-label">Valor:</label>
                <input type="text" class="form-control bg-light" id="val" name="val" required> 
            </div>
            <div class="col-lg-6 col-sm-12 gy-2">
                <label for="disp">Disponível:</label>
                <small id="selecHelp" class="form-text text-mute"> *Se não preencher, o valor 'Não' será assumido como padrão</small>
                <select class="form-select form-select-sm bg-light" aria-label=".form-select-sm example" id="disp" name="disp" aria-describedby="selecHelp">
                    <option selected value="N">Selecionar</option>
                    <option value="S">Sim</option>
                    <option value="N">Não</option>
                </select>            
            </div> 
        </div>
        <div class="row">
            <div class="col-6 gy-4">
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
            <div class="col-6 gy-4">
                <button class="btn btn-danger">
                    <a href="?i=home" class="text-decoration-none text-white">Cancelar</a>
                </button>
            </div>
        </div>
    </form>
</div>
