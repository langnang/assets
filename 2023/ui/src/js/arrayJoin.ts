export const arrayJoin = (array, separator = ",") => {
  let prefix = "[",
    suffix = "]";
  for (let i = 0; i <= array.length - 1; i++) {
    prefix += array[i];
    if (i < array.length - 1) {
      prefix += separator;
    }
  }
  return prefix + suffix;
};

export const __arrayJoin__ = {
  description: "Array.prototype.join",

}