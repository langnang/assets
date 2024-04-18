/**
 * 返回数组中的所有元素, 除第一个
 * @param {*} arr
 */
import { arraySlice } from "./arraySlice";

export const rest = (array, n = 1, mode = "prototype") => {
  if (n == 1) return array[array.length - 1];

  let _map = new Map();
  _map.set("prototype", (array, n) => array.slice(array.length - n));
  _map.set("_prototype", (array, n) => arraySlice(array, array.length - n));

  if (!_map.has(mode)) mode = "prototype";

  return _map.get(mode)(array, n);
};
export const __rest__ = {
  description: "返回数组中的所有元素, 除第一个",

}

