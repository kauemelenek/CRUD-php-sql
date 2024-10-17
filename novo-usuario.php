<h1 class = "mb-4"> Novo Cliente <h1>
<form action="?page=salvar" method="POST">
    <input type ="hidden" name="acao" value="cadastrar">
    <div class ="mb-3 fs-4">
        <label>Nome</label>
        <input type = "text" name = "nome" class= "form-control">
</div>
<div class ="mb-3 fs-4">
        <label>Telefone</label>
        <input type = "telefone" name = "telefone" class= "form-control">
</div>
<div class ="mb-3 fs-4">
        <label>Endereço</label>
        <input type = "text" name = "endereco" class= "form-control">
</div>
<div class="mb-3 fs-4">
    <button type ="submit" class = "btn btn-primary">Enviar</button>
</div>