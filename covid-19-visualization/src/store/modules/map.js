import Pinyin from "js-pinyin";
Pinyin.setOptions({ checkPolyphone: false, charCase: 1 });

const state = {
  active: null,
  tabs: [
    {
      name: "全国",
      map: "china"
    }
  ],
  world: {},
  china: {},
  province: {}
};
const mutations = {
  SET_ACTIVE(state, payload) {
    state.active = payload;
  },
  SET_TABS(state, payload) {
    if (payload.map === "china") {
      state.tabs = [payload];
    } else {
      state.tabs.push(payload);
    }
  },
  SET_WORLD(state, payload) {
    state.world = payload;
  },
  SET_CHINA(state, payload) {
    state.china = payload;
  },
  SET_PROVINCE(state, payload) {
    console.log(payload);
    state.province[payload.name] = payload.data;
  }
};
const actions = {
  getWorld({ commit }) {
    return this._vm
      .$axios({
        method: "get",
        url: "https://cdn.jsdelivr.net/npm/echarts@4.9.0/map/json/world.json"
      })
      .then(res => {
        commit("SET_WORLD", res);
        return Promise.resolve(res);
      });
  },
  getChina({ commit }) {
    return this._vm
      .$axios({
        method: "get",
        url: "https://cdn.jsdelivr.net/npm/echarts@4.9.0/map/json/china.json"
      })
      .then(res => {
        commit("SET_CHINA", res);
        return Promise.resolve(res);
      });
  },
  getChinaProvince({ commit }, payload) {
    let name = Pinyin.getFullChars(payload);
    if (name === "namenggu") {
      name = "neimenggu";
    }
    if (name === "xicang") {
      name = "xizang";
    }
    return this._vm.$axios
      .get(
        `https://cdn.jsdelivr.net/npm/echarts@4.9.0/map/json/province/${name}.json`
      )
      .then(res => {
        commit("SET_PROVINCE", { name, data: res });

        return Promise.resolve({ name, data: res });
      });
  }
};

export default {
  namespaced: true,
  state,
  mutations,
  actions
};
