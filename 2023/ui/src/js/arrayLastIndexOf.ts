export const arrayLastIndexOf = (
  array,
  searchElement,
  fromIndex = array.length - 1
) => {
  for (let i = fromIndex; i >= 0; i--) {
    if (array[i] === searchElement) {
      return i;
    }
  }
  return -1;
};
export const __arrayLastIndexOf__ = {
  description: "Array.prototype.lastIndexOf",

}
