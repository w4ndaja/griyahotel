@extends('front.app')
@section('title') {{ config('app.name') }} About @endsection
@section('content')
    <header class="bg-white border-b sm:border-transparent sm:bg-gray-200 py-10 sm:py-16 lg:py-32 -mt-4">
        <div class="container">
            <div class="w-full sm:w-2/3">
                <h1 class="text-2xl sm:text-5xl font-bold text-gray-900">
                    What <span class="text-primary">About</span> Us ?
                </h1>
                <div class="leading-relaxed text-xl text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Adipisci aperiam cum cumque cupiditate distinctio ducimus error impedit inventore labore laboriosam,
                    officia quasi rem repellendus sequi suscipit vel velit vitae voluptatibus!
                </div>
            </div>
        </div>
    </header>
    <div class="bg-white py-8 md:py-16">
        <div class="container">
            <div class="flex flex-col sm:flex-row sm:justify-between">
                <div class="w-full sm:w-1/2 mb-6 sm:mb-0">
                    <img class="rounded-lg shadow-lg" src="/content-images/about-content.jpg" alt="">
                </div>
                <div class="w-full sm:w-1/2 text-left sm:px-10">
                    <div class="font-semibold text-2xl mb-4 text-gray-700">Our Missions</div>
                    <div class="tabs -mb-24 sm:-mb-0 z-0 ">
                        <input type="radio" id="tab1" name="tab-control" checked>
                        <input type="radio" id="tab2" name="tab-control">
                        <input type="radio" id="tab3" name="tab-control">
                        <input type="radio" id="tab4" name="tab-control">
                        <ul class="flex flex-row flex-wrap justify-between items-end list-none pl-0 border-b pb-4">
                            <li class="flex-1 text-left font-semibold">
                                <label for="tab1" role="button">Legacy</label>
                            </li>
                            <li class="flex-1 text-left font-semibold">
                                <label for="tab2" role="button">Discord</label>
                            </li>
                            <li class="flex-1 text-left font-semibold">
                                <label for="tab3" role="button">Management</label>
                            </li>
                            <li class="flex-1 text-left font-semibold">
                                <label for="tab4" role="button">Role</label>
                            </li>
                        </ul>
                        <div class="content mt-5">
                            <section class="hidden leading-relaxed">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consectetur
                                    doloribus, eos eum explicabo illum iusto nam placeat soluta unde? Aliquam architecto
                                    deleniti dignissimos distinctio in quaerat, quod vel veritatis!</p>
                                <p>Ab corporis cupiditate distinctio ea, exercitationem, expedita itaque laboriosam
                                    maxime minus nihil quas quasi, recusandae similique veritatis voluptatem! Assumenda
                                    culpa in inventore ipsam iure labore libero nulla possimus, praesentium vel.</p>
                            </section>
                            <section class="hidden leading-relaxed">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus alias
                                    aspernatur autem dignissimos ea, esse fugiat, harum id non officia omnis pariatur
                                    possimus quibusdam quisquam reprehenderit sed ut vitae.</p>
                                <p>Amet debitis dignissimos expedita, facere quo ullam vitae. Aspernatur ex fugiat quam
                                    similique. Deserunt dignissimos id, nam provident vitae voluptate. Alias cupiditate
                                    delectus harum illum neque possimus quam quia voluptas.</p>
                            </section>
                            <section class="hidden leading-relaxed">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores commodi,
                                    esse, fugit harum hic id iusto minima minus nesciunt numquam, quibusdam rem sit!
                                    Blanditiis illum maxime nemo rerum similique?</p>
                                <p>Commodi delectus nesciunt porro tempore temporibus. Ab at autem cupiditate doloremque
                                    dolores eius eligendi et, excepturi hic incidunt itaque libero nemo odio
                                    perspiciatis quibusdam ratione recusandae, repellat unde, ut voluptatem.</p>
                            </section>
                            <section class="hidden leading-relaxed">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at dicta explicabo maxime
                                    nulla pariatur saepe suscipit, voluptatum? Accusantium consequuntur deleniti fugit
                                    incidunt minima quisquam reprehenderit sequi sunt tenetur veritatis.</p>
                                <p>Aliquam aliquid beatae consectetur consequatur eligendi enim eos et explicabo in,
                                    iusto nemo nobis numquam obcaecati odio quasi quisquam rem reprehenderit repudiandae
                                    similique sint totam vero voluptatem voluptatibus! Aperiam, similique.</p>
                            </section>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="z-10 relative flex flex-col bg-white -mb-4 border-t sm:flex-row justify-between items-center">
        <div class="w-full md:w-1/2 bg-gray-900 sm:text-right px-10 py-6 sm:py-16 text-white">
            <div class="text-xl sm:text-2xl sm:text-4xl font-semibold">
                Interested in working with us?
            </div>
            <div class="text-base sm:text-lg text-gray-400">
                Hit the button below or give us a call!
            </div>
        </div>
        <div class="w-full md:w-1/2 px-10 py-6 sm:py-16 text-xl">
            <span class="text-gray-600 block text-sm sm:text-base sm:inline">Call us now:</span>
            <span class="text-primary text-xl sm:text-3xl font-semibold">(+65) 1234 5678</span>
        </div>
    </div>
@endsection
