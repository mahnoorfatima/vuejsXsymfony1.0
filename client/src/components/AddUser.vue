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
                    <v-text-field label="First Name" class="purple-input" />
                  </v-col>
                  <v-col cols="12" md="6">
                    <v-text-field label="Last Name" class="purple-input" />
                  </v-col>
                  <v-col cols="12" md="6">
                    <v-text-field class="purple-input" label="Phone#" />
                  </v-col>
                  <v-col cols="12" md="6">
                    <v-text-field label="Email Address" class="purple-input" />
                  </v-col>
                  <v-col cols="12">
                    <v-text-field label="Address" class="purple-input" />
                  </v-col>
                  <v-col cols="12" md="4">
                    <v-text-field label="City" class="purple-input" />
                  </v-col>
                  <v-col cols="12" md="4">
                    <v-text-field label="Country" class="purple-input" />
                  </v-col>
                  <v-col cols="12" md="4">
                    <v-text-field class="purple-input" label="Postal Code" type="number" />
                  </v-col>
                  <v-col cols="12">
                    <v-textarea class="purple-input" label="About Me" />
                  </v-col>
                  <v-col cols="12" class="text-right">
                    <v-btn color="success" class="mr-0">Add User</v-btn>
                  </v-col>
                </v-row>
              </v-container>
            </v-form>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </v-app>
</template>