@extends('web.layout.master')

@section('content')

<div class="font-roboto">

    <div class="hidden lg:inline-flex gap-2 w-full px-24 ">
        <div class="border-l-8 border-gray">
            Home >
        </div>
        <div>
            World >
        </div>
        <div class=" text-blue">
            What One Photo Tells Us About North Korea’s Nuclear Program >
        </div>
    </div>

    <div class="lg:grid lg:grid-cols-4 lg:gap-5 px-2 lg:mx-20 lg:my-3 ">

        <div class="lg:col-span-3">

            <div class="bg-gray-sl h-8 lg:px-3 my-5 py-1"><b>WORLD</b></div>

            <div class="text-4xl my-5">
                <b>What One Photo Tells Us About North Korea’s Nuclear Program</b>
            </div>

            <div class="inline-flex justify-between w-full text-gray my-5">
                <div class="inline-flex gap-3">
                    <div> <i class="fa-solid fa-clock "></i>
                    </div>
                    <div>
                        <h3>22 thg 7, 2022</>
                    </div>
                </div>
                <div class=" inline-flex gap-3">
                    <div>
                        <i class="fa-solid fa-eye"></i> 15
                    </div>
                    <div>
                        <i class="fa-solid fa-comment-dots"></i> 1
                    </div>
                </div>
            </div>

            <div class="my-4 text-2xl">
                <img src="../image/hot.png" alt="" class="bg-cover bg-no-repeat bg-center w-full h-auto object-cover">
                <p class=""> Clues from a propaganda photo reveal details about North Korea’s expanding weapons programs and internal politics.</p>
                <p class="">
                    Images like this one might look silly, but they are rich with insights into the country’s military and politics. By using high-tech forensics and traditional detective work, analysts and intelligence agencies can use photos to track North Korea’s internal politics and expanding weapons programs with stunning granularity.
                    <br>
                    Several experts walked us through this photo of Kim Jong-un, North Korea’s leader, unveiling what he claimed was a new nuclear device. But the image, from March 2016, may show more than Mr. Kim intended: the possible range of the missile behind him, his relationship with the military, even his precise location.
                </p>

                <p class="">
                    Analysts are unsure about the metal plug. It could be a routine component to trigger detonation or it could be used to inject gas, making the device more efficient. This would allow North Korea to build more warheads out of limited plutonium supplies, multiplying the size of its arsenal.
                    <br> <br>
                    There’s also disagreement over the nozzle. Some suspect it’s a safety feature used to enter the nuclear “pit” just before detonation; others say it could be used to arm the warhead. Analysts hope new images will emerge that will help them solve these riddles.
                </p>

                <p class="w-full text-right text-3xl my-10"> <b>John</b> </p>
            </div>

            <div class="inline-flex justify-between w-full">
                <div class="text-gray inline-flex">
                    <div class="border px-4 py-2  "><i class="fa-solid fa-arrow-left-long "></i></div>
                    <div class="inline-flex border mx-5 px-5 py-2">
                        <div><i class="fa-solid fa-download mx-2"></i></div>
                        <div>Save</div>
                    </div>
                </div>

                <div class="inline-flex gap-4 py-2 mx-4">
                    <div>Share</div>
                    <div><i class="fa-brands fa-facebook"></i></div>
                    <div><i class="fa-brands fa-twitter"></i></div>
                    <div><i class="fa-solid fa-envelope"></i></div>
                </div>
            </div>

            <div class="px-3 lg:px-10 my-5 border border-gray rounded-md ">

                <div class= "text-lg lg:text-2xl mb-4 border-b px-2 w-24">Comment</div>

                <div class="">
                    <input class="bg-gray-sl placeholder:px-10 focus:outline rounded-md border border-gray \ w-full lg:w-2/3 h-10 relative" type="search" size="20" placeholder="Your opinion">
                    <i class="fa-solid fa-face-smile absolute my-3 -ml-8"></i>
                </div>

                <div class="border border-dashed w-full border-gray my-6"></div>

               <div class="my-2">

                    <div class="inline-flex gap-5 w-full relative">
                        <div class="px-2 my-1 rounded-full bg-gray tetx-sm lg:text-xl absolute ">T</div>
                        <div class="py-1 tetx-sm lg:text-xl ml-10 lg:ml-12">Tony</div>
                        <div class="py-1 tetx-sm lg:text-xl" >Cules from a propaganda photo reveal datail about North Korea's Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid id, ipsam quis qui voluptas voluptatibus rerum molestias temporibus doloremque dolore ut quos minima. Eaque nihil rerum tempore, quia voluptate repellat.</div>
                    </div>

                    <div class="inline-flex gap-5 w-auto lg:w-full ml-24 lg:ml-32">
                        <div><i class="fa-regular fa-thumbs-up"></i> 15 </div>
                        <div>Reply</div>
                        <div>Share</div>
                    </div>
                </div>

                <div class="my-2">

                    <div class="inline-flex gap-5 w-full relative">
                        <div class="px-2 my-1 rounded-full bg-gray tetx-sm lg:text-xl absolute ">T</div>
                        <div class="py-1 tetx-sm lg:text-xl ml-10 lg:ml-12">Mary</div>
                        <div class="py-1 tetx-sm lg:text-xl" >Cules from a propaganda photo reveal datail about North Korea's</div>
                    </div>

                    <div class="inline-flex gap-5 w-auto lg:w-full ml-24 lg:ml-32">
                        <div><i class="fa-regular fa-thumbs-up"></i> 15 </div>
                        <div>Reply</div>
                        <div>Share</div>
                    </div>

                    <div class="inline-flex gap-3 w-auto ml-20 lg:ml-32 my-3 text-gray">
                        <div><img src="../image/replyreply.png" alt="" class="w-6 h-6 object-cover"></div>
                        <div>2 answer</div>
                    </div>

                </div>
            </div>

        </div>


        <div class="lg:col-span-1 px-0 lg:px-2">

            <div class="my-5 hidden lg:block w-full">
                <div class="text-xl lg:text-2xl w-32 text-center bg-gray-sl">Category</div>

                <div class="border border-gray-sl rounded-md my-5 py-5">
                    <div class="border-b border-dashed border-gray-sl my-2 mx-10">Politics</div>
                    <div class="border-b border-dashed border-gray-sl my-2 mx-10">Business</div>
                    <div class="border-b border-dashed border-gray-sl my-2 mx-10">Opinion</div>
                    <div class="border-b border-dashed border-gray-sl my-2 mx-10">Tech</div>
                    <div class="border-b border-dashed border-gray-sl my-2 mx-10">Sclence</div>
                </div>

                <div class="inline-flex justify-between w-full border-b border-[#0C79FF]">
                    <input class="h-10 placeholder:pl-3 w-2/3 focus:border-none" type="text" placeholder="Enter keywords">
                    <button class="bg-[#0C79FF] text-white px-0  lg:px-2 py-2 h-10 w-1/3 text-lg"> <b>Search</b> </button>
                </div>
            </div>

            <div>
                <div class="bg-gray w-1/4 text-center mx-3 lg:mx-0 py-1 my-6">NEWS</div>

                <div class="relative my-3">
                    <img src="../image/img-sub/img1.png" alt="" class="object-cover rounded-xl w-auto h-auto">
                    <p class="absolute top-44 text-white text-xl lg:text-2xl w-4/5 mx-6" ><b>Isro launches 104 satellites in a single mission</b> </p>
                    <p class="absolute top-60 text-white mx-6" >2:30 | By Telegraph</p>
                </div>

                <div class="relative my-3">
                    <img src="../image/img-sub/img2.png" alt="" class="object-cover rounded-xl w-auto h-auto">
                    <p class="absolute top-44 text-white text-xl lg:text-2xl w-4/5 mx-6" ><b>Isro launches 104 satellites in a single mission</b></p>
                    <p class="absolute top-60 text-white mx-6" >2:30 | By Telegraph</p>
                </div>

                <div class="relative my-3 hidden lg:block">
                    <img src="../image/img-sub/img3.png" alt="" class="object-cover rounded-xl w-auto h-auto">
                    <p class="absolute top-44 text-white text-xl lg:text-2xl w-4/5 mx-6" ><b>Isro launches 104 satellites in a single mission</b></p>
                    <p class="absolute top-60 text-white mx-6" >2:30 | By Telegraph</p>
                </div>

                <div class="relative my-3 hidden lg:block">
                    <img src="../image/img-sub/img4.png" alt="" class="object-cover rounded-xl w-auto h-auto">
                    <p class="absolute top-44 text-white text-xl lg:text-2xl w-4/5 mx-6" ><b>Isro launches 104 satellites in a single mission</b></p>
                    <p class="absolute top-60 text-white mx-6" >2:30 | By Telegraph</p>
                </div>

            </div>

            <div class="w-full">
                <div class=" py-1 my-3 w-1/3  bg-gray text-center">VIEW MORE</div>

                <div>
                    <p class="text-lg lg:text-2xl"><b>An Alarmed Base Prods Democrats Into an All-Out War</b></p>
                    <p>After the election, Democrats debated whether to confront Mr. Trump or seek compromise, but riled-up liberals have pushed party leaders into a fight.</p>
                </div>

                <div class="border-b border-gray-sl w-auto my-2"></div>
                <div>
                    <p class="text-lg lg:text-2xl"><b>Transgender Student on the Front Lines of the Rights Battle</b></p>
                    <p>Gavin Grimm, 17, whose initials are on a case heading to the Supreme Court, has become the new face of the transgender rights movement.</p>
                </div>
            </div>

        </div>

    </div>

    <div class="lg:grid lg:grid-cols-4 gap-3 px-3 lg:px-20 my-3 py-3 overflow-auto inline-flex w-full">

        <div class="p-5 border border-gray flex-shrink-0 w-72 lg:w-full">
            <img src="../image/pic1.png" alt="" class="rounded-lg object-cover h-auto w-auto">
            <p class="line-clamp-2 my-3">Women Do Like to Compete Against Themselves </p>
            <div class="inline-flex justify-between w-full text-gray my-5">
                <div class="inline-flex gap-3">
                    <div> <i class="fa-solid fa-clock "></i>
                    </div>
                    <div>
                        <h3>22 thg 7, 2022</>
                    </div>
                </div>
                <div class=" inline-flex gap-3">
                    <div>
                        <i class="fa-solid fa-eye"></i> 15
                    </div>
                    <div>
                        <i class="fa-solid fa-comment-dots"></i> 1
                    </div>
                </div>
            </div>
        </div>

        <div class="p-5 border border-gray flex-shrink-0 w-72 lg:w-full">
            <img src="../image/pic2.png" alt="" class="rounded-lg object-cover w-88 h-auto lg:w-auto">
            <p class="line-clamp-2 my-3">Women Do Like to Compete Against Themselves </p>
            <div class="inline-flex justify-between w-full text-gray my-5">
                <div class="inline-flex gap-3">
                    <div> <i class="fa-solid fa-clock "></i>
                    </div>
                    <div>
                        <h3>22 thg 7, 2022</>
                    </div>
                </div>
                <div class=" inline-flex gap-3">
                    <div>
                        <i class="fa-solid fa-eye"></i> 15
                    </div>
                    <div>
                        <i class="fa-solid fa-comment-dots"></i> 1
                    </div>
                </div>
            </div>
        </div>

        <div class="p-5 border border-gray flex-shrink-0 w-72 lg:w-full">
            <img src="../image/pic3.png" alt="" class="rounded-lg object-cover w-88 h-auto lg:w-auto">
            <p class="line-clamp-2 my-3">Women Do Like to Compete Against Themselves </p>
            <div class="inline-flex justify-between w-full text-gray my-5">
                <div class="inline-flex gap-3">
                    <div> <i class="fa-solid fa-clock "></i>
                    </div>
                    <div>
                        <h3>22 thg 7, 2022</>
                    </div>
                </div>
                <div class=" inline-flex gap-3">
                    <div>
                        <i class="fa-solid fa-eye"></i> 15
                    </div>
                    <div>
                        <i class="fa-solid fa-comment-dots"></i> 1
                    </div>
                </div>
            </div>
        </div>

        <div class="p-5 border border-gray flex-shrink-0 w-72 lg:w-full">
            <img src="../image/pic4.png" alt="" class="rounded-lg object-cover w-88 h-auto lg:w-auto">
            <p class="line-clamp-2 my-3">Women Do Like to Compete Against Themselves </p>
            <div class="inline-flex justify-between w-full text-gray my-5">
                <div class="inline-flex gap-3">
                    <div> <i class="fa-solid fa-clock "></i>
                    </div>
                    <div>
                        <h3>22 thg 7, 2022</>
                    </div>
                </div>
                <div class=" inline-flex gap-3">
                    <div>
                        <i class="fa-solid fa-eye"></i> 15
                    </div>
                    <div>
                        <i class="fa-solid fa-comment-dots"></i> 1
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
