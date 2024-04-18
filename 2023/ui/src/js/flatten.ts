/**
 * 将数组展平到指定的深度。
 * @param {Array} arr
 */

import { isArray } from './isArray'
export const flatten = (arr, depth = 1) => {
  if (depth >= 1) {
    return arr.reduce(
      (a, v) => a.concat(isArray(v) ? flatten(v, depth - 1) : v),
      []
    );
  }
  if (depth === 0) {
    return arr;
  }
  if (depth === -1) {
    return arr.reduce((a, v) => a.concat(isArray(v) ? flatten(v, -1) : v), []);
  }
};

export const __flatten__ = {
  description: "将数组展平到指定的深度",

}
