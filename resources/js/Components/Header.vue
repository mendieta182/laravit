<template>
    <div class="shadow-lg bg-white dark:bg-gray-700 items-center h-16 rounded-2xl z-40">
        <div class="relative z-20 flex flex-col justify-center h-full px-3 mx-auto flex-center">
            <div class="relative items-center pl-1 flex w-full lg:max-w-68 sm:pr-2 sm:ml-0">
                <div class="container relative left-0 z-50 flex w-2/4 h-auto">
                    <div class="flex justify-center items-center w-6 h-full m-2">
                        <div class="hidden md:block">
                            <svg viewBox="0 0 24 24" class="w-6 h-6 cursor-pointer text-gray-400 dark:text-white transition duration-500 ease-out" @click="activateHeaderIcon" :class="headerIcon ? 'rotate-180':''">
                                <path fill="currentColor" d="M19,13H3V11H19L15,7L16.4,5.6L22.8,12L16.4,18.4L15,17L19,13M3,6H13V8H3V6M13,16V18H3V16H13Z"></path>
                            </svg>
                        </div>
                        <div class="flex md:hidden">
                            <svg viewBox="0 0 20 20" class="w-6 h-6 cursor-pointer text-gray-400 dark:text-white" fill="currentColor" @click="$emit('mobil')">
                                <path fillRule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clipRule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="relative p-1 flex items-center justify-end w-2/4 sm:mx-4">
                    <!-- DarkMode -->
                    <div class="relative">
                        <DarkMode />
                    </div>
                    <!-- End DarkMode -->
                    <!-- Select Language -->
                    <div class="relative">
                        <jet-dropdown-custom align="right" width="30">
                            <template #trigger>
                                <button
                                class="bg-white dark:bg-gray-700 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center"
                                >
                                    <span v-if="$page.props.locale =='es'" class="text-left text-sm flex">
                                        <icon class="w-5 h-5 mr-1" :name="selectable_locale='es'" /> <span class="dark:text-white">ES</span>
                                    </span>
                                    <span v-if="$page.props.locale =='en'" class="text-left text-sm flex">
                                        <icon class="w-5 h-5 mr-1" :name="selectable_locale='en'" /> <span class="dark:text-white">EN</span>
                                    </span>
                                    <span v-if="$page.props.locale =='fr'" class="text-left text-sm flex">
                                        <icon class="w-5 h-5 mr-1" :name="selectable_locale='fr'" /> <span class="dark:text-white">FR</span>
                                    </span>
                                    <svg stroke-width="1.5" viewBox="0 0 24 24" class="line-icon -mr-1 ml-1" style="width: 20px; height: 20px;">             
                                        <path d="M8 10l4 4 4-4"></path>
                                    </svg>
                                </button>
                            </template>

                            <template #content>

                                <Link v-if="$page.props.locale !=='es'" :href="route('language', 'es')" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="text-left">
                                        <icon class="w-5 h-5" :name="selectable_locale='es'" />
                                    </span>
                                    <span class="mx-3 text-sm font-normal">Español</span>
                                </Link>

                                <hr v-if="$page.props.locale =='fr'" class="border-gray-200 dark:border-gray-700 ">
                                <hr v-if="$page.props.locale =='en'" class="border-gray-200 dark:border-gray-700 ">

                                <Link v-if="$page.props.locale !=='en'" :href="route('language', 'en')" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="text-left">
                                        <icon class="w-5 h-5" :name="selectable_locale='en'" />
                                    </span>
                                    <span class="mx-3 text-sm font-normal">Inglés</span>
                                </Link>

                                <hr v-if="$page.props.locale =='es'" class="border-gray-200 dark:border-gray-700 ">

                                <Link v-if="$page.props.locale !=='fr'" :href="route('language', 'fr')" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="text-left">
                                        <icon class="w-5 h-5" :name="selectable_locale='fr'" />
                                    </span>
                                    <span class="mx-3 text-sm font-normal">Francés</span>
                                </Link>

                            </template>
                        </jet-dropdown-custom>
                    </div>
                    <!-- End Select Language -->
                    <!-- Settings Dropdown -->
                    <div class="relative">
                        <jet-dropdown-custom align="right" width="48">
                            <template #trigger>
                                <button v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:border-gray-300">
                                    <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name" />
                                </button>

                                <span v-else class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700">
                                        {{ $page.props.user.name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </template>

                            <template #content>

                                <a href="#" class="flex items-center p-3 -mt-2 text-sm text-gray-600 transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <div class="mx-1">
                                        <h1 class="text-sm font-semibold text-gray-700 dark:text-gray-200">{{ $page.props.user.name }}</h1>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">{{ $page.props.user.email }}</p>
                                    </div>
                                </a>

                                <hr class="border-gray-200 dark:border-gray-700 ">

                                <Link :href="route('profile.show')" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8C17 10.7614 14.7614 13 12 13C9.23858 13 7 10.7614 7 8ZM12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11Z" fill="currentColor"></path>
                                        <path d="M6.34315 16.3431C4.84285 17.8434 4 19.8783 4 22H6C6 20.4087 6.63214 18.8826 7.75736 17.7574C8.88258 16.6321 10.4087 16 12 16C13.5913 16 15.1174 16.6321 16.2426 17.7574C17.3679 18.8826 18 20.4087 18 22H20C20 19.8783 19.1571 17.8434 17.6569 16.3431C16.1566 14.8429 14.1217 14 12 14C9.87827 14 7.84344 14.8429 6.34315 16.3431Z" fill="currentColor"></path>
                                    </svg>

                                    <span class="mx-1">
                                        Profile
                                    </span>
                                </Link>

                                <Link :href="route('api-tokens.index')" v-if="$page.props.jetstream.hasApiFeatures" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 22C15.8082 21.9947 14.0267 20.2306 14 18.039V16H9.99996V18.02C9.98892 20.2265 8.19321 22.0073 5.98669 22C3.78017 21.9926 1.99635 20.1999 2.00001 17.9934C2.00367 15.7868 3.79343 14 5.99996 14H7.99996V9.99999H5.99996C3.79343 9.99997 2.00367 8.21315 2.00001 6.00663C1.99635 3.8001 3.78017 2.00736 5.98669 1.99999C8.19321 1.99267 9.98892 3.77349 9.99996 5.97999V7.99999H14V5.99999C14 3.79085 15.7908 1.99999 18 1.99999C20.2091 1.99999 22 3.79085 22 5.99999C22 8.20913 20.2091 9.99999 18 9.99999H16V14H18C20.2091 14 22 15.7909 22 18C22 20.2091 20.2091 22 18 22ZM16 16V18C16 19.1046 16.8954 20 18 20C19.1045 20 20 19.1046 20 18C20 16.8954 19.1045 16 18 16H16ZM5.99996 16C4.89539 16 3.99996 16.8954 3.99996 18C3.99996 19.1046 4.89539 20 5.99996 20C6.53211 20.0057 7.04412 19.7968 7.42043 19.4205C7.79674 19.0442 8.00563 18.5321 7.99996 18V16H5.99996ZM9.99996 9.99999V14H14V9.99999H9.99996ZM18 3.99999C17.4678 3.99431 16.9558 4.2032 16.5795 4.57952C16.2032 4.95583 15.9943 5.46784 16 5.99999V7.99999H18C18.5321 8.00567 19.0441 7.79678 19.4204 7.42047C19.7967 7.04416 20.0056 6.53215 20 5.99999C20.0056 5.46784 19.7967 4.95583 19.4204 4.57952C19.0441 4.2032 18.5321 3.99431 18 3.99999ZM5.99996 3.99999C5.4678 3.99431 4.95579 4.2032 4.57948 4.57952C4.20317 4.95583 3.99428 5.46784 3.99996 5.99999C3.99428 6.53215 4.20317 7.04416 4.57948 7.42047C4.95579 7.79678 5.4678 8.00567 5.99996 7.99999H7.99996V5.99999C8.00563 5.46784 7.79674 4.95583 7.42043 4.57952C7.04412 4.2032 6.53211 3.99431 5.99996 3.99999Z" fill="currentColor"></path>
                                    </svg>

                                    <span class="mx-1">
                                        API Tokens
                                    </span>
                                </Link>

                                <!-- <hr class="border-gray-200 dark:border-gray-700 ">

                                <Link :href="route('teams.show', $page.props.user.current_team)" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 3C6.23858 3 4 5.23858 4 8C4 10.7614 6.23858 13 9 13C11.7614 13 14 10.7614 14 8C14 5.23858 11.7614 3 9 3ZM6 8C6 6.34315 7.34315 5 9 5C10.6569 5 12 6.34315 12 8C12 9.65685 10.6569 11 9 11C7.34315 11 6 9.65685 6 8Z" fill="currentColor"></path>
                                        <path d="M16.9084 8.21828C16.6271 8.07484 16.3158 8.00006 16 8.00006V6.00006C16.6316 6.00006 17.2542 6.14956 17.8169 6.43645C17.8789 6.46805 17.9399 6.50121 18 6.5359C18.4854 6.81614 18.9072 7.19569 19.2373 7.65055C19.6083 8.16172 19.8529 8.75347 19.9512 9.37737C20.0496 10.0013 19.9987 10.6396 19.8029 11.2401C19.6071 11.8405 19.2719 12.3861 18.8247 12.8321C18.3775 13.2782 17.8311 13.6119 17.2301 13.8062C16.6953 13.979 16.1308 14.037 15.5735 13.9772C15.5046 13.9698 15.4357 13.9606 15.367 13.9496C14.7438 13.8497 14.1531 13.6038 13.6431 13.2319L13.6421 13.2311L14.821 11.6156C15.0761 11.8017 15.3717 11.9248 15.6835 11.9747C15.9953 12.0247 16.3145 12.0001 16.615 11.903C16.9155 11.8059 17.1887 11.639 17.4123 11.416C17.6359 11.193 17.8035 10.9202 17.9014 10.62C17.9993 10.3198 18.0247 10.0006 17.9756 9.68869C17.9264 9.37675 17.8041 9.08089 17.6186 8.82531C17.4331 8.56974 17.1898 8.36172 16.9084 8.21828Z" fill="currentColor"></path>
                                        <path d="M19.9981 21C19.9981 20.475 19.8947 19.9551 19.6938 19.47C19.4928 18.9849 19.1983 18.5442 18.8271 18.1729C18.4558 17.8017 18.0151 17.5072 17.53 17.3062C17.0449 17.1053 16.525 17.0019 16 17.0019V15C16.6821 15 17.3584 15.1163 18 15.3431C18.0996 15.3783 18.1983 15.4162 18.2961 15.4567C19.0241 15.7583 19.6855 16.2002 20.2426 16.7574C20.7998 17.3145 21.2417 17.9759 21.5433 18.7039C21.5838 18.8017 21.6217 18.9004 21.6569 19C21.8837 19.6416 22 20.3179 22 21H19.9981Z" fill="currentColor"></path>
                                        <path d="M16 21H14C14 18.2386 11.7614 16 9 16C6.23858 16 4 18.2386 4 21H2C2 17.134 5.13401 14 9 14C12.866 14 16 17.134 16 21Z" fill="currentColor"></path>
                                    </svg>

                                    <span class="mx-1">Team Settings</span>
                                </Link>

                                <Link :href="route('teams.create')" v-if="$page.props.jetstream.canCreateTeams" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 19H2C2 15.6863 4.68629 13 8 13C11.3137 13 14 15.6863 14 19H12C12 16.7909 10.2091 15 8 15C5.79086 15 4 16.7909 4 19ZM19 16H17V13H14V11H17V8H19V11H22V13H19V16ZM8 12C5.79086 12 4 10.2091 4 8C4 5.79086 5.79086 4 8 4C10.2091 4 12 5.79086 12 8C11.9972 10.208 10.208 11.9972 8 12ZM8 6C6.9074 6.00111 6.01789 6.87885 6.00223 7.97134C5.98658 9.06383 6.85057 9.9667 7.94269 9.99912C9.03481 10.0315 9.95083 9.1815 10 8.09V8.49V8C10 6.89543 9.10457 6 8 6Z" fill="currentColor"></path>
                                    </svg>

                                    <span class="mx-1">
                                        Create New Team
                                    </span>
                                </Link>

                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    Switch Teams
                                </div>

                                <template v-for="team in $page.props.user.all_teams" :key="team.id">
                                    <form @submit.prevent="switchToTeam(team)">
                                        <jet-dropdown-link-custom as="button" class="dark:hover:bg-gray-700">
                                            <div class="flex items-center">
                                                <svg v-if="team.id == $page.props.user.current_team_id" class="mr-2 h-5 w-5 text-green-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                <div class="flex items-center text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">{{ team.name }}</div>
                                            </div>
                                        </jet-dropdown-link-custom>
                                    </form>
                                </template> -->

                                <hr class="border-gray-200 dark:border-gray-700 ">

                                <Link @click.prevent="logout" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 21H10C8.89543 21 8 20.1046 8 19V15H10V19H19V5H10V9H8V5C8 3.89543 8.89543 3 10 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21ZM12 16V13H3V11H12V8L17 12L12 16Z" fill="currentColor"></path>
                                    </svg>

                                    <span class="mx-1">
                                        Log Out
                                    </span>
                                </Link>
                            </template>
                        </jet-dropdown-custom>
                    </div>
                    <!--End Settings Dropdown -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import DarkMode from '@/Components/DarkMode.vue'
import JetDropdownCustom from '@/Jetstream/DropdownCustom'
import JetDropdownLinkCustom from '@/Jetstream/DropdownLinkCustom'
import { Link } from '@inertiajs/inertia-vue3'
import Icon from '@/Shared/Icon.vue'

export default {
    data(){
        return{
            headerIcon:true,
            // selected:this.$page.props.locale
        }
    },
    props:['locale'],
    components:{
        DarkMode,
        JetDropdownCustom,
        JetDropdownLinkCustom,
        Link,
        Icon
    },
    emits:[
        'mobil','menu'
    ],
    methods: {
        // computed: {
        //     selectable_locale() {
        //         if(this.$page.props.locale == 'en') {
        //             return 'en';
        //         }
        //         if(this.$page.props.locale == 'es') {
        //             return 'es';
        //         }
        //             return 'fr';
        //     }
        // },
        activateHeaderIcon(){
            this.$emit('menu')
            this.headerIcon = !this.headerIcon
        },
        switchToTeam(team) {
            this.$inertia.put(route('current-team.update'), {
                'team_id': team.id
            }, {
                preserveState: false
            })
        },

        logout() {
            this.$inertia.post(route('logout'));
        },
        changeLink:function(event){
            if(event.target.value == 'es'){
                this.$inertia.visit('/language/es','es')
            }
            else if (event.target.value == 'en'){
                this.$inertia.visit('/language/en')
            }
            else {
                this.$inertia.visit('/language/fr')
            }
        },
    }
}
</script>
