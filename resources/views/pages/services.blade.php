@extends('front.app')
@section('title', config('app.name') . " Services")
@section('content')
    <div class="bg-gray-200 -mt-4 py-16">
        <div class="container">
            <div class="w-full sm:w-2/3">
                <div class="text-4xl text-primary font-semibold">Services</div>
                <div class="text-lg text-gray-600 leading-relaxed mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    A, animi atque debitis delectus dolore dolorem dolorum eaque earum illo incidunt placeat, quas quia
                    quibusdam quo ratione repellendus temporibus veniam voluptas.
                </div>
                <a href="#" class="px-6 py-3 rounded font-semibold uppercase inline-block shadow-lg hover:shadow-none btn-primary">Browse</a>
            </div>
        </div>
    </div>
<div class="my-10">
    <div class="container">
        <div class="flex flex-wrap overflow-hidden sm:-mx-2">
            <div class="w-full sm:w-1/3 sm:px-2 mb-4">
                <div class="bg-white text-center p-4">
                    <div class="w-16 h-16 rounded-full bg-primary text-white inline-flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M254.9 293.4c73 .6 132.3-58.7 131.7-131.8-.6-69.9-59.7-129-129.5-129.6-73-.6-132.3 58.7-131.7 131.8.6 69.9 59.7 129 129.5 129.6zm-3.7-204.1c44.3-2.8 80.9 33.8 78.1 78.2-2.3 36.6-31.9 66.2-68.5 68.6-44.3 2.8-80.9-33.8-78.1-78.2 2.3-36.6 31.9-66.2 68.5-68.6z"/><path d="M256 308.4c-42.8 0-81.4-18.1-108.5-47-1.9-2-5.2-1.7-6.6.7L65.1 394.8c-3.1 5.5.8 12.3 7.2 12.3h80.1c2.9 0 5.6 1.5 7.1 4l39 64.9c3.4 5.7 11.8 5.2 14.6-.8l43-94.6 31.3-68.9c1.4-3-1.2-6.3-4.5-5.7-8.8 1.5-17.7 2.4-26.9 2.4zM364.5 261.3c-14.6 15.5-32.4 28-52.5 36.1-1 .4-1.8 1.1-2.2 2.1l-44.7 97.7c-.5 1.1-.5 2.3 0 3.4l33.9 74.5c2.7 6 11.2 6.5 14.6.8l39-64.9c1.5-2.5 4.2-4 7.1-4h80.1c6.3 0 10.3-6.8 7.2-12.3l-75.8-132.8c-1.5-2.2-4.8-2.6-6.7-.6z"/></svg>
                    </div>
                    <div class="font-semibold text-lg mb-2">
                        Business Strategy
                    </div>
                    <div class="leading-relaxed text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        At deserunt et labore laboriosam repellendus.
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/3 sm:px-2 mb-4">
                <div class="bg-white text-center p-4">
                    <div class="w-16 h-16 rounded-full bg-primary text-white inline-flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M434.6 272.1c-22.4-1.2-41.6 13.2-48.2 32.9h-38.9l-28.4-85.4c-2.2-6.6-8.3-11-15.2-11h-.3c-7 .1-13.1 4.8-15 11.6l-44.5 155.3-52.3-314.1c-1.2-7.5-7.6-13.1-15.2-13.4-7.6-.3-14.3 4.8-16.2 12.1l-53 244.9H48c-8.8 0-16 7.2-16 16s7.2 16 16 16h72c7.3 0 13.8-5 15.5-12.1l37.4-182.2 51.3 307.9c1.2 7.4 7.4 12.9 14.9 13.3h.9c7.1 0 13.4-4.7 15.4-11.6l49.7-173.6 15.7 47.3c2.2 6.5 8.3 11 15.2 11h51.1c6.9 18 24.4 31 44.9 31 27 0 48.8-22.3 48-49.5-.8-24.8-20.7-45.1-45.4-46.4z"/></svg>
                    </div>
                    <div class="font-semibold text-lg mb-2">
                        Market Analytics
                    </div>
                    <div class="leading-relaxed text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusamus amet consequuntur dicta ex impedit!
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/3 sm:px-2 mb-4">
                <div class="bg-white text-center p-4">
                    <div class="w-16 h-16 rounded-full bg-primary text-white inline-flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M60 256c0-51 18.6-97.9 54-135.6 5.3-5.7 5.2-14.8-.4-20.3-2.6-2.6-6.1-4.1-9.7-4.1-3.8 0-7.4 1.6-10.1 4.4C53.3 143.7 32 197.4 32 256c0 58.5 21.3 112.3 61.7 155.5 2.7 2.9 6.3 4.5 10.2 4.5 3.6 0 7.1-1.4 9.7-3.9 2.7-2.6 4.3-6.2 4.4-10 .1-3.9-1.3-7.6-4-10.3C78.6 353.9 60 307 60 256zM418.2 100.4c-2.6-2.8-6.2-4.4-10-4.4-3.6 0-7.1 1.4-9.7 3.9-2.7 2.6-4.3 6.2-4.4 10-.1 3.9 1.3 7.6 4 10.3 35.3 37.8 54 84.7 54 135.7s-18.6 97.9-54 135.7c-5.3 5.6-5.2 14.7.3 20.2 2.5 2.6 6 4 9.7 4 3.9 0 7.6-1.6 10.2-4.6 40.4-43 61.7-96.7 61.7-155.2 0-58.5-21.3-112.4-61.8-155.6z"/><path d="M159.2 347.7c-24.1-24.3-37.3-56.6-37.3-90.9 0-35 13.8-67.9 38.8-92.4 5.5-5.3 5.6-14.2.2-19.8-2.6-2.7-6.2-4.2-10-4.2-3.7 0-7.2 1.4-9.8 4C110.7 174.2 94 214.1 94 256.8c0 41.6 16.1 80.9 45.3 110.6 2.7 2.7 6.2 4.2 9.9 4.2s7.2-1.5 9.8-4.2c2.6-2.6 4.1-6.1 4.1-9.8.2-3.7-1.2-7.2-3.9-9.9zM371 144.5c-2.6-2.6-6-4-9.8-4-3.8 0-7.3 1.5-10 4.1-5.4 5.4-5.4 14.3.1 19.8 25 24.5 38.7 56.5 38.7 91.5 0 34.2-13.1 67.4-37.1 91.8-5.4 5.4-5.3 14.3.1 19.7 2.6 2.6 6.2 4.1 9.8 4.1 3.8 0 7.4-1.5 9.9-4.1C402 337.7 418 297.6 418 256c0-42.5-16.7-81.5-47-111.5z"/><path d="M207.1 183.4c-2.6-2.7-6.2-4.2-10-4.2-3.7 0-7.2 1.4-9.8 4.1-19.8 19.5-30.8 45.6-30.8 73.3 0 27.1 10.5 52.7 29.5 72.1 2.7 2.7 6.2 4.2 10 4.2 3.7 0 7.2-1.4 9.8-4 2.7-2.6 4.2-6.1 4.2-9.9 0-3.8-1.4-7.3-4.1-10-13.8-14-21.4-32.6-21.4-52.5 0-20.3 8-39.2 22.4-53.4 5.4-5.2 5.5-14.1.2-19.7zM325.7 183.2c-2.6-2.6-6-4-9.8-4-3.8 0-7.3 1.5-10 4.1-5.4 5.4-5.4 14.3.1 19.8 14.5 14.3 22.4 33.3 22.4 53.5 0 19.8-7.6 38.5-21.5 52.5-2.6 2.6-4.1 6.2-4 9.9 0 3.7 1.5 7.2 4.1 9.8 2.6 2.6 6.2 4.1 9.8 4.1 3.7 0 7.3-1.5 9.9-4.2 19.1-19.4 29.6-45 29.6-72.1.1-27.8-10.8-53.8-30.6-73.4zM256 218c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17.1-38-38-38z"/></svg>
                    </div>
                    <div class="font-semibold text-lg mb-2">
                        Marketing Social
                    </div>
                    <div class="leading-relaxed text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Dignissimos dolore necessitatibus officia quas rerum.
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap overflow-hidden sm:-mx-2">
            <div class="w-full sm:w-1/3 sm:px-2 mb-4">
                <div class="bg-white text-center p-4">
                    <div class="w-16 h-16 rounded-full bg-primary text-white inline-flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M404 188.9C404 111 333.9 48 256 48s-148 63.1-148 140.9c0 31 13.2 56.1 30.2 80.1h-.3c10.9 15 21.4 17.7 31.5 35 14.7 25.2 18.1 40.7 18.7 55.7.4 8.6 7.5 15.3 16 15.3h8.9c2.2 0 4-1.8 4-4v-94.5c0-5-1.2-9.8-3.4-14.3l-21-42c-3.5-7 1.6-15.2 9.4-15.2 4 0 7.7 2.3 9.4 5.9l25.3 51.4c2.2 4.4 3.3 9.2 3.3 14.1V371c0 2.2 1.8 4 4 4h24c2.2 0 4-1.8 4-4v-94.6c0-4.9 1.1-9.7 3.3-14.1l25.4-51.6c1.7-3.4 5.2-5.6 9-5.6 7.5 0 12.4 7.9 9 14.6l-21.3 42.6c-2.2 4.5-3.4 9.4-3.4 14.3V371c0 2.2 1.8 4 4 4h10c8.5 0 15.5-6.6 16-15 .9-15.4 4.7-32.3 18.4-56 10.1-17.3 20.6-20 31.5-35h-.1c17-24 30.2-49.1 30.2-80.1zM238 464h36c7.7 0 14-6.3 14-14s-6.3-14-14-14h-36c-7.7 0-14 6.3-14 14s6.3 14 14 14zM218 420h76c7.7 0 14-6.3 14-14s-6.3-14-14-14h-76c-7.7 0-14 6.3-14 14s6.3 14 14 14z"/></svg>
                    </div>
                    <div class="font-semibold text-lg mb-2">
                        UX/UI Design
                    </div>
                    <div class="leading-relaxed text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        At deserunt et labore laboriosam repellendus.
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/3 sm:px-2 mb-4">
                <div class="bg-white text-center p-4">
                    <div class="w-16 h-16 rounded-full bg-primary text-white inline-flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M442 248.9c-15.7-20.6-37.7-35.9-62.1-43.6 1-6.3 1.4-12.7 1.4-19.1 0-33.7-13-65.4-36.7-89.2C321 73.1 289.5 60 256 60s-65 13.1-88.6 37c-23.7 23.8-36.7 55.5-36.7 89.2 0 6.4.5 12.8 1.4 19.1-24.5 7.7-46.4 23.1-62.1 43.6-17 22.2-26 48.8-26 76.9 0 33.7 13 65.4 36.7 89.2 23.7 23.8 55.2 37 88.6 37 32.6 0 63.2-12.4 86.7-35 23.4 22.6 54.1 35 86.7 35 33.5 0 65-13.1 88.6-37 23.7-23.8 36.7-55.5 36.7-89.2 0-28.1-9-54.7-26-76.9zM256 85.5c55.1 0 100 45.2 100 100.7 0 4.7-.3 9.4-1 14.1-4.1-.4-8.2-.6-12.4-.6-32.6 0-63.2 12.4-86.7 35-23.4-22.6-54.1-35-86.7-35-4.1 0-8.3.2-12.4.6-.6-4.6-1-9.4-1-14.1.2-55.6 45.1-100.7 100.2-100.7zm0 201.4c-1.8 0-3.7-.1-5.5-.2 1.6-3.8 3.4-7.5 5.5-11.1 2.1 3.6 3.9 7.3 5.5 11.1-1.8.2-3.7.2-5.5.2zm-46.6 131.2c-12.7 5.6-26.1 8.4-40.1 8.4-55.1 0-100-45.2-100-100.7 0-22.3 7.1-43.5 20.6-61.2 12.3-16.1 29.4-28.3 48.5-34.6 6.6 17.9 17.3 34.3 31.2 47.6 13.9 13.4 30.9 23.4 49.2 29.1-1 6.3-1.4 12.7-1.4 19.1 0 25.8 7.7 50.6 22.2 71.7-8.8 8.7-19 15.6-30.2 20.6zM225.1 282c-27.6-9-50-29.8-61.3-56.7 1.8-.1 3.7-.2 5.5-.2 13.9 0 27.4 2.8 40.1 8.4 11.2 5 21.4 11.9 30.1 20.6-5.9 8.7-10.8 18-14.4 27.9zm30.9 94c-8.7-15.2-13.3-32.5-13.3-50.2 0-4.7.3-9.4 1-14.1a128.658 128.658 0 0 0 24.8 0c.6 4.6 1 9.4 1 14.1-.2 17.7-4.8 35-13.5 50.2zm46.6-142.5c12.7-5.6 26.1-8.4 40.1-8.4 1.8 0 3.7.1 5.5.2-11.3 26.9-33.7 47.7-61.3 56.7-3.6-9.8-8.5-19.2-14.4-27.9 8.7-8.7 18.9-15.6 30.1-20.6zm40.1 193c-13.9 0-27.4-2.8-40.1-8.4-11.2-5-21.4-11.9-30.1-20.6 14.5-21.1 22.2-45.8 22.2-71.7 0-6.4-.5-12.8-1.4-19.1 18.3-5.7 35.2-15.7 49.2-29.1 13.8-13.3 24.5-29.6 31.2-47.6 19.1 6.3 36.2 18.4 48.5 34.6 13.5 17.7 20.6 38.9 20.6 61.2-.1 55.6-45 100.7-100.1 100.7z"/></svg>
                    </div>
                    <div class="font-semibold text-lg mb-2">
                        Software Development
                    </div>
                    <div class="leading-relaxed text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusamus amet consequuntur dicta ex impedit!
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/3 sm:px-2 mb-4">
                <div class="bg-white text-center p-4">
                    <div class="w-16 h-16 rounded-full bg-primary text-white inline-flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M437.1 229.8C429 154.6 365.4 96 288 96c-51.2 0-96.3 25.6-123.4 64.7-8.3-3.4-17.4-5.3-26.9-5.3-39.1 0-70.8 34.4-71.4 73.4C26.4 241.5 0 280.5 0 321.5 0 371.7 40.7 416 90.9 416h330.3c50.2 0 90.9-44.3 90.9-94.5-.1-44.7-32.4-84.1-75-91.7zm-74.6-17.3L228.8 346.8h-.1c-1.7 1.7-6.3 5.5-11.6 5.5-3.8 0-8.1-2.1-11.7-5.7l-56-56c-1.6-1.6-1.6-4.1 0-5.7l17.8-17.8c.8-.8 1.8-1.2 2.8-1.2 1 0 2 .4 2.8 1.2l44.4 44.4 122-122.9c.8-.8 1.8-1.2 2.8-1.2 1.1 0 2.1.4 2.8 1.2l17.5 18.1c1.8 1.7 1.8 4.2.2 5.8z"/></svg>
                    </div>
                    <div class="font-semibold text-lg mb-2">
                        Technology
                    </div>
                    <div class="leading-relaxed text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Dignissimos dolore necessitatibus officia quas rerum.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
