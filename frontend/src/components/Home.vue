<script>
import AppHeader from './AppHeader.vue';
import { store } from '../store';
import axios from 'axios';
import AppFooter from './AppFooter.vue';


export default {
    data(){
        return{
            store,
        }
    },
  components: {
    AppHeader,
    AppFooter
  },
  methods:
  {
   printProjects()
   {

        axios.get(store.projects)
            .then(res =>
            {
                store.projectsArray=res.data.projects;


            })
            .catch(err =>
            {
                console.error(err);
            });
    }
  },
  mounted(){
    this.printProjects();
  }
}

</script>


<template>
 <AppHeader />
    <!-- hero -->
    <section id="home" class="hero py-5 d-flex align-items-center" >
        <div class="m-auto" style="width: 70%;">

            <div class="row align-items-center justify-content-between text-center text-lg-start py-5" >

                <div class="col-sm-10 col-lg-5 ">
                    <h1 class="py-1">Junior Full Stack Web Developer &#128075;</h1>
                    <span>Sono Arianna Ruggirello. Appassionata di codice <br> vivo in Friuli,Italia &#128205;
                    </span>
                    <br><br>
                    <!-- social -->
                    <div>
                        <a href="https://github.com/AriannaRuggirello" target="_blank">
                            <i class="fs-3 fa-brands fa-github me-3"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/arianna-ruggirello-63509323a/" target="_blank">
                            <i class="fs-3 fa-brands fa-linkedin"></i>
                        </a>
                    </div>
                </div>
                <!-- avatar icon -->
                <div class="col-sm-10 col-lg-5 text-end">
                    <img src="../../public/icone/avatar.jpg" style="width: 300px;" alt="">
                </div>
                <!-- tech skills -->
                <div class="col-sm-10 col-lg-9">
                    <div class="row row-cols-sm-1 row-col-lg-2 gap-1">

                        <h5 class="col-lg-2 text-center text-lg-start">My skills  </h5>
                        <div class="col-lg-9">
                            <div class="row row-cols-lg-8 justify-content-center py-2 gy-4">
                                <img style="width: 60px;" src="../../public/icone/html-5.png" alt="">
                                <img style="width: 60px;" src="../../public/icone/css-3.png" alt="">
                                <img style="width: 60px;" src="../../public/icone/js.png" alt="">
                                <img style="width: 60px;" src="../../public/icone/sass.png" alt="">
                                <img style="width: 60px;" src="../../public/icone/bootstrap.png" alt="">
                                <img style="width: 60px;" src="../../public/icone/Vue.js_Logo_2.svg.png" alt="">
                                <img style="width: 60px;" src="../../public/icone/php.png" alt="">
                                <img style="width: 60px;" src="../../public/icone/mysql.png" alt="">
                                <img style="width: 60px;" src="../../public/icone/1969px-Laravel.svg.png" alt="">
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>

    </section>

 <!-- about -->
<section id="about">
    <div class="m-auto" style="width: 80%;">
        <div class="row justify-content-between align-items-center text-center text-lg-start pb-5">
            <h4 class=" green ">CHI SONO</h4>
        <h2 class="pb-3"><b>Il mio mondo, i miei progetti, la mia identità. Chi sono? 🧐</b></h2>

            <div class="col-lg-6 py-3">
                <img class="rounded-circle img-thumbnail" src="../../public/myphoto.jpg" alt="">
            </div>
            <div class="col-sm-12 col-lg-6">
                <p>Ho appena concluso un corso di formazione tramite un'accademia online incentrata sullo sviluppo web.
                Sebbene la mia formazione attuale sia orientata verso la tecnologia ho lavorato anche nella ristorazione e nell'abbigliamento dove ho imparato come trattare con una varietà di persone e situazioni, sviluppando una buona empatia e la capacità di risolvere problemi in modo efficace.
                </p>
                <a href="../../public/cv.pdf" download="curriculum.pdf">
                    <button type="button" class="mt-4 rounded-pill btn ">
                    Download CV
                    </button>
                </a>

            </div>




         </div>
    </div>

</section>

<!-- porfolio -->
<section id="portfolio" class="py-5 bg-body-secondary text-center text-lg-start">
    <div class="m-auto" style="width: 80%;">
    <h4 class=" green ">PORTFOLIO</h4>
    <h2 class="pb-3"><b>Entra nella mia dimensione creativa. I miei progetti ti aspettano &#x1F3A8;</b></h2>
    <div class="pb-5" v-for="(project, index) in store.projectsArray" :key="project.id" >
    <div class="card rounded-5">
        <div :class="index % 2 === 0 ? 'row row-cols-sm-1 row-cols-lg-2 g-0' : 'row row-cols-sm-1 row-cols-lg-2 g-0 flex-row-reverse'">
            <div class="col-lg-7 overflow-y-auto" style="height: 450px;">
                <img :src="store.urlImg + project.image" class="img-fluid" alt="...">
            </div>
            <div class="col-lg-5">
                <div class="card-body text-center">
                    <h5 class="card-title text-uppercase py-2">{{ project.title }}</h5>
                    <span class="card-text"><small class="text-body-secondary">{{ project.publish_year }}</small></span>
                    <span><small class="text-body-secondary"> &#x2022; {{ project.type.name}}</small></span>
                    <p class="card-text px-2 pt-2 overflow-lg-auto projectDescription" >{{ project.description }}</p>
                    <div class="pt-3 pb-3">
                        <span class="col-sm-1 pe-3"  v-for="technology in project.technologies" :key="technology.id">
                            <i :class="technology.icon" class="fs-4"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly pt-3 ">
                        <a class="fs-5 link-offset-2 link-underline link-underline-opacity-0" :href="project.link" target="_blank">Code <i class="fa-solid fa-code"></i></a>
                        <!-- <router-link style="text-decoration: none;" :to="`/show/${project.id}`">
                            <a class="fs-5 link-offset-2 link-underline link-underline-opacity-0" href="">Details <i class="fa-solid fa-eye"></i></a>
                        </router-link> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>

<!-- contattami -->
<section id="contacme" class="py-5  text-center text-lg-start">
    <div class="m-auto " style="width: 80%;">
        <h4 class="green">CONTATTAMI</h4>
        <h2><b>Hai domande o idee? Scrivimi! &#128071;</b></h2>
        <div class="row pt-3 ">
            <!-- location -->
            <div class="col-sm-12 col-lg-4 pb-3">

                    <div class="pb-2">
                        <i class="fs-3 green fa-regular fa-map border p-2 rounded-circle"></i>
                    </div>
                    <div>
                        <h5>Dove mi trovo</h5>
                        <a href="#" class="link-offset-2 link-underline link-underline-opacity-0">Friuli,Italia</a>
                    </div>


            </div>

            <!-- mail -->
            <div class="col-sm-12 col-lg-4 ">

                    <div class="pb-2">
                        <i class="green fs-3 fa-regular fa-envelope border p-2 rounded-circle"></i>
                    </div>
                    <div>
                        <h5>Mail</h5>
                        <a href="mailto:ruggirelloarianna11@gmail.com?subject=Maggiori informazioni" class="link-offset-2 link-underline link-underline-opacity-0">ruggirelloarianna11@gmail.com</a>
                    </div>

            </div>



        </div>
    </div>

</section>
<!-- footer -->
 <AppFooter />
</template>

<style lang="scss">
@import '../../scss/style.scss';

.green{
    color:#7abd87 ;
}
#about{
    button{
        background-color: #7abd87;
        color: white;
    }

    button:hover{
        background-color: #3e7e55;
        color: white;

    }
}

.hero{
    i{
        color: black;
    }
    i:hover{
        color: #7abd87;
    }
}

#contacme,#portfolio{
    a{
        color: #a6a6a6;
    }
    a:hover{
        color: #7abd87;
    }
}

@media (min-width: 992px) {
        /* Dimensioni "lg" e superiori */
        .projectDescription {
            max-height: 200px;
            overflow-y: auto;
        }
    }

    @media (max-width: 812px) {
        /* Dimensioni "sm" e inferiori */
        .projectDescription {
            max-height: none;
            overflow-y: visible;
        }
    }


</style>
