import AuthService from "../../services/AuthService";

export const namespaced = true;

export const state = {
    authUser: {},
};

export const mutations = {
    AUTH_USER(state, authUser) {
        state.authUser = authUser;
    }
};

export const actions = {
    authUser({commit, dispatch}, {email, password}) {
        return AuthService.authUser(email, password).then((response) => {
            commit('AUTH_USER', response.data);
        }).catch(error => {
            const notification = {
                type: 'error',
                message: 'There was a problem adding the event: ' + error.message
            };

            // dispatch('notification/add', notification, {root: true});
            throw error;
        });
    },
};

export const getters = {};
