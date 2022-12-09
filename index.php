<html>
<head>
    <style>
        body {
            box-sizing: border-box;
            background-image: url('img/bgindex.jpg');
            background-size: cover;
        }
        .container-utama {
            margin: 300px;
            width: 35%;
            height: 300px;
            border: 1pt;
            padding: 20px;
        }
        .daftar>button,
        .member>button {
            margin: 10px;
            padding: 8pt;
            border-radius: 8px;
            background-color: rgb(127, 102, 157);
            color: whitesmoke;
        }
        .daftar,
        .member {
            text-align: center;
        }
    </style>
    <title>Home</title>
<body>
    <div class="container-utama">
        <form class="daftar" method="post" action="index.html">
                <button type="text">Registrasi</button>
        </form>
        <form class="member" method="post" action="member.php">
            <button type="submit">Daftar member</button>
        </form>
    </div>
</body>
</head>

</html>