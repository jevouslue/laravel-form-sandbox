<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "coolGray": {
                            "50": "#F7F8F9",
                            "100": "#EEF0F3",
                            "200": "#D5DAE1",
                            "300": "#BBC3CF",
                            "400": "#8896AB",
                            "500": "#556987",
                            "600": "#4D5F7A",
                            "700": "#404F65",
                            "800": "#333F51",
                            "900": "#2A3342"
                        },
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-coolGray-50">
<section class="py-8">
    <div class="max-w-6xl px-4 mx-auto">
        <div class="relative py-10 px-6 bg-gray-400 rounded-2xl overflow-hidden">
            <div class="relative max-w-sm md:max-w-xl mx-auto text-center">
                <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4">お問い合わせ</h3>
                <p class="font-medium text-gray-50">私達はお客様の声を大事にしております<br>気になることなど何でもお気軽にお問い合わせください!</p>
            </div>
        </div>
    </div>
</section>

<section class="py-4">
    <div class="max-w-6xl mx-auto">
        <div class="p-6 h-full border border-coolGray-100 bg-white rounded-md shadow-dashboard">
            <p class="text-3xl mb-8">お問い合わせを受け付けました</p>
            <p class="text-gray-400">
                確認用にお問い合わせ内容を入力されたメールアドレスへ送信しています。<br>
                見つからない場合は迷惑メールボックスなどもご確認ください。 <br>
                受信設定をしている場合は「example.com」のドメインから受信できるように設定していることをお確かめください。<br>
                通常2~3営業日以内で返信をしております。<br>
                恐れ入りますが5日経ってもご連絡がない場合は再度お問い合わせをいただくようにお願いいたします。</p>
        </div>
    </div>
</section>
</body>
</html>
