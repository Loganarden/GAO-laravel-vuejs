<template>
    <div>

        <div>
            <v-card elevation="3" class="ma-2 rounded-lg d-inline-flex flex-row pa-2 float-left" v-for="poste in postes" :key="poste.id">
                <v-card-text >
                    <v-card-subtitle>
                    {{ poste.nomposte }}
                    </v-card-subtitle>
                    
                        <v-row v-for="(horaire, index) in horaires" :key="index" >
                            <!-- {{ horaire.horaire }}  -->
                            <v-col> {{ horaire.horaire }}h</v-col>
                            <v-col>
                                <span v-if="horaire.attribution">
                                    {{ horaire.attribution.nomclient + " " + horaire.attribution.prenomclient }}
                                </span>
                            </v-col>
                        </v-row>

                </v-card-text>
            </v-card>
        </div>

    </div>
</template>

<script src='./poste.js'></script>

