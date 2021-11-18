<template>
    <Head :title="title"/>
    <div class="bmd-layout-container bmd-drawer-f-l avam-container animated bmd-drawer-in">
        <header class="bmd-layout-header ">
            <div class="navbar navbar-light bg-faded animate__animated animate__fadeInDown">
                <button class="navbar-toggler animate__animated animate__wobble animate__delay-2s" type="button"
                        data-toggle="drawer" data-target="#dw-s1">
                    <span class="navbar-toggler-icon"></span>
                    <!-- <i class="material-Animation">menu</i> -->
                </button>
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn  dropdown-toggle  m-0" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-envelope fa-lg"></i><span
                                class="badge badge-pill badge-danger animate__animated animate__flash animate__repeat-3 animate__slower animate__delay-2s">5</span>
                            </button>
                            <div aria-labelledby="dropdownMenu2"
                                 class="dropdown-menu dropdown-menu-right dropdown-menu dropdown-menu-right-lg">
                                <span class="dropdown-item dropdown-header">15 Notifications</span>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="far fa-envelope c-main mr-2"></i> 4 new messages
                                    <span class="float-right-rtl text-muted text-sm">3 mins</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="far fa-user c-main mr-2"></i> 8 friend requests
                                    <span class="float-right-rtl text-muted text-sm">12 hours</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="far fa-file c-main mr-2"></i> 3 new reports
                                    <span class="float-right-rtl text-muted text-sm">2 days</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn  dropdown-toggle m-0" type="button" id="dropdownMenu3"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-bell  fa-lg "></i><span
                                class="badge badge-pill badge-warning animate__animated animate__flash animate__repeat-3 animate__slower animate__delay-2s">5</span>
                            </button>
                            <div aria-labelledby="dropdownMenu2"
                                 class="dropdown-menu dropdown-menu-right dropdown-menu dropdown-menu-right-lg">
                                <span class="dropdown-item dropdown-header">15 Notifications</span>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="far fa-envelope c-main mr-2"></i> 4 new messages
                                    <span class="float-right-rtl text-muted text-sm">3 mins</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="far fa-user c-main mr-2"></i> 8 friend requests
                                    <span class="float-right-rtl text-muted text-sm">12 hours</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="far fa-file c-main mr-2"></i> 3 new reports
                                    <span class="float-right-rtl text-muted text-sm">2 days</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><img src="/nozha-rtl-dashboard-template/img/user-profile.jpg" alt="..."
                                              class="rounded-circle screen-user-profile"></li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn  dropdown-toggle m-0" type="button" id="dropdownMenu4"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                majid
                            </button>
                            <div
                                class="dropdown-menu dropdown-menu-right dropdown-menu dropdown-menu-right"
                                aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item" type="button"><i
                                    class="far fa-user fa-sm c-main mr-2"></i>Profile
                                </button>
                                <button onclick="dark()" class="dropdown-item" type="button"><i
                                    class="fas fa-moon fa-sm c-main mr-2"></i>Dark Mode
                                </button>
                                <button class="dropdown-item" type="button"><i
                                    class="fas fa-cog fa-sm c-main mr-2"></i>Setting
                                </button>
                                <button class="dropdown-item" type="button"><i
                                    class="fas fa-sign-out-alt c-main fa-sm mr-2"></i>Sign Out
                                </button>
                            </div>
                        </div>
                    </li>


                </ul>
            </div>
        </header>
        <div id="dw-s1" class="bmd-layout-drawer bg-faded">

            <div class="container-fluid side-bar-container">
                <header class="pb-0">
                    <a class="navbar-brand">
                        <object class="side-logo" data="/nozha-rtl-dashboard-template/svg/logo-8.svg"
                                type="image/svg+xml">
                        </object>
                    </a>
                </header>
                <p class="side-comment">Title</p>
                <div class="side a-collapse short ">
                    <a href="#" class="side-item "><i class="fas fa-fan fa-spin mr-1"></i>Animation</a>
                </div>

            </div>

        </div>
        <main class="bmd-layout-content">
            <div class="container-fluid ">

                <!-- content -->
                <!-- breadcrumb -->

                <div class="row  m-1 pb-4 mb-3 ">
                    <div class="col-xs-12  col-sm-12  col-md-12  col-lg-12 p-2">
                        <div class="page-header breadcrumb-header ">
                            <div class="row align-items-end ">
                                <div class="col-lg-8">
                                    <div class="page-header-title text-left-rtl">
                                        <div class="d-inline">
                                            <h3 class="lite-text" v-if="$slots.header">
                                                <slot name="header"></slot>
                                            </h3>
                                            <span class="lite-text text-gray" v-if="$slots.subTitle"><slot name="subTitle"></slot></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4" v-if="$slots.breadcrumb">
                                  <slot name="breadcrumb"></slot>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Content -->
                <main>
                    <slot></slot>
                </main>

            </div>
        </main>
    </div>

</template>

<script>
import {defineComponent} from 'vue'
import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
import JetBanner from '@/Jetstream/Banner.vue'
import JetDropdown from '@/Jetstream/Dropdown.vue'
import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
import JetNavLink from '@/Jetstream/NavLink.vue'
import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue'
import {Head, Link} from '@inertiajs/inertia-vue3';

export default defineComponent({
    props: {
        title: String,
    },

    components: {
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
