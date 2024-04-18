/**
 * 冒泡排序
 */
export const bubbleSort = (array) => {
  // 冒泡：将比较数组内的最大值移至末尾
  const bubble = (array, length) => {
    for (let i = 0; i < length - 1; i++) {
      // 比较相邻元素，检测是否需要交换位置
      if (array[i] > array[i + 1]) {
        // 交换元素位置
        [array[i], array[i + 1]] = [array[i + 1], array[i]];
      }
    }
  };
  let i = array.length;
  // 由于每次遍历将最大值移至末尾，因此逐渐减少比较长度
  while (i > 0) {
    bubble(array, i);
    i--;
  }
  return array;
};
export const __bubbleSort__ = {
  description: "冒泡排序",
}
