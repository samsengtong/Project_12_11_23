<template>
    <div style="max-height:100vh">
        <v-card class="my-1" flat>
            <div class="d-flex justify-between">
                <div>
                    <v-card-title class="textTitle white--text text-h4">
                        Authincation with Laravel Passport
                    </v-card-title>
                    <v-card-text class="subTitle white--text mt-2">
                        AWS is constantly adding new capabilities so you can leverage the latest technologies to experiment and innovate more quickly.
                         What's New posts show how we are doing just that, providing a brief overview of all AWS service,
                          feature, and region expansion announcements as they are released.
                    </v-card-text>
                    <v-card-actions>
                        <v-icon class="mr-1" color="cyan lighten-3">mdi-eye</v-icon>
                        <span class="body-2 mr-2 white--text">23</span>
                        <span class="mr-1">-</span>
                        <v-icon class="mr-1" color="blue-grey ligthen-5">mdi-timer</v-icon>
                        <span class="body-2 white--text"> 2 minute ago</span>
                    </v-card-actions>
                </div>
                <div class="flex-grow-1 flex-shrink-0">
                    <v-card-title text-color="white" text-subtitle-4>
                        14 August 2023 
                    </v-card-title>
                    <div class="text-center">
                        <v-chip
                          class="ma-2"
                            color="red"
                        text-color="white"
                        >
                        javascript is the best for learning ...
                        </v-chip>

                    </div>
                </div>
            </div>
        </v-card>
        
    </div>
</template>
<script>

    export default {
        name:'posts',
        component:'Posts'

    }
</script>