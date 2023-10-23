import { reactive } from "vue"
export const store = reactive({

    projects:' http://127.0.0.1:8000/api/projects',
    projectsArray: [],


    urlImg: "http://127.0.0.1:8000/storage/",
})
