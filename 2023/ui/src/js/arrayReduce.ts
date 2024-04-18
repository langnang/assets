export const arrayReduce = (array, callback, initialValue = array[0]) => {
  for (let key in array) {
    initialValue = callback(initialValue, array[key], key, array);
  }
  return initialValue;
};
export const __arrayReduce__ = {
  description: "Array.prototype.reduce",

}
