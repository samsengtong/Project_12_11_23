<template>
  <div>
      <Navbar />
  
    
      <v-content >
          <v-container>   
        <v-row>
          
          <v-col cols="3"><Sidebar/></v-col>
          <v-col cols="9"><Posts/></v-col>
          
        </v-row>
        </v-container>
        
      </v-content>
  </div>
</template>

<script>
import { defineComponent } from 'vue';

// Components
//import HelloWorld from '../components/HelloWorld.vue';
import Navbar from '@/components/Navbar.vue';
import Sidebar from '@/components/Sidebar.vue';
import Posts from '@/components/Posts.vue'
export default defineComponent({
  name: 'Home',

  components: {
    //HelloWorld,
    Navbar,
    Sidebar,
    Posts

},
});
</script>
