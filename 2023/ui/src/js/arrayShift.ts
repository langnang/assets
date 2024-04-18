import { arraySlice } from "./arraySlice";
export const arrayShift = (array) => {
  const shift = array[0];
  array = arraySlice(array, 1 - array.length);
  return shift;
};
export const __arrayShift__ = {
  description: "Array.prototype.shift",

}
