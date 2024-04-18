export const arrayIndexOf = (array, searchElement, fromIndex = 0) => {
  for (let i = fromIndex; i <= array.length - 1; i++) {
    if (array[i] === searchElement) {
      return i;
    }
  }
  return -1;
};

export const __arrayIndexOf__ = {
  description: "Array.prototype.indexOf",

}