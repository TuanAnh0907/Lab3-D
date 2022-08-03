@extends('web.layout.master')

@section('title', 'Trang chu')

@section('content')

<div class="font-roboto">

    <div class="lg:grid lg:grid-cols-4 lg:gap-3 lg:mx-10 lg:my-3 mx-3 my-10 ">

        <div class=" lg:my-5 col-span-2 bg-cover bg-no-repeat bg-center h-108 w-full relative" style="background-image: url(../image/hot.png)">
            <a href="{{ route('web.detail')}}" class="text-black absolute bg-white font-serif w-5/6 pt-2 lg:w-3/4 ml-4 pl-2 lg:pl-10 lg:pr-5 text-xl lg:text-4xl -bottom-5 lg:-bottom-10 ">
                <b> What One Photo Tells Us About North <br> Korea’s Nuclear Program</b>
            </a>
            <p class="text-xl text-slate-800 absolute -bottom-44 lg:-bottom-32 left-0 pl-5 hidden lg:block">
                Clues from a propaganda photo reveal details about North Korea’s expanding weapons programs
                and
                internal politics.
            </p>
        </div>

        <div class="lg:px-3 lg:col-span-1 lg:py-2 py-10">
            <div class="inline-flex justify-between w-full">
                <p class="text-sm lg:text-2xl px-3 my-3 py-2 h-9 lg:h-11 bg-yellow"> TOP STORIES </p>
                <p class="text-sm lg:text-2xl pt-4 text-blue lg:hidden inline-block"> View all </p>
            </div>
            <div class="px-3 py-3 hover:shadow-md lg:text-xl border-dashed border-b border-gray" id="top-stories">
                <a href="#">PM unveils Shiva status in Coimbatore on Mahashivratri</a>
            </div>
            <div class="px-3 py-3 hover:shadow-md lg:text-xl border-dashed border-b border-gray" id="top-stories">
                <a href="#">PM Modi: Kanpur train accident was a conspiracy</a>
            </div>
            <div class="px-3 py-3 hover:shadow-md lg:text-xl border-dashed border-b border-gray" id="top-stories">
                <a href="#">‘Sena, BJP have no option but to join hands again’</a>
            </div>
            <div class="px-3 py-3 hover:shadow-md lg:text-xl border-dashed border-b border-gray odd:" id="top-stories">
                <a href="#">Thousands bid adieu to martyred jawan in Kashmir</a>
            </div>
            <div class="px-3 py-3 hover:shadow-md lg:text-xl border-dashed border-b border-gray" id="top-stories">
                <a href="#">Jayalalithaa’s niece Deepa floats political outfit</a>
            </div>
            <div class="px-3 py-3 hover:shadow-md lg:text-xl border-dashed border-b border-gray" id="top-stories">
                <a href="#">‘China made mistake of ignoring India’s talent’</a>
            </div>
            <div class="px-3 py-3 hover:shadow-md lg:text-xl border-dashed " id="top-stories">
                <a href="#">Jayalalithaa’s niece Deepa floats political outfit</a>
            </div>

        </div>

        <div class="lg:mx-3">

            <div class="py-2 text-xl">

                <div class="bg-gray-sl relative">

                    <h2 class="bg-yellow text-center text-sm lg:text-2xl w-32 lg:w-48 h-9 lg:h-11 px-3 my-2 py-2 -top-5 absolute lg:static">
                        QUICK BITES </h2>

                    <div class="px-5 py-10 lg:py-3 hover:shadow-md text-xl lg:text-3xl ">
                        <a href="{{ route('web.detail')}}">
                            <p class="font-merriweather"> <b> Stocks Sell Off, Gold Ries Ahead of Trump Speech:
                                    Markets Wrap </b></p>
                        </a>
                    </div>

                    <h3 class="px-5 py-1 ">Golbal stocks retreated, erasing gains for the week as a glum set of
                        European corporate earnings compouded investor nerousness before a major speech
                        from U.S.President Donald Trump. Gold extended its rally as the dollar edged lower.
                    </h3>

                    <div class="px-5 pt-3 text-right py-4">
                        <a href="">
                            <p class="text-blue"> <b class=" lg:inline-block hidden">Next</b><b> > </b> </p>
                        </a>
                    </div>

                </div>

                <div class="pt-2 xl:block hidden">
                    <a href="" class="text-blue text-2xl font-merriweather">
                        <p> <b> Get the Quick Bites delivered to your inbox daily </b> </p>
                    </a>
                    <div class="w-full border-b border-blue-600 my-6 inline-flex">
                        <input class="w-full" type="text" placeholder="Enter your email">
                        <a href="#" type="submit" class="float-right">
                            <p class="bg-blue text-white h-12 w-28 pt-2 text-center">Sign Up</p>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="lg:grid lg:grid-cols-4 lg:gap-2 mx-2 lg:mx-10 lg:ml-10 mt-4 ">

        <div class="lg:col-span-4 2xl:col-span-3 lg:border-t lg:border-b border-gray-300 lg:my-6 lg:w-full">

            <div class=" text-center justify-between inline-flex w-full mt-2 border-b lg:border-b-0 border-sport">

                <div class="bg-sport w-36 h-auto text-2xl "><a href="#"> FEATURE </a></div>

                <div class="bg-gray-sl text-xl text-center mr-12 hidden lg:block">Mahashivratri symbolizes a
                    union of divinity with a purpore of overcoming darkness and injustice.</div>

                <div class=" text-blue text-xl mx-2 hidden lg:block"><a href="">View all</a></div>

            </div>

            <div class="overflow-x-scroll text-center font-merriweather inline-flex justify-between gap-4 lg:pt-4 h-76 lg:h-72 lg:w-full">

                <div class="relative flex-shrink-0">
                    <a href="{{ route('web.detail')}}">
                        <p class="bg-white text-lg lg:text-xl mt-48 mx-6 lg:pl-5 lg:w-80 absolute">Woman Do Like to
                            Compete Against
                            Themselves</p>
                        <img src="../image/pic1.png" alt="" class="h-52 lg:h-60 w-auto object-cover">
                    </a>
                </div>

                <div class="relative flex-shrink-0">
                    <a href="{{ route('web.detail')}}">
                        <p class="bg-white text-lg lg:text-xl mt-48 mx-6 lg:pl-5 lg:w-80 absolute">Woman Do Like to
                            Compete Against
                            Themselves</p>
                        <img src="../image/pic2.png" alt="" class="h-52 lg:h-60 w-auto object-cover">
                    </a>
                </div>

                <div class="relative flex-shrink-0">
                    <a href="{{ route('web.detail')}}">
                        <p class="bg-white text-lg lg:text-xl mt-48 mx-6 lg:pl-5 lg:w-80 absolute">Woman Do Like to
                            Compete Against
                            Themselves</p>
                        <img src="../image/pic3.png" alt="" class="h-52 lg:h-60 w-auto object-cover">
                    </a>
                </div>

                <div class="relative flex-shrink-0">
                    <a href="{{ route('web.detail')}}">
                        <p class="bg-white text-lg lg:text-xl mt-48 mx-6 lg:pl-5 lg:w-80 absolute">Woman Do Like to
                            Compete Against
                            Themselves</p>
                        <img src="../image/pic1.png" alt="" class="h-52 lg:h-60 w-auto object-cover">
                    </a>
                </div>

                <div class="relative flex-shrink-0">
                    <a href="{{ route('web.detail')}}">
                        <p class="bg-white text-lg lg:text-xl mt-48 mx-6 lg:pl-5 lg:w-80 absolute">Woman Do Like to
                            Compete Against
                            Themselves</p>
                        <img src="../image/pic2.png" alt="" class="h-52 lg:h-60 w-auto object-cover">
                    </a>
                </div>

                <div class="relative flex-shrink-0">
                    <a href="{{ route('web.detail')}}">
                        <p class="bg-white text-lg lg:text-xl mt-48 mx-6 lg:pl-5 lg:w-80 absolute">Woman Do Like to
                            Compete Against
                            Themselves</p>
                        <img src="../image/pic3.png" alt="" class="h-52 lg:h-60 w-auto object-cover">
                    </a>
                </div>
            </div>
        </div>

        <div class="col-span-1 ml-5 mt-2 relative hidden 4xl:block">

            <div class="brightness-50 absolute mt-6">
                <div class="bg-cover bg-no-repeat rounded-lg bg-centerh-96 w-100 h-72" style="background-image: url(../image/video.png)">
                </div>
            </div>
            <i class="fa-solid fa-circle mt-10 fa-1x absolute text-red ml-8 "></i>
            <p class="text-red text-xl mt-9 ml-16 absolute">Live</p>

            <div class="absolute left-8 top-32 text-4xl text-white px-6 py-4 border-2 rounded-full border-white">
                <i class="fa-solid fa-play"></i>
            </div>

            <div class="absolute">
                <div class="text-white w-64 mt-60 ml-9 text-2xl font-merriweather"> <b> Watch Modi live from G8
                        Summit</b> </div>
            </div>

        </div>

    </div>

    <div class="lg:grid lg:grid-cols-5 lg:gap-2 lg:ml-10 ml-3 my-2 h-auto ">

        <div class="lg:col-span-1 mx-1 lg:mx-5 border-none lg:boder-b lg:border-none border-gray">

            <div class="bg-[#3bb189] w-32 h-8 py-1 my-4 text-center">
                <p> WORLD NEWS </p>
            </div>

            <div class="lg:my-3 lg:text-2xl font-merriweather"><a href="{{ route('web.detail')}}"> <b>An Alarmed Base Prods Democrats Into an All-Out
                        War</b></a>
            </div>

            <h2 class="my-6 text-xl">After the election, Democrats debated whether to confront Mr.
                Trump or seek compromise, but riled-up liberals have pushed party leaders into a fight.</h2>

            <div class="border-t lg:border-none border-dashed border-gray-300 w-1/4"></div>

            <h1 class=" text-xl lg:text-2xl my-6 py-3 font-merriweather"><a href="{{ route('web.detail')}}">
                    <b>Transgender Student on the Front Lines of the Rights Battle </b> </h1>
            </a>
            <h2 class="text-xl">Gavin Grimm, 17, whose initials are on a case heading to the Supreme Court, has
                become the new
                face of the transgender rights movement.</h2>
        </div>

        <div class="lg:col-span-2 lg:border-l border-gray-300 py-2 my-4">

            <div class="px-2 my-4 lg:ml-3 mb-3 ">
                <a href="{{ route('web.detail')}}">
                    <h2 class="lg:text-2xl font-merriweather">
                        <b> Hate Crime Is Feared in Shooting of 2 Indians in Kansas</b>
                    </h2>
                    <div class="py-3 gap-3 border-b border-dashed border-gray-300 inline-flex">
                        <p class="text-xl">India’s government expressed shock after one citizen was killed and another
                            wounded in a bar in
                            suburban Kansas. Another wounded in a bar in suburban Kansas.</p>
                        <img src="../image/avt.png" alt="" class="w-36 h-24 text-right object-cover">
                    </div>
                </a>
            </div>

            <div class="lg:px-3 py-3 ml-3 lg:mb-5 hidden lg:block">
                <a href="{{ route('web.detail')}}">
                    <h2 class="lg:text-2xl font-merriweather"> <b> Uber Lawsuit Puts Spotlight on Rush for Driverless
                            Cars
                        </b> </h2>
                    <p class="border-b border-dashed py-3 border-gray-300 text-lg lg:text-xl">The suit, brought by the
                        autonomous
                        car business Waymo,
                        accuses Uber and a star engineer, Anthony Levandowski, of planning to steal trade secrets.</p>
                </a>
            </div>

            <br>

            <div class="px-3 lg:ml-3 lg:mb-5 ">
                <a href="{{ route('web.detail')}}">
                    <h2 class="lg:text-2xl font-merriweather"> <b>Hate Crime Is Feared in Shooting of 2 Indians in
                            Kansas
                        </b> </h2>
                    <div class="py-3 gap-3 border-b border-dashed border-gray-300 inline-flex">
                        <p class="text-xl">India’s government expressed shock after one citizen was killed and another
                            wounded in a bar in
                            suburban Kansas. Another wounded in a bar in suburban Kansas.</p>
                        <img src="../image/avt2.png" alt="" class="w-36 h-24 text-right object-cover">
                    </div>
                </a>
            </div>

            <div class="px-3 lg:ml-3 mb-5 hidden lg:block">
                <a href="{{ route('web.detail')}}">
                    <h2 class="text-2xl"> <b> Uber Lawsuit Puts Spotlight on Rush for Driverless Cars </b> </h2>
                    <p class="text-xl">The suit, brought by the autonomous car business Waymo, accuses Uber and a star
                        engineer, Anthony
                        Levandowski, of planning to steal trade secrets.</p>
                </a>
            </div>

        </div>

        <div class="px-4 lg:col-span-1  lg:border-r lg:border-l border-gray-300">

            <div class="bg-yellow w-36 h-8 py-1 my-4 text-center">
                <p class="lg:block hidden">ENTERTAIMENT</p>
                <p class="lg:hidden">TOP STORIES</p>
            </div>

            <div class="px-4">
                <a href="{{ route('web.detail')}}">
                    <div class="py-2  border-b border-dashed border-gray-300 text-lg">Kangana sad that her 'Rangoon'
                        scenes were cut bycensorbourd</div>
                </a>
                <a href="{{ route('web.detail')}}">
                    <div class="py-2 border-b border-dashed border-gray-300 text-lg">Kajol-Ajay celebrate 18th wedding
                        anniversary in Paris</div>
                </a>
                <a href="{{ route('web.detail')}}">
                    <div class="py-2 border-b border-dashed border-gray-300 text-lg">Shahid wishes he was offered this
                        Aamir Khan’s film last year!</div>
                </a>

                <a href="{{ route('web.detail')}}">
                    <div class="py-2 border-b border-dashed border-gray-300 text-lg">Lipstick Under My Burkha: CBFC
                        defends its move of banning the film</div>
                </a>
                <a href="">
                    <div class="py-2 border-b border-dashed border-gray-300 text-lg">Varun-Alia’s new song ‘Aashiq
                        Surrender Hua’ is out on YouTube</div>
                </a>

                <a href="">
                    <div class="py-2 hidden lg:block border-b border-dashed border-gray-300 text-lg">‘Jolly LLB 2’
                        box-office collection week 2</div>
                </a>
                <a href="">
                    <div class="py-2 hidden lg:block border-b border-dashed border-gray-300 text-lg">Casting Ouch!
                        The open dirty secret of showbiz culture in Bollywood</div>
                </a>
                <a href="">
                    <div class="py-2 hidden lg:block border-b border-dashed border-gray-300 text-lg"> Student
                        arrested for the murder of model turned teacher</div>
                </a>
                <a href="{{ route('web.detail')}}">
                    <div class="py-2 hidden lg:block text-lg">Shahid wishes he was offered this Aamir Khan’s film
                        last year!</div>
                </a>

            </div>

        </div>

        <div class="lg:col-span-1 mr-0 lg:mr-20 px-4">
            <div class="bg-sport w-32 h-8 py-1 my-4 text-center">
                <p class="lg:block hidden">SPORTS NEWS</p>
                <p class="lg:hidden">WORLD NEWS</p>
            </div>
            <a href="{{ route('web.detail')}}">
                <div class="pt-3 text-xl lg:text-2xl font-merriweather"><b>COA wants all BCCI bodies to produce
                        compliance
                        report</b>
                </div>
            </a>

            <div class="pt-2 my-8 text-lg lg:text-xl">After the election, Democrats debated whether to confront
                Mr. Trump or seek compromise, but riled-up liberals have pushed party leaders into a fight.
            </div>
            <div class="w-full border-b border-dashed border-gray"></div>
            <div class="inline-flex lg:block py-2">
                <img class="pt-2 w-36 gap-5 h-24 lg:w-full lg:h-48 object-cover" src="../image/sport.png" alt="">
                <a href="{{ route('web.detail')}}">
                    <div class="py-2 px-6 font-merriweather w-1/2 lg:w-full lg:px-0 text-lg lg:text-2xl border-0 lg:border-b border-gray-300">
                        <b>Series win in Australia hugely satisfying:
                            <br>Upul Tharanga</b>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <div class="lg:grid lg:grid-cols-5 lg:gap-2 lg:mx-10 lg:my-3 lg:h-full ">

        <div class="lg:col-span-4 ">

            <div class="bg-sport w-full h-10 justify-between hidden lg:inline-flex">
                <div>
                    <p class="px-5 py-2 font-merriweather text-2xl "> <b>Videos</b></p>
                </div>

                <div>
                    <a href="">
                        <p class="px-5 py-2 text-blue"><b> View all Videos </b></p>
                    </a>
                </div>

            </div>

            <div class="xl:grid xl:grid-cols-4 xl:gap-2 lg:mb-3 lg:h-168 lg:border-b lg:border-dashed lg:border-l lg:border-gray-sl">

                <div class="2xl:col-span-3 lg:col-span-4 mx-auto my-8  ">

                    <ul class="tabs w-11/12 mx-6 text-center justify-around hidden lg:inline-flex">
                        <li data-tab-target="#trending" class="tab active">Trending</li>
                        <li data-tab-target="#news" class="tab ">News</li>
                        <li data-tab-target="#entertainment" class="tab ">Entertainment</li>
                        <li data-tab-target="#celebs" class="tab ">Celebs</li>
                        <li data-tab-target="#movie" class="tab ">Movie</li>
                        <li data-tab-target="#lifestyle" class="tab ">Lifestyle</li>
                        <li data-tab-target="#sports" class="tab ">Sports</li>
                        <li data-tab-target="#tech" class="tab ">Tech</li>
                        <li data-tab-target="#business" class="tab ">Business</li>
                        <li data-tab-target="#auto" class="tab ">Auto</li>
                    </ul>

                    <div class="tab-content mx-5">

                        <div id="trending" data-tab-content class="active">
                            <div class="py-4 flex-shrink-0 relative">
                                <div class="absolute left-2 lg:left-8 top-40 lg:top-112 lg:text-4xl text-white lg:px-6 lg:py-4 px-4 py-2 border-2 rounded-full border-white">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                                <p class="absolute pt-32 lg:pt-96 ml-20 lg:ml-36 lg:w-128 text-sm lg:text-4xl text-white font-merriweather">
                                    Isro launches 104 satellites in a
                                    single mission to create world record</p>
                                <p class="absolute pt-44 lg:pt-128 ml-20 lg:ml-36 lg:w-108 lg:text-2xl text-sm text-white ">
                                    2:30 | By Telegraph</p>
                                <img src="../image/tenlua.png" alt="" class="2xl:w-256 lg:h-144 lg:w-full object-cover">
                            </div>
                        </div>

                        <div id="news" data-tab-content class="">
                            <div class="py-4 flex-shrink-0 relative">
                                <div class="absolute left-2 lg:left-8 top-40 lg:top-112 lg:text-4xl text-white lg:px-6 lg:py-4 px-4 py-2 border-2 rounded-full border-white">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                                <p class="absolute pt-32 lg:pt-96 ml-20 lg:ml-36 lg:w-128 text-sm lg:text-4xl text-white font-merriweather">
                                    Isro launches 104 satellites in a
                                    single mission to create world record</p>
                                <p class="absolute pt-44 lg:pt-128 ml-20 lg:ml-36 lg:w-108 lg:text-2xl text-sm text-white ">
                                    2:30 | By Telegraph</p>
                                <img src="../image/tongthong.png" alt="" class="2xl:w-256 lg:h-144 lg:w-full object-cover">
                            </div>
                        </div>

                        <div id="entertainment" data-tab-content class="">
                            <div class="py-4 flex-shrink-0 relative">
                                <div class="absolute left-2 lg:left-8 top-40 lg:top-112 lg:text-4xl text-white lg:px-6 lg:py-4 px-4 py-2 border-2 rounded-full border-white">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                                <p class="absolute pt-32 lg:pt-96 ml-20 lg:ml-36 lg:w-128 text-sm lg:text-4xl text-white font-merriweather">
                                    Isro launches 104 satellites in a
                                    single mission to create world record</p>
                                <p class="absolute pt-44 lg:pt-128 ml-20 lg:ml-36 lg:w-108 lg:text-2xl text-sm text-white ">
                                    2:30 | By Telegraph</p>
                                <img src="../image/tenlua.png" alt="" class="2xl:w-256 lg:h-144 lg:w-full object-cover">
                            </div>
                        </div>

                        <div id="celebs" data-tab-content class="">
                            <div class="py-4 flex-shrink-0 relative">
                                <div class="absolute left-2 lg:left-8 top-40 lg:top-112 lg:text-4xl text-white lg:px-6 lg:py-4 px-4 py-2 border-2 rounded-full border-white">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                                <p class="absolute pt-32 lg:pt-96 ml-20 lg:ml-36 lg:w-128 text-sm lg:text-4xl text-white font-merriweather">
                                    Isro launches 104 satellites in a
                                    single mission to create world record</p>
                                <p class="absolute pt-44 lg:pt-128 ml-20 lg:ml-36 lg:w-108 lg:text-2xl text-sm text-white ">
                                    2:30 | By Telegraph</p>
                                <img src="../image/tongthong.png" alt="" class="2xl:w-256 lg:h-144 lg:w-full object-cover">
                            </div>
                        </div>

                        <div id="sports" data-tab-content class="">
                            <div class="py-4 flex-shrink-0 relative">
                                <div class="absolute left-2 lg:left-8 top-40 lg:top-112 lg:text-4xl text-white lg:px-6 lg:py-4 px-4 py-2 border-2 rounded-full border-white">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                                <p class="absolute pt-32 lg:pt-96 ml-20 lg:ml-36 lg:w-128 text-sm lg:text-4xl text-white font-merriweather">
                                    Isro launches 104 satellites in a
                                    single mission to create world record</p>
                                <p class="absolute pt-44 lg:pt-128 ml-20 lg:ml-36 lg:w-108 lg:text-2xl text-sm text-white ">
                                    2:30 | By Telegraph</p>
                                <img src="../image/tenlua.png" alt="" class="2xl:w-256 lg:h-144 lg:w-full object-cover">
                            </div>
                        </div>

                        <div id="lifestyle" data-tab-content class="">
                            <div class="py-4 flex-shrink-0 relative">
                                <div class="absolute left-2 lg:left-8 top-40 lg:top-112 lg:text-4xl text-white lg:px-6 lg:py-4 px-4 py-2 border-2 rounded-full border-white">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                                <p class="absolute pt-32 lg:pt-96 ml-20 lg:ml-36 lg:w-128 text-sm lg:text-4xl text-white font-merriweather">
                                    Isro launches 104 satellites in a
                                    single mission to create world record</p>
                                <p class="absolute pt-44 lg:pt-128 ml-20 lg:ml-36 lg:w-108 lg:text-2xl text-sm text-white ">
                                    2:30 | By Telegraph</p>
                                <img src="../image/tongthong.png" alt="" class="2xl:w-256 lg:h-144 lg:w-full object-cover">
                            </div>
                        </div>

                        <div id="sports" data-tab-content class="">
                            <div class="py-4 flex-shrink-0 relative">
                                <div class="absolute left-2 lg:left-8 top-40 lg:top-112 lg:text-4xl text-white lg:px-6 lg:py-4 px-4 py-2 border-2 rounded-full border-white">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                                <p class="absolute pt-32 lg:pt-96 ml-20 lg:ml-36 lg:w-128 text-sm lg:text-4xl text-white font-merriweather">
                                    Isro launches 104 satellites in a
                                    single mission to create world record</p>
                                <p class="absolute pt-44 lg:pt-128 ml-20 lg:ml-36 lg:w-108 lg:text-2xl text-sm text-white ">
                                    2:30 | By Telegraph</p>
                                <img src="../image/tenlua.png" alt="" class="2xl:w-256 lg:h-144 lg:w-full object-cover">
                            </div>
                        </div>

                        <div id="tech" data-tab-content class="">
                            <div class="py-4 flex-shrink-0 relative">
                                <div class="absolute left-2 lg:left-8 top-40 lg:top-112 lg:text-4xl text-white lg:px-6 lg:py-4 px-4 py-2 border-2 rounded-full border-white">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                                <p class="absolute pt-32 lg:pt-96 ml-20 lg:ml-36 lg:w-128 text-sm lg:text-4xl text-white font-merriweather">
                                    Isro launches 104 satellites in a
                                    single mission to create world record</p>
                                <p class="absolute pt-44 lg:pt-128 ml-20 lg:ml-36 lg:w-108 lg:text-2xl text-sm text-white ">
                                    2:30 | By Telegraph</p>
                                <img src="../image/tongthong.png" alt="" class="2xl:w-256 lg:h-144 lg:w-full object-cover">
                            </div>
                        </div>

                        <div id="business" data-tab-content class="">
                            <div class="py-4 flex-shrink-0 relative">
                                <div class="absolute left-2 lg:left-8 top-40 lg:top-112 lg:text-4xl text-white lg:px-6 lg:py-4 px-4 py-2 border-2 rounded-full border-white">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                                <p class="absolute pt-32 lg:pt-96 ml-20 lg:ml-36 lg:w-128 text-sm lg:text-4xl text-white font-merriweather">
                                    Isro launches 104 satellites in a
                                    single mission to create world record</p>
                                <p class="absolute pt-44 lg:pt-128 ml-20 lg:ml-36 lg:w-108 lg:text-2xl text-sm text-white ">
                                    2:30 | By Telegraph</p>
                                <img src="../image/tenlua.png" alt="" class="2xl:w-256 lg:h-144 lg:w-full object-cover">
                            </div>
                        </div>

                        <div id="auto" data-tab-content class="">
                            <div class="py-4 flex-shrink-0 relative">
                                <div class="absolute left-2 lg:left-8 top-40 lg:top-112 lg:text-4xl text-white lg:px-6 lg:py-4 px-4 py-2 border-2 rounded-full border-white">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                                <p class="absolute pt-32 lg:pt-96 ml-20 lg:ml-36 lg:w-128 text-sm lg:text-4xl text-white font-merriweather">
                                    Isro launches 104 satellites in a
                                    single mission to create world record</p>
                                <p class="absolute pt-44 lg:pt-128 ml-20 lg:ml-36 lg:w-108 lg:text-2xl text-sm text-white ">
                                    2:30 | By Telegraph</p>
                                <img src="../image/tongthong.png" alt="" class="2xl:w-256 lg:h-144 lg:w-full object-cover">
                            </div>
                        </div>

                    </div>

                </div>

                <div class="lg:col-span-1 w-full h-160 border-l border-gray overflow-y-auto mt-4 py-8 hidden 2xl:block">

                    <div class="relative w-4/5 mx-auto my-4">
                        <p class="absolute text-white text-xl mt-20 w-72 mx-3 font-merriweather">Isro launches 104
                            satellites in a single
                            mission </p>
                        <img src="../image/menu-img1.png " alt="" class="object-cover">
                    </div>

                    <div class="relative w-4/5 mx-auto my-4">
                        <p class="absolute text-white text-xl mt-20 w-72 mx-3 font-merriweather">Isro launches 104
                            satellites in a single
                            mission </p>
                        <img src="../image/menu-img2.png" alt="" class="object-cover">
                    </div>

                    <div class="relative w-4/5 mx-auto my-4">
                        <p class="absolute text-white text-xl mt-20 w-72 mx-3 font-merriweather">Isro launches 104
                            satellites in a single
                            mission </p>
                        <img src="../image/menu-img3.png" alt="" class="object-cover">
                    </div>

                    <div class="relative w-4/5 mx-auto my-4">
                        <p class="absolute text-white text-xl mt-20 w-72 mx-3 font-merriweather">Isro launches 104
                            satellites in a single
                            mission </p>
                        <img src="../image/menu-img1.png" alt="" class="object-cover">
                    </div>

                    <div class="relative w-4/5 mx-auto my-4">
                        <p class="absolute text-white text-xl mt-20 w-72 mx-3 font-merriweather">Isro launches 104
                            satellites in a single
                            mission </p>
                        <img src="../image/menu-img2.png" alt="" class="object-cover">
                    </div>

                    <div class="relative w-4/5 mx-auto my-4">
                        <p class="absolute text-white text-xl mt-20 w-72 mx-3 font-merriweather">Isro launches 104
                            satellites in a single
                            mission </p>
                        <img src="../image/menu-img3.png" alt="" class="object-cover">
                    </div>

                </div>

            </div>

            <div class="lg:grid lg:grid-cols-5 lg:gap-4 my-6 lg:pt-10 overflow-auto h-full 2xl:h-148">

                <a href="{{ route('web.detail')}}">
                    <div class="lg:w-full lg:h-48 relative">
                        <img src="../image/img-sub/img1.png" alt="" class="object-cover absolute w-32 h-32 mt-16 lg:ml-0 md:ml-128 sm:ml-108 vs:ml-52 lg:static lg:w-full lg:h-full lg:mx-0 lg:my-0">
                        <h3 class="text-lg lg:text-2xl py-5 font-merriweather"><b>The Intimate Lens of Ed van der
                                Elsken</b></h3>
                        <p class="text-sm lg:text-xl pb-10 w-1/2 lg:w-full">Two European museums are presenting
                            retrospectives
                            of a man many consider
                            to be one of the best street photographers of the 20th century.</p>
                    </div>
                </a>
                <a href="{{ route('web.detail')}}">

                    <div class="lg:w-full lg:h-48 relative">
                        <img src="../image/img-sub/img2.png" alt="" class="object-cover absolute w-32 h-32 mt-16 lg:ml-0 md:ml-128 sm:ml-108 vs:ml-52 lg:static lg:w-full lg:h-full lg:mx-0 lg:my-0">
                        <h3 class="text-lg lg:text-2xl py-5 font-merriweather"><b>Gauging the Art Market’s Health</b>
                        </h3>
                        <p class="text-sm lg:text-xl pb-10 w-1/2 lg:w-full">Auctions of Impressionist, modern and
                            Surrealist art
                            at Sotheby’s and
                            Christie’s will be the first major test of buoyancy since the inauguration in the U.S.</p>
                    </div>
                </a>
                <a href="{{ route('web.detail')}}">
                    <div class="lg:w-full lg:h-48 relative">
                        <img src="../image/img-sub/img3.png" alt="" class="object-cover absolute lg:static w-32 h-32 mt-16 lg:ml-0 md:ml-128 sm:ml-108 vs:ml-52 lg:w-full lg:h-full lg:mx-0 lg:my-0">
                        <h3 class="text-lg lg:text-2xl py-5 font-merriweather"><b>What happen when you skip
                                breakfast</b></h3>
                        <p class="text-sm lg:text-xl pb-10 w-1/2 lg:w-full">The old saying, ‘Eat breakfast like a king,
                            lunch
                            like a prince and dinner
                            like a pauper’ couldn’t ring truer. Beginning your day with a heavy breakfast.</p>
                    </div>
                </a>

                <a href="{{ route('web.detail')}}">

                    <div class="lg:w-full lg:h-48 relative">
                        <img src="../image/img-sub/img4.png" alt="" class="object-cover absolute lg:static w-32 h-32 mt-16 lg:ml-0 md:ml-128 sm:ml-108 vs:ml-52 lg:w-full lg:h-full lg:mx-0 lg:my-0">
                        <h3 class="text-lg lg:text-2xl py-5 font-merriweather"><b>In London, the Rise of Old-Fashioned
                            </b></h3>
                        <p class="text-sm lg:text-xl pb-10 w-1/2 lg:w-full">Two European museums are presenting
                            retrospectives
                            of a man many consider
                            to be one of the best street photographers of the 20th century.</p>
                    </div>

                </a>

                <a href="{{ route('web.detail')}}">
                    <div class="lg:w-full lg:h-48 relative">
                        <img src="../image/img-sub/img5.png" alt="" class="object-cover absolute lg:static w-32 h-32 mt-16 lg:ml-0 md:ml-128 sm:ml-108 vs:ml-52 lg:w-full lg:h-full lg:mx-0 lg:my-0">
                        <h3 class="text-lg lg:text-2xl py-5 font-merriweather"><b>T6 myths about keeping an aquarium</b>
                        </h3>
                        <p class="text-sm lg:text-xl pb-10 w-1/2 lg:w-full">Keeping fish in aquariums is a hobby which
                            is quite
                            common. People are
                            often very apprehensive about keeping fish and having an aquarium.</p>
                    </div>
                </a>
            </div>

        </div>

        <div class="col-span-1 mx-5 h-auto hidden lg:block">
            <div class="bg-yellow w-36 h-8 py-1 my-4 text-center">MOST POPULAR</div>

            <div class="hover:shadow-md text-xl border-b border-dashed border-gray-300 ">
                <div class="absolute text-8xl text-lammo ">1</div>
                <div class="pl-10 py-5 relative">
                    <a href="{{ route('web.detail')}}">5 buyout candidates the Celtics could target after quiet trade deadline</a>
                </div>
            </div>
            <div class="hover:shadow-md text-xl border-b border-dashed border-gray-300">
                <div class="absolute text-8xl text-lammo ">2</div>
                <div class="pl-10 py-5 relative">
                    <a href="{{ route('web.detail')}}">White House bars major news outlets from media gaggle</a>
                </div>
            </div>
            <div class="hover:shadow-md text-xl border-b border-dashed  border-gray-300">
                <div class="absolute text-8xl text-lammo ">3</div>
                <div class="pl-10 py-5 relative">
                    <a href="{{ route('web.detail')}}">Watch the removal of a Jeep buried in a Cape Cod sand dune for 40 years</a>
                </div>
            </div>
            <div class="hover:shadow-md text-xl border-b border-dashed border-gray-300">
                <div class="absolute text-8xl text-lammo ">4</div>
                <div class="pl-10 py-5 relative">
                    <a href="{{ route('web.detail')}}">2nd suspect arrested in gruesome Peabody double killing</a>
                </div>
            </div>
            <div class="hover:shadow-md text-xl border-b border-dashed border-gray-300">
                <div class="absolute text-8xl text-lammo ">5</div>
                <div class="pl-10 py-5 relative">
                    <a href="{{ route('web.detail')}}">6 charged in death of UConn student run over after party</a>
                </div>
            </div>
            <div class="hover:shadow-md text-xl border-b border-dashed border-gray-300">
                <div class="absolute text-8xl text-lammo ">6</div>
                <div class="pl-10 py-5 relative">
                    <a href="{{ route('web.detail')}}">Derek Jeter loves watching this Red Sox player play</a>
                </div>
            </div>
            <div class="hover:shadow-md text-xl border-b border-dashed border-gray-300">
                <div class="absolute text-8xl text-lammo ">7</div>
                <div class="pl-10 py-5 relative">
                    <a href="{{ route('web.detail')}}">5 buyout candidates the Celtics could target after quiet trade deadline</a>
                </div>
            </div>
            <div class="hover:shadow-md text-xl">
                <div class="absolute text-8xl text-lammo ">8</div>
                <div class="pl-10 py-5 relative">
                    <a href="{{ route('web.detail')}}">White House bars major news outlets from media gaggle</a>
                </div>
            </div>
            <div class="hover:shadow-md text-xl border-b border-dashed border-gray-300">
                <div class="absolute text-8xl text-lammo ">9</div>
                <div class="pl-10 py-5 relative">
                    <a href="{{ route('web.detail')}}">Watch the removal of a Jeep buried in a Cape Cod sand dune for 40 years</a>
                </div>
            </div>
            <div class="hover:shadow-md text-xl ">
                <div class="absolute text-8xl text-lammo ">10</div>
                <div class="pl-10 py-5 relative">
                    <a href="{{ route('web.detail')}}">2nd suspect arrested in gruesome Peabody double killing</a>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
