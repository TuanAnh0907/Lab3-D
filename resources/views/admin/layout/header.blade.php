<header>

    <div class=" py-8 inline-flex w-full h-24 shadow-lg bg-gray-sl px-10   ">

        <div class="w-1/6 text-2xl inline-flex gap-3">
            <i class="fa-solid fa-bars my-1 text-gray"></i>
            <a href="{{ route('admin.home') }}">
                <p>Admin Page</p>
            </a>
        </div>

        <div class="inline-flex justify-between w-full">

            <div class="inline-flex justify-between gap-10 my-1">
                <abs>
                    <i class="fa-solid fa-envelope-open-text"></i>
                </abs>
                <a>
                    <i class="fa-solid fa-comments"></i>
                </a>
                <a>
                    <i class="fa-solid fa-square-check"></i>
                </a>
                <a>
                    <i class="fa-solid fa-calendar"></i>
                </a>
            </div>

            <div class="inline-flex gap-10 mx-10">
                <a><i class="fa-solid fa-inbox my-2"></i></a>
                <a><i class="fa-solid fa-bell my-2"></i></a>
                <div class="text-xl">
                    <nav>
                        <div id="dropdown-wrapper" class="relative">

                            <button onclick="toggleMenu()" class="inline">
                                <p class="text-xl text-black ">
                                    Hi, {{Auth::user()->name}} </p>
                            </button>

                            <div id="menu" class="hidden bg-white drop-shadow-md absolute top-12 right-1 w-56">
                                <div class="px-10 py-2 hover:bg-gray "><a class="" href="#">Edit My profile</a>
                                </div>
                                <div class="px-10 py-2 hover:bg-gray"> <a href="#">My Ibox</a>
                                </div>
                                <div class="px-10 py-2 hover:bg-gray"> <a href="#">Chat</a>
                                </div>
                                <div class="px-10 py-2 hover:bg-gray-sl border-t border-gray"> <a href="{{ route('admin.logout') }}">Login out</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
