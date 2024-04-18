import { arrayPush } from "./arrayPush";
export const arrayFilter = (array, callback, thisArg) => {
  let res = [];
  for (let key in array) {
    if (callback(array[key], key, array)) {
      arrayPush(res, array[key]);
    }
  }
  return res;
};

export const __arrayFilter__ = {
  description: "Array.prototype.filter"

}