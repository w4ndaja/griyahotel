<template>
    <div class="py-12 sm:py-16 md:py-48 bg-cover bg-white bg-no-repeat -mt-10 md:-mt-20" style="background-image: url('/content-images/background.svg')">
        <div class="container">
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-3/5">
                    <div class="text-2xl mb-2 sm:text-5xl font-semibold">
                        <div class="text-white">Delay Make Your Biz</div> <div class="text-gray-200">Greater</div>
                    </div>
                    <div class="text-white text-lg sm:text-xl mb-6">
                        We love to create "cool" things on Digital Platforms.
                    </div>
                    <a href="#" class="w-full md:w-auto block text-center md:inline py-4 px-8 bg-white rounded-full inline-block shadow-lg font-semibold hover:shadow-xl text-sm">Start Exploring</a>
                </div>
                <div class="hidden md:block md:w-2/5">
                    <img src="/content-images/header.png"/>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            appName: process.env.MIX_SITE_NAME,
        }
    }
}
</script>

<style lang="sass" scoped>
    @import "~bootstrap/scss/functions"
    @import "~bootstrap/scss/variables"
    @import "~bootstrap/scss/mixins"

    .carousel
        &-indicators
            margin-bottom: 32px
        .active
            background-color: #dde9ff
            color: black
            border-radius: 999px
    // Optional
    @import "~bootstrap/scss/carousel"
</style>

