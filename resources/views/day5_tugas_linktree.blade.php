<!doctype html>
<html lang="id">

<head>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PT PLN Indonesia Renewables</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- SCRIPT -->
  <script>
  function showme () {
    Swal.fire({
      title: "Halo!",
      text: "Selamat Siang!",
      icon: "success"
    });
    
    console.log("Ini baris 14, Sudah sampai disini");
    a = 18+10;
    console.log( "Hasil Penjumlahan : " + a);
    a = 1 * 2 * 3;
    console.log( "Hasil Perkalian : " * c);
    }

  function changeText(){
    const element = document.getElementById("Intro");
    element.innerHTML = "WEB PLNNNN";
    }

  function changeStyle (){
    const element = document.getElementById("tombol");
    element.style.color = "red";
    element.style.background = "yellow";
  }
  </script>

  <!-- CSS -->
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    background: #9e9e9e;
    min-height: 100vh;
    }

    .c-wrapper {
    max-width: 32rem;
    margin: 0 auto;
    padding: 2rem 1rem;
    }

    .c-card {
    position: relative;
    background: #f2f2ee;
    border-radius: 1.5rem;
    padding: 1.5rem 1.2rem;
    overflow: hidden;
    }

    .c-overlay {
    position: absolute;
    inset: 0;
    pointer-events: none;
    }

    .c-overlay-text {
    position: absolute;
    top: 1rem;
    right: 1rem;
    font-size: 0.75rem;
    color: rgba(255,255,255,0.85);
    }

    .c-topbar {
    display: flex;
    justify-content: space-between;
    margin-bottom: 1.5rem;
    }

    .c-btn {
    width: 42px;   
    height: 42px;
    border-radius: 50%;
    border: none;
    background: rgba(255,255,255,0.6);

    display: flex;
    align-items: center;
    justify-content: center;
}

    .c-btn img {
    width: 32px;  
    height: 32px;
    object-fit: contain;
}

    .c-avatar {
    width: 5rem;
    height: 5rem;
    border-radius: 50%;
    margin: 0 auto 0.75rem;
    overflow: hidden;
    }

    .c-avatar img {
    width: 100%;
    height: 100%;
    object-fit: contain; 
    }

    .c-title {
    text-align: center;
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 1rem;
    }

    .c-links {
    display: flex;
    flex-direction: column;
    gap: 0.6rem;
    margin-bottom: 1.2rem;
    }

    .c-link {
    display: flex;
    align-items: center;
    background: #fff;
    border-radius: 1.5rem;
    padding: 0.7rem 0.9rem;
    text-decoration: none;
    color: #1a1a1a;
    transition: 0.15s;
    }

    .c-link:hover {
    filter: brightness(0.95);
    }

    .c-link img {
    width: 1.8rem;
    height: 1.8rem;
    object-fit: contain;
    }

    .c-link-body {
    flex: 1;
    text-align: center;
    font-size: 0.85rem;
    font-weight: 500;
    }

    .c-dots {
    color: #aaa;
    }

    .c-socials {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin-bottom: 1.2rem;
    }

    .c-join {
    display: block;
    margin: 1.5rem auto 1rem;
    padding: 0.6rem 1.2rem;
    border-radius: 2rem;
    background: #fff;
    border: 1px solid #ccc;
    text-align: center;
    font-size: 0.85rem;
    text-decoration: none;
    color: #1a1a1a;
    font-weight: bold;
    }

    .c-footer {
    text-align: center;
    font-size: 0.7rem;
    color: #888;
    }

    .c-footer span {
    margin: 0 0.3rem;
    cursor: pointer;
    }
  </style>
  
</head>

<body>

  <div class="c-wrapper">
    <div class="c-card">

    <!-- OVERLAY -->
    <div class="c-overlay">
        <div class="c-frame"></div>
    </div>

      <!-- TOPBAR -->
    <div class="c-topbar">
        <button class="c-btn">
        <img src="assets/img/Linktree/1.png" alt="">
        </button>

        <button class="c-btn">
        <img src="assets/img/Linktree/2.png" alt="">
        </button>
    </div>

      <!-- PROFILE PICTURE -->
      <div class="c-avatar">
        <img src="assets/img/Linktree/LOGO PLN.png" alt="">
      </div>

      <!-- JUDUL -->
      <div class="c-title">PT PLN Indonesia Renewables</div>

      <!-- LINK REF -->
      <div class="c-links">

        <button class="btn btn-primary" onclick="showme()";>Show Me</button>
        <button class="btn btn-primary" onclick="changeText()";>Change Text</button>
        <button class="btn btn-primary" onclick="changeStyle()";>Change Style</button>


        <a id ="tombol" href="#" class="c-link">
          <img src="https://plnindonesiapowerrenewables.co.id/wp-content/uploads/2023/08/Picture1.png">
          <div id="Intro" class="c-link-body">Website IPRen</div>
          <span class="c-dots" onclick="showme();">:
          </span>
        </a>

        <a href="#" class="c-link">
          <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png">
          <div class="c-link-body">LinkedIn IPRen</div>
          <span class="c-dots" onclick="showme();">:</span>
        </a>

        <a href="#" class="c-link">
          <img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/YouTube_Logo_2017.svg">
          <div class="c-link-body">Youtube IPRen</div>
          <span class="c-dots"  onclick="showme();">:</span>
        </a>

        <a href="#" class="c-link">
          <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png">
          <div class="c-link-body">Instagram IPRen</div>
          <span class="c-dots"  onclick="showme();">:</span>
        </a>
      </div>

      <!-- SOCIAL MEDIA -->
      <div class="c-socials">
        <a href="#" class="c-link">
        <img src="assets\img\Linktree\3.png">
        </a>

        <a href="#" class="c-link">
        <img src="assets\img\Linktree\4.png">
        </a>
      </div>

      <!-- BUTTON -->
      <a href="#" class="c-join">
        Join plnindonesiapowerrenewables on Linktree
      </a>

      <!-- FOOTER -->
      <div class="c-footer">
        <span>Cookie</span> ·
        <span>Report</span> ·
        <span>Privacy</span> ·
        <span>Explore</span>
      </div>

    </div>
  </div>

</body>
</html>