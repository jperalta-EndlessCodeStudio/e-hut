import axios from 'axios';

const apiClient = axios.create({
    baseURL: 'http://e-hut.test/api/',
    withCredentials: false,
    headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json',
    },
    timeout: 10000,
});


export default {
    fetchCabins(currentPage, perPage) {
        return apiClient.get('cabins', {
            params: {currentPage, perPage}
        })
    }
};
