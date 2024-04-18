import request from "@/plugins/axios";

export const getPostList = data => {
  return request({
    url: "/typecho/post/list",
    method: "post",
    data
  });
};

export const getPostInfo = data => {
  return request({
    url: "/typecho/post/info",
    method: "post",
    data
  });
};

export const getList = data => {
  return request({
    url: "/typecho/list",
    method: "post",
    data
  });
};
