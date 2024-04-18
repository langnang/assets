export const arrayReduceRight = (array, callback, initialValue = array[0]) => {
  for (let i = array.length - 1; i >= 0; i--) {
    initialValue = callback(initialValue, array[i], i, array);
  }
  return initialValue;
};
export const __arrayReduceRight__ = {
  description: "Array.prototype.reduceRight",

}
