<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- VueJS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <link rel="stylesheet" href="css/style.css" />
    <title>PHP Dischi JSON</title>
</head>

<body style="background-color: #1d2d3c;">
    <div id="app">
        <header style="background-color: #06131f; height: 65px;">
            <div class="container d-flex align-items-center h-100">
                <i class="fa-brands fa-spotify" style="font-size: 45px; color: green;"></i>
            </div>
        </header>

        <main class="overflow-auto">
            <div class="container">
                <div class="row row-cols-3 px-5">
                    <div v-for="disco in dischi" class="col p-4">
                        <div class="card text-center" style="background-color: #112030;">
                            <img :src="disco.poster" class="pt-4 px-5" alt="Cover">
                            <div class="card-body text-white">
                                <h5 class="card-title" style="height: 48px;"> {{ disco.title }} </h5>
                                <p> {{ disco.author }}  ({{ disco.genre }})</p>
                                <h5> {{ disco.year }} </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>

    <script src="js/store.js"></script>
</body>

</html>