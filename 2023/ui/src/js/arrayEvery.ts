export const arrayEvery = (array, callback, thisArg) => {
  let truth = true;
  for (let key in array) {
    truth = callback(array[key], key, array);
    if (!truth) {
      return truth;
    }
  }
  return truth;
};

export const __arrayEvery__ = {
  description: "Array.prototype.every"

}