<template>
    <admin-layout>
        <div class="overflow-auto h-screen pb-24 pt-4 md:pt-0 md:pr-0 md:pl-0">
            <div class="flex flex-col flex-wrap sm:flex-row mr-2">
                <div class="w-full">
                    <div class="mb-4">
                        <div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-700 w-full">
                            <div class="flex items-center justify-between mb-6">
                                <div class="flex items-center">
                                    <span class="rounded-xl relative p-2 bg-blue-100">
                                        <svg width="25" height="25" viewBox="0 0 256 262" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid">
                                            <path d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" fill="#4285F4">
                                            </path>
                                            <path d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" fill="#34A853">
                                            </path>
                                            <path d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" fill="#FBBC05">
                                            </path>
                                            <path d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" fill="#EB4335">
                                            </path>
                                        </svg>
                                    </span>
                                    <div class="flex flex-col">     
                                        <span class="font-bold text-md text-black dark:text-white ml-2">
                                            {{ $page.props.language['Users'] }}
                                        </span>
                                        <span class="text-sm text-gray-500 dark:text-white ml-2">
                                            Showing {{$page.props.users.from}} to {{$page.props.users.to}} of {{$page.props.users.total}} results
                                        </span>
                                    </div>
                                </div>
                                <div @click.prevent="openModalCreate" class="flex items-center text-gray-400 dark:text-white font-semibold hover:font-bold dark:hover:font-bold hover:text-green-900">
                                    <button class="p-1 rounded-full text-green-500 dark:text-white">
                                        <svg class="h-6 w-6" fill="currentColor" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M257,0C116.39,0,0,114.39,0,255s116.39,257,257,257s255-116.39,255-257S397.61,0,257,0z M392,285H287v107
                                                        c0,16.54-13.47,30-30,30c-16.54,0-30-13.46-30-30V285H120c-16.54,0-30-13.46-30-30c0-16.54,13.46-30,30-30h107V120
                                                        c0-16.54,13.46-30,30-30c16.53,0,30,13.46,30,30v105h105c16.53,0,30,13.46,30,30S408.53,285,392,285z"/>
                                                </g>
                                            </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g>
                                        </svg>
                                    </button>
                                    <button class="text-sm uppercase">
                                        <span class="">
                                            {{ $page.props.language['Create'] }}
                                        </span>
                                    </button>
                                </div>
                            </div>

                            <div class="flex items-center justify-between mb-6">
                                <div class="flex flex-1">
                                    <div class="relative flex-1">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                                <path d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z"></path>
                                            </svg>
                                        </div> 
                                        <input
                                            v-model="params.nameSearch"
                                            class="w-full pl-10 text-sm rounded border-gray-300 text-gray-700 bg-white hover:bg-gray-50"
                                            id="Name"
                                            type="text"
                                            placeholder="Name"
                                        />
                                    </div>
                                    <div class="relative flex-1 ml-4">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                                <path d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z"></path>
                                            </svg>
                                        </div> 
                                        <input
                                            v-model="params.lastnameSearch"
                                            class="w-full pl-10 text-sm rounded border-gray-300 text-gray-700 bg-white hover:bg-gray-50"
                                            id="Lastname"
                                            type="text"
                                            placeholder="Lastname"
                                        />
                                    </div>  
                                    <div class="relative flex-1 ml-4">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                                <path d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z"></path>
                                            </svg>
                                        </div> 
                                        <input
                                            v-model="params.emailSearch"
                                            class="w-full pl-10 text-sm rounded border-gray-300 text-gray-700 bg-white hover:bg-gray-50"
                                            id="Email"
                                            type="text"
                                            placeholder="Email"
                                        />
                                    </div> 
                                    <div class="flex space-x-3 ml-3">

                                        <div class="relative">
                                            <select v-model="params.status" class="inline-flex items-center transition-default whitespace-nowrap text-sm  pl-4 pr-7 py-2 border leading-5 font-medium shadow-sm rounded-md border-gray-300 text-gray-700 bg-white hover:bg-gray-50">
                                                <option :value="null">All Status</option>
                                                <option value="1"><span class="inline-block rounded-full w-2 h-2 mr-2.5 bg-green-400"></span> Active</option>
                                                <option value="0"><span class="inline-block rounded-full w-2 h-2 mr-2.5 bg-red-400"></span> Inactive</option>
                                            </select>
                                        </div> 
                            
                                        <div class="relative">
                                            <select v-model="params.perPage" class="inline-flex items-center transition-default whitespace-nowrap text-sm  pl-4 pr-7 py-2 border leading-5 font-medium shadow-sm rounded-md border-gray-300 text-gray-700 bg-white hover:bg-gray-50">
                                                <option value="5">5</option>
                                                <option value="10">10</option>
                                                <option value="15">15</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                        </div>
                                    </div>        
                                </div>
                            </div>


                            <div class="overflow-x-auto w-full">
                                <div class="w-full overflow-hidden rounded-lg shadow-xs">
                                    <div class="w-full overflow-x-auto">
                                        <table class="w-full whitespace-no-wrap">
                                            <thead>
                                                <tr
                                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-white dark:bg-gray-900"
                                                >
                                                <th class="px-4 py-3">#</th>
                                                <th class="px-4 py-3">{{ $page.props.language['Name'] }}</th>
                                                <th class="px-4 py-3">Joined</th>
                                                <th class="px-4 py-3">{{ $page.props.language['Status'] }}</th>
                                                <th class="px-4 py-3">Role</th>
                                                <th class="px-4 py-3">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody
                                                class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                                            >
                                                <tr v-for="(user,index) in users.data" :key="index" class="text-gray-700 dark:text-gray-400">
                                                    <td class="px-4 py-3 text-sm">
                                                        {{ (index+1) + $page.props.users.current_page * $page.props.users.per_page - $page.props.users.per_page }}
                                                    </td>
                                                    <td class="px-4 py-3">
                                                        <div class="flex items-center text-sm">
                                                        <!-- Avatar with inset shadow -->
                                                        <div
                                                            class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                                        >
                                                            <img class="h-8 w-8 rounded-full object-cover" :src="user.profile_photo_url" :alt="$page.props.user.name" />
                                                            <div
                                                            class="absolute inset-0 rounded-full shadow-inner"
                                                            aria-hidden="true"
                                                            ></div>
                                                        </div>
                                                        <div>
                                                            <p class="font-semibold">{{ user.name }} {{user.lastname}}</p>
                                                            <p class="text-xs text-gray-600 dark:text-gray-400">
                                                            {{ user.email }}
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-3 text-sm">
                                                        {{ user.created_at }}
                                                    </td>
                                                    <td class="px-4 py-3 text-xs">
                                                        <button v-if="user.status==1" @click="inactivateUser(user)"
                                                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                                                        >
                                                        Active
                                                        </button>
                                                        <button v-else @click="activateUser(user)"
                                                        class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100"
                                                        >
                                                        Inactive
                                                        </button>
                                                    </td>
                                                    <td class="px-4 py-3 text-xs justify-between">
                                                        <span v-for="(role,index) in user.roles" :key="index"
                                                        class="inline-flex items-center justify-center px-2 py-1 mr-2  font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100 md:mb-1"
                                                        >
                                                            {{ role.name }}
                                                        </span>
                                                    </td>
                                                    <td class="px-4 py-3" width="10px">
                                                        <div class="flex items-center space-x-2 text-sm">
                                                        <button
                                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-indigo-600 hover:text-indigo-900 rounded-lg dark:text-gray-400 dark:hover:text-white  focus:outline-none focus:shadow-outline-gray"
                                                            aria-label="Show"
                                                            @click="showModal(user)"
                                                        >
                                                            <svg class="w-5 h-5" fill="currentColor" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                viewBox="0 0 488.85 488.85" style="enable-background:new 0 0 488.85 488.85;" xml:space="preserve">
                                                                <g>
                                                                    <path d="M244.425,98.725c-93.4,0-178.1,51.1-240.6,134.1c-5.1,6.8-5.1,16.3,0,23.1c62.5,83.1,147.2,134.2,240.6,134.2
                                                                        s178.1-51.1,240.6-134.1c5.1-6.8,5.1-16.3,0-23.1C422.525,149.825,337.825,98.725,244.425,98.725z M251.125,347.025
                                                                        c-62,3.9-113.2-47.2-109.3-109.3c3.2-51.2,44.7-92.7,95.9-95.9c62-3.9,113.2,47.2,109.3,109.3
                                                                        C343.725,302.225,302.225,343.725,251.125,347.025z M248.025,299.625c-33.4,2.1-61-25.4-58.8-58.8c1.7-27.6,24.1-49.9,51.7-51.7
                                                                        c33.4-2.1,61,25.4,58.8,58.8C297.925,275.625,275.525,297.925,248.025,299.625z"/>
                                                                </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                            </svg>
                                                        </button>
                                                        <button
                                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-yellow-600 hover:text-yellow-900 rounded-lg dark:text-gray-400 dark:hover:text-white focus:outline-none focus:shadow-outline-gray"
                                                            aria-label="Edit"
                                                            @click="editModal(user)"
                                                        >
                                                            <svg
                                                            class="w-5 h-5"
                                                            aria-hidden="true"
                                                            fill="currentColor"
                                                            viewBox="0 0 20 20"
                                                            >
                                                            <path
                                                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                                                            ></path>
                                                            </svg>
                                                        </button>
                                                        <button
                                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-600 hover:text-red-900 rounded-lg dark:text-gray-400 dark:hover:text-white focus:outline-none focus:shadow-outline-gray"
                                                            aria-label="Delete"
                                                            @click="deleteUser(user)"
                                                        >
                                                            <svg
                                                            class="w-5 h-5"
                                                            aria-hidden="true"
                                                            fill="currentColor"
                                                            viewBox="0 0 20 20"
                                                            >
                                                            <path
                                                                fill-rule="evenodd"
                                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                clip-rule="evenodd"
                                                            ></path>
                                                            </svg>
                                                        </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="flex justify-center px-4 py-3 bg-gray-50 space-x-1 text-coolGray-800">

                                                                                  
                                            <Link v-if="$page.props.users.current_page>1" :href="$page.props.users.first_page_url">
                                                <button title="first page" type="button" class="inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow-md bg-coolGray-50 border-coolGray-100">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left w-4">
                                                        <polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7">
                                                        </polyline>
                                                    </svg>
                                                </button> 
                                            </Link>                                            
                                        
                                            <Link v-if="$page.props.users.current_page>1" :href="$page.props.users.prev_page_url">
                                                <button title="previous" type="button" class="inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow-md bg-coolGray-50 border-coolGray-100">
                                                    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-4">
                                                        <polyline points="15 18 9 12 15 6"></polyline>
                                                    </svg>
                                                </button> 
                                            </Link>
                                                                                    
                                            <Link v-for="(link, k) in users.links.slice(this.offset,$page.props.users.last_page+1)" :key="k" :href="link.url">
                                                <button type="button" title="Page k"
                                                    :class="[
                                                        link.url === null ? 'disabled' : '',
                                                        link.active ? 'text-blue-600 border-blue-600' : ''
                                                    ]"
                                                    class="inline-flex items-center justify-center w-8 h-8 text-xs font-semibold border rounded shadow-md">
                                                    {{link.label}}
                                                </button>
                                            </Link>   

                                            <Link v-if="$page.props.users.current_page < $page.props.users.last_page" :href="$page.props.users.next_page_url">
                                                <button title="next" type="button" class="inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow-md bg-coolGray-50 border-coolGray-100">                                                    
                                                    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-4">
                                                        <polyline points="9 18 15 12 9 6"></polyline>
                                                    </svg>                                                                                                    
                                                </button>
                                            </Link>

                                            <Link v-if="$page.props.users.current_page < $page.props.users.last_page" :href="$page.props.users.last_page_url">
                                                <button title="last page" type="button" class="inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow-md bg-coolGray-50 border-coolGray-100">                                                    
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                                        class="feather feather-chevrons-right w-4"><polyline points="13 17 18 12 13 7">
                                                        </polyline><polyline points="6 17 11 12 6 7">
                                                        </polyline>
                                                    </svg>                                                                                                    
                                                </button>  
                                            </Link> 

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <jet-dialog-modal v-if="estadoModalCreate == true" :show="estadoModalCreate" @close="estadoModalCreate = false" max-width="lg">
            <template #title>
                <p class="text-lg flex items-center justify-center font-bold uppercase">Create new user</p>
            </template>
            <template #content>
                <form class="px-2 bg-white dark:bg-gray-700 rounded" @submit.prevent="createUser">
                    
                    <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Name">
                                Name
                            </label>
                            <input
                                v-model="form.name"
                                :class="form.errors.name ? 'border-red-500':''"
                                class="w-full px-3 py-2 mb-1 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="Name"
                                type="text"
                                placeholder="Name"
                            />
                            <p v-if="form.errors.name" class="text-xs italic text-red-500">{{ form.errors.name }}</p>
                    </div>
                    <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="LastName">
                                LastName
                            </label>
                            <input
                                v-model="form.lastname"
                                :class="form.errors.lastname ? 'border-red-500':''"
                                class="w-full px-3 py-2 mb-1 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="LastName"
                                type="text"
                                placeholder="LastName"
                            />
                            <p v-if="form.errors.lastname" class="text-xs italic text-red-500">{{ form.errors.lastname }}</p>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Email
                        </label>
                        <input
                            v-model="form.email"
                            :class="form.errors.email ? 'border-red-500':''"
                            class="w-full px-3 py-2 mb-1 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="email"
                            type="email"
                            placeholder="Email"
                        />
                        <p v-if="form.errors.email" class="text-xs italic text-red-500">{{ form.errors.email }}</p>
                    </div>
                    <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="role">Role</label>
                            <div class="grid grid-cols-3 gap-2 bg-gray-100 dark:bg-gray-800 rounded">
                                <div v-for="role in roles" :key="role.id">
                                    <label class="inline-flex items-center text-xs m-2">
                                        <input type="checkbox" v-model="form.roles" :class="form.errors.roles ? 'border-red-500':''" class="form-checkbox rounded" :value="role.id">
                                        <span class="mx-2">{{ role.name }}</span>
                                    </label>
                                </div>
                            </div>
                            <p v-if="form.errors.roles" class="text-xs italic text-red-500 dark:text-red-400">{{ form.errors.roles }}</p>
                    </div>                   
                    <div class="flex items-center justify-center">
                        <button type="button" class="flex bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" @click="closeModal">
                            Cancel
                        </button>
                        <button type="submit" :disabled="!form.name||!form.lastname||!form.email||form.processing" :class="!form.name||!form.lastname||!form.email ? 'disabled:opacity-50 disabled cursor-not-allowed':''" 
                        class="flex ml-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            Create
                        </button>
                    </div>
                </form>
            </template>
        </jet-dialog-modal>

        <jet-dialog-modal v-if="estadoModalShow == true" :show="estadoModalShow" @close="estadoModalShow = false" max-width="lg">
            <template #title>
                <p class="text-lg flex items-center justify-center font-bold uppercase">Show user</p>
            </template>
            <template #content>    
                    <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Name">
                                Name
                            </label>
                            <span> {{form.name}} </span>
                    </div>
                    <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="LastName">
                                LastName
                            </label>
                            <span> {{form.lastname}} </span>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Email
                        </label>
                        <span> {{form.email}} </span>
                    </div>
                    <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="role">Role</label>
                            <div class="grid grid-cols-3 gap-2 bg-gray-100 dark:bg-gray-800 rounded">
                                <div v-for="role in roles" :key="role.id">
                                    <label class="inline-flex items-center text-xs m-2">
                                        <input type="checkbox" 
                                        v-model="selectedRoles"                         
                                        :value="role.id"
                                        :class="form.errors.roles ? 'border-red-500':''" 
                                        class="form-checkbox rounded"
                                        disabled/>
                                        <span class="mx-2">{{ role.name }}</span>
                                    </label>
                                </div>
                            </div>
                            <p v-if="form.errors.roles" class="text-xs italic text-red-500 dark:text-red-400">{{ form.errors.roles }}</p>
                    </div>                   
                    <div class='flex items-center justify-center'>
                        <button class="flex items-center justify-center bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" @click="closeModal">
                            <span class="text-sm">Close</span>
                        </button>
                    </div>
            </template>
        </jet-dialog-modal>

        <jet-dialog-modal v-if="estadoModalEdit == true" :show="estadoModalEdit" @close="estadoModalEdit = false" max-width="lg">
            <template #title>
                <p class="text-lg flex items-center justify-center font-bold uppercase">Edit user</p>
            </template>
            <template #content>
                <form class="px-2 bg-white dark:bg-gray-700 rounded" @submit.prevent="updateUser">
                    
                    <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Name">
                                Name
                            </label>
                            <input
                                v-model="form.name"
                                :class="form.errors.name ? 'border-red-500':''"
                                class="w-full px-3 py-2 mb-1 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="Name"
                                type="text"
                                placeholder="Name"
                            />
                            <p v-if="form.errors.name" class="text-xs italic text-red-500">{{ form.errors.name }}</p>
                    </div>
                    <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="LastName">
                                LastName
                            </label>
                            <input
                                v-model="form.lastname"
                                :class="form.errors.lastname ? 'border-red-500':''"
                                class="w-full px-3 py-2 mb-1 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="LastName"
                                type="text"
                                placeholder="LastName"
                            />
                            <p v-if="form.errors.lastname" class="text-xs italic text-red-500">{{ form.errors.lastname }}</p>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Email
                        </label>
                        <input
                            v-model="form.email"
                            :class="form.errors.email ? 'border-red-500':''"
                            class="w-full px-3 py-2 mb-1 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="email"
                            type="email"
                            placeholder="Email"
                        />
                        <p v-if="form.errors.email" class="text-xs italic text-red-500">{{ form.errors.email }}</p>
                    </div>
                    <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="role">Role</label>
                            <div class="grid grid-cols-3 gap-2 bg-gray-100 dark:bg-gray-800 rounded">
                                <div v-for="role in roles" :key="role.id">
                                    <label class="inline-flex items-center text-xs m-2">
                                        <input type="checkbox" 
                                        v-model="selectedRoles"
                                        :value="role.id"
                                        :class="form.errors.roles ? 'border-red-500':''" 
                                        class="form-checkbox rounded">
                                        <span class="mx-2" :for="role.id">{{ role.name }}</span>
                                    </label>
                                </div>
                            </div>
                            <p v-if="form.errors.roles" class="text-xs italic text-red-500 dark:text-red-400">{{ form.errors.roles }}</p>
                    </div>                   
                    <div class="flex items-center justify-center">
                        <button type="button" class="flex bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" @click="closeModal">
                            Cancel
                        </button>
                        <button type="submit" :disabled="!form.name||!form.lastname||!form.email||form.processing" :class="!form.name||!form.lastname||!form.email ? 'disabled:opacity-50 disabled cursor-not-allowed':''" 
                        class="flex ml-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            Update
                        </button>
                    </div>
                </form>
            </template>
        </jet-dialog-modal>

    </admin-layout>
</template>

<script>

    import AdminLayout from '@/Layouts/AdminLayout.vue'
    import Icon from '@/Shared/Icon.vue'
    import { Link } from '@inertiajs/inertia-vue3'
    import JetDialogModal from '@/Jetstream/DialogModal'
    import JetDropdownCustom from '@/Jetstream/DropdownCustom'
    import JetDropdownLinkCustom from '@/Jetstream/DropdownLinkCustom'

    export default {
        data() {
            return {
                estadoModalCreate:false,
                estadoModalShow:false,
                estadoModalEdit:false,
                selectedRoles: [],
                form: this.$inertia.form({
                    id: '',
                    name: '',
                    lastname:'',
                    email: '',
                    password: '',
                    roles: [],
                }),
                offset:1,
                params:{
                    nameSearch: this.nameSearch,
                    lastnameSearch: this.lastnameSearch,
                    emailSearch: this.emailSearch,
                    perPage: this.perPage,
                    status: this.status,                
                }
            }
        },
        watch:{
            params:{
                handler(){
                    // let params=pickBy(this.params);
                    let params=this.params;

                    Object.keys(params).forEach(key=>{
                        if (params[key] == ''){
                            delete params[key]
                        }
                        // if (params[key] == '5'){
                        //     delete params[key]
                        // }
                    });

                    // Object.keys(params).forEach(key=>{
                    //     if (params.perPage == 5){
                    //         delete params.perPage
                    //     }
                    // });

                    this.$inertia.replace(this.route('admin.users.index',
                        params,
                        { preserveState: true, preserveScroll: true }));
                },
                deep: true,
            }
        },
        props:[
            'users','roles','nameSearch','lastnameSearch','emailSearch','perPage','status'
            ],
        components: {
            AdminLayout,
            Icon,
            Link,
            JetDialogModal,
            JetDropdownCustom,
            JetDropdownLinkCustom,
        },
        methods: {
            openModalCreate(){
                this.estadoModalCreate=true
                this.form.reset()
                this.form.clearErrors()
            },
            closeModal() {
                this.estadoModalCreate = false
                this.estadoModalShow = false
                this.estadoModalEdit = false
                this.form.reset()
                this.form.clearErrors()
            },
            activateUser(user){
                this.$swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    width: '400px',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, activate it!'
                }).then((result)=>{
                    if (result.isConfirmed){
                        this.form.patch(this.route('admin.users.activate',user), {
                            preserveScroll:true,
                            onSuccess:()=>{
                                this.$swal(
                                    'activated!',
                                    'User has been activated.',
                                    'success'
                                )
                            }
                        })
                    }
                })
            },
            inactivateUser(user){
                this.$swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    width: '400px',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, inactivate it!'
                }).then((result)=>{
                    if (result.isConfirmed){
                        this.form.patch(this.route('admin.users.inactivate',user), {
                            preserveScroll:true,
                            onSuccess:()=>{
                                this.$swal(
                                    'inactivated!',
                                    'User has been inactivated.',
                                    'success'
                                )
                            }
                        })
                    }
                })
            },
            createUser(){
                this.form.post(this.route('admin.users.store'),{
                    preserveScroll:true,
                    onSuccess:()=>{
                        this.form.reset()
                        this.closeModal()
                        const Toast = this.$swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', this.$swal.stopTimer)
                                toast.addEventListener('mouseleave', this.$swal.resumeTimer)
                            }
                        })
                        Toast.fire({
                        icon: 'success',
                        title: 'Successfully created user'
                        })
                    }
                })
            },
            showModal(user){
                this.estadoModalCreate = false
                this.estadoModalShow = true
                this.estadoModalEdit = false
                this.form.name=user.name               
                this.form.lastname=user.lastname
                this.form.email=user.email               
                this.selectedRoles=user.roles.map(item => item.id)
            },
            editModal(user){
                this.form.clearErrors()
                this.estadoModalCreate = false
                this.estadoModalShow = false
                this.estadoModalEdit = true
                this.form.name=user.name
                this.form.lastname=user.lastname
                this.form.email=user.email
                this.form.id=user.id                
                this.selectedRoles=user.roles.map(item => item.id)
            },
            updateUser(){
                this.form.patch(this.route('admin.users.update',this.form.id, this.form.roles=this.selectedRoles),{
                    preserveScroll:true,
                    onSuccess:()=>{
                        this.form.reset()
                        this.closeModal() 
                        const Toast = this.$swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', this.$swal.stopTimer)
                                toast.addEventListener('mouseleave', this.$swal.resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon:'success',
                            title:'User updated successfully!'
                        })
                    }
                })
            },
            deleteUser(user){
                this.$swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    width: '400px',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result)=>{
                    if (result.isConfirmed){
                        this.form.delete(this.route('admin.users.destroy',user), {
                            preserveScroll:true,
                            onSuccess:()=>{
                                this.$swal(
                                    'Deleted!',
                                    'User has been deleted.',
                                    'success'
                                )
                            }
                        })
                    }
                })
            },
        },
    }
</script>
