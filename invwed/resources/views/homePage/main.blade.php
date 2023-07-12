@extends('homePage.layouts.template')

@section('mainPage')
    <section class="main">
        <main class="content">
            <h1>Menikah Mudah dengan <span>HIVITATION</span></h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, quasi.
            </p>
            <a href="/register" class="cta">Pesan Sekarang</a>
        </main>
    </section>

    {{-- about --}}
    <section class="about">
        <h2><span>Tentang</span> Kami</h2>
      <div class="row">
        <div class="about-img">
          <img src="img/tentang-kami.jpg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Kenapa Memilih produk Kami</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
            aliquam doloremque debitis dolore, distinctio aliquid!
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad facilis
            tempore quos non vitae voluptatum delectus quis animi repellat
            dolor!
          </p>
        </div>
      </div>
    </section>
@endsection