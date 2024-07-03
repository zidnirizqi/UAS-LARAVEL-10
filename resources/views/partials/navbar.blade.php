<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container d-flex justify-content-center">
        <a class="navbar-brand" href="/home">Logistik</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "home") ? 'active' : '' }}" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "dataKriteria") ? 'active' : '' }}" href="/kriteria/dataKriteria"> Data Kriteria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "dataAlternatif") ? 'active' : '' }}" href="/alternatif/dataAlternatif"> Data Alternatif</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "hasil") ? 'active' : '' }}" href="/hasilHitung/hasil"> Hasil Perhitungan </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
    </div>
</nav>

<style>
    .navbar .container {
    display: flex;
    justify-content: center;
}

.navbar-nav {
    flex-direction: row;
}

</style>