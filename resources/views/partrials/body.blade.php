<style>
body {
font-family: Arial, Helvetica, sans-serif;
margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: lightblue;
  color: black;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>

<div class="about-section">
    <h1>About Us Page</h1>
    <p>Some text about who we are and what we do.</p>
    <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

  <div class="card-group mt-3" style="text-align: center">
   <div class="column">
        <div class="card">
            <img src="{{ asset('images/orang.jpg') }}" alt="Image" class="img-fluid w-30 rounded-circle mx-auto mb-4">
            <div class="card-body">
                <div class="container">
                    <h2>Jane Doe</h2>
                    <p class="title">Guru Olahraga</p>
                    <p>"Some text that describes me lorem ipsum ipsum lorem"</p>
                  </div>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="card">
            <img src="{{ asset('images/orang.jpg') }}" alt="Image" class="img-fluid w-30 rounded-circle mx-auto mb-4">
            <div class="card-body">
                <div class="container">
                    <h2>Jane Doe</h2>
                    <p class="title">Guru Bahasa Indonesia</p>
                    <p>"Some text that describes me lorem ipsum ipsum lorem"</p>
                  </div>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="card">
            <img src="{{ asset('images/orang.jpg') }}" alt="Image" class="img-fluid w-30 rounded-circle mx-auto mb-4">
            <div class="card-body">
                <div class="container">
                    <h2>Jane Doe</h2>
                    <p class="title">Guru Matematika</p>
                    <p>"Some text that describes me lorem ipsum ipsum lorem"</p>
                  </div>
            </div>
        </div>
    </div>
  </div>
</div>
  {{-- <h2 style="text-align:center; font-family:georgia;;">Alumni</h2>
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="{{ asset('images/logo.ico') }}" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
        <div class="container">
          <h2>Jane Doe</h2>
          <p class="title">CEO & Founder</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>jane@example.com</p>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="card">
        <img src="{{ asset('images/logo.ico') }}" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
        <div class="container">
          <h2>Mike Ross</h2>
          <p class="title">Art Director</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>mike@example.com</p>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="card">
        <img src="{{ asset('images/logo.ico') }}" alt="Image" class=" w-50 h-30 rounded-circle mx-auto mb-4">
        <div class="container">
          <h2>John Doe</h2>
          <p class="title">Designer</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>john@example.com</p>
        </div>
      </div>
    </div>
  </div> --}}


{{-- <div class="container mt-3">
    <div class="row">
        <div class="col-lg-8">
            <div class="card-header">
                <h3>ARTICLE</h3>
            </div>
            <div class="card-body">
                <div class="card-text">
                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus asperiores officia perspiciatis, 
                        sunt dolores ipsam porro, amet ad totam veniam provident temporibus eveniet error iste aut laborum saepe id velit.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora modi vero velit fugit magnam, ipsum nisi eligendi 
                        aliquam dolorem nihil nobis neque aliquid animi minus! A, dolorum veniam fugit ipsam soluta enim iusto sed saepe porro 
                        laborum iste. Fuga fugit ut dolor repudiandae? Odio nisi similique magnam eos animi ab, laborum repudiandae ipsam ut voluptates. 
                        Corrupti saepe inventore quibusdam iste vel aut temporibus id nulla aperiam deleniti, dolores quos voluptates voluptatum omnis sunt 
                        harum minima porro nam totam ea in ratione maxime amet. Architecto unde dicta quis voluptate consequatur ratione incidunt, quam ad facere omnis,
                        dolorem ipsam perferendis iste neque.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus asperiores officia perspiciatis, 
                        sunt dolores ipsam porro, amet ad totam veniam provident temporibus eveniet error iste aut laborum saepe id velit.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora modi vero velit fugit magnam, ipsum nisi eligendi 
                        aliquam dolorem nihil nobis neque aliquid animi minus! A, dolorum veniam fugit ipsam soluta enim iusto sed saepe porro 
                        laborum iste. Fuga fugit ut dolor repudiandae? Odio nisi similique magnam eos animi ab, laborum repudiandae ipsam ut voluptates. 
                        Corrupti saepe inventore quibusdam iste vel aut temporibus id nulla aperiam deleniti, dolores quos voluptates voluptatum omnis sunt 
                        harum minima porro nam totam ea in ratione maxime amet. Architecto unde dicta quis voluptate consequatur ratione incidunt, quam ad facere omnis,
                        dolorem ipsam perferendis iste neque.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-header">
                Statistik Pengunjung
            </div>
            <div class="card-body">
                <p> 
                    Contoh
                </p>
            </div>
            <div class="card-header">
                Artikel?
            </div>
            <div class="card-body">
                <ul>
                    <li>
                        <a href="">Artikel 1</a>
                    </li>
                    <li>
                        <a href="">Artikel 2</a>
                    </li>
                    <li>
                        <a href="">Artikel 3</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div> --}}