<template>
    <div class="w-full h-full flex flex-col justify-center items-center">
        <div class="flex justify-center items-center">
            <div class="h-6 flex items-center bg-white rounded-full mx-1 px-1 cursor-pointer"
                :class="{'dark:bg-gray-700':theme === 'dark'}" @click="toggleTheme">
                <!-- <div class="bg-white w-4 h-4 rounded-full shadow-md transform transition duration-700 ease-out" :class="{'translate-x-4 dark:bg-gray-700':theme === 'dark'}"> -->
                    <span v-if="theme === 'dark'">
                        <svg class="h-5 w-5 text-white" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </span>
                    <span v-else>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 transform -rotate-90"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                    </span>
                <!-- </div> -->
            </div>
        </div>
    </div>
</template>
<script setup>
import { ref, onMounted } from 'vue'
const theme = ref('')

onMounted(() => {
    const userPrefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
    const defaultTheme = userPrefersDark ? 'dark' : ''
    theme.value = localStorage.getItem('theme') || defaultTheme
    setTheme(theme.value)
})

const toggleTheme = () => {
    const newTheme = theme.value === '' ? 'dark' : ''
    setTheme(newTheme)
}
const setTheme = (newTheme) => {
    theme.value= newTheme
    if (theme.value === 'dark') {
        document.documentElement.classList.add('dark')
    } else {
        document.documentElement.classList.remove('dark')
    }
    localStorage.setItem('theme', newTheme)
}
</script>

<style>

</style>
