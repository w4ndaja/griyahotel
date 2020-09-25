<template>
    <div>
        <div class="bg-gray-800 text-gray-500">
            <div class="container">
                <div class="py-10 md:py-16">
                    <div class="flex flex-col md:flex-row md:-mx-4">
                        <div class="w-full sm:w-1/3 md:mx-4">
                            <div class="font-semibold text-lg mb-2 text-white uppercase">{{ appName }}</div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aut commodi harum iste magni, nisi officia officiis placeat recusandae rem!

                            <div class="text-lg mt-8">
                                {{ address }}
                            </div>
                        </div>
                        <div class="w-full sm:w-1/4 md:mx-4 mt-6 md:mt-0">
                            <div class="font-semibold text-lg mb-2 text-white uppercase">Most Popular Post</div>
                            <div class="leading-relaxed">
                                <a href="" class="text-gray-500 hover:text-white block my-1 hover:text-white">Lorem ipsum dolor sit amet.</a>
                                <a href="" class="text-gray-500 hover:text-white block my-1 hover:text-white">Alias animi enim tempora tenetur.</a>
                                <a href="" class="text-gray-500 hover:text-white block my-1 hover:text-white">Esse fugit illum maxime sunt?</a>
                                <a href="" class="text-gray-500 hover:text-white block my-1 hover:text-white">Autem et laboriosam libero porro?</a>
                                <a href="" class="text-gray-500 hover:text-white block my-1 hover:text-white">Blanditiis cumque delectus nihil omnis!</a>
                            </div>
                        </div>
                        <div class="w-full md:w-2/5 mt-6 md:mt-0">
                            <div class="flex flex-col md:flex-row">
                                <div class="mr-10">
                                    <div class="leading-relaxed mb-6">
                                        <div class="text-white font-semibold text-lg">EXTRA</div>
                                        <a href="" class="text-gray-500 hover:text-white block my-1 hover:text-white">Terms</a>
                                        <a href="" class="text-gray-500 hover:text-white block my-1 hover:text-white">Privacy Policy</a>
                                    </div>
                                    <div class="leading-relaxed mb-6">
                                        <div class="text-white font-semibold text-lg uppercase">Social Integration</div>
                                        <a href="" class="text-gray-500 hover:text-white block my-1 hover:text-white">Facebook</a>
                                        <a href="" class="text-gray-500 hover:text-white block my-1 hover:text-white">Twitter</a>
                                        <a href="" class="text-gray-500 hover:text-white block my-1 hover:text-white">Instagram</a>
                                        <a href="" class="text-gray-500 hover:text-white block my-1 hover:text-white">Youtube</a>
                                    </div>
                                </div>
                                <div>
                                    <div class="leading-relaxed mb-6">
                                        <div class="text-white font-semibold text-lg uppercase">Link</div>
                                        <a href="" class="text-gray-500 hover:text-white block my-1 hover:text-white">Site Index</a>
                                        <a href="" class="text-gray-500 hover:text-white block my-1 hover:text-white">Posts</a>
                                    </div>
                                    <div class="leading-relaxed">
                                        <div class="text-white font-semibold text-lg uppercase">Contact</div>
                                        <a href="" class="text-gray-500 hover:text-white block my-1 hover:text-white">(061) 032-3234-333</a>
                                        <a href="" class="text-gray-500 hover:text-white block my-1 hover:text-white">hi@delay.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-900 text-gray-500 py-5">
            <div class="container">
                <div class="flex items-center justify-between">
                    <div>
                        © {{ whatYear }} {{ appName}} All rights reserved.
                        <a href="" class="hidden md:inline text-white hover:text-white hover:underline">Privacy Policy</a>
                    </div>
                    <div class="hidden md:flex md:items-center">
                        <a :href="youtubeUrl" class="mx-2 text-gray-500 hover:text-white">
                            <svg class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>
                        </a>
                        <a :href="twitterUrl" class="mx-2 text-gray-500 hover:text-white">
                            <svg class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
                        </a>
                        <a :href="facebookUrl" class="mx-2 text-gray-500 hover:text-white">
                            <svg class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                        </a>
                        <a :href="instagramUrl" class="mx-2 text-gray-500 hover:text-white">
                            <svg class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                        </a>
                        <button type="button" @click.prevent="scrollToTopOfPage" class="mx-2 p-3 text-white btn-primary rounded focus:outline-none">
                            <svg class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"/></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import VueScrollTo from 'vue-scrollto'
    export default {
        data() {
            return {
                whatYear: new Date().getFullYear(),
                appName: process.env.MIX_SITE_NAME,
                twitterUrl: process.env.MIX_SITE_TWITTER_PAGE,
                facebookUrl: process.env.MIX_SITE_FACEBOOK_PAGE,
                instagramUrl: process.env.MIX_SITE_INSTAGRAM_PAGE,
                youtubeUrl: process.env.MIX_SITE_YOUTUBE_PAGE,
                address: process.env.MIX_ADDRESS_COMPANY,
            }
        },

        methods: {
            scrollToTopOfPage() {
                VueScrollTo.scrollTo(`#navigation`, 700)
            }
        }
    }
</script>
