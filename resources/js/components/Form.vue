<style>
    .contactform .row {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }
    .contactform .row .col-12 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }
</style>

<template>
    <div class="flex justify-center container py-15">
        <div class="md:w-4/5 w-full">
            <h2 class="font-extrabold text-20pt lg:text-30pt text-left text-darkblue mb-3">Contact</h2>
            <v-form class="contactform" method="GET" action="mails/create" enctype="multipart/form-data">
                <input type="hidden" :value="csrfToken" name="_token" />
                <v-row
                    class=""
                >
                    <v-col
                        cols="12"
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
                        cols="12"
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
                            placeholder="Typ jouw bericht hier.."
                            required
                            rows="4"
                        ></v-textarea>
                    </v-col>
                </v-row>
                <v-row class="">
                    <v-col
                        cols="12"
                    >
                        <v-checkbox
                            v-model="ex4"
                            color="primary"
                            value="true"
                            id="checkbox-form3"
                            name="agreement"
                        >
                            <div slot='label'>
                                Ik ga akkoord met de <a href="" class="text-darkblue font-bold" @click="dialog=true">voorwaarden</a>.
                            </div>
                        </v-checkbox>

                    </v-col>
                </v-row>

                <v-row class="justify-end">
                    <v-col
                        cols="12"
                        md="2"
                        class="md:flex justify-end"
                    >
                        <v-btn
                            value="Save Task"
                            type="submit"
                            class="bg-darkblue py-4 text-white font-bold text-15pt lg:text-20pt no-underline font-poppins mb-0 w-full md:w-auto"
                        >
                            Versturen
                        </v-btn>
                    </v-col>
                </v-row>

            </v-form>
        </div>
        <Dialog :dialog.sync="dialog" />
    </div>
</template>

<script>
    import Dialog from './Dialog.vue';
    export default {
        components: {
            Dialog
        },
        data () {
            return {
                dialog: false,
                csrfToken: window.csrfToken,
                checkbox: true,
                ex4: ['red', 'indigo', 'orange', 'primary', 'secondary', 'success', 'info', 'warning', 'error', 'red darken-3', 'indigo darken-3', 'orange darken-3'],
            }
        },
    }
</script>
