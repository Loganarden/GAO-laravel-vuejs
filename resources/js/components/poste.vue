<template>
        <div>

            <div>
                <v-card elevation="3" v-for="poste in postes" :key="poste.id">
                    <v-card-subtitle>
                        {{ poste.nomposte }}
                    </v-card-subtitle>
                    <v-card-text>
                        body
                    </v-card-text>
                </v-card>

            </div>

        </div>
</template>

<script src='./poste.js'></script>

