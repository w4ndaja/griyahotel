<template>
    <div class="bg-white border-t py-8 lg:py-16">
        <div class="container">
            <div class="text-center mb-5 block lg:hidden">
                <div class="font-bold text-xl">OUR TEAM</div>
                <div class="inline-block hr"></div>
            </div>
            <div class="flex flex-col flex-col-reverse lg:flex-row items-center">
                <div class="w-full lg:w-3/4 lg:border-r-4 border-gray-300">
                    <div class="text-center mb-5 hidden lg:block">
                        <div class="font-bold text-xl">OUR TEAM</div>
                        <div class="inline-block hr"></div>
                    </div>
                    <div class="flex flex-wrap overflow-hidden justify-center">
                        <div v-for="team in teams">
                            <button class="rounded-full overflow-hidden focus:outline-none mr-6 my-3 text-center border-2 hover:border-blue-300 p-1" @mouseover="selectATeam($event)" :name="team.username">
                                <img :src="team.avatar" class="w-10 h-10 md:w-12 md:h-12 object-cover object-center rounded-full">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/4 mb-5 lg:mb-0">
                    <div class="text-center">
                        <img :class="team.avatar ? 'border-blue-300' : ''" class="border-2 p-1 w-32 h-32 rounded-full overflow-hidden inline mb-3 object-cover object-center" :src="team.avatar ? team.avatar : theFirstTeam.avatar">
                        <div id="name" class="font-semibold text-gray-800 text-lg">{{ theFirstTeam.name  }}</div>
                        <div id="occupation" class="text-sm text-gray-500">{{ theFirstTeam.occupation }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                teams: [],
                team: {},
                theFirstTeam: {},
            }
        },

        created() {
            this.getTeams()
            this.firstTeam()
        },

        methods: {
            async firstTeam() {
                let theFirstTeam = await axios('/api/the-first-team');
                this.theFirstTeam = theFirstTeam.data
            },

            async getTeams() {
                let teams = await axios.get('/api/teams');
                this.teams = teams.data
            },

            async selectATeam(event) {
                let team = await axios.get(`/api/teams/${event.currentTarget.name}`)
                this.team = team.data;
                document.querySelector('#name').innerHTML = this.team.name
                document.querySelector('#occupation').innerHTML = this.team.occupation
            }
        }
    }
</script>
