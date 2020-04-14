import axios from 'axios';

const apiClient = axios.create({
    baseURL: 'http://e-hut.test/',
    withCredentials: false,
    headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json',
    },
    timeout: 10000,
});


export default {
    fetchCabins() {
        return apiClient.get('cabins', data)
    }
};
