<template>
  <v-app>
    <app-bar />
    <core-view />

  </v-app>
</template>

<script>
  export default {
    name: 'Index',

    components: {
      AppBar: () => import('./AppBar'),
      CoreView: () => import('./View'),
    },

    data: () => ({
      expandOnHover: false,
    }),
  }
</script>