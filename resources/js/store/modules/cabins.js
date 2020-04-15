import CabinService from "../../services/CabinService";

export const namespaced = true;

export const state = {
    cabins: [],
    cabin: {},
    perPage: 10,
}

export const mutations = {
    SET_CABINS(state, cabins) {
        state.cabins = cabins;
    }
}

export const actions = {
    fetchCabins({commit, dispatch, state}, currentPage) {
        return CabinService.fetchCabins(currentPage, state.perPage).then(response => {
            commit('SET_CABINS', response.data)
        })
    }
}

export const getters = {}
