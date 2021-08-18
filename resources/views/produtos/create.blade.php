<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <title>Cadastrar um Novo Usuario</title>
    <style>
        body{
            text-align: center;
            font-family: "Courier 10 Pitch";
            background-color: #718096;


        }
        main{
            background-color: #a0aec0;
        }
        div{

        }
        h5{
            color: white;
        }


    </style>


</head>
<body>
<

    <br>
    <main class="container">
        <div class="">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-">Titulo da Aplicação</h1>
                <p class="lead my-3"></p>
                <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue...</a></p>
            </div>
        </div>


<form action="{{route('registrar.produto')}}" method="post">
    @csrf
    <label for="">Nome</label><br />
    <input type="text" name="nome"><br />
    <label for="">Custo</label><br />
    <input type="text" name="custo"><br />
    <label for="">Preço</label><br />
    <input type="text" name="preco"><br />
    <label for="">Quantidade</label><br />
    <input type="text" name="quantidade"><br />
    <br>
    <button>Salvar</button>
</form>



            <div class="row g-5">
                <div class="col-md-6">
                    <h2>Starter projects</h2>
                    <p>Ready to beyond the starter template? Check out these open source projects that you can quickly duplicate to a new GitHub repository.</p>
                    <ul class="icon-list">

                    </ul>
                </div>

                <div class="col-md-6">
                    <h2>Guides</h2>
                    <p>Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>
                    <ul class="icon-list">

                    </ul>
                </div>
            </div>
        </main>

        <footer class="pt-5 my-5 text-muted border-top">
            <h5>Created by the Robert team &middot; &copy; 2021</h5>
        </footer>
        </div>

</body>
</html>
