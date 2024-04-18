export default {
  // 历史
  history: state => state.app.count,
  // 现有
  present: state => {
    if (state.map.tabs.length === 1) {
      return state.app.qq.areaTree?.[0].children.map(v => {
        return { name: v.name, today: v.today, total: v.total };
      });
    } else {
      return state.app.qq.areaTree?.[0].children
        .find(v => v.name === state.map.tabs[1].name)
        .children.map(v => {
          return { name: v.name, today: v.today, total: v.total };
        });
    }
  },
  // 累计
  total: state => state.app.count,
  // 历史新增
  history_new: state => state.app[163].chinaDayList,
  // 现有确诊
  present_confirm: state => {
    if (state.map.tabs.length === 1) {
      return state.app.qq.areaTree?.[0].children.map(v => {
        return { name: v.name, value: v.total.nowConfirm };
      });
    } else {
      return state.app.qq.areaTree?.[0].children
        .find(v => v.name === state.map.tabs[1].name)
        .children.map(v => {
          return { name: v.name, value: v.total.nowConfirm };
        });
    }
  },
  // 累计确诊
  total_confirm: state => state.app.count,
  // 历史确诊
  history_confirm: state => state.app.count,
  count: state => state.app.count,
  new_trend: state => state.app[163].chinaDayList,
  top_confirm: state => state.app.sina.jwsrTop,

  map_tabs: state => state.map.tabs,
  map_active: state => state.map.tabs[state.map.tabs.length - 1],
  // 世界地图
  map_world: state => state.map.world,
  // 中国、省份地图
  map_china: state => {
    if (state.map.tabs.length === 1) {
      return state.map.china;
    } else {
      return state.map.province[state.map.tabs[1].map];
    }
  }
};
