import { arrayPush } from "./arrayPush";
export const arrayMap = (array, callback, thisArg) => {
  let res = [];
  for (let key in array) {
    arrayPush(res, callback(array[key], key, array));
  }
  return res;
};
export const __arrayMap__ = {
  description: "Array.prototype.map",

}
