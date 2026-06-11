<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untuk Tiara ❤️</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:linear-gradient(135deg,#ff758c,#ff7eb3);
    min-height:100vh;
    padding:20px;
    overflow-x:hidden;
}

.container{
    max-width:1000px;
    margin:auto;
    background:rgba(255,255,255,.95);
    padding:35px;
    border-radius:25px;
    box-shadow:0 15px 40px rgba(0,0,0,.2);
}

h1{
    text-align:center;
    color:#ff3366;
    font-size:3rem;
    margin-bottom:20px;
}

.sub{
    text-align:center;
    color:#666;
    margin-bottom:30px;
}

.foto{
    display:flex;
    justify-content:center;
    gap:40px;
    flex-wrap:wrap;
    margin-bottom:30px;
}

.foto img{
    width:250px;
    height:250px;
    object-fit:cover;
    border-radius:50%;
    border:6px solid #ff4d6d;
    transition:.4s;
    box-shadow:0 10px 25px rgba(0,0,0,.2);
}

.foto img:hover{
    transform:scale(1.08);
}

.ucapan{
    background:#fff0f5;
    padding:25px;
    border-radius:20px;
    text-align:center;
    line-height:1.9;
    font-size:18px;
    margin-bottom:30px;
}

.countdown{
    text-align:center;
    font-size:24px;
    font-weight:bold;
    color:#ff3366;
    margin-bottom:30px;
}

form{
    margin-top:20px;
}

input,textarea{
    width:100%;
    padding:15px;
    border:1px solid #ddd;
    border-radius:12px;
    margin-top:10px;
    margin-bottom:15px;
}

button{
    width:100%;
    background:#ff3366;
    color:white;
    border:none;
    padding:15px;
    border-radius:50px;
    cursor:pointer;
    font-size:17px;
    transition:.3s;
}

button:hover{
    transform:scale(1.03);
}

.card{
    background:white;
    padding:15px;
    border-left:5px solid #ff4d6d;
    margin-top:15px;
    border-radius:12px;
    box-shadow:0 5px 10px rgba(0,0,0,.08);
}

.footer{
    text-align:center;
    margin-top:40px;
    color:#777;
}

.love{
    position:fixed;
    top:-20px;
    color:#ff3366;
    animation:jatuh linear infinite;
}

@keyframes jatuh{
    to{
        transform:translateY(110vh);
    }
}
</style>
</head>

<body>

<div class="container">

    <h1 id="judul"></h1>

    <p class="sub">
        Sebuah halaman spesial untuk Tiara ❤️
    </p>

    <div class="foto">
        <img src="{{ asset('images/fardan.jpg') }}" alt="">
        <img src="{{ asset('images/tiara.jpg') }}" alt="">
    </div>

    <div class="countdown">
        ❤️ Bersama Selamanya ❤️
    </div>

    <div class="ucapan">

        <h2>Terima Kasih Tiara ❤️</h2>
        <br>

        <p>
            Terima kasih karena sudah hadir dalam hidup aku.
            Terima kasih karena sudah mau mengenal aku,
            menemani hari-hari aku, dan menjadi seseorang
            yang sangat spesial.

            Aku bersyukur bisa mengenal kamu.
            Semoga hubungan kita selalu dipenuhi
            kebahagiaan, kepercayaan, dan cerita indah
            yang akan terus bertambah setiap harinya.

            ❤️
        </p>

    </div>

    @if(session('success'))
        <h3 style="color:green;text-align:center;margin-bottom:20px;">
            {{ session('success') }}
        </h3>
    @endif

    <h2 style="text-align:center;color:#ff3366">
        Tinggalkan Pesan Untuk Fardan ❤️
    </h2>

    <form action="/kirim-pesan" method="POST">
        @csrf

        <input
            type="text"
            name="nama"
            placeholder="Nama Kamu"
            required
        >

        <textarea
            name="pesan"
            rows="5"
            placeholder="Tulis pesan untuk Fardan..."
            required
        ></textarea>

        <button type="submit">
            Kirim Pesan ❤️
        </button>
    </form>

    <div style="margin-top:40px">

        <h2 style="text-align:center;color:#ff3366">
            Pesan Yang Tersimpan ❤️
        </h2>

        @foreach($pesans as $p)
        <div class="card">
            <strong>{{ $p->nama }}</strong>
            <p>{{ $p->pesan }}</p>
        </div>
        @endforeach

    </div>

    <div class="footer">
        Dibuat oleh Fardan ❤️ Untuk Tiara
    </div>

</div>

<script>
const text = "Untuk Tiara ❤️";
let i = 0;

function ketik(){
    if(i < text.length){
        document.getElementById("judul").innerHTML += text.charAt(i);
        i++;
        setTimeout(ketik,100);
    }
}

ketik();

function buatHati(){
    const hati = document.createElement("div");

    hati.classList.add("love");
    hati.innerHTML = "❤️";

    hati.style.left = Math.random()*100+"vw";
    hati.style.fontSize = (20 + Math.random()*30)+"px";
    hati.style.animationDuration = (3 + Math.random()*5)+"s";

    document.body.appendChild(hati);

    setTimeout(()=>{
        hati.remove();
    },8000);
}

setInterval(buatHati,300);
</script>

</body>
</html>