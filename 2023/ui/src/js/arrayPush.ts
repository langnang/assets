export const arrayPush = (array, ...values) => {
  for (let i in values) {
    array[array.length] = values[i];
  }
  return array.length;
};
export const __arrayPush__ = {
  description: "Array.prototype.push",

}
