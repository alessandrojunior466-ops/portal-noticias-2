@extends('layouts.site')

@section('conteudo')
    <!doctype html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>BlogNews - Seu portal de notícias</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
            integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/app.css" />
    </head>

    <body class="bg-slate-50">
        <header class="bg-white shadow-md">
            <div class="max-w-7xl mx-auto flex justify-between p-2 items-center">
                <div class="font-bold text-xl text-slate-800">BlogNews</div>
                <nav class="text-sm font-medium flex gap-6">
                    <a href="#" class="text-slate-600 hover:text-blue-600 py-2">Home</a>
                    <div class="relative group">
                        <button class="cursor-pointer text-slate-600 hover:text-blue-600 py-2">
                            Gerenciar <i class="fa solid fa-chevron-down ml-1"></i>
                        </button>
                        <div
                            class="absolute left-0 top-8 bg-white border border-slate-200 p-2 rounded-lg w-40 shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                            <a href="#" class="block py-1 text-slate-600 hover:text-blue-600">Notícias</a>
                            <a href="#" class="block py-1 text-slate-600 hover:text-blue-600">Categorias</a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <main class="max-w-7xl mx-auto px-4 py-8">

            <div class="max-w-3xl mx-auto">
                <article class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">

                    <div class="h-80 overflow-hidden bg-slate-100">
                        <img src="https://placehold.co/900x400/3B82F6/FFFFFF?text=Imagem+da+Noticia" alt="Título da notícia"
                            class="w-full h-full object-cover">

                    </div>


                    <div class="p-8">


                        <div class="flex items-center gap-3 mb-5">
                            <span class="text-xs font-bold text-white px-3 py-1 rounded-full"
                                style="background-color: #2196F3">
                                Tecnologia

                            </span>
                            <span class="text-xs text-slate-400">
                                Publicado em 06/05/2024 às 10:30

                            </span>
                        </div>


                        <h1 class="text-3xl font-bold text-slate-900 leading-tight mb-4">
                            PHP Continua Dominando o Desenvolvimento Web
                        </h1>

                        <div class="text-slate-700 leading-relaxed space-y-4">
                            <p>
                                PHP é uma linguagem de script server-side que continua evoluindo e se
                                adaptando às necessidades modernas do desenvolvimento web. Com frameworks
                                poderosos como Laravel, Symfony e CodeIgniter, PHP permite criar aplicações
                                robustas e escaláveis.
                            </p>
                            <p>
                                A comunidade PHP é extremamente ativa, oferecendo inúmeras bibliotecas e
                                ferramentas que facilitam o desenvolvimento. Desde a criação de APIs REST
                                até aplicações web complexas, PHP prova ser uma escolha excelente para
                                profissionais de todos os níveis.
                            </p>
                            <p>
                                Se você está começando a aprender programação web, PHP é uma excelente
                                escolha para entender os fundamentos de como aplicações web funcionam.
                            </p>
                        </div>


                        <div class="mt-10 pt-6 border-t border-slate-200 flex items-center justify-between gap-4 flex-wrap">

                            <a href="#top"
                                class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-blue-600 transition-colors font-medium">
                                <i class="fa-solid fa-arrow-left"></i>
                                Voltar
                            </a>

                            <button
                                class="inline-flex items-center gap-2 px-4 py-2 rounded-xl border border-slate-200 bg-white hover:bg-red-50 hover:border-red-200 hover:text-red-500 text-slate-700 text-sm font-medium transition-all duration-200 shadow-sm">

                                <i class="fa-regular fa-heart"></i>
                                Curtir
                            </button>


                        </div>

                    </div>
                </article>
            </div>


        </main>

        


    </body>

    </html>
@endsection
