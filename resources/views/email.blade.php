<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="margin: 0; padding: 0; background-image: url({{ asset('img/overlay.png') }});">
    <style>
        header,
        footer {
            background-color: #6a23b5;
            padding: 15px;
            clear: both;
        }

        footer {
            position: relative;

        }

        footer img {
            margin: 0 auto;
            display: block;
        }


        h1 {
            margin: 0;
            text-align: center;
            color: white;
            text-transform: uppercase;
        }

        .mail {
            width: 65%;
            margin: 0 auto;
            padding: 30px;
        }

        .mail span,
        .mail a {
            color: #6a23b5;
            font-size: 1.5rem;
        }

        .mail a:hover {
            color: #2be6ab;
        }

        .mail p {
            font-size: 1.2rem;
        }

        img {
            margin: 0 auto;
            display: block;
        }

    </style>
    <header>
        <h1>Email From The Labs' Contact Form</h1>
    </header>
    <section class="mail">
        <p>Message From: <span>{{ $contenuEmail['name'] }}</span></p>
        <p>Sent with: <a href="mailto:{{ $contenuEmail['email'] }}">{{ $contenuEmail['email'] }}</a></p>
        <p>Subject: <span>{{ $contenuEmail['subject'] }}</span></p>
        <p>Message:</p>
        <p style="color: #6a23b5;font-size: 1.5rem;">{{ $contenuEmail['message'] }}</p>
    </section>
    <img src="{{ asset('img/logo.png') }}" alt="" style=";">
</body>

</html>