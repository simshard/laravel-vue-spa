<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>simple SPA</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="font-sans">
    <div id="app">
        <div class="container mx-auto">
            <header class="py-6 mb-8">
                <h1>
                    <img alt="Laracasts" src="/images/logo.svg">
                </h1>
            </header>
            <main class="flex">
                <aside class="w-1/5">
                    <section class="mb-8">
                      <h5 class="uppercase font-bold mb-4">Branding</h5>
                      <ul class="list-reset">
                          <li class="text-sm leading-loose">
                              <router-link class="text-black" to="/" exact >Logo</router-link>
                          </li>
                          <li class="text-sm leading-loose">
                              <router-link class="text-black" to="/logo-symbol">Logo Symbol</router-link>
                          </li>
                          <li class="text-sm leading-loose">
                              <router-link class="text-black" to="/colours">Colours</router-link>
                          </li>
                          <li class="text-sm leading-loose">
                              <router-link class="text-black" to="/typography">Typography</router-link>
                          </li>
                      </ul>
                    </section>
                    <section class="mb-8">
                      <h5 class="uppercase font-bold mb-4">Stuff</h5>
                      <ul class="list-reset">
                          <li class="text-sm leading-loose">
                              <router-link class="text-black" to="/mascot">Mascot</router-link>
                          </li>
                          <li class="text-sm leading-loose">
                              <router-link class="text-black" to="/illustrations">Illustrations</router-link>
                          </li>
                          <li class="text-sm leading-loose">
                              <router-link class="text-black" to="/loaders">Loaders and Animations</router-link>
                          </li>
                          <li class="text-sm leading-loose">
                              <router-link class="text-black" to="/wallpapers">Wallpapers</router-link>
                          </li>
                      </ul>
                    </section>
                </aside>

                <div class="primary flex-1">
                    <router-view></router-view>
                </div>
            </main>
        </div>
    </div>
    <script type="text/javascript" src="/js/app.js"></script>
</body>

</html>
