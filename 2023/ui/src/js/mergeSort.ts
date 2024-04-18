/**
 * 归并排序
 * @param {Array} array
 * @return {Array}
 * @date 2019-07-06 
 * @todo Maximum call stack size exceeded,堆栈溢出
 */


export const mergeSort = array => {
  if (array.length < 2) return array;
  const merge = (left, right) => {
    let result = [];
    while (left.length > 0 && right.length > 0) {
      if (left[0] <= right[0]) {
        result.push(left.shift());
      } else {
        result.push(right.shift());
      }
    }
    while (left.length > 0) {
      result.push(left.shift());
    }
    while (right.length > 0) {
      result.push(right.shift());
    }
    return result;
  }
  return merge(mergeSort(array.slice(0, Math.floor(array.length / 2))), mergeSort(array.slice(Math.floor(array.length / 2))));
}

export const __mergeSort__ = {
  description: "归并排序",

}

