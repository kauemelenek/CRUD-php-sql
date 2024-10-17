<h1> Editar Cliente <h1>
<?php
    $sql ="SELECT * FROM cliente WHERE id =".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>



<form action="?page=salvar" method="POST">
    <input type ="hidden" name="acao" value="editar">
    <input type ="hidden" name="id" value="<?php print $row->id; ?>">
    <div class ="mb-3">
        <label>Nome</label>
        <input type = "text" name = "nome" value = "<?php print $row->nome; ?>" class= "form-control">
</div>
<div class ="mb-3">
        <label>Telefone</label>
        <input type = "telefone" name = "telefone" value = "<?php print $row->telefone; ?>" class= "form-control">
</div>
<div class ="mb-3">
        <label>Endereço</label>
        <input type = "text" name = "endereco" value = "<?php print $row->endereço; ?>" class= "form-control">
</div>
<div class="mb-3">
    <button type ="submit" class = "btn btn-primary">Enviar</button>
</div>