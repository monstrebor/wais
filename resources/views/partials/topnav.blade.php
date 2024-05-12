<div style="width: auto; background: black; border: 2px;">
    <div>
        <h1 style="color: aliceblue; text-align: center;">MNSMPC</h1>
        <div style="margin-right: 40px; padding: 5px;">

            @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                <div>
                    <button style="border: 1px solid white;" id="accountBtn">
                        <a style="padding: 10px" class=" dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Membership
                        </a>
                    </button>
                    <div id="accountDialog" style="display: none; position: fixed; z-index: 1; left: 0; top: 0;
                    width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4);">
                        <div style="position: relative; background-color: #fefefe; margin: 10% auto; padding: 2%; border: 2px solid #000000; border-radius: 10%;
                        width: 15%; text-align: center;">
                            <button style="color: rgb(255, 0, 0); margin-left: 70%;" onclick="closeDialog()">X</button>
                            <p style="color: black; padding-bottom: 10%"><strong>Select your account type</strong></p>
                            <div style="flex">
                                <button style="padding: 4px; color: black; border: 1px solid rgb(0, 0, 0);" onclick="selectAccountType('regular')"> Regular </button>
                                <button style="padding: 4px; color: black; border: 1px solid rgb(0, 0, 0); margin-left: 5%;" onclick="selectAccountType('associate')"> Associate </button>
                            </div>
                        </div>
                    </div>
                </div>
                <button style="margin-left: 5px; border: 1px solid white;">
                    <a
                    href="{{ url('/dashboard') }}"
                    class="dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    style="padding: 10px"
                >
                    Dashboard
                </a>
                </button>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Register
                        </a>
                    @endif
        </div>
            @endauth
        </nav>
    @endif
    </div>
</div>
