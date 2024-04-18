/**
 * Array.prototype.foreach()
 * @param {*} array
 * @param {*} callback
 * @param {*} thisArg
 */
export const arrayForEach = (array, callback, thisArg) => {
  for (let key in array) {
    callback(array[key], key, array);
  }
};

export const __arrayForEach__ = {
  description: "Array.prototype.forEach",


}