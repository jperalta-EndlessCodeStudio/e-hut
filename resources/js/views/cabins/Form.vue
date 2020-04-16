<template>
    <div>
        <CCol col="12">
            <CInput
                label="Nombre de la cabaña"
                placeholder="Ej: Cabaña N° 1"
                autocomplete="name"
                v-model="cabin.name"
                v-bind="$attrs"
            />
        </CCol>

        <CCol col="12">
            <CInput
                label="Capacidad máxima"
                placeholder="Ej: 1"
                autocomplete="name"
                v-model="cabin.min_capacity"
            />
        </CCol>

        <CCol col="12">
            <CInput
                label="Capacidad mínima"
                placeholder="Ej: 6"
                autocomplete="name"
                v-model="cabin.max_capacity"
            />
        </CCol>

        <CCol col="12">
            <CInput
                label="Ubicación"
                placeholder="Ej: Las Estancias, Aconquija, Catamarca"
                autocomplete="name"
                v-model="cabin.location"
            />
        </CCol>

        <CCol col="12">
            <CTextarea
                label="Descripción"
                placeholder="Comentarios extra..."
                autocomplete="name"
                v-model="cabin.description"
            />
        </CCol>
    </div>
</template>

<script>
    export default {
        name: "Form",
        props: {
            cabin: {
                required: true,
                type: Object
            }
        },
    }
</script>

<style scoped>

</style>
