import axios from "./../plugins/axios";

import Emojis from "./Emojis/index";
import Issues from "./Issues/index";

import Repositories from "./Repositories/index";

const gh_apis = {
  ...Emojis,
  ...Issues,
  ...Repositories,
};
/**
 *
 * @param {String} path
 * @param {Object} config
 */
const gh_api = function (path = "", config = {}) {
  if (!gh_apis[path]) {
    return Promise.reject(`Path Error: '${path}' not exist!!!`);
  }
  return gh_apis[path](config);
};
gh_api._axios = axios;
gh_api._list = gh_apis;

window.gh_api = gh_api;

export default gh_api;
