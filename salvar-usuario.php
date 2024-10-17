<?php
     switch (@$_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];
            $endereço = $_POST["endereco"];
        
            $sql = "INSERT INTO cliente (nome, telefone, endereço) VALUES ('{$nome}', '{$telefone}', '{$endereço}')";
 
            $res = $conn->query($sql);

            if ($res==true){
                print"<script>alert('Cliente cadastrado com sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
            break;
 
        case 'editar':
            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];
            $endereço = $_POST["endereco"];

            $sql = "UPDATE cliente SET
                        nome='{$nome}',
                        telefone='{$telefone}',
                        endereço='{$endereço}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res==true){
                print"<script>alert('Editado com sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            }else{
                print"<script>alert('Não foi possível editar');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM cliente WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res==true){
                print"<script>alert('Excluido com sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            }else{
                print"<script>alert('Não foi possível excluir');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
            break;
        }