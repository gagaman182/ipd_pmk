import Vue from 'vue'
import Router from 'vue-router'
import { interopDefault } from './utils'

const _fffd96e8 = () => interopDefault(import('..\\pages\\chat.vue' /* webpackChunkName: "pages_chat" */))
const _9f5697f4 = () => interopDefault(import('..\\pages\\chat\\contact\\_uuid.vue' /* webpackChunkName: "pages_chat_contact__uuid" */))
const _9b85c4bc = () => interopDefault(import('..\\pages\\chat\\messaging\\_uuid.vue' /* webpackChunkName: "pages_chat_messaging__uuid" */))
const _01591a10 = () => interopDefault(import('..\\pages\\dashboard.vue' /* webpackChunkName: "pages_dashboard" */))
const _64dc7b6e = () => interopDefault(import('..\\pages\\empty.vue' /* webpackChunkName: "pages_empty" */))
const _e1c2efaa = () => interopDefault(import('..\\pages\\forms.vue' /* webpackChunkName: "pages_forms" */))
const _52400b96 = () => interopDefault(import('..\\pages\\forms\\basic-forms.vue' /* webpackChunkName: "pages_forms_basic-forms" */))
const _0add808b = () => interopDefault(import('..\\pages\\forms\\editors.vue' /* webpackChunkName: "pages_forms_editors" */))
const _69d9fe82 = () => interopDefault(import('..\\pages\\forms\\selection-controls.vue' /* webpackChunkName: "pages_forms_selection-controls" */))
const _52e34e5c = () => interopDefault(import('..\\pages\\forms\\selects.vue' /* webpackChunkName: "pages_forms_selects" */))
const _ba778aa6 = () => interopDefault(import('..\\pages\\forms\\steppers.vue' /* webpackChunkName: "pages_forms_steppers" */))
const _0a52db3e = () => interopDefault(import('..\\pages\\forms\\text-fields.vue' /* webpackChunkName: "pages_forms_text-fields" */))
const _46075138 = () => interopDefault(import('..\\pages\\general.vue' /* webpackChunkName: "pages_general" */))
const _4202140a = () => interopDefault(import('..\\pages\\general\\alerts.vue' /* webpackChunkName: "pages_general_alerts" */))
const _1f4f3506 = () => interopDefault(import('..\\pages\\general\\avatars.vue' /* webpackChunkName: "pages_general_avatars" */))
const _a60d8fd8 = () => interopDefault(import('..\\pages\\general\\badges.vue' /* webpackChunkName: "pages_general_badges" */))
const _c27ae266 = () => interopDefault(import('..\\pages\\general\\buttons.vue' /* webpackChunkName: "pages_general_buttons" */))
const _0e9db2af = () => interopDefault(import('..\\pages\\general\\cards.vue' /* webpackChunkName: "pages_general_cards" */))
const _63af045f = () => interopDefault(import('..\\pages\\general\\carousels.vue' /* webpackChunkName: "pages_general_carousels" */))
const _1e27fef3 = () => interopDefault(import('..\\pages\\general\\chips.vue' /* webpackChunkName: "pages_general_chips" */))
const _8d2a0758 = () => interopDefault(import('..\\pages\\general\\colors.vue' /* webpackChunkName: "pages_general_colors" */))
const _090b1677 = () => interopDefault(import('..\\pages\\general\\dialogs.vue' /* webpackChunkName: "pages_general_dialogs" */))
const _6b4f2a34 = () => interopDefault(import('..\\pages\\general\\icons.vue' /* webpackChunkName: "pages_general_icons" */))
const _11b54b7e = () => interopDefault(import('..\\pages\\general\\pagination.vue' /* webpackChunkName: "pages_general_pagination" */))
const _5d8c1dfb = () => interopDefault(import('..\\pages\\general\\parallax.vue' /* webpackChunkName: "pages_general_parallax" */))
const _0e3310de = () => interopDefault(import('..\\pages\\general\\progress.vue' /* webpackChunkName: "pages_general_progress" */))
const _042ef27e = () => interopDefault(import('..\\pages\\general\\sliders.vue' /* webpackChunkName: "pages_general_sliders" */))
const _7ab27269 = () => interopDefault(import('..\\pages\\general\\snackbar.vue' /* webpackChunkName: "pages_general_snackbar" */))
const _12dffac9 = () => interopDefault(import('..\\pages\\general\\tables.vue' /* webpackChunkName: "pages_general_tables" */))
const _46dc4698 = () => interopDefault(import('..\\pages\\general\\tooltips.vue' /* webpackChunkName: "pages_general_tooltips" */))
const _d85092da = () => interopDefault(import('..\\pages\\general\\typography.vue' /* webpackChunkName: "pages_general_typography" */))
const _888a8336 = () => interopDefault(import('..\\pages\\login.vue' /* webpackChunkName: "pages_login" */))
const _29b75f6b = () => interopDefault(import('..\\pages\\mail.vue' /* webpackChunkName: "pages_mail" */))
const _08343515 = () => interopDefault(import('..\\pages\\mail\\0\\_uuid.vue' /* webpackChunkName: "pages_mail_0__uuid" */))
const _ec4ff156 = () => interopDefault(import('..\\pages\\mail\\_mailType.vue' /* webpackChunkName: "pages_mail__mailType" */))
const _bc6ced40 = () => interopDefault(import('..\\pages\\media.vue' /* webpackChunkName: "pages_media" */))
const _6836b1a1 = () => interopDefault(import('..\\pages\\pickers.vue' /* webpackChunkName: "pages_pickers" */))
const _1995d146 = () => interopDefault(import('..\\pages\\pickers\\datepicker.vue' /* webpackChunkName: "pages_pickers_datepicker" */))
const _4f4e5fbc = () => interopDefault(import('..\\pages\\pickers\\timepicker.vue' /* webpackChunkName: "pages_pickers_timepicker" */))
const _72a101ab = () => interopDefault(import('..\\pages\\widgets.vue' /* webpackChunkName: "pages_widgets" */))
const _5b897583 = () => interopDefault(import('..\\pages\\widgets\\chart.vue' /* webpackChunkName: "pages_widgets_chart" */))
const _3f89e489 = () => interopDefault(import('..\\pages\\widgets\\list.vue' /* webpackChunkName: "pages_widgets_list" */))
const _3ea28318 = () => interopDefault(import('..\\pages\\widgets\\social.vue' /* webpackChunkName: "pages_widgets_social" */))
const _36883f75 = () => interopDefault(import('..\\pages\\widgets\\statistic.vue' /* webpackChunkName: "pages_widgets_statistic" */))
const _1f78b9c8 = () => interopDefault(import('..\\pages\\ipd\\_ipddetail.vue' /* webpackChunkName: "pages_ipd__ipddetail" */))
const _1bd9c964 = () => interopDefault(import('..\\pages\\index.vue' /* webpackChunkName: "pages_index" */))

Vue.use(Router)

if (process.client) {
  window.history.scrollRestoration = 'manual'
}
const scrollBehavior = function (to, from, savedPosition) {
  // if the returned position is falsy or an empty object,
  // will retain current scroll position.
  let position = false

  // if no children detected and scrollToTop is not explicitly disabled
  if (
    to.matched.length < 2 &&
    to.matched.every(r => r.components.default.options.scrollToTop !== false)
  ) {
    // scroll to the top of the page
    position = { x: 0, y: 0 }
  } else if (to.matched.some(r => r.components.default.options.scrollToTop)) {
    // if one of the children has scrollToTop option set to true
    position = { x: 0, y: 0 }
  }

  // savedPosition is only available for popstate navigations (back button)
  if (savedPosition) {
    position = savedPosition
  }

  return new Promise((resolve) => {
    // wait for the out transition to complete (if necessary)
    window.$nuxt.$once('triggerScroll', () => {
      // coords will be used if no selector is provided,
      // or if the selector didn't match any element.
      if (to.hash) {
        let hash = to.hash
        // CSS.escape() is not supported with IE and Edge.
        if (typeof window.CSS !== 'undefined' && typeof window.CSS.escape !== 'undefined') {
          hash = '#' + window.CSS.escape(hash.substr(1))
        }
        try {
          if (document.querySelector(hash)) {
            // scroll to anchor by returning the selector
            position = { selector: hash }
          }
        } catch (e) {
          console.warn('Failed to save scroll position. Please add CSS.escape() polyfill (https://github.com/mathiasbynens/CSS.escape).')
        }
      }
      resolve(position)
    })
  })
}

export function createRouter() {
  return new Router({
    mode: 'history',
    base: '/webapp/ipdpmk',
    linkActiveClass: 'nuxt-link-active',
    linkExactActiveClass: 'nuxt-link-exact-active',
    scrollBehavior,

    routes: [{
      path: "/chat",
      component: _fffd96e8,
      name: "chat",
      children: [{
        path: "contact/:uuid?",
        component: _9f5697f4,
        name: "chat-contact-uuid"
      }, {
        path: "messaging/:uuid?",
        component: _9b85c4bc,
        name: "chat-messaging-uuid"
      }]
    }, {
      path: "/dashboard",
      component: _01591a10,
      name: "dashboard"
    }, {
      path: "/empty",
      component: _64dc7b6e,
      name: "empty"
    }, {
      path: "/forms",
      component: _e1c2efaa,
      name: "forms",
      children: [{
        path: "basic-forms",
        component: _52400b96,
        name: "forms-basic-forms"
      }, {
        path: "editors",
        component: _0add808b,
        name: "forms-editors"
      }, {
        path: "selection-controls",
        component: _69d9fe82,
        name: "forms-selection-controls"
      }, {
        path: "selects",
        component: _52e34e5c,
        name: "forms-selects"
      }, {
        path: "steppers",
        component: _ba778aa6,
        name: "forms-steppers"
      }, {
        path: "text-fields",
        component: _0a52db3e,
        name: "forms-text-fields"
      }]
    }, {
      path: "/general",
      component: _46075138,
      name: "general",
      children: [{
        path: "alerts",
        component: _4202140a,
        name: "general-alerts"
      }, {
        path: "avatars",
        component: _1f4f3506,
        name: "general-avatars"
      }, {
        path: "badges",
        component: _a60d8fd8,
        name: "general-badges"
      }, {
        path: "buttons",
        component: _c27ae266,
        name: "general-buttons"
      }, {
        path: "cards",
        component: _0e9db2af,
        name: "general-cards"
      }, {
        path: "carousels",
        component: _63af045f,
        name: "general-carousels"
      }, {
        path: "chips",
        component: _1e27fef3,
        name: "general-chips"
      }, {
        path: "colors",
        component: _8d2a0758,
        name: "general-colors"
      }, {
        path: "dialogs",
        component: _090b1677,
        name: "general-dialogs"
      }, {
        path: "icons",
        component: _6b4f2a34,
        name: "general-icons"
      }, {
        path: "pagination",
        component: _11b54b7e,
        name: "general-pagination"
      }, {
        path: "parallax",
        component: _5d8c1dfb,
        name: "general-parallax"
      }, {
        path: "progress",
        component: _0e3310de,
        name: "general-progress"
      }, {
        path: "sliders",
        component: _042ef27e,
        name: "general-sliders"
      }, {
        path: "snackbar",
        component: _7ab27269,
        name: "general-snackbar"
      }, {
        path: "tables",
        component: _12dffac9,
        name: "general-tables"
      }, {
        path: "tooltips",
        component: _46dc4698,
        name: "general-tooltips"
      }, {
        path: "typography",
        component: _d85092da,
        name: "general-typography"
      }]
    }, {
      path: "/login",
      component: _888a8336,
      name: "login"
    }, {
      path: "/mail",
      component: _29b75f6b,
      name: "mail",
      children: [{
        path: "0/:uuid?",
        component: _08343515,
        name: "mail-0-uuid"
      }, {
        path: ":mailType?",
        component: _ec4ff156,
        name: "mail-mailType"
      }]
    }, {
      path: "/media",
      component: _bc6ced40,
      name: "media"
    }, {
      path: "/pickers",
      component: _6836b1a1,
      name: "pickers",
      children: [{
        path: "datepicker",
        component: _1995d146,
        name: "pickers-datepicker"
      }, {
        path: "timepicker",
        component: _4f4e5fbc,
        name: "pickers-timepicker"
      }]
    }, {
      path: "/widgets",
      component: _72a101ab,
      name: "widgets",
      children: [{
        path: "chart",
        component: _5b897583,
        name: "widgets-chart"
      }, {
        path: "list",
        component: _3f89e489,
        name: "widgets-list"
      }, {
        path: "social",
        component: _3ea28318,
        name: "widgets-social"
      }, {
        path: "statistic",
        component: _36883f75,
        name: "widgets-statistic"
      }]
    }, {
      path: "/ipd/:ipddetail?",
      component: _1f78b9c8,
      name: "ipd-ipddetail"
    }, {
      path: "/",
      component: _1bd9c964,
      name: "index"
    }],

    fallback: false
  })
}
