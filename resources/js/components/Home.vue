<template>
    <div>
        <header-index/>
        <latest/>
        <div class="flex justify-center p-6 sm:py-16 bg-blue-600 text-white">
            <div class="w-full md:w-1/2 text-center">
                <div class="text-2xl sm:text-4xl text-white font-semibold leading-tight mb-3">
                    We're a Agency Team & Digital Marketing
                </div>
                <div class="text-blue-200 leading-relaxed">
                    At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est
                    Lorem ipsum dolor sit amet ipsumlor eut consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                    invidunt labore et dolore magna liquyam erat.
                </div>
            </div>
        </div>
        <slider/>
        <div class="flex flex-col bg-primary md:flex-row justify-between items-center">
            <div class="w-full md:w-1/2 bg-primary md:text-right border-b border-blue-600 md:border-transparent px-10 py-6 sm:py-16 md:py-32 text-white">
                <div class="text-2xl md:text-6xl uppercase font-black tracking-wide">GET IN TOUCH</div>
                <div class="text-lg md:text-2xl text-blue-200 -mb-6 md:-mb-0">
                    To make an appointment or if you have <br class="hidden md:block"> any questions to ask our team
                </div>
            </div>
            <div class="w-full md:w-1/2 px-10 py-6 sm:py-16 md:py-32">
                <div class="text-blue-200">
                    Call us now
                </div>
                <div class="font-black text-white text-xl md:text-2xl">
                    (+65) 1234 5678
                </div>
            </div>
        </div>
        <team/>
    </div>
</template>

<script>
    import HeaderIndex from "./Header";
    import Slider from "./posts/Slider";
    import Latest from "./posts/Latest";
    import Team from "./teams/Index";

    export default {
        components: {
            HeaderIndex, Latest, Slider, Team
        }
    }
</script>
