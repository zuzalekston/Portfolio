<?php include('basic.php'); 
?>
<body>
    <div id="container">
        <div class="nav">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Zuzanna Lekston</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beauty</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Fashion</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Plener</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <a class="nav-link" href="about.php">O mnie</a>
                    </span>
                    <span class="navbar-text">
                        <a class="nav-link" href="kontakt.php">Kontakt</a>
                    </span>
                    </div>
                </div>
            </nav>
        </div>
        <div class="content">
            <div id="form">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Adres e-mail</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Wiadomość</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button">WYŚLIJ</button>
                
                </div>
            </div>
        </div>
    </div>

</body>
</html>