export const arrayFind = (array, callback, thisArg) => {
  for (let key in array) {
    if (callback(array[key], key, array)) {
      return array[key];
    }
  }
  return undefined;
};

export const __arrayFind__ = {
  description: "Array.prototype.find"

}