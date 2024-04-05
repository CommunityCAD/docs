@extends('layouts.docs')

@section('content')
    <main class="relative flex justify-center mx-auto max-w-8xl sm:px-2 lg:px-8 xl:px-12">

        @include('inc.docs.sidebar')
        <div class="flex-auto max-w-3xl min-w-0 px-4 py-10 mx-auto lg:pr-0 lg:pl-8 xl:px-16 text-white">
            <article class="">
                <header class="">
                    <p class="text-base font-medium text-slate-300">
                        Getting started
                    </p>

                    <h1 class="text-3xl font-bold tracking-tight">
                        Known Issues
                    </h1>
                </header>

                <p class="mt-2 text-xl text-slate-300">
                    Current Known Issues with the CAD System and ETA on fixes.
                </p>

                <div class="space-y-3" id="overview">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Data integrity issue with officers
                        <span
                            class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-700/10">Major</span>
                    </h3>

                    <p class="">
                        Identified issue that if you remove a member from a department or delete the department it will
                        block them from making another officer.
                    </p>

                    <p>🔨 No work around. Contact Gage in your individual chats to fix issues.</p>
                    <p>⌛ No ETA given at this point.</p>
                </div>

                <div class="space-y-3" id="overview">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Data integrity issue with civilians
                        <span
                            class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-700/10">Major</span>
                    </h3>

                    <p class="">
                        Identified issue that if you delete a civilian the business screen may show 500 error and some
                        tickets will not open.
                    </p>

                    <p>🔨 No work around. Contact Gage in your individual chats to fix issues.</p>
                    <p>⌛ No ETA given at this point.</p>
                </div>

                <div class="space-y-3" id="overview">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        URLs in setting pages
                        <span
                            class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-700 ring-1 ring-inset ring-yellow-700/10">Minor</span>
                    </h3>

                    <p class="">
                        Identified bug that if the url is too long it will cause errors. This impacts settings pages and
                        department logos.
                    </p>

                    <p>🔨 If using a Discord link delete everything after including the "?" in the URL.</p>
                    <p>⌛ No ETA given at this point.</p>
                </div>

                <div class="space-y-3" id="overview">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        No way to kick dispatch offline
                        <span
                            class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-700 ring-1 ring-inset ring-yellow-700/10">Minor</span>
                    </h3>

                    <p class="">
                        Identified issue that if the Active Dispatcher doesn't go offline there isn't a way to boot them
                        offline early so another dispatcher can take over.
                    </p>

                    <p>🔨 Don't stay on duty when you are going offline.</p>
                    <p>⌛ No ETA given at this point.</p>
                </div>

                <div class="space-y-3" id="overview">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        No way to kick dispatch offline
                        <span
                            class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-700/10">Non-impacting</span>
                    </h3>

                    <p class="">
                        Identified issue that the auto kick off of CAD doesn't work as intended. Kicks users off when they
                        log into the CAD agian not every 4 hours like intended.
                    </p>

                    <p>🔨 Not a breaking issue. Dispatchers can force units off duty with the "Hard off duty" status.</p>
                    <p>⌛ No ETA given at this point.</p>
                </div>

                <div class="space-y-3" id="overview">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Inaccurate number counts on portal page
                        <span
                            class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-700/10">Non-impacting</span>
                    </h3>

                    <p class="">
                        Identified issue that the counter on the home page doesn't accurately count members.
                    </p>

                    <p>🔨 Not a breaking issue. Don't take the number at face value.</p>
                    <p>⌛ No ETA given at this point.</p>
                </div>

                <div class="space-y-3" id="questions">

                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Still have questions?
                    </h3>

                    <p class="">
                        Still have questions? <a class="underline hover:no-underline" href="https://discord.gg/tmZWX7q2yZ"
                            target="_BLANK">Talk
                            to support</a>.
                    </p>
                </div>

            </article>

            {{-- <dl class="flex pt-6 mt-6 border-t border-slate-200">
                <!-- <div class="mr-auto text-left"> -->
                <!--   <dt class="text-sm font-normal tracking-tight text-slate-600"> -->
                <!--     Previous -->
                <!--   </dt> -->

                <!--   <dd class="mt-1"> -->
                <!--     <a class="text-base font-semibold text-slate-900 hover:underline" href="#"> -->
                <!--       Blah -->
                <!--     </a> -->
                <!--   </dd> -->
                <!-- </div> -->

                <div class="ml-auto text-right">
                    <dt class="text-sm font-normal tracking-tight text-slate-600">
                        Next
                    </dt>

                    <dd class="mt-1">
                        <a class="text-base font-semibold text-slate-900 hover:underline" href="#">
                            How does Spinal work?
                        </a>
                    </dd>
                </div>
            </dl> --}}
        </div>
    </main>
@endsection
