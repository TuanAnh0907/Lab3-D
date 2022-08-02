<div class="px-5 py-10 bg-gray-sl h-full relative shadow-lg border-gray rounded-b-xl">
    <div class="mx-8">
        <div>
            <div class="text-left text-gray">
                <p>USER</p>
            </div>
            <a href="{{ route('admin.user.index') }}">
                <div class="my-5">
                    <div class="inline-flex gap-3 w-full">
                        <div>
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="text-center">
                            <p>User Manager</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div>
            <div class="text-left text-gray">
                <p>CATEGORY</p>
            </div>
            <div class="my-5">
                <div class="inline-flex gap-3 w-full">
                    <div>
                        <i class="fa-solid fa-clipboard-list"></i>
                    </div>
                    <div class="text-center">
                        <p>Category Manager</p>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="text-left text-gray">
                <p>POST</p>
            </div>
            <div class="my-5">
                <div class="inline-flex gap-3 w-full">
                    <div>
                        <i class="fa-solid fa-list"></i>
                    </div>
                    <div class="text-center">
                        <p>Post Manager</p>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="text-left text-gray">
                <p>APPS</p>
            </div>
            <div class="my-5">

                <div class="inline-flex gap-3 w-full my-3">
                    <div>
                        <i class="fa-solid fa-at"></i>
                    </div>
                    <div class="text-center">
                        <p>Email</p>
                    </div>
                </div>

                <div class="inline-flex gap-3 w-full my-3">
                    <div>
                        <i class="fa-solid fa-toolbox"></i>
                    </div>
                    <div class="text-center">
                        <p>Todo</p>
                    </div>
                </div>

                <div class="inline-flex gap-3 w-full my-3">
                    <div>
                        <i class="fa-brands fa-aws"></i>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('web.home')}}" target="_blank">
                            <p>Go to WEBSITE</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
