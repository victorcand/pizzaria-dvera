<main class="principal">

    <section class="container">
        <div class="main-center">

        <h1><?=TITLE?></h1>

            <form action="cadastrar.php" method="post">
                <div class="form-group">
                    <label for="pizza">Nome:</label>
                    <input type="text" name="pizza">
                </div>

                <div class="form-group">
                    <label for="preco">Preço:</label>
                    <input type="number" name="preco">
                </div>

                <div class="form-group">
                    <label for="preco">Descrição da Pizza:</label>
                    <textarea type="text" name="preco" rows="5"></textarea>
                </div>

                <div class="form-control">
                    <a href="index.php"><button class="btn-form btn-form-info" type="button">Voltar</button></a>
                    <button class="btn-form btn-form-success" type="submit">Cadastrar</button>
                </div>
                
            </form>

        </div>

    </section>


</main>