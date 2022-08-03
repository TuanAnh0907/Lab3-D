<header class="lg:mx-10 lg:mb-4 font-roboto h-auto">
    <div class="inline-flex justify-between w-full lg:border-b border-gray-sl border-dashed ">

        <nav class="bg-white px-3 py-1">
            <div id="dropdown-wrapper" class="relative">
                <button onclick="toggleMenu()" class="lg:pt-3 inline-block">
                    <div class="text-gray">
                        <i class="fa-solid fa-bars fa-2x text-gray"></i>
                        <p class="text-2xl text-black tracking-tightest font-black hidden lg:inline-block ">
                            SECTIONS </p>
                    </div>
                </button>
            </div>
        </nav>

        <div class="text-center text-gray py-1 lg:text-xl lg:pt-5">
            <p class="hidden lg:block">Friday, February 24, 2017</p>
            <p class="h-auto w-full text-center text-black text-2xl mg:py-3 lg:hidden font-bitter"><b> The News </b>
            </p>
        </div>

        <div class="lg:text-right py-1 px-3 gap-3 lg:py-5 inline-flex">
            <div class="my-1">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input class="hidden placeholder:px-4 focus:px-2 focus:outline border-none lg:w-36 lg:h-10 lg:inline-block" type="search" size="20" placeholder="SEARCH">
            </div>
            @if ( Auth::check() )
            <div class="text-xl my-1 text-center hidden lg:inline-block relative">
                <nav>
                    <div id="dropdown-wrapper" class="relative">
                        <button onclick="toggleMenu()" class="inline">
                            <p class="lg:text-xl text-sm ">
                                Hi, {{ Auth::user()->name }} </p>
                        </button>
                        <div id="menu" class="hidden text-xs lg:text-xl bg-white drop-shadow-md absolute top-6 lg:top-12 -right-4 w-40 lg:w-52">
                            <div class="px-10 py-2 hover:bg-gray "><a class="" href="{{ route('web.profile') }}">Edit My profile</a>
                            </div>
                            <div class="px-10 py-2 hover:bg-gray-sl border-t border-gray"> <a href="{{ route('web.logout') }}">Login out</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            @else
            <button class="bg-sport hidden lg:inline-block lg:w-24 lg:h-10 "> <a href="{{ route('web.login') }}">Log in</a></button>
            @endif
        </div>

    </div>

    <div class=" w-full h-auto text-center lg:text-8xl lg:pt-3 lg:inline-block">
        <p class=" mt-5 text-center text-bitter hidden lg:block"><a href="{{ route('web.home')}}"> <b>The News</b> </a></p>
    </div>

    <div class="menu text-center w-full border-t border-b border-gray-sl lg:my-3 lg:py-3 hidden lg:inline-block">
        <a class="px-5 pt-3 text-xl hover:bg-slate-300 border-gray-200 " href="{{ route('web.category')}}">World</a>
        <a class="px-5 pt-3 text-xl hover:bg-slate-300 border-gray-200" href="{{ route('web.category')}}">Politics</a>
        <a class="px-5 pt-3 text-xl hover:bg-slate-300 border-gray-200" href="{{ route('web.category')}}">Business</a>
        <a class="px-5 pt-3 text-xl hover:bg-slate-300 border-gray-200" href="{{ route('web.category')}}">Opinion</a>
        <a class="px-5 pt-3 text-xl hover:bg-slate-300 border-gray-200" href="{{ route('web.category')}}">Tech</a>
        <a class="px-5 pt-3 text-xl hover:bg-slate-300 border-gray-200" href="{{ route('web.category')}}">Science</a>
        <a class="px-5 pt-3 text-xl hover:bg-slate-300 border-gray-200" href="{{ route('web.category')}}">Heath</a>
        <a class="px-5 pt-3 text-xl hover:bg-slate-300 border-gray-200" href="{{ route('web.category')}}">Sport</a>
        <a class="px-5 pt-3 text-xl hover:bg-slate-300 border-gray-200" href="{{ route('web.category')}}">Entertaiment</a>
        <a class="px-5 pt-3 text-xl hover:bg-slate-300 border-gray-200" href="{{ route('web.category')}}">Travel</a>
        <a class="px-5 pt-3 text-xl hover:bg-slate-300 border-gray-200 " href="{{ route('web.category')}}">More</a>
        <a class="px-5 text-xl hover:bg-slate-300 border-gray-200 float-right text-blue pr-10" href="{{ route('web.category')}}">
            <i class="fas fa-newspaper fa-1x mx-2 text-blue"></i> E-PAPER </a>
    </div>

</header>
