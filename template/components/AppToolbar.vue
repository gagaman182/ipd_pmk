<template>
  <v-toolbar color="deep-orange darken-4" fixed dark app>
    <v-toolbar-title class="ml-0 pl-3">
      <v-toolbar-side-icon @click.stop="toggleDrawer()"></v-toolbar-side-icon>
    </v-toolbar-title>
    <div class="text-xs-center">
      <h3 class="  white--text ">
        <v-icon large color="white lighten-3">dashboard</v-icon>
        Dashboard IPD โรงพยาบาลหาดใหญ่
      </h3>
    </div>
    <v-spacer></v-spacer>

    <v-btn icon @click="handleFullScreen()">
      <v-icon>fullscreen</v-icon>
    </v-btn>
  </v-toolbar>
</template>
<script>
import NotificationList from "@/components/widgets/list/NotificationList";
import Util from "@/util";

export default {
  name: "app-toolbar",
  components: {
    NotificationList
  },
  data: function() {
    return {
      items: [
        {
          icon: "account_circle",
          href: "#",
          title: "Profile",
          click: e => {
            console.log(e);
          }
        },
        {
          icon: "settings",
          href: "#",
          title: "Settings",
          click: e => {
            console.log(e);
          }
        },
        {
          icon: "fullscreen_exit",
          href: "#",
          title: "Logout",
          click: this.handleLogout
        }
      ]
    };
  },
  computed: {
    toolbarColor() {
      return this.$vuetify.options.extra.mainNav;
    }
  },
  methods: {
    toggleDrawer() {
      this.$store.commit("toggleDrawer");
    },
    handleFullScreen() {
      Util.toggleFullScreen();
    },
    handleLogout() {
      this.$router.push("/login");
    }
  }
};
</script>
