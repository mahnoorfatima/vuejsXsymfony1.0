<template>
  <v-app>
    <v-container>
      <v-row justify="center">
        <v-col cols="12" md="8">
          <v-card>
            <v-form>
              <v-container class="py-0">
                <v-row>
                  <v-col cols="12" md="6">
                    <v-text-field label="First Name" class="purple-input" :value="user.firstname"/>
                  </v-col>

                  <v-col cols="12" md="6">
                    <v-text-field label="Last Name" class="purple-input" :value="user.lastname" />
                  </v-col>
                  <v-col cols="12" md="6">
                    <v-text-field class="purple-input" label="Phone#" :value="user.phone"/>
                  </v-col>

                  <v-col cols="12" md="6">
                    <v-text-field label="Email Address" class="purple-input" :value="user.email"/>
                  </v-col>

                  <v-col cols="12">
                    <v-text-field label="Address" class="purple-input" :value="user.address"/>
                  </v-col>

                  <v-col cols="12">
                    <v-textarea class="purple-input" label="About Me" :value="user.bio"/>
                  </v-col>

                  <v-col cols="12" class="text-right">
                    <v-btn color="success" class="mr-0" @click="handleSubmit">Update Profile</v-btn>
                  </v-col>
                </v-row>
              </v-container>
            </v-form>
          </v-card>
        </v-col>

        <v-col cols="12" md="4">
          <v-card>
            <v-avatar color="grey" size="164">
              <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
            </v-avatar>
            <v-card-text class="text-center">
              <h4 class="display-2 font-weight-light mb-3 black--text">{{ user.firstname}}, {{ user.lastname }}</h4>
              <p
                class="font-weight-light grey--text"
              >{{ user.bio }}</p>
            </v-card-text>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </v-app>
</template>

<script>
import axios from 'axios';
export default {
  name: 'App',
  props: ['user'],
    methods: {
	handleSubmit() {
         this.spin = true;
       const config = {
        headers: {
           "Content-Type": "application/json",
            "Accept": "application/json",
        }
	}
      axios.put('http://localhost:8000/user/update/'+ this.user.id, {id: this.user.id, user: this.user }, config)
      .then(() => {
        this.spin = false
      })
    }
  }
}
</script>
