<h1 class = "mb-4" > Listar Clientes <h1>
<?php
    $sql = "SELECT * FROM cliente";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class = 'table table-hover table-striped table-bordered fs-5'>";
        print "<tr>";
        print "<th>id</th>";
        print "<th>nome</th>";
        print "<th>telefone</th>";
        print "<th>endereço</th>";
        print "<th>ações</th>";
        print "</tr>";
        while($row = $res-> fetch_object()){
            print "<tr>";
            print "<td>".$row->id. "</td>"; 
            print "<td>".$row->nome. "</td>"; 
            print "<td>".$row->telefone."</td>";
            print "<td>".$row->endereço."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."'\" class='btn btn-success'>Editar</button>

                    <button onclick=\"if(confirm('Tem certeza que deseja excluir este cliente?')) {location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                    </td>";
            print "</tr>";
        }
        print "<table>";

    } else {
        print"<p class='alert alert-danger'>Não foram econtrados resultados!</p>";
    }