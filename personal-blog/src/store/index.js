import Vue from 'vue';
import Vuex from 'vuex';
import store from './modules/store';
import issue from './modules/issue';
import repo from './modules/repo';
import project from './modules/project';
import actions from './actions';
import getters from './getters';
import mutations from './mutations';

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        store,
        issue,
        repo,
        project
    },
    actions,
    getters,
    mutations
})
