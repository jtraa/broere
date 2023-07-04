<style>
    .contactform .row {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }
    .contactform .row .col-12 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }

    .theme--light.v-label {
        color: white;
    }

    .theme--light.v-input, .theme--light.v-input input, .theme--light.v-input textarea {
        color: white;
    }

    input:-internal-autofill-selected {
        background-color: white !important;
    }

    .theme--light.v-icon {
        color: #fff;
    }


</style>

<template>
    <div class="flex justify-center container py-15">
        <div class="md:w-4/5 w-full">
            <h2 class="font-extrabold text-20pt lg:text-30pt text-left text-white mb-3">Contact</h2>
            <v-form class="contactform" method="GET" action="mails/create" enctype="multipart/form-data">
                <input type="hidden" :value="csrfToken" name="_token" />
                <v-row>
                    <v-col
                        cols="6"
                        md="4"
                    >
                        <v-text-field
                            label="Voornaam"
                            name="firstname"
                            placeholder="Voornaam.."
                            required
                        ></v-text-field>
                    </v-col>
                    <v-col
                        cols="6"
                        md="4"
                    >
                        <v-text-field
                            label="Achternaam"
                            name="lastname"
                            placeholder="Achternaam.."
                            required
                        ></v-text-field>
                    </v-col>
                    <v-col
                        cols="12"
                        md="4"
                    >
                        <v-text-field
                            label="Bedrijfsnaam"
                            name="companyname"
                            placeholder="Bedrijfsnaam.."
                            required
                        ></v-text-field>
                    </v-col>
                </v-row>
                <v-row class="">
                    <v-col
                        cols="12"
                        md="6"
                    >
                        <v-text-field
                            label="Telefoon"
                            color="primary"
                            background-color="primary"
                            name="telephone"
                            placeholder="Telefoon.."
                            required
                        ></v-text-field>
                    </v-col>
                    <v-col
                        cols="12"
                        md="6"
                    >
                        <v-text-field
                            label="E-mailadres"
                            name="email"
                            placeholder="E-mailadres.."
                            required
                        ></v-text-field>
                    </v-col>
                </v-row>
                <v-row class="">
                    <v-col
                        cols="12"
                    >
                        <v-textarea
                            label="Bericht"
                            name="message"
                            color="primary"
                            background-color="primary"
                            placeholder="Typ jouw bericht hier.."
                            required
                            rows="4"
                        ></v-textarea>
                    </v-col>
                </v-row>
                <v-row class="justify-center items-center">
                    <v-col
                        cols="12"
                        class="flex justify-start items-center"
                    >
                        <v-checkbox
                            v-model="ex4"
                            value="true"
                            color="primary"
                            background-color="primary"
                            id="checkbox-form3"
                            name="agreement"
                        >
                        </v-checkbox>
                        <div class="ml-2 text-white" slot='label'>
                            Ik ga akkoord met de <a class="text-white font-bold cursor-pointer" @click="showModal=true">voorwaarden</a>.
                        </div>

                    </v-col>
                </v-row>
                <v-row class="justify-end">
                    <v-col
                        cols="12"
                        md="2"
                        class="md:flex items-center justify-end"
                    >
                        <v-btn
                            value="Save Task"
                            type="submit"
                            class="bg-purpleblue py-4 text-white font-bold text-15pt lg:text-20pt no-underline font-poppins mb-0 w-full md:w-auto"
                        >
                            Versturen
                        </v-btn>
                    </v-col>
                </v-row>
            </v-form>
            <Modal v-if="showModal" @close="showModal = false" :showModal="showModal" />
        </div>
    </div>
</template>

<script>
    import Modal from './Modal.vue';

    export default {
        components: {
            Modal
        },
        data () {
            return {
                csrfToken: window.csrfToken,
                checkbox: true,
                showModal: false,
                ex4: ['red', 'indigo', 'orange', 'primary', 'secondary', 'success', 'info', 'warning', 'error', 'red darken-3', 'indigo darken-3', 'orange darken-3'],
            }
        },
        methods: {

        },
    }
</script>
