<template>
    <admin-layout>
        <div class="bg-light-blue-500 pt-14 pb-28 px-3 md:px-8 h-auto">
            <div class="container mx-auto max-w-full">
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4">
                     <Link :href="route('admin.users.index')" class="px-4 mb-10">
                        <div class="w-full bg-white dark:bg-gray-700 rounded-xl overflow-hdden shadow-md p-4 undefined">
                            <div class="flex flex-wrap border-gray-200 undefined">
                                <div class="bg-gradient-to-tr from-orange-500 to-orange-700 -mt-10 mb-4 rounded-xl text-white grid items-center w-24 h-24 py-4 px-4 justify-center shadow-xl shadow-orange-500/50">
                                    <icon name='users' class="fill-current h-8 w-8 text-white dark:text-black"/>
                                </div>
                                <div class="w-full pl-4 max-w-full flex-grow flex-1 mb-2 text-right undefined">
                                    <h5 class="text-gray-500 dark:text-white font-light tracking-wide text-base mb-1">{{ $page.props.language['Users'] }}</h5>
                                    <span class="text-3xl text-gray-900 dark:text-white">{{usersCount}}</span>
                                </div>
                            </div>
                        </div>
                    </Link>
                    <Link :href="route('admin.roles.index')" class="px-4 mb-10">
                        <div class="w-full bg-white dark:bg-gray-700 rounded-xl overflow-hdden shadow-md p-4 undefined">
                            <div class="flex flex-wrap border-gray-200 undefined">
                                <div class="bg-gradient-to-tr from-blue-500 to-blue-700 -mt-10 mb-4 rounded-xl text-white grid items-center w-24 h-24 py-4 px-4 justify-center shadow-xl shadow-blue-500/50">
                                    <icon name='roles' class="h-8 w-8 dark:text-black"/>
                                </div>
                                <div class="w-full pl-4 max-w-full flex-grow flex-1 mb-2 text-right undefined">
                                    <h5 class="text-gray-500 dark:text-white font-light tracking-wide text-base mb-1">{{ $page.props.language['Roles'] }}</h5>
                                    <span class="text-3xl text-gray-900 dark:text-white">{{rolesCount}}</span>
                                </div>
                            </div>
                        </div>
                    </Link>  
                    <Link :href="route('admin.permissions.index')" class="px-4 mb-10">
                        <div class="w-full bg-white dark:bg-gray-700 rounded-xl overflow-hdden shadow-md p-4 undefined">
                            <div class="flex flex-wrap border-gray-200 undefined">
                                <div class="bg-gradient-to-tr from-green-300 to-green-500 -mt-10 mb-4 rounded-xl text-white grid items-center w-24 h-24 py-4 px-4 justify-center shadow-xl shadow-green-500/50">
                                    <icon name='key' class="h-8 w-8 dark:text-black"/>
                                </div>
                                <div class="w-full pl-4 max-w-full flex-grow flex-1 mb-2 text-right undefined">
                                    <h5 class="text-gray-500 dark:text-white font-light tracking-wide text-base mb-1">{{ $page.props.language['Permissions'] }}</h5>
                                    <span class="text-3xl text-gray-900 dark:text-white">{{permissionsCount}}</span>
                                </div>
                            </div>
                        </div>
                    </Link>
                    <div class="px-4 mb-10">
                        <div class="w-full bg-white dark:bg-gray-700 rounded-xl overflow-hdden shadow-md p-4 undefined">
                            <div class="flex flex-wrap border-gray-200 undefined">
                                <div class="bg-gradient-to-tr from-indigo-300 to-indigo-500 -mt-10 mb-4 rounded-xl text-white grid items-center w-24 h-24 py-4 px-4 justify-center shadow-xl shadow-indigo-500/50">
                                    <icon name='users' class="h-8 w-8 dark:text-black"/>
                                </div>
                                <div class="w-full pl-4 max-w-full flex-grow flex-1 mb-2 text-right undefined">
                                    <h5 class="text-gray-500 dark:text-white font-light tracking-wide text-base mb-1">{{ $page.props.language['Permissions'] }}</h5>
                                    <span class="text-3xl text-gray-900 dark:text-white">{{permissionsCount}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </admin-layout>
</template>

<script>
    import AdminLayout from '@/Layouts/AdminLayout.vue'
    import Icon from '@/Shared/Icon.vue'
    import { Link } from '@inertiajs/inertia-vue3'

    export default {
        props:['usersCount','rolesCount','permissionsCount'],
        components: {
            AdminLayout,
            Icon,
            Link
        }
    }
</script>
