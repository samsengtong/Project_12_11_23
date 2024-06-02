<template>
    <div class="m-10 ">
        <v-card flat id="themeBackground">
            <v-card-title class="align-end fill-height"><span style="color: white;">SAM SENGSEIHA</span></v-card-title>
            
            <v-img src="../assets/p-1.jpg" class="white--text">
            </v-img>
            <v-card-text class="white--text body-2 px-0">
                <p style="color:white;">Hi i am charles. I write tutorial javascript!!. Web development and teach basic coding</p>    
            
            </v-card-text>
            <v-card-actions>
                <a class="twitter-follow-button" href="https://twitter.com/youthcodetech" data-size="large">follow youtube@tech</a>
            </v-card-actions>

            <v-divider></v-divider>
            <v-card-title class="align-end font-weight-bold">Free Dev Book</v-card-title>
            <div>
                <v-btn class="ma-1 font-weight-bold" text color="white">
                    <v-icon left color="yellow accent-1">mdi-language-javascript</v-icon>
                    javascript Handbook
                </v-btn>
            </div>
            <div>
                <v-btn class="ma-1 font-weight-bold" text color="white">
                    <v-icon left color="teal">mdi-nodejs</v-icon>
                    Node.js insider
                </v-btn>

            </div>
            <div>
                <v-btn class="ma-1 font-weight-bold" text color="white" >
                    <v-icon left color="cyan lighten-3">mdi-react</v-icon>
                    Reactive Notebook
                </v-btn>
            </div>
    
        </v-card>
    </div>
</template>
<script>
    export default{
        name:'sidebar',
        component:'Sidebar'

    }
</script>
<style>
#themeBackground{
    background-color: grey;
}
</style>