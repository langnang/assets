/**
 * 希尔排序
 * @param {Array} array
 * @return {Array}
 * @date 2019-07-06 
 */


export const shellSort = array => {
  const shell = (array, gap) => {
    // 插入排序默认第一个元素为已排序,因此跳过gap长度
    for (let i = gap; i < array.length; i++) {
      // 从后向前插入排序
      for (var j = i - gap; j >= 0; j -= gap) {
        // 检测是否需要交换位置
        if (array[j] > array[j + gap]) {
          [array[j], array[j + gap]] = [array[j + gap], array[j]]
        } else {
          // 停止循环
          break;
        }
      }
    }
  }
  for (let gap = array.length / 2; gap > 0; gap = Math.floor(gap / 2)) {
    shell(array, gap);
  }
  return array;
}


export const __shellSort__ = {
  description: "希尔排序",

}

