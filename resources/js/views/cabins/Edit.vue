<template>

    <CRow>

        <CCol col="12" xl="8" :class="'offset-xl-2'">

            <CCard>

                <CCardBody :class="'border-bottom'">
                    <h3>Editar cabaña</h3>
                </CCardBody>

                <CForm @submit.prevent="updateCabin()">

                    <CCardBody>
                        <Form :cabin="cabin"/>
                    </CCardBody>

                    <CCardBody class="border-top">
                        <CButton type="submit" class="btn btn-success float-right">Guardar</CButton>

                        <CButton type="button" class="btn btn-dark float-left">Cancelar</CButton>
                    </CCardBody>

                </CForm>

            </CCard>

        </CCol>

    </CRow>

</template>

<script>
    import Form from './Form';
    import {mapState} from "vuex";
    import store from '../../store/index';

    export default {
        components: {Form},
        name: "Edit",
        props: {
            cabin: {
                required: true,
                type: Object
            }
        },
        methods: {
            updateCabin() {
                store.dispatch('cabins/updateCabin', {
                    id: this.cabins.cabin.id,
                    data: this.cabin
                }).then(response => {
                    this.$router.push({name: 'cabins'})
                })
            }
        },
        computed: {
            ...mapState(['cabins'])
        }
    }
</script>

<style scoped>

</style>
