<template>
  <div>
    <div>
                <div class="nomcli" v-for="client in clients" :key="client.id">
                    {{ client.nomclient}}  {{client.prenomclient}}
                </div>
            </div>
    <poste></poste>

    <div>
      <div class="text-center">
        <v-dialog v-model="dialog" width="500">
          <template v-slot:activator="{ on, attrs }">
            <v-btn color="teal" dark v-bind="attrs" v-on="on">
              Ajouter un poste
            </v-btn>
          </template>

          <v-card elevation="3">
            <v-card-title class="headline lighten-2">
              Ajouté un poste
            </v-card-title>

            <v-card-text>

                <v-form ref="form" v-model="valid" lazy-validation >

                  <v-text-field v-model="nomposte" :rules="posteRules" label="Poste N°" required >
                  </v-text-field>

                  <v-btn :disabled="!valid" color="success" class="mr-4" @click="validate" >
                    ajouter
                  </v-btn>
                </v-form>
            </v-card-text>
          </v-card>
        </v-dialog>
      </div>
    </div>
  </div>
</template>

<script src='./home.js'></script>
