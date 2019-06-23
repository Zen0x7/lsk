import axios from 'axios';
import Swal from 'sweetalert2';

async function fetch(method, path, data) {
    return await axios({
        method: method,
        url: path + '?api_token=' + window.api_token,
        data: data,
    });
}

function throwError(error) {
    Swal.fire({
        type: 'error',
        title: 'Whoops',
        text: 'Something went wrong',
        footer: error.response.data.message,
    });
}

export const Api = {
    get: async function(path) {
        try {
            const response = await fetch('get', path, {});
            return response.data;
        } catch (error) {
            throwError(error)
        }
    },
    post: async function(path, data) {
        try {
            const response = await fetch('post', path, data);
            return response.data;
        } catch (error) {
            throwError(error)
        }
    }
};
