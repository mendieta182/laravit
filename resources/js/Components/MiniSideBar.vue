<template>
    <div class="h-screen hidden md:block pb-8 mt-4 ml-4 shadow-lg relative w-16">
        <div class="bg-white overflow-y-auto h-full rounded-2xl dark:bg-gray-700 shadow-lg">
            <div class="flex items-center justify-center pt-6">
                <svg class="w-8 h-8 fill-current dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
                </svg>
                <span class="m-1 text-sm font-bold dark:text-white">TA</span>
            </div>
            <nav class="mt-6">
                <div class="flex flex-col w-16">
                    <a class="w-full font-thin uppercase text-blue-500 flex items-center p-3 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white to-blue-100 dark:from-gray-700 dark:to-gray-800 border-r-4 border-blue-500 hover:text-blue-500 dark:hover:text-blue-500 has-tooltip" href="#">
                        <span class="text-left mx-auto">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                                </path>
                            </svg>
                        </span>
                        <span class="tooltip">
                            Dashboard
                        </span>
                    </a>
                    <p class="p-3 m-auto text-xs uppercase text-gray-900 dark:text-blue-200">ADM.</p>
                    <a class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-3 transition-colors duration-200 justify-start hover:text-blue-500 dark:hover:text-blue-500 has-tooltip" href="#">
                        <span class="text-left m-auto">
                            <svg width="20" height="20" fill="currentColor" class="m-auto" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1024 1131q0-64-9-117.5t-29.5-103-60.5-78-97-28.5q-6 4-30 18t-37.5 21.5-35.5 17.5-43 14.5-42 4.5-42-4.5-43-14.5-35.5-17.5-37.5-21.5-30-18q-57 0-97 28.5t-60.5 78-29.5 103-9 117.5 37 106.5 91 42.5h512q54 0 91-42.5t37-106.5zm-157-520q0-94-66.5-160.5t-160.5-66.5-160.5 66.5-66.5 160.5 66.5 160.5 160.5 66.5 160.5-66.5 66.5-160.5zm925 509v-64q0-14-9-23t-23-9h-576q-14 0-23 9t-9 23v64q0 14 9 23t23 9h576q14 0 23-9t9-23zm0-260v-56q0-15-10.5-25.5t-25.5-10.5h-568q-15 0-25.5 10.5t-10.5 25.5v56q0 15 10.5 25.5t25.5 10.5h568q15 0 25.5-10.5t10.5-25.5zm0-252v-64q0-14-9-23t-23-9h-576q-14 0-23 9t-9 23v64q0 14 9 23t23 9h576q14 0 23-9t9-23zm256-320v1216q0 66-47 113t-113 47h-352v-96q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v96h-768v-96q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v96h-352q-66 0-113-47t-47-113v-1216q0-66 47-113t113-47h1728q66 0 113 47t47 113z">
                                </path>
                            </svg>
                        </span>
                        <span class="tooltip">
                            Users
                        </span>
                    </a>
                    <a class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-3 transition-colors duration-200 justify-start hover:text-blue-500 dark:hover:text-blue-500 has-tooltip" href="#">
                        <span class="text-left m-auto">
                            <svg width="20" height="20" fill="currentColor" class="m-auto" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M960 0l960 384v128h-128q0 26-20.5 45t-48.5 19h-1526q-28 0-48.5-19t-20.5-45h-128v-128zm-704 640h256v768h128v-768h256v768h128v-768h256v768h128v-768h256v768h59q28 0 48.5 19t20.5 45v64h-1664v-64q0-26 20.5-45t48.5-19h59v-768zm1595 960q28 0 48.5 19t20.5 45v128h-1920v-128q0-26 20.5-45t48.5-19h1782z">
                                </path>
                            </svg>
                        </span>
                        <span class="tooltip">
                            Roles
                        </span>
                    </a>
                    <a class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-3 transition-colors duration-200 justify-start hover:text-blue-500 dark:hover:text-blue-500 has-tooltip" href="#">
                        <span class="text-left m-auto">
                            <svg width="20" fill="currentColor" height="20" class="h-5 w-5" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1088 1256v240q0 16-12 28t-28 12h-240q-16 0-28-12t-12-28v-240q0-16 12-28t28-12h240q16 0 28 12t12 28zm316-600q0 54-15.5 101t-35 76.5-55 59.5-57.5 43.5-61 35.5q-41 23-68.5 65t-27.5 67q0 17-12 32.5t-28 15.5h-240q-15 0-25.5-18.5t-10.5-37.5v-45q0-83 65-156.5t143-108.5q59-27 84-56t25-76q0-42-46.5-74t-107.5-32q-65 0-108 29-35 25-107 115-13 16-31 16-12 0-25-8l-164-125q-13-10-15.5-25t5.5-28q160-266 464-266 80 0 161 31t146 83 106 127.5 41 158.5z">
                                </path>
                            </svg>
                        </span>
                        <span class="tooltip">
                            Permissions
                        </span>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</template>
