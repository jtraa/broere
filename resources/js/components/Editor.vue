<template>
    <div class="flex justify-center">
        <div class="w-11/12 mt-5">
            <div class="xl:flex justify-center text-center">
                <div class="xl:w-1/2 border rounded-lg p-5 xl:mr-5">
                    <h1 class="mb-1 text-darkgreen text-capitalize">{{ title }}</h1>
                    <h2 class="text-graygreen mb-3">{{ subtitle }}</h2>
                    <p class="large text-dark mb-4 mb-xl-0 pb-0 hidden md:block">{{ text }}</p>
                    <button type="button" class="xl:hidden" data-toggle="modal" data-target="#modal">{{ button }}</button>
                </div>
                <div class="xl:w-1/2">
                    <v-form v-model="valid" @submit="submitForm" v-bind:action="action">
                        <div class="edit-form" id="form" v-for="data in Json" :key="data.id">
                            <v-row>
                                <v-col
                                    cols="12"
                                >
                                    <v-text-field
                                        v-model="title"
                                        label="Title"
                                        placeholder="Title.."
                                        required
                                    ></v-text-field>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col
                                    cols="12"
                                >
                                    <v-text-field
                                        v-model="subtitle"
                                        label="Subtitle"
                                        placeholder="Subtitle.."
                                        required
                                    ></v-text-field>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col
                                    cols="12"
                                >
                                    <v-textarea
                                        v-model="text"
                                        label="Textarea"
                                        placeholder="Textarea.."
                                        required
                                    ></v-textarea>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col
                                    cols="12"
                                >
                                    <v-text-field
                                        v-model="button"
                                        label="Button"
                                        placeholder="Button.."
                                        required
                                    ></v-text-field>
                                </v-col>
                            </v-row>
                            <v-row class="justify-content-end">
                                <v-col
                                    cols="2"
                                >
                                    <v-btn
                                        value="Save Task"
                                        type="submit"
                                    >
                                        Submit
                                    </v-btn>
                                </v-col>
                            </v-row>
                        </div>
                    </v-form>
                </div>
            </div>
        </div>
    </div>

</template>

<script>

let PathAction = 'data/';

import json from './json/database.json';

export default {
    mounted() {
        console.log('Component mounted.')
    },
    data() {
        console.log(json[0].title);
        return{
            Json: json,
            id: json[0].first.id,
            title: json[0].first.title,
            subtitle: json[0].first.subtitle,
            text: json[0].first.text,
            button: json[0].first.button,
            action: PathAction + json[0].second.id,
        }
    },
    methods: {
        submitForm(e) {

        }
    }
}
</script>
