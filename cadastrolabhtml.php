<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="cadastro-lab.css">
    <title>Cadastro de laboratório</title>
</head>

<body>
<header>
        <nav class="navbar navbar-light bg-transparent ">
            <div class="container-fluid">
                <img src="img/logo-web.png" alt="logo" class="navbar-brand">
                <div class="menu">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">MENU</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"
                                        href="cadastro-usuario.php">USUÁRIO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cadastro-lab.php">LABORATÓRIO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="todasreservas.php">TODAS AS RESERVAS</a>
                                </li>
                            </ul>
                            <div class="icon-container me-2">
                        <a href="login.php">
                        <img src="img/sair.png" style="width: 24px; height: 24px;" alt="Botão de Sair">
                        </a>
                        <i class="bi bi-envelope"></i>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container mt-4">
            <div class="card p-3 mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5>Adicionar laboratório</h5>
                    <div>
                        <i class="bi bi-search"></i>
                        <i class="bi bi-pencil"></i>
                    </div>
                </div>
                <form action="cadastro-lab.php" method="POST">
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label for="id" class="form-label">N° do laboratório:</label>
                            <input type="text" class="form-control" id="numero" name="numero" required>
                        </div>
                        <div class="col-md-2">
                            <label for="softwares" class="form-label">Softwares:</label>
                            <div class="input-group">
                            <input type="text" class="form-control" id="softwares" name="softwares" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="num_computadores" class="form-label">Nº de computadores:</label>
                            <input type="text" class="form-control" id="num_computadores" name="num_computadores" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary" name="salvar">Salvar</button>
                </form>
            </div>
            <div class="card p-3">
                <h5>Laboratórios cadastrados</h5>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-warning">
                            <tr>
                                <th>Número</th>
                                <th>Softwares</th>
                                <th>Nº de computadores</th>
                                <th>Edição</th>
                                <th>Exclusão</th>
                            </tr>
                        </thead>
                        <tbody id="labs-list">
                            <?php include 'cadastrolab.php'; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    </main>
    <footer>
        <div class="rodape bottom bg-black bg-black">
            <p class="rod01 mx-auto" style="width: fit-content;">FACULDADES INTEGRADAS EINSTEIN DE LIMEIRA - FIEL
            </p>
            <p class="rod02 mx-auto" style="width: fit-content;">DESENVOLVIDO POR BBEL®</p>
        </div>
    </footer>
</body>

</html>