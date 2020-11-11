<template>

    <div>
            <!-- <div>
                <div class="nomcli" v-for="client in clients" :key="client.id">
                    {{ client.nomclient}}  {{client.prenomclient}}
                </div>
            </div> -->
        <poste></poste>

        <div>

            <div class="text-center">

                <v-dialog v-model="dialog" width="500">
                
                <template v-slot:activator="{ on, attrs }">

                    <v-btn color="red lighten-2" dark v-bind="attrs" v-on="on" >
                        ouvrir
                    </v-btn>

                </template>
                
                <v-card elevation="3">

                    <v-card-title class="headline lighten-2">
                        Ajouté un poste
                    </v-card-title>

                    <v-card-text>
                        <v-form>
                            <v-text-field v-model="poste" :rules="posteRules" label="Poste N°" required></v-text-field>
                        </v-form>
                    </v-card-text>       
                
                    <v-divider></v-divider>
                
                    <v-card-actions>

                        <v-spacer></v-spacer>

                        <v-btn color="success" :disabled="!valid" class="mr-4" @click="validate" >
                        ajouter
                        </v-btn>

                    </v-card-actions>
                </v-card>
                </v-dialog>
            </div>
                        
        </div>

    </div>


</template>

<script src='./home.js'></script>
