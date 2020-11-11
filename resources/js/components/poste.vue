<template>
        <div>
            bonjour
            <div>
                <div class="nomposte" v-for="poste in postes" :key="poste.id">
                    {{ poste.nomposte }} 
                </div>
            </div>
        </div>
</template>

<script src='./poste.js'></script>

