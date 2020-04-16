import CabinService from "../../services/CabinService";

export const namespaced = true;

export const state = {
    cabins: [],
    cabin: {},
    perPage: 10,
}

export const mutations = {
    SET_CABINS(state, cabins) {
        state.cabins = cabins
    },
    SET_CABIN(state, cabin) {
        state.cabin = cabin
    },
}

export const actions = {
    fetchCabins({commit, dispatch, state}, currentPage) {
        return CabinService.fetchCabins(currentPage, state.perPage).then(response => {
            commit('SET_CABINS', response.data)
        })
    },
    fetchCabin({commit, dispatch, state}, id) {
        return CabinService.fetchCabin(id).then(response => {
            commit('SET_CABIN', response.data)

            return response.data
        })
    },
    updateCabin({commit, dispatch, state}, {id, data}) {
        return CabinService.updateCabin(id, data).then(response => {
            commit('SET_CABIN', response.data)

            return response.data
        })
    }
}

export const getters = {}
