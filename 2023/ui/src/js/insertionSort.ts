/**
 * @name insertionSort
 * @desc 插入排序
 * @param {Array} array
 * @return {Array}
 * @date 2019-07-06 
 */

export const insertionSort = (array) => {
  const insertion = (array, index) => {
    // 从后向前遍历
    for (let i = index - 1; i >= 0; i--) {
      // 如果后一个元素小于前一个元素
      if (array[i] > array[i + 1]) {
        // 交换元素位置
        [array[i], array[i + 1]] = [array[i + 1], array[i]];
      } else {
        // 停止循环
        break;
      }
    }
  }
  for (let i = 1; i < array.length; i++) {
    insertion(array, i);
  }
  return array;
}

export const __insertionSort__ = {
  description: "插入排序",

}

