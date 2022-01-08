<template>
    <a class="nav-link" data-toggle="dropdown" href="#">
        <span v-if="$page.props.locale =='es'">
            <icon class="w-5 h-5" :name="selectable_locale='es'" /> ES
        </span>
        <span v-if="$page.props.locale =='en'">
            <icon class="w-5 h-5" :name="selectable_locale='en'" /> EN
        </span>
        <span v-if="$page.props.locale =='fr'">
            <icon class="w-5 h-5" :name="selectable_locale='fr'" /> FR </span>
        <i class="fas fa-caret-down"></i>
    </a>
    <div class="dropdown-menu w-auto h-auto dropdown-menu-right">
        <Link :href="route('language', 'es')" class="dropdown-item">
            <icon class="w-5 h-5" :name="selectable_locale='es'" /> Español
        </Link>
        <div class="dropdown-divider"></div>
        <Link :href="route('language', 'en')" class="dropdown-item">
            <icon class="w-5 h-5" :name="selectable_locale='en'" /> Inglés
        </Link>
        <div class="dropdown-divider"></div>
        <Link :href="route('language', 'fr')" class="dropdown-item">
            <icon class="w-5 h-5" :name="selectable_locale='fr'" /> Francés
        </Link>
    </div>
</template>

<script>
import Icon from '@/Shared/Icon.vue'
import { Link } from '@inertiajs/inertia-vue3'
export default {
    name: "LanguageSelector",
    props:['locale'],
    components: {
        Icon,
        Link
    },
    computed: {
        selectable_locale() {
            if(this.$page.props.locale == 'en') {
                return 'en';
            }
            if(this.$page.props.locale == 'es') {
                return 'es';
            }
                return 'fr';
        }
    },
}
</script>

<style scoped>
</style>
