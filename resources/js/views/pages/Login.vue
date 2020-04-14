<template>
    <CContainer class="d-flex content-center min-vh-100">
        <CRow>
            <CCol>
                <CCardGroup>
                    <CCard class="p-4">
                        <CCardBody>
                            <CForm v-c-emit-root-event:submit-auth-form="authUser">
                                <h1>Ingresar</h1>
                                <p class="text-muted">Iniciar sesión</p>
                                <CInput
                                    placeholder="E-mail"
                                    autocomplete="username email"
                                    v-model="email"
                                >
                                    <template #prepend-content>
                                        <CIcon name="cil-user"/>
                                    </template>
                                </CInput>
                                <CInput
                                    placeholder="Contraseña"
                                    type="password"
                                    autocomplete="curent-password"
                                    v-model="password"
                                >
                                    <template #prepend-content>
                                        <CIcon name="cil-lock-locked"/>
                                    </template>
                                </CInput>
                                <CRow>
                                    <CCol col="12" class="text-left">
                                        <CButton :class="'btn-block'" color="primary" class="px-4">Ingresar</CButton>
                                    </CCol>
                                    <CCol col="6" class="text-right">
                                        <!--                                        <CButton color="link" class="px-0">Forgot password?</CButton>-->
                                        <!--                                        <CButton color="link" class="d-md-none">Register now!</CButton>-->
                                    </CCol>
                                </CRow>
                            </CForm>
                        </CCardBody>
                    </CCard>
                </CCardGroup>
            </CCol>
        </CRow>
    </CContainer>
</template>

<script>

    export default {
        name: 'Login',
        data() {
            return {
                email: '',
                password: ''
            }
        },
        methods: {
            isAuthenticated() {
                this.authUser();
            },
            authUser() {
                this.$store.dispatch('auth/authUser', {email: this.email, password: this.password}).then(() => {
                    this.$router.push({
                        name: 'dashboard',
                    });
                }).catch(() => {
                    console.log("ERROR")
                });
            }
        },
        mounted() {
            this.isAuthenticated()

            this.$root.$on('submit-auth-form', () => {
                this.authUser()
            })
        }
    }
</script>
