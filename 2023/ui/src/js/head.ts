/**
 * @name head
 * @description 数组的前n个元素
 * @param {Array} arr
 */
import { arraySlice } from "./arraySlice";
export const head = (array, n = 1, mode = "prototype") => {
  if (n == 1) return array[0];

  let _map = new Map();
  _map.set("prototype", (array, n) => array.slice(0, n));
  _map.set("_prototype", (array, n) => arraySlice(array, 0, n));
  _map.set("for", (array, n) => {
    let _head = [];
    for (let i = 0; i <= n - 1; i++) {
      _head[i] = array[i];
    }
    return _head;
  });

  if (!_map.has(mode)) mode = "prototype";

  return _map.get(mode)(array, n);
};
export const __head__ = {
  description: "数组的前n个元素",

}

