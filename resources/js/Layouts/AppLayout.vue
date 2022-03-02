<template>
    <div>
        <Head :title="title" />
        
        <!-- Sidebar -->
        <nav class="fixed bg-themegray-100 border-r-[1px] border-themeblack w-20 h-screen flex flex-row justify-center">
            <HamburgerMenu />
                <!-- npx mix watch --hot -->
                <!-- Settings Dropdown -->
                <!-- Authentication -->
                <!-- <form @submit.prevent="logout">
                    <jet-dropdown-link as="button">
                        Log Out
                    </jet-dropdown-link>
                </form> -->
        </nav>
        <div class="min-h-screen bg-gray-100 ml-24 mr-4">
            

            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header"></slot>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot></slot>
            </main>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
    import JetBanner from '@/Jetstream/Banner.vue'
    import JetDropdown from '@/Jetstream/Dropdown.vue'
    import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
    import JetNavLink from '@/Jetstream/NavLink.vue'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import HamburgerMenu from './HamburgerMenu.vue';

    export default defineComponent({
        props: {
            title: String,
        },

        components: {
            HamburgerMenu,
            Head,
            JetApplicationMark,
            JetBanner,
            JetDropdown,
            JetDropdownLink,
            JetNavLink,
            JetResponsiveNavLink,
            Link,
        },

        data() {
            return {
                showingNavigationDropdown: false,
            }
        },

        methods: {
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
    })
</script>
