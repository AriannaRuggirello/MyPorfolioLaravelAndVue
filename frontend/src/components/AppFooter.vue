<script>
export default {
    name: "AppFooter",

}

</script>

<template>
  <footer class="py-5 grey ">
    <div class="m-auto" style="width: 80%;">

            <div class="row justify-content-lg-between ">
                <div class="col-sm-12 col-lg-6 pb-3 text-center text-lg-start ">
                  <h6>Copyright © 2023. All rights are reserved</h6>
                </div>

                <div class="col-sm-12 col-lg-6 text-center text-lg-end ">
                    <a href="https://github.com/AriannaRuggirello" target="_blank">
                            <i class="fs-3 fa-brands fa-github me-3"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/arianna-ruggirello-63509323a/" target="_blank">
                            <i class="fs-3 fa-brands fa-linkedin"></i>
                        </a>
                </div>
            </div>
        </div>
    </footer>
</template>

<style lang="scss" scoped>
.grey{
    background-color: #a6a6a6;
}

a{
    color:black;
}

a:hover{
    color: #7abd87;
}
</style>
