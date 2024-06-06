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
        <form action="">
            <div class="p-6 h-full border border-coolGray-100 overflow-hidden bg-white rounded-md shadow-dashboard">
                <div class="pb-6 border-b border-coolGray-100">
                    <div class="flex flex-wrap items-center justify-between -m-2">
                        <div class="w-full md:w-auto p-2">
                            <h2 class="text-coolGray-900 text-lg font-semibold">お問い合わせ内容</h2>
                            <p class="text-xs text-coolGray-500 font-medium">
                                送信された内容は適切に保管され、他の目的では使用されません</p>
                        </div>
                    </div>
                </div>
                <div class="py-6 border-b border-coolGray-100">
                    <div class="w-full md:w-9/12">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">氏名</p>
                            </div>
                            <div class="w-full md:w-1/3 p-3">
                                <p>last_name</p>
                            </div>
                            <div class="w-full md:w-1/3 p-3">
                                <p>first_name</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-6 border-b border-coolGray-100">
                    <div class="w-full md:w-9/12">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">メールアドレス</p>
                            </div>
                            <div class="w-full md:flex-1 p-3">
                                <p>email</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-6 border-b border-coolGray-100">
                    <div class="w-full md:w-9/12">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">電話番号</p>
                            </div>
                            <div class="w-full md:flex-1 p-3">
                                <p>tel</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-6">
                    <div class="w-full md:w-9/12">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">お問い合わせ本文</p>
                            </div>
                            <div class="w-full md:flex-1 p-3">
                                <p class="whitespace-pre-wrap">body</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-16 flex justify-center gap-8">
                    <button type="submit" class="py-4 px-12 text-center text-white font-semibold text-lg bg-gray-400 hover:opacity-75 transition rounded-full">戻る</button>
                    <button type="submit" class="py-4 px-12 text-center text-white font-semibold text-lg bg-orange-600 hover:opacity-75 transition rounded-full">送信</button>
                </div>
            </div>
        </form>
    </div>
</section>
</body>
</html>
