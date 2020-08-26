<template>
  <v-app>
    <v-row justify="center">
      <v-col cols="12" md="8">
        <v-col cols="12" class="text-right">
          <v-btn
            color="success"
            rounded
            class="mr-0"
            @click="$router.push({name: 'Add User'})"
          >Add User</v-btn>
        </v-col>
        <v-card>
          <v-card-text>
            <v-data-table :headers="headers" :items="items" sort-by="ID">
              <template v-slot:item.actions="{ item }">
                <v-icon
                  small
                  class="mr-2"
                  @click="$router.push({name: 'Edit Profile', params: { user: item}})"
                >mdi-pencil</v-icon>
                <v-icon small @click="deleteItem(item)">mdi-delete</v-icon>
              </template>
            </v-data-table>
          </v-card-text>
        </v-card>
      </v-col>
    </v-row>
  </v-app>
</template>

<script>
import axios from 'axios';
export default {
  name: "Home",
  data: () => ({
      
    headers: [
      {
        sortable: false,
        text: "ID",
        value: "id",
      },
      {
        sortable: false,
        text: "First Name",
        value: "firstname",
      },
      {
        sortable: false,
        text: "Last Name",
        value: "lastname",
      },
      {
        sortable: false,
        text: "Phone",
        value: "phone",
        align: "right",
      },
      {
        sortable: false,
        text: "Email",
        value: "email",
      },
      {
        sortable: false,
        text: "Address",
        value: "address",
        align: "right",
      },
      { 
        text: "Actions", 
        value: "actions", 
        sortable: false },
    ],
    items: [],
  }),
    created() {
    axios.get('http://localhost:8000/user/')
      .then(({data}) => {    
        this.spin = false
        this.items = data.map(item => {
          return item;
        });
      })
  },
  methods: {
    deleteItem(item) {
             const config = {
        headers: {
           "Content-Type": "application/json",
            "Accept": "application/json",
        }
	}
      axios.delete('http://localhost:8000/user/delete/'+ item.id, config)
      .then(() => {
        this.spin = false
      })
    },
  },
};
</script>
