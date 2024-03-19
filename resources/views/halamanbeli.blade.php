@include('components/navbar')
<br>

{{-- buttons group --}}
<section class="btn-group mt-5 d-flex flex-row justify-content-lg-between ps-3 pe-3 mb-4">
    <a href="#!" class="btn btn-primary active" data-mdb-ripple-init>Kereta Api</a>
    <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Pesawat</a>
    <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Hotel</a>
    <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Bus & Travel</a>
    <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Sewa Mobil</a>
    <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" aria-expanded="false"
            data-mdb-ripple-init data-mdb-dropdown-init>
            Lainnya
        </button>
        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <li><a class="dropdown-item" href="#">To Do</a></li>
            <li><a class="dropdown-item" href="#">Sewa Motor</a></li>
        </ul>
    </div>
</section>
{{-- buttons group end --}}


<section
    style="background-image: url(https://images.unsplash.com/photo-1527295110-5145f6b148d0?q=80&w=2631&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
    background-size:cover;width:100%"
    class="pt-3 pb-3 d-flex ps-5 pe-auto d-flex justify-content-around">
    {{-- form --}}
    <div class=" col-4 shadow-lg p-3 pt-4 mb-4 mt-4 ms-5 bg-body rounded ">
        <form class="">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Example1" class="form-control" />
                        <label class="form-label" for="form3Example1">Asal</label>
                    </div>
                </div>
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Example2" class="form-control" />
                        <label class="form-label" for="form3Example2">Tujuan</label>
                    </div>
                </div>
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="date" id="form3Example3" class="form-control" />
                <label class="form-label" for="form3Example3">Tanggal Berangkat</label>
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="date" id="form3Example4" class="form-control" />
                <label class="form-label" for="form3Example4">Tanggal Pulang (Opsional)</label>
            </div>

            {{-- jumlah orang --}}
            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="number" id="form3Example1" class="form-control" />
                        <label class="form-label" for="form3Example1">Dewasa</label>
                    </div>
                </div>
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="number" id="form3Example2" class="form-control" />
                        <label class="form-label" for="form3Example2">Balita</label>
                    </div>
                </div>
            </div>

            <!-- Submit button -->
            <button data-mdb-ripple-init type="button" class="btn btn-warning btn-block mb-4">
                Cari Tiket
                <i class="fa-solid fa-magnifying-glass ms-1"></i>
            </button>

        </form>
    </div>
    <h2 class="text-center my-auto text-white col-5 align-middle" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5)">
        <i>
            “Hidup itu bukan soal menemukan diri Anda
            sendiri, hidup itu membuat diri Anda sendiri.”
        </i>
        <br>
        -George Bernard Shaw.
    </h2>
    <br>
</section>
{{-- form end --}}

@include('components/footer')
