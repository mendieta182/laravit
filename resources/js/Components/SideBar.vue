<template>
    <div class="h-screen hidden md:block pb-8 mt-4 ml-4 shadow-lg relative w-72">
        <div class="bg-white h-full rounded-2xl dark:bg-gray-700">
            <div class="flex items-center justify-center pt-6">
                <svg class="w-8 h-8 fill-current dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
                </svg>
                <span class="ml-2 text-sm font-bold dark:text-white">The App</span>
            </div>
            <nav class="mt-6">
                <div class="flex flex-col w-full">
                    <Link :href="route('admin.dashboard.index')" :class="route().current('admin.dashboard.*') ? 'linkActive':'linkClass'" class="w-full justify-start">
                        <span class="text-left">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                                </path>
                            </svg>
                        </span>
                        <span class="mx-4 text-xs font-normal">
                            {{ $page.props.language['Dashboard']}}
                        </span>
                    </Link>
                    <Link v-if="route().current('profile.show')" :href="route('profile.show')" class="linkActive w-full justify-start">
                        <span class="text-left">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                                </path>
                            </svg>
                        </span>
                        <span class="mx-4 text-xs font-normal">
                            {{ $page.props.language['My profile']}}
                        </span>
                    </Link>
                    <Link v-if="route().current('api-tokens.index')" :href="route('api-tokens.index')" class="linkActive w-full justify-start">
                        <span class="text-left">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                                </path>
                            </svg>
                        </span>
                        <span class="mx-4 text-xs font-normal">
                            Api Tokens
                        </span>
                    </Link>
                    <p class="p-3 ml-3 text-xs uppercase text-gray-900 dark:text-blue-200">{{ $page.props.language['Administration']}}</p>
                    <Link :href="route('admin.users.index')" :class="route().current('admin.users.*') ? 'linkActive':'linkClass'" class="w-full justify-start">
                        <span class="text-left">
                            <icon class="h-5 w-5 fill-current dark:text-gray-200" name='key' />
                        </span>
                        <span class="mx-4 text-xs font-normal">
                            {{ $page.props.language['Users']}}
                        </span>
                    </Link>
                    <Link :href="route('admin.roles.index')" :class="route().current('admin.roles.*') ? 'linkActive':'linkClass'" class="w-full justify-start">
                        <span class="text-left">
                            <svg width="20" height="20" fill="currentColor" class="m-auto" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M960 0l960 384v128h-128q0 26-20.5 45t-48.5 19h-1526q-28 0-48.5-19t-20.5-45h-128v-128zm-704 640h256v768h128v-768h256v768h128v-768h256v768h128v-768h256v768h59q28 0 48.5 19t20.5 45v64h-1664v-64q0-26 20.5-45t48.5-19h59v-768zm1595 960q28 0 48.5 19t20.5 45v128h-1920v-128q0-26 20.5-45t48.5-19h1782z">
                                </path>
                            </svg>
                        </span>
                        <span class="mx-4 text-xs font-normal">
                            {{ $page.props.language['Roles']}}
                        </span>
                    </Link>
                    <Link :href="route('admin.permissions.index')" :class="route().current('admin.permissions.*') ? 'linkActive':'linkClass'" class="w-full justify-start">
                        <span class="text-left">
                            <svg class="h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30 30" width="30px" height="30px">
                                <g id="surface220556891">
                                <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 18.5 3 C 13.804688 3 10 6.804688 10 11.5 C 10 12.542969 10.199219 13.535156 10.542969 14.457031 L 3 22 L 3 27 L 8 27 L 8 24 L 11 24 L 11 21 L 14 21 L 15.542969 19.457031 C 16.464844 19.800781 17.457031 20 18.5 20 C 23.195312 20 27 16.195312 27 11.5 C 27 6.804688 23.195312 3 18.5 3 Z M 20.5 7 C 21.882812 7 23 8.117188 23 9.5 C 23 10.882812 21.882812 12 20.5 12 C 19.117188 12 18 10.882812 18 9.5 C 18 8.117188 19.117188 7 20.5 7 Z M 20.5 7 "/>
                                </g>
                            </svg>
                        </span>
                        <span class="mx-4 text-xs font-normal">
                            {{ $page.props.language['Permissions']}}
                        </span>
                    </Link>
                </div>
            </nav>
        </div>
    </div>
</template>

<script>

import Icon from '@/Shared/Icon.vue'
import { Link } from '@inertiajs/inertia-vue3'

export default {
    components:{
        Icon,
        Link
    },
}
</script>
