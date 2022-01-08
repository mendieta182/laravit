<template>
 <!-- text-gray-600  border-t dark:border-gray-700  dark:text-gray-400 dark:bg-gray-700 -->
    <div class="grid px-4 py-3 text-sm font-semibold tracking-wide uppercase bg-gray-50  sm:grid-cols-9 text-coolGray-800" v-if="links.length > 3">
        <span class="flex text-left items-center col-span-3">
            Mostrando {{ from }}-{{ to }} de {{ total }}
        </span>
        <span class="col-span-2"></span>
        <span class="text-right col-span-4 mt-2 sm:mt-auto sm:justify-end">
            <nav aria-label="navigation">
                <ul class="inline-flex items-center">
                    <li v-for="(link, k) in links" :key="k">
                        <div v-if="link.url === null"  class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-blue" v-html="link.label"/>
                        <Link v-else class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-blue" :class="{ 'bg-blue-700 text-white': link.active }" :href="link.url" v-html="link.label" />
                    </li>
                </ul>
            </nav>
        </span>
    </div>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3'
    export default {
        props: {
            links: Array,
            total: Number,
            to: Number,
            from: Number
        },
        components: {
            Link
        }
    }
</script>

// <div class="flex justify-center space-x-1 text-coolGray-800">
//     <button title="previous" type="button" class="inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow-md bg-coolGray-50 border-coolGray-100">
//         <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-4">
//             <polyline points="15 18 9 12 15 6"></polyline>
//         </svg>
//     </button>
//     <button type="button" title="Page 1" class="inline-flex items-center justify-center w-8 h-8 text-sm font-semibold border rounded shadow-md bg-coolGray-50 text-blue-600 border-blue-600">1</button>
//     <button type="button" v-for="page in totalPages()" class="inline-flex items-center justify-center w-8 h-8 text-sm border rounded shadow-md bg-coolGray-50 border-coolGray-100" title="Page 2">{{page}}</button>
//     <button title="next" type="button" class="inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow-md bg-coolGray-50 border-coolGray-100">
//         <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-4">
//             <polyline points="9 18 15 12 9 6"></polyline>
//         </svg>
//     </button>
// </div>
