/**
 * 选择排序
 * @param {Array} array
 * @return {Array}
 * @date 2019-07-06 
 */


export const selectionSort = (array) => {
  // 选择:将未排序部分中最小值移至已排序部分末尾
  const selection = (array, start) => {
    // 取未排序首个元素位置
    let minIndex = start;
    // 遍历未排序部分
    for (let i = start + 1; i < array.length; i++) {
      // 寻找最小的数

      if (array[minIndex] > array[i]) {
        //将最小数的索引保存
        minIndex = i;
      }
    }
    // 交换元素位置
    [array[start], array[minIndex]] = [array[minIndex], array[start]];
  }
  for (let i = 0; i < array.length - 1; i++) {
    selection(array, i);
  }
  return array;
}
export const __selectionSort__ = {
  description: "选择排序",

}

