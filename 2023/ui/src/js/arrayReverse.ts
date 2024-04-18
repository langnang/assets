export const arrayReverse = (array) => {
  let _array = [];
  let index = 0;
  let indexOfSource = array.length - 1;
  while (indexOfSource >= 0) {
    _array[index] = array[indexOfSource];
    index++;
    indexOfSource--;
  }
  return _array;
};
export const __arrayReverse__ = {
  description: "Array.prototype.reverse",

}
