<template>
    <div class="bg-lightblue lg:py-8" id="newsletter">
        <div class="py-4">
            <div class="flex justify-center container">
                <div class="md:w-3/5 w-full">
                    <h2 class="font-extrabold text-20pt lg:text-30pt text-center text-darkblue mb-0 xl:mb-3 " >Meld je aan voor onze nieuwsbrief</h2>
                </div>
            </div>
            <div class="flex justify-center container">
                <div class="md:w-1/2 w-full">
                    <v-form class="contactform" method="GET" action="newsletters/create" enctype="multipart/form-data">
                        <input type="hidden" :value="csrfToken" name="_token" />
                        <v-row>
                            <v-col
                                cols="12"
                                md="6"
                            >
                                <v-text-field
                                    label="Voornaam"
                                    name="first_name"
                                    placeholder="Voornaam.."
                                    required
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="12"
                                md="6"
                            >
                                <v-text-field
                                    label="Achternaam"
                                    name="last_name"
                                    placeholder="Achternaam.."
                                    required
                                ></v-text-field>
                            </v-col>
                        </v-row>
                        <v-row no-gutters>
                            <v-col
                                cols="12"
                            >
                                <v-text-field
                                    label="E-mailadres"
                                    name="email"
                                    placeholder="E-mailadres.."
                                    required
                                ></v-text-field>
                            </v-col>
                        </v-row>
                        <v-row align="center">
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
                                        Ik ga akkoord met de
                                        <a href="#" class="text-darkblue font-bold" @click="dialog=true">
                                        voorwaarden
                                        </a>.
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
                                    class="bg-darkblue md:w-auto w-full py-4 text-white font-bold text-15pt lg:text-20pt no-underline font-poppins mb-0"
                                >
                                    Versturen
                                </v-btn>
                            </v-col>

                        </v-row>
                    </v-form>
                </div>
            </div>
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
            }
        },
    }
</script>
