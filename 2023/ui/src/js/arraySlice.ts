export const arraySlice = (array, begin = 0, end = array.length) => {
  // 如果提取起始处索引为负数，则表示从原数组中倒数第几个元素开始提起
  if (begin < 0) {
    begin = array.length + begin;
  }
  // 如果 begin 大于原数组的长度，则会返回空数组
  if (begin > array.length - 1) {
    return [];
  }
  // 如果提取终止处索引为负数， 则它表示在原数组中的倒数第几个元素结束抽取。
  if (end < 0) {
    end = array.length + end;
  }
  // 如果 end 大于数组的长度，slice 也会一直提取到原数组末尾。
  if (end > array.length) {
    end = array.length;
  }
  let _arr = [];
  let index = 0;
  while (end - begin > 0) {
    _arr[index] = array[begin];
    index++;
    begin++;
  }
  return _arr;
};
export const __arraySlice__ = {
  description: "Array.prototype.slice",

}
