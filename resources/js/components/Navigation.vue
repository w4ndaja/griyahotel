<template>
    <div>
        <template v-if="currentLocation == '/'">
            <nav class="relative" id="navigation">
                <div class="container-md">
                    <div class="flex bg-primary sm:bg-transparent flex-col sm:flex-row justify-between sm:items-center font-medium">
                        <div class="flex justify-between items-center px-4 py-2 sm:py-0 bg-primary-darker sm:bg-transparent">
                            <a href="/" class="focus:outline-none flex-shrink-0">
                                <img src="/logo/white.png" class="w-12 h-12 sm:mr-2">
                            </a>
                            <div class="block sm:hidden">
                                <button @click="isOpen = !isOpen" class="focus:outline-none flex items-center text-white">
                                    <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path v-show="!isOpen" d="M1 1h18v2H1V1zm0 8h18v2H1V9zm0 8h18v2H1v-2zM1 5h12v2H1V5zm0 8h12v2H1v-2z"/>
                                        <path v-show="isOpen" d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/>
                                    </svg>
                                </button>
                            </div>
                        </div> <!-- flex -->
                        <div :class="isOpen ? 'block' : 'hidden'" class="block mx-4 sm:flex items-center flex-col sm:flex-row py-4 sm:py-0">
                            <a class="sm:mx-4 py-2 sm:py-5 block hover:text-white focus:text-white focus:outline-none" :class="currentLocation == '/' ? 'text-white' : 'text-blue-200'" href="/">Home</a>
                            <div class="relative dropdown-toggle">
                                <button class="py-2 sm:py-5 sm:mx-4  block text-blue-200 hover:text-white focus:text-white focus:outline-none focus:outline-none flex items-center">
                                    Blog
                                    <svg class="w-4 h-4 fill-current ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </button>
                                <div class="dropdown-item relative z-10 bg-primary-darker rounded py-1 my-2 border border-transparent right-0 w-full block sm:bg-white sm:hidden sm:absolute sm:w-48 sm:border-gray-300 sm:-mt-2">
                                    <a class="dropdown-item-children sm:text-gray-600 sm:hover:text-black sm:focus:text-black" href="/posts-in-popular">Popular</a>
                                    <a class="dropdown-item-children sm:text-gray-600 sm:hover:text-black sm:focus:text-black" href="/posts-in-latest">Latest</a>
                                    <a class="dropdown-item-children sm:text-gray-600 sm:hover:text-black sm:focus:text-black" href="/posts-in-first">First</a>
                                    <a class="dropdown-item-children sm:text-gray-600 sm:hover:text-black sm:focus:text-black" href="/posts-in-grid-mode">Grid Mode</a>
                                    <a class="dropdown-item-children sm:text-gray-600 sm:hover:text-black sm:focus:text-black" href="/posts-in-curated">Curated</a>
                                </div>
                            </div>
                            <a class="sm:mx-4 py-2 sm:py-5 block hover:text-white focus:text-white focus:outline-none" :class="currentLocation == '/about' ? 'text-white' : 'text-blue-200'" href="/about">About</a>
                            <a class="sm:mx-4 py-2 sm:py-5 block hover:text-white focus:text-white focus:outline-none active:outline-none" :class="currentLocation == '/services' ? 'text-white' : 'text-blue-200'" href="/services">Services</a>
                            <template v-if="user.authenticated">
                                <div class="relative dropdown-toggle">
                                    <button class="py-2 sm:py-5 sm:mx-4 block text-blue-200 hover:text-white focus:text-white focus:outline-none focus:outline-none flex items-center">
                                        {{ authUser.name }}
                                        <svg class="w-4 h-4 fill-current ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </button>
                                    <div class="dropdown-item relative z-10 bg-primary-darker rounded py-1 my-2 border border-transparent right-0 w-full block sm:bg-white sm:hidden sm:absolute sm:w-48 sm:border-gray-300 sm:-mt-2">
                                        <a v-if="user.createPosts" class="dropdown-item-children sm:text-gray-600 sm:hover:text-black sm:focus:text-black" href="/dashboard">Dashboard</a>
                                        <a class="dropdown-item-children sm:text-gray-600 sm:hover:text-black sm:focus:text-black" href="/account/edit-your-profile">Edit Profile</a>
                                        <button type="button" class="dropdown-item-children sm:text-gray-600 sm:hover:text-black sm:focus:text-black" @click="signOut" href="/">Logout</button>
                                    </div>
                                </div>
                            </template>
                            <template v-else>
                                <a class="sm:mx-4 py-2 sm:py-5 block hover:text-white focus:text-white focus:outline-none" :class="currentLocation == '/register' ? 'text-white' : 'text-blue-200'" href="/register">Register</a>
                                <a class="sm:mx-4 py-2 sm:py-5 block hover:text-white focus:text-white focus:outline-none" :class="currentLocation == '/login' ? 'text-white' : 'text-blue-200'" href="/login">Login</a>
                            </template>
                        </div>
                    </div> <!-- flex justify between -->
                </div> <!-- container -->
            </nav>
        </template>
        <template v-else>
            <nav class="relative border-b" :class="currentLocation == '/' ? 'border-transparent' : 'border-gray-300'" id="navigation">
                <div class="container-md">
                    <div class="flex flex-col sm:flex-row justify-between sm:items-center font-medium">
                        <div class="flex justify-between items-center px-4 py-2 sm:py-0 bg-gray-200 sm:bg-transparent">
                            <a href="/" class="focus:outline-none flex-shrink-0">
                                <img src="/favicon/apple-touch-icon.png" class="w-12 h-12 sm:mr-2">
                            </a>
                            <div class="block sm:hidden">
                                <button @click="isOpen = !isOpen" class="focus:outline-none flex items-center text-primary">
                                    <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path v-show="!isOpen" d="M1 1h18v2H1V1zm0 8h18v2H1V9zm0 8h18v2H1v-2zM1 5h12v2H1V5zm0 8h12v2H1v-2z"/>
                                        <path v-show="isOpen" d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/>
                                    </svg>
                                </button>
                            </div>
                        </div> <!-- flex -->
                        <div :class="isOpen ? 'block' : 'hidden'" class="block mx-4 sm:flex items-center flex-col sm:flex-row py-4 sm:py-0">
                            <a class="sm:mx-4 py-2 sm:py-5 block hover:text-black focus:text-black focus:outline-none" :class="currentLocation == '/' ? 'text-black' : 'text-gray-600'" href="/">Home</a>
                            <div class="relative dropdown-toggle">
                                <button class="py-2 sm:py-5 sm:mx-4  block text-gray-600 hover:text-black focus:text-black focus:outline-none focus:outline-none flex items-center ">
                                    Blog
                                    <svg class="w-4 h-4 fill-current ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </button>
                                <div class="dropdown-item block sm:hidden w-full sm:absolute right-0 sm:w-48 sm:border border-l-4 sm:border-none my-2 sm:-mt-2 sm:rounded bg-white py-1">
                                    <a class="mx-5 py-2 block text-gray-600 hover:text-black focus:text-black focus:outline-none" href="/posts-in-popular">Popular</a>
                                    <a class="mx-5 py-2 block text-gray-600 hover:text-black focus:text-black focus:outline-none" href="/posts-in-latest">Latest</a>
                                    <a class="mx-5 py-2 block text-gray-600 hover:text-black focus:text-black focus:outline-none" href="/posts-in-first">First</a>
                                    <a class="mx-5 py-2 block text-gray-600 hover:text-black focus:text-black focus:outline-none" href="/posts-in-grid-mode">Grid Mode</a>
                                    <a class="mx-5 py-2 block text-gray-600 hover:text-black focus:text-black focus:outline-none" href="/posts-in-curated">Curated</a>
                                </div>
                            </div>
                            <a class="sm:mx-4 py-2 sm:py-5 block hover:text-black focus:text-black focus:outline-none" :class="currentLocation == '/about' ? 'text-black' : 'text-gray-600'" href="/about">About</a>
                            <a class="sm:mx-4 py-2 sm:py-5 block hover:text-black focus:text-black focus:outline-none active:outline-none" :class="currentLocation == '/services' ? 'text-black' : 'text-gray-600'" href="/services">Services</a>
                            <template v-if="user.authenticated">
                                <div class="relative dropdown-toggle">
                                    <button class="py-2 sm:py-5 sm:mx-4 block text-gray-600 hover:text-black focus:text-black focus:outline-none focus:outline-none flex items-center">
                                        {{ authUser.name }}
                                        <svg class="w-4 h-4 fill-current ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </button>
                                    <div class="dropdown-item block sm:hidden w-full sm:absolute right-0 sm:w-48 sm:border border-l-4 sm:border-none my-2 sm:-mt-2 sm:rounded bg-white py-1">
                                        <a v-if="user.createPosts" class="mx-5 py-2 block text-gray-600 hover:text-black focus:text-black focus:outline-none" href="/dashboard">Dashboard</a>
                                        <a class="mx-5 py-2 block text-gray-600 hover:text-black focus:text-black focus:outline-none" href="/account/edit-your-profile">Edit Profile</a>
                                        <button type="button" class="mx-5 py-2 block text-gray-600 hover:text-black focus:text-black focus:outline-none" @click="signOut" href="/">Logout</button>
                                    </div>
                                </div>
                            </template>
                            <template v-else>
                                <a class="sm:mx-4 py-2 sm:py-5 block hover:text-black focus:text-black focus:outline-none" :class="currentLocation == '/register' ? 'text-black' : 'text-gray-600'" href="/register">Register</a>
                                <a class="sm:mx-4 py-2 sm:py-5 block hover:text-black focus:text-black focus:outline-none" :class="currentLocation == '/login' ? 'text-black' : 'text-gray-600'" href="/login">Login</a>
                            </template>
                        </div>
                    </div> <!-- flex justify between -->
                </div> <!-- container -->
            </nav>
        </template>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                isOpen: false,
                currentLocation: window.location.pathname,
            }
        },
        methods: {
            async signOut() {
                await axios.post('/logout')
                location.reload()
            }
        }
    }
</script>

