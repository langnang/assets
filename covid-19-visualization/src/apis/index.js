import request from "@/plugins/axios";
export const get_163_covid = function() {
  return request({
    method: "get",
    url: "/163/ug/api/wuhan/app/data/list-total"
  });
};

export const get_sina_covid = function() {
  return request({
    method: "get",
    url: "/sina/news/wap/fymap2020_data.d.json"
  });
};
export const get_qq_covid = function() {
  return request({
    method: "get",
    url: "/qq/g2/getOnsInfo?name=disease_h5"
  });
};
