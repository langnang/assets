/**
 * 反向遍历
 */

export const forEachRight = (object, callback) => {
  let array = [];
  for (let k in object) {
    array.unshift(k);
  }
  for (let k in array) {
    callback(object[array[k]], array[k]);
  }
}
export const __forEachRight__ = {
  description: "反向遍历",

}

