<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Template</title>
    </head>
    <body>
        <header class="cabecalho">
            <h1>Topo</h1>
            <a href="http://localhost/MVC2/sistema/home/index">Home</a>
            <a href="http://localhost/MVC2/sistema/home/produto">Produto</a>
            <hr>
        </header>

        <section class="conteudo-principal">
            <?php $this->loadViewInTemplate($view, $viewData); ?>
        </section>       
                
        <footer class="rodape">
            <hr>
            <h1>Rodape</h1>
        </footer>
    </body>
</html>