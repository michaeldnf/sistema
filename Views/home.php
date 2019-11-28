        <h3>Página inicial</h3>
        <p>Esta é página principal que é chamado automaticamente.</p>
        <table border="1">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Usuário</td>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($viewData as $dados){ ?>
                <tr>
                    <td><?php echo $dados['id_usuarios']; ?></td>
                    <td><?php echo $dados['usuario']; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>