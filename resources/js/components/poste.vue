<template>
        <div>

            <div>
                <v-card elevation="3" class="ma-2 rounded-lg d-inline-flex flex-row pa-2 float-left" v-for="poste in postes" :key="poste.id">
                        <v-card-text >
                            <v-card-subtitle>
                            {{ poste.nomposte }}
                            </v-card-subtitle>
                            
                            body
                        </v-card-text>
                </v-card>
            </div>

            <div>
                <v-card elevation="3" class="ma-2 rounded-lg d-inline-flex flex-row pa-2 float-left" >
                        <v-card-text >
                            <v-card-subtitle>
                            poste
                            </v-card-subtitle>
                            
                            body
                        </v-card-text>
                </v-card>
            </div>

        </div>
</template>

<script src='./poste.js'></script>

