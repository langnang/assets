export const arraySplice = (array, start = 0, deleteCount = 0, ...items) => {
  /**
   * array =
   *      [0, start - 1]
   *      + [start, start + deleteCount)
   *      + [start + deleteCount, array.length - 1]
   * return =
   *      [0, start)
   *      + [start, start + items.length - 1)
   *      + [start + deleteCount, array.length - 1]
   */
  let _array = [];
  let index = 0;
  let delArray = [];
  let delIndex = 0;
  for (let i = 0; i <= array.length - 1; i++) {
    // 提取索引小于start的元素
    if (i <= start - 1) {
      _array[index] = array[i];
      index++;
    }
    // 插入元素
    else if (i == start) {
      for (let j = 0; j <= items.length - 1; j++) {
        _array[index] = items[j];
        index++;
      }
      // 当删除的元素数为0时，将索引为start的值插入数组
      if (deleteCount == 0) {
        _array[index] = array[start];
        index++;
      }
      // 当删除的元素数不为0时，将索引为start的值插入删除元素的数组
      else {
        delArray[delIndex] = array[start];
        delIndex++;
      }
    } else if (i <= start + deleteCount) {
      delArray[delIndex] = array[i];
      delIndex++;
    }
    // 过滤掉索引介于start与start+deleteCount之间的元素
    // 提取索引大于start+deleteCount的元素
    else if (i > start + deleteCount) {
      _array[index] = array[i];
      index++;
    }
  }
  array = _array;
  return delArray;
};
export const __arraySplice__ = {
  description: "Array.prototype.splice",

}
