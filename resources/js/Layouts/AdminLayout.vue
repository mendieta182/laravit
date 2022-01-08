<template>
    <main class="bg-gray-100 dark:bg-gray-800 rounded-2xl h-screen overflow-hidden relative">
        <div class="flex items-start justify-between">
            <!-- miniSideBar -->
            <MiniSideBar v-if="!headerIcon" />
            <!-- End miniSideBar -->
            <!-- SideBar -->
            <SideBar v-else/>
            <!-- End SideBar -->

            <div class="flex flex-col w-full p-2 md:p-4 md:space-y-4">
                <!-- Header -->
                <Header @menu='activateHeaderIcon' @mobil='activateSidebarMobil' />
                <!-- End Header -->
                <!-- mobilSideBar -->
                <MobilSideBar v-if="sidebarMobil"/>
                <!-- End mobilSideBar -->
                <!-- Content -->
                <slot></slot>
                <!-- End Content -->
            </div>
        </div>
    </main>
</template>

<script>
import MiniSideBar from '@/Components/MiniSideBar.vue'
import MobilSideBar from '@/Components/MobilSideBar.vue'
import SideBar from '@/Components/SideBar.vue'
import Header from '@/Components/Header.vue'



export default {
    data(){
        return{
            headerIcon:true,
            sidebarMobil:false
        }
    },
    components:{
        MiniSideBar,
        MobilSideBar,
        SideBar,
        Header
    },
    methods: {
        activateHeaderIcon(){
            this.headerIcon = !this.headerIcon
        },
        activateSidebarMobil(){
            this.sidebarMobil = !this.sidebarMobil
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
    }
}
</script>
