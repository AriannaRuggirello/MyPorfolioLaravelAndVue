
<script>
import AppHeader from './AppHeader.vue';
import { store } from '../store';
import axios from 'axios';
import AppFooter from './AppFooter.vue';



export default {

    data(){
        return{
            store,
            project: null,
        }
    },
  components: {
    AppHeader,
    AppFooter
  },

  mounted()
  {

        const projectId = this.$route.params.id;

        axios.get(store.projects + '/' + projectId)
            .then(res => {

                const data = res.data;
                this.project = data.project;


            })
            .catch(err => console.error(err));


    }
}
</script>

<template>

<AppHeader />
<div class="container">
    <div v-if="project">
        <img :src="store.urlImg + project.image" style="width: 500px;" alt="">
        <h3>{{ project.title }}</h3>
        <span>{{ project.publish_year}}</span>
        <br>
        <h6>Proggetto {{ project.type.name}}</h6>
        <p>{{ project.description }}</p>

        <h4>Linguaggi utilizzati</h4>
        <ul>
            <li v-for="technology in project.technologies" :key="technology.id">
           {{ technology.name }} -
           <i :class="technology.icon"></i>

            </li>
        </ul>
    </div>





</div>

<AppFooter />
</template>
