import { arrayPush } from "./arrayPush";
export const arrayKeys = (array) => {
  let res = [];
  for (let key in array) {
    arrayPush(res, key);
  }
  return res;
};

export const __arrayKeys__ = {
  description: "Array.prototype.keys",

}
