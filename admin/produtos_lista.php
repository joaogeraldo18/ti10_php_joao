<?php
    include("../Connections/conn_produtos.php");
    $consulta   =   "SELECT * FROM tbprodutos
                     ORDER BY descri_produto ASC";
    $lista  =   $conn_produtos->query($consulta);
    $row    =   $lista->fetch_assoc();
    $totalRows  =   ($lista)->num_rows;
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title>Produtos - Lista</title>
        <meta charset="utf-8">
    </head>
    <body>
        <main>
            <h1>Lista de Produtos</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TIPO</th>
                        <th>DESTAQUE</th>
                        <th>DESCRIÇÃO</th>
                        <th>RESUMO</th>
                        <th>VALOR</th>
                        <th>IMAGEM</th>
                        <th>ADICIONAR</th>
                    </tr>
                </thead>
                <tbody>
                    <?php do { ?>
                    <tr>
                        <td><?php echo $row['id_produto'];?></td>
                        <td><?php echo $row['id_tipo_produto'];?></td>
                        <td><?php echo $row['destaque_produto'];?></td>
                        <td><?php echo $row['descri_produto'];?></td>
                        <td><?php echo $row['resumo_produto'];?></td>
                        <td><?php echo $row['valor_produto'];?></td>
                        <td><?php echo $row['imagem_produto'];?></td>
                        <td>ALTERAR | EXCLUIR</td>
                    </tr>
                    <?php } while ($row = $lista->fetch_assoc());?>
                </tbody>
            </table>
        </main>
    </body>
</html>
<?php mysqli_free_result($lista);?>