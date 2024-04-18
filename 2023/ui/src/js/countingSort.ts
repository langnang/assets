/**
 * @name countingSort
 * @desc 计数排序
 */
export const countingSort = array => {
  let min = Math.min(...array);
  let max = Math.max(...array);
  let B = Array();
  let countArray = Array();
  for (let i = 0; i < array.length; i++) {
    countArray[array[i]] = countArray[array[i]] ? countArray[array[i]] + 1 : 1;
  }
  for (var j = min; j < max; j++) {
    countArray[j + 1] = (countArray[j + 1] || 0) + (countArray[j] || 0);
  }
  for (var k = array.length - 1; k >= 0; k--) {
    B[countArray[array[k]] - 1] = array[k];
    countArray[array[k]]--;
  }
  return B;
}
export const __countingSort__ = {
  description: "计数排序",

}

