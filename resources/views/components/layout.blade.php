<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-[#060606] text-white">
    <div class="px-6 md:px-8">
        <nav class="flex py-2.5 justify-between gap-x-6 items-center border-b border-white/10">
            <div>
                <a href="">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="" srcset="">
                </a>
            </div>

            <div class="flex gap-x-6 font-bold">
                <a href="" class="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>



            <div>
                <a href="">Post a job</a>
            </div>
        </nav>
        <main class="mt-10 max-w-242 mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>