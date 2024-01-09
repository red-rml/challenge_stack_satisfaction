import * as api from '@/app/_utils/api.js';

import axios from 'axios';
import get from 'lodash/get.js';

export const avis = async (temperature, humidite, produit_casse) => {
    const request = await api.createApiRequestInstance({
        path: '/api/avis',
        method: 'POST',
        data: { temperature, humidite, produit_casse }
    });
    const response = await axios(request);

    const token = get(response, 'data.token');

    return { token };
};

export const logout = () => {
    localStorage.removeItem('token');
};