<template>
    <CRow>
        <CCol col="12" xl="12">
            <CCard>
                <CCardHeader>
                    <h3>Cabañas</h3>
                    <small>
                        A continuación se muestra el listado de las cabañas. Se pueden cargar nuevas cabañas,
                        editar existentes o eliminarlas. Tener en cuenta que al eliminar ya no tendrá la posibilidad
                        de utilizarla para un alquiler.
                    </small>
                </CCardHeader>

                <CCardBody>
                    <CDataTable
                        hover
                        striped
                        :items="items"
                        :fields="fields"
                        :items-per-page="5"
                        clickable-rows
                        :active-page="activePage"
                        @row-clicked="rowClicked"
                        :pagination="{ doubleArrows: false, align: 'center'}"
                        @page-change="pageChange"
                    >
                        <template #actions="data">
                            <td>
                                <button class="btn btn-primary">Accion</button>
                            </td>
                        </template>
                    </CDataTable>
                </CCardBody>
            </CCard>
        </CCol>
    </CRow>
</template>

<script>
    import store from '../../store/index';
    import {mapState} from "vuex";

    export default {
        name: "Cabins",
        data() {
            return {
                items: [],
                fields: [
                    {key: 'name', label: 'Nombre', _classes: 'font-weight-bold'},
                    {key: 'min_capacity', label:'Capacidad mínima'},
                    {key: 'max_capacity', label:'Capacidad máxima'},
                    {key: 'location', label:'Ubicación'},
                    {key: 'actions'}
                ],
                activePage: 1
            }
        },
        watch: {
            $route: {
                immediate: true,
                handler(route) {
                    if (route.query && route.query.page) {
                        this.activePage = Number(route.query.page)
                    }
                    store.dispatch('cabins/fetchCabins', this.activePage).then(() => {
                        this.items = this.cabins.cabins;
                    });
                }
            }
        },
        methods: {
            getBadge(status) {
                switch (status) {
                    case 'Active':
                        return 'success'
                    case 'Inactive':
                        return 'secondary'
                    case 'Pending':
                        return 'warning'
                    case 'Banned':
                        return 'danger'
                    default:
                        'primary'
                }
            },
            rowClicked(item, index) {
                this.$router.push({path: `users/${index + 1}`})
            },
            pageChange(val) {
                this.$router.push({query: {page: val}})
            }
        },
        computed: {
            ...mapState(['cabins'])
        }
    }
</script>

<style scoped>

</style>
