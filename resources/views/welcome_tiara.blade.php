<!DOCTYPE html>
<html>
<head>
    <title>Untuk Tiara ❤️</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Segoe UI,sans-serif;
        }

        body{
            background:linear-gradient(135deg,#ff9a9e,#fad0c4);
            min-height:100vh;
            padding:30px;
        }

        .container{
            max-width:900px;
            margin:auto;
            background:white;
            padding:30px;
            border-radius:20px;
            box-shadow:0 10px 30px rgba(0,0,0,.2);
        }

        h1{
            text-align:center;
            color:#ff4d6d;
            margin-bottom:20px;
        }

        .foto{
            display:flex;
            justify-content:center;
            gap:30px;
            flex-wrap:wrap;
            margin-bottom:30px;
        }

        .foto img{
            width:220px;
            height:220px;
            object-fit:cover;
            border-radius:50%;
            border:5px solid #ff4d6d;
        }

        .ucapan{
            text-align:center;
            line-height:1.8;
            font-size:18px;
            margin-bottom:30px;
        }

        form{
            margin-top:20px;
        }

        input,textarea{
            width:100%;
            padding:12px;
            margin-top:10px;
            border:1px solid #ddd;
            border-radius:10px;
        }

        button{
            background:#ff4d6d;
            color:white;
            border:none;
            padding:12px 25px;
            margin-top:15px;
            border-radius:10px;
            cursor:pointer;
        }

        .pesan{
            margin-top:30px;
        }

        .card{
            background:#fff0f3;
            padding:15px;
            border-radius:10px;
            margin-top:10px;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Untuk Tiara ❤️</h1>

    <div class="foto">
        <img src="{{ asset('images/fardan.jpg') }}">
        <img src="{{ asset('images/tiara.jpg') }}">
    </div>

    <div class="ucapan">
        <h2>Terima Kasih Tiara ❤️</h2>

        <p>
            Terima kasih karena sudah mau hadir dalam hidup aku.
            Terima kasih untuk semua perhatian, dukungan,
            cerita, tawa, dan momen yang sudah kita lewati bersama.

            Aku bersyukur bisa mengenal kamu dan memiliki hubungan
            yang sangat spesial dengan kamu.

            Semoga hubungan ini selalu dipenuhi kebahagiaan,
            kepercayaan, dan cerita indah yang terus bertambah.
        </p>
    </div>

    @if(session('success'))
        <h3 style="color:green">
            {{ session('success') }}
        </h3>
    @endif

    <h2>Tinggalkan Pesan Untuk Fardan ❤️</h2>

    <form action="/kirim-pesan" method="POST">
        @csrf

        <input
            type="text"
            name="nama"
            placeholder="Nama"
            required
        >

        <textarea
            name="pesan"
            rows="5"
            placeholder="Tulis pesan..."
            required
        ></textarea>

        <button type="submit">
            Kirim Pesan
        </button>
    </form>

    <div class="pesan">
        <h2>Pesan Dari Tiara ❤️</h2>

        @foreach($pesans as $p)
            <div class="card">
                <b>{{ $p->nama }}</b>
                <p>{{ $p->pesan }}</p>
            </div>
        @endforeach
    </div>

</div>

</body>
</html>